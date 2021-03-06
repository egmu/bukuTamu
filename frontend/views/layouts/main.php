<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

use loutrux\argon\widgets\Nav;
use loutrux\argon\widgets\NavBar;
use loutrux\argon\widgets\Alert;

\loutrux\argon\ArgonAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="bg-default">
<?php $this->beginBody() ?>
<?= Html::tag('span','',['id' => 'global_prefixUrl', 'data-content' => \Yii::$app->request->BaseUrl]); ?>
<div class="main-content">
    <!-- Navbar -->
<?php
  $menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],
    ['label' => 'Buku Tamu', 'url' => ['/buku/index']],
        
  ];

  // if (Yii::$app->user->isGuest) {
  //     // Menu for guest
  //     $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
  //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
  // } else {
  //     // Menu for logged user
  //     // ...
  
  //   }

    // Dynamic menu item added in view with the 'additionalsMenuItems' block
    if (($additionalsMenuItems = ArrayHelper::getValue($this->blocks,['additionalsMenuItems'])) !== null)
      $menuItems[] = $additionalsMenuItems;
      
    NavBar::begin([
        'brandLabel'          => ArrayHelper::getValue($this->blocks,['brandLabel'],Yii::$app->name),
        'brandUrl'            => ArrayHelper::getValue($this->blocks,['brandUrl'],Yii::$app->homeUrl),
        'brandScrollContent'  => ArrayHelper::getValue($this->blocks,['navbarScrollContent'],false),
        'brandAfter'          => ArrayHelper::getValue($this->blocks,['brandAfter'],false),
        // uncollapsed menu showed in mobile view
        'headerContent' => Nav::widget([
          'options' => ['class' => 'd-md-none_ align-items-center'],
          'encodeLabels' => false,
          'items' => ($additionalsMenuItems)?[$additionalsMenuItems]:[],
        ]),
        'options' => [
            'class' => 'navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white',
        ],
        'innerContainerOptions' => ['class' => 'container px-4']

    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto_'],
        'encodeLabels' => false,
        'items' => $menuItems,
    ]);
    NavBar::end();
?>
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary p-4 pb-6">
      <div class="container">
        <div class="header-body mb-7">
          <?= Alert::widget() ?>
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5 text-center">
              <?= ArrayHelper::getValue($this->blocks,['header']) ?>
            </div>
          </div>

          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?= $this->title ?></h6>
            </div>
          </div>

        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    <!-- Content -->
    <div class="card mt--9 p-4 mx-4">
      <?= $content ?>
    </div>

    <!-- Footer -->
    <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              ?? <?= date('Y') ?> <a href="<?= Yii::$app->homeUrl ?>" class="font-weight-bold ml-1" target="_blank"><?= Yii::$app->name ?></a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <?= Yii::powered() ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
