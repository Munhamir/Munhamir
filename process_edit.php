<?php
include "Database.php";
$id = $_POST['id'];
$uname = $_POST['user'];
$passwd = $_POST['passwd'];

if($passwd == ''){
	$data = ['username'=>$uname,
	'active' => 1,
	'id' => $id
];
}else{
	$psw = password_hash($passwd,PASSWORD_DEFAULT);
	$data = ['username'=>$uname,
	'passwd'=>$psw,
	'active' => 1,
	'id' => $id
];
}

$d = new Database();
$d->updateData($data);

header("Location: index.php");

