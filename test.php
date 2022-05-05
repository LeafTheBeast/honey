<?php 
require_once '/laragon/www/honey/Database/Database.php';

echo $_POST['mail'];
echo $_POST['password'];

//var_dump(DatabaseHelper::getDatabaseTableData('SELECT * FROM honey_db.user'));

$foo = DatabaseHelper::getDatabaseTableData('SELECT * FROM honey_db.user');

var_dump($foo);
$bar = [];

var_dump($bar);

echo $foo['password'];