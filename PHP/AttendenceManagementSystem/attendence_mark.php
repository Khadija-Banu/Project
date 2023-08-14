<?php

include "vendor/autoload.php";
use App\Attendence;
$attendence= new Attendence();
$attendences= $attendence->index1();

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
        Daily Attendence Mark
        </div>
      <div>
        <a href="Student_list.php" class="btn btn-sm btn-primary " >Student List</a>
        
      </div>
       
        </div>
        </div>
        
         
        <div class="card-body">
          <p>Attendence Date: <input type="text"></p>

        <table class="table">
          
            <thead class="table-dark">
                <tr>
                <th >Id</th>
                <th >Name</th>
                <th >Roll No</th>
                <th >Date</th>
                <th >Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $id=1;
                
                foreach($attendences as $attendence): ?>
                <tr>
                <td><?= $id++ ?></td>
                <td><?= $attendence['name']?></td>
                <td><?= $attendence['roll_no']?></td>
                <td><input name="date" class="border border-white" value="<?= $attendence['date']?>"/></td>
                <td><?= $attendence['status']?></td>
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