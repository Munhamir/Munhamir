<?php
include "Database.php";
$id = $_GET['id'];

$d = new Database();
$data = ['id'=>$id
];
$d->deleteData($data);

header("Location: index.php");

