<?php

include "vendor/autoload.php";
use App\Student;
$student= new Student();
$students= $student->index();



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
        Student List
        </div>
      <div>
        <a href="create_student.php" class="btn btn-sm btn-primary " >Add new Student</a>
        <a href="attendence_sheet.php" class="btn btn-sm btn-success ms-3" >Attendence Sheet</a>
        <a href="attendence_mark.php" class="btn btn-sm btn-info ms-3 text-white" >Attendence Mark</a>
      </div>
       
        </div>
        </div>
        
        <div class="card-body">
        <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Roll No</th>
                <th scope="col">Course</th>
                <th scope="col">Semester</th>
                <th scope="col">Department</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $id=1;
                
                foreach($students as $student): ?>
                <tr>
                <td><?= $id++ ?></td>
                <td><?= $student['name']?></td>
                <td><?= $student['roll_no']?></td>
                <td><?= $student['course']?></td>
                <td><?= $student['semester']?></td>
                <td><?= $student['department']?></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="edit_student.php?std_id=<?= $student['id']?>">Edit</a>
                    <a href="delete_student.php?id=<?=$student['id'];?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
                </tr>
                <?php endforeach ; ?>
            </tbody>
            </table>
        </div>
    </div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>