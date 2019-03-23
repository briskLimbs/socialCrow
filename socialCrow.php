<?php

/**
* SocialCrow allows you to add social page buttons anywhere on website 
* @version: 1.0
* @BriskLimbs: 1.0^
* @since: 23rd March, 2019
* @author: Saqib Razzaq
* @website: https://github.com/saqirzzq
*/

require 'functions.php';
$addons = new Addons();

define('CROW_CORE_PATH', __DIR__);
define('CROW_CORE_NAME', basename(CROW_CORE_PATH));
$pages = CROW_CORE_NAME . '|pages';
$menu = array(
  'social_crow' => array(
    'display_name' => 'Social Crow',
    'sub' => array(
      'Manage' => $pages . '|manage.php'
    )
  )
);

$addons->addMenu($menu);