<?php

include "vendor/autoload.php";
use App\Student;
$student= new Student();


//data insert
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
  // student class store 
$student->store($_POST);


}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    include 'include/header.php';
    ?>
    <div class="container mt-5">
    <div class="card">

        <div class="card-header " style="font-size:20px">
        <div class="d-flex justify-content-between">
        <div>
        Add new Student
        </div>
      <div>
        <a href="Student_list.php" class="btn btn-sm btn-primary " >Student List</a>
        
        </div>
       
        </div>
        </div>
        
         
        <div class="card-body m-3">

        <form action="" method="POST">
            <input type="text" class="form-control" name="name"placeholder="Student Name">
            <input type="text"class="form-control mt-2" name="roll_no"placeholder="Roll No">
            <select class="form-select mt-2" name="course">
              <option >Course</option>
              <option>Php with Laravel</option>
              <option>JavaScript</option>
              <option>React Js</option>
              <option>Java</option>
             </select>
             <select class="form-select mt-2" name="semester">
              <option >Semester</option>
              <option>1th</option>
              <option>2th</option>
              <option>3th</option>
              <option>4th</option>
             </select>
             <select class="form-select mt-2" name="department">
              <option >Department</option>
              <option>CSE</option>
              <option>EEE</option>
              <option>BBA</option>
              <option>ENGLISH</option>
             </select>
             <button type="submit" class="btn btn-sm btn-success mt-2 ">Register</button> 
          </form>
        </div>

  </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>