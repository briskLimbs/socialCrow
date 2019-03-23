<?php

global $database;
$table = 'social_crow';
$columns = array(
    'id' => array('type' => 'int(1)', 'special' => 'primary'),
    'facebook' => array('type' => 'varchar(45)', 'special' => 'NOT NULL'),
    'twitter' => array('type' => 'varchar(45)', 'special' => 'NOT NULL'),
    'instagram' => array('type' => 'varchar(45)', 'special' => 'NOT NULL'),
    'pinterest' => array('type' => 'varchar(45)', 'special' => 'NOT NULL')
  );

$values = array(
  array(
  	'facebook' => 'brisklimbs',
  	'twitter' => 'brisklimbs',
  	'instagram' => 'brisklimbs',
  	'pinterest' => 'brisklimbs'
  )
);

$database->createTable($table, $columns);
$database->insertMulti($table, $values);