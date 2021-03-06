<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;

\frontend\assets\InTheMountainsAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo Html::encode($this->title); ?></title>
<meta property='og:site_name' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
<?php $this->beginBody(); ?>
<div id="wrap">
  <div id="header-container">
    <div id="topnav">
      <div id="nav-right">
        <div id="nav-inner">
        <?php echo Menu::widget(array(
        'options' => array('class' => 'nav'),
        'items' => array(
          array('label' => 'Главная', 'url' => array('/site/index')),
          array('label' => 'О нас', 'url' => array('/site/about')),
          array('label' => 'Контакты', 'url' => array('/site/contact')),
          array('label' => 'Каталог', 'url' => array('/catalog/index')),
          Yii::$app->user->isGuest ?
            array('label' => 'Войти', 'url' => array('/site/login')) :
            array('label' => 'Выйти (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
        ),
      )); ?>
          <div style="clear:both"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="main">
    <div id="banner">
      <div class="wsite-header"></div>
    </div>
    <div id="content"><div id='wsite-content' class='wsite-not-footer'>
      <?php echo $content; ?>
</div>
</div>
  </div>
  <div id="footer"><?php echo Html::encode(\Yii::$app->name); ?>
</div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>