<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Aloqa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact container">
    <h1 class="text-center mb-3"><?= Html::encode('Bog\'lanish uchun') ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success text-center">
            Bizga bilan bog'langaningiz uchun katta rahmat. Tez orada sizga javob yuboramiz!
        </div>

<!--        <p class="text-center">-->
<!--            Note that if you turn on the Yii debugger, you should be able-->
<!--            to view the mail message on the mail panel of the debugger.-->
<!--<!--            -->--><?php ////if (Yii::$app->mailer->useFileTransport): ?>
<!--<!--                Because the application is in development mode, the email is not sent but saved as-->-->
<!--<!--                a file under <code>-->--><?////= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?><!--<!--</code>.-->-->
<!--<!--                Please configure the <code>useFileTransport</code> property of the <code>mail</code>-->-->
<!--<!--                application component to be false to enable email sending.-->-->
<!--<!--            -->--><?php ////endif; ?>
<!--        </p>-->

    <?php else: ?>

        <p class="text-center pt-3">
            Agar bizga xabar yubormoqchi bo'lsangiz quyidagi maydonlarni to'ldiring va yuborish tugmasini bosing!
        </p>

        <div class="row">
            <div class="w-100">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-4 col-md-3 col-lg-2">{image}</div><div class="col-6 col-md-5 col-lg-4">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton("<p style = 'font-size: 1.3rem; margin: .3rem auto; padding:0'>Yuborish</p>", [
                            'class' => 'btn btn-primary w-100',
                            'name' => 'contact-button'
                            ]) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
