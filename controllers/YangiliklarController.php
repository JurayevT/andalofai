<?php

namespace app\controllers;

use app\models\Yangiliklar;
use Cassandra\Time;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * YangiliklarController implements the CRUD actions for Yangiliklar model.
 */
class YangiliklarController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Yangiliklar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Yangiliklar::find(),
            
            'pagination' => [
                'pageSize' => 10
            ],
            'sort' => [
                'defaultOrder' => [
                    'created_at' => SORT_DESC,
                ]
            ],
            
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Yangiliklar model.
     * @param int $post_id Post ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($post_id)
    {
        $model = $this->findModel($post_id);
        $model->kurish_soni++;
        $model->save();

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Yangiliklar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Yangiliklar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $img = UploadedFile::getInstance($model, 'foto');
                $model->foto = $img->name;
                $model->created_at = strtotime(date("d.m.Y"));
                $model->updated_at = strtotime(date("d.m.Y"));
                $model->save();
                    $imgURL = 'news' . $model->post_id . '.png';
                    $img->saveAs(Url::to('@app/web/img/yangiliklar/') . $imgURL);
                    $model->foto = $imgURL;
                    $model->save();

                if ($model->validate())
                return $this->redirect(['view', 'post_id' => $model->post_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Yangiliklar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $post_id Post ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($post_id)
    {
        $model = $this->findModel($post_id);
        $oldPhoto = $model->foto;

        if ($this->request->isPost && $model->load($this->request->post())) {
            $img = UploadedFile::getInstance($model,'foto');
            $model->foto=$img->name;
            if (!empty($img)) {
                $file = Url::to('@app/web/img/yangiliklar/') . $oldPhoto;
                if (file_exists($file)) {
                    @unlink($file);
                }
                $imgName='news' . $post_id . '.png';
                $img->saveAs(Url::to('@app/web/img/yangiliklar/') . $imgName);
                $model->foto=$imgName;
            }
            else
                $model->foto = $oldPhoto;

            $model->updated_at = strtotime(date("d.m.Y"));
            $model->save();

            return $this->redirect(['view', 'post_id' => $model->post_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Yangiliklar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $post_id Post ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($post_id)
    {
        $model = $this->findModel($post_id);

        if(!empty($model->foto)){
            $imgPath = __DIR__.'/../web/img/yangiliklar/';
            $file = $imgPath . $model->foto;
            if(file_exists($file)) {
                unlink($file);
            }
        }
        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Yangiliklar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $post_id Post ID
     * @return Yangiliklar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($post_id)
    {
        if (($model = Yangiliklar::findOne($post_id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
