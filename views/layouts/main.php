<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div class="cap shadow m-1 mb-2">
    <p class="main_text text-danger">
        Academic lyceum under Andijan Agriculture and agrotechnological  institute
    </p>
</div>
    <?php
    NavBar::begin([
        'brandLabel' => "<img src='../../web/img/logo.png'
                   style='
                       display: inline-block;
                       width: 40px;'
                   class='brand_img mr-3' />"
                   . "<span class='brand_text'>"
                       . Yii::$app->name
                   . "</span>",
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions' => [
            'class' => 'text-light py-3',
            'style' => '
                font-size: 2rem;
                font-weight: 600;
                text-shadow: 0 1px 5px rgba(0, 0, 0, .3);
                '
        ],
        'options' => [
            'class' => 'navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-0 shadow'
        ],
    ]);
    echo Nav::widget([
        'options' => [
            'class' => 'navbar-nav ml-auto',
            'style' => 'font-size: 1.2rem'
        ],
        'items' => [
            ['label' => 'Bosh sahifa', 'url' => ['/site/index'],
                'linkOptions' => [
                    'class' => 'py-3'
                ]
            ],
            ['label' => 'Yangiliklar', 'url' => ['/yangiliklar/index'],
                'linkOptions' => [
                    'class' => 'py-3'
                ]
            ],
            [
                'label' => 'Tuzilma',
                'items' => [
                    ['label' => 'Rahbariyat', 'url' => ['site/rahbariyat']],
                    ['label' => 'Litsey haqida', 'url' => ['site/about']],
                ],
                'linkOptions' => [
                    'class' => 'py-3'
                ]
            ],
            [
                'label' => 'O\'quvchilarga',
                'items' => [
                    ['label' => 'Dars Jadvali', 'url' => ['/dars-jadvali/index']],
                    ['label' => 'To\'garaklar', 'url' => ['/site/about']]
                ],
                'linkOptions' => [
                    'class' => 'py-3'
                ]
            ],
            // ['label' => '', 'url' => ['/site/about']],
            ['label' => 'Aloqa', 'url' => ['/site/contact'],
                'linkOptions' => [
                    'class' => 'py-3'
                ]
            ],
            Yii::$app->user->isGuest ? '' : [
                'label' => 'Chiqish (' . \Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => [
                    'data-method' => 'post',
                    'class' => 'py-3'
                ]
            ]            
        ],
    ]);
    NavBar::end();
    ?>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer bg-default h-auto py-3">
    <div class="container-fluid">
        <div class="row m-0 p-0 mt-5 text-primary">
            <div class="col-md-4 pr-4 mt-2 pb-5">
                <h3 class="d-flex text-center">
                    Akademik litseyimiz web-saytiga xush kelibsiz!
                </h3>
              <a class="btn btn-primary w-100 mt-5 text-light" href="/web/index.php?r=site%2Flogin">admin</a>
            </div>
            <div class="col-md-5 py-3">
                <div>
                    <h4 class="ml-2">Manzil:</h4>
                    <div class="ml-2 d-flex">
                        <i class="fas fa-map-marker-alt mr-3 mt-2" style="color: seagreen;"></i>
                        <p class="text-muted mr-4">170100, O'zbekiston Respublikasi, Andijon shahar, Baynalminal ko'chasi 95-uy.</p>
                    </div>
                	<ul class="social-icon d-flex justify-content-around p-0 m-0 mt-4" style="list-style-type: none; font-size: 2rem">
                        <li>
                            <a href="http://www.instagram.com/aqxai_al_official" target="_blank">
                                <i class="fab fa-instagram" style="color: #bc2a8d;"></i>
                            </a>
                        </li>
                  
                        <li>
                            <a href="https://t.me/AQXIakademik_litsey" target="_blank">
                                <i class="fab fa-telegram" style="color: #0088CC;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCkn7x_ARsOg-bzpFAUspeEg" target="_blank">
                                <i class="fab fa-youtube" style="color: #c4302b;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100080438811405" target="_blank">
                                <i class="fab fa-facebook-square" style="color: #3b5998;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 py-3 d-flex flex-column">
                <h4 class="text-shadow">Biz bilan bog'lanish:</h4>
                <ul class="p-0 mt-2" style="list-style-type: none;">
                    <li class=" m-1"><i class="fas fa-lg fa-phone-square mr-2" style="color: seagreen;"></i>(3742) 225-68-24</li>
                    <li class="m-1"><i class="fas fa-lg fa-fax mr-2" style="color: seagreen;"></i><a href="http://incubation.adu.uz/" style="color:inherit; font-style: italic">(3742) 225-21-68</a></li>
                    <li class="m-1"><i class="fas fa-lg fa-envelope-square mr-2" style="color: seagreen;"></i>lyceum@andalofai.uz</li>
                </ul>
            </div>
            
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
