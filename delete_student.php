<?php
use App\Student;
include 'vendor/autoload.php';

$student= new Student();
$id = $_GET['id'];
$student->delete($id);




?>