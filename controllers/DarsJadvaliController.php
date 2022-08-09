<?php

namespace app\controllers;

use app\models\DarsJadvali;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DarsJadvaliController implements the CRUD actions for DarsJadvali model.
 */
class DarsJadvaliController extends Controller
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
     * Lists all DarsJadvali models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DarsJadvali::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DarsJadvali model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DarsJadvali model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DarsJadvali();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DarsJadvali model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DarsJadvali model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionGuruh101()
    {
        return $this->render('view', [
            'model' => $this->findModel(1),
        ]);
    }

    public function actionGuruh102()
    {
        return $this->render('view', [
            'model' => $this->findModel(2),
        ]);
    }

    public function actionGuruh103()
    {
        return $this->render('view', [
            'model' => $this->findModel(3),
        ]);
    }

    public function actionGuruh104()
    {
        return $this->render('view', [
            'model' => $this->findModel(4),
        ]);
    }

    public function actionGuruh105()
    {
        return $this->render('view', [
            'model' => $this->findModel(5),
        ]);
    }

    public function actionGuruh106()
    {
        return $this->render('view', [
            'model' => $this->findModel(6),
        ]);
    }

    public function actionGuruh201()
    {
        return $this->render('view', [
            'model' => $this->findModel(7),
        ]);
    }

    public function actionGuruh202()
    {
        return $this->render('view', [
            'model' => $this->findModel(8),
        ]);
    }

    public function actionGuruh203()
    {
        return $this->render('view', [
            'model' => $this->findModel(9),
        ]);
    }

    public function actionGuruh204()
    {
        return $this->render('view', [
            'model' => $this->findModel(10),
        ]);
    }

    public function actionGuruh205()
    {
        return $this->render('view', [
            'model' => $this->findModel(11),
        ]);
    }

    public function actionGuruh206()
    {
        return $this->render('view', [
            'model' => $this->findModel(12),
        ]);
    }

    /**
     * Finds the DarsJadvali model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return DarsJadvali the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DarsJadvali::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
