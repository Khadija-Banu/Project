<?php

include "vendor/autoload.php";
use App\Attendence;
$attendence= new Attendence();
$attendences= $attendence->index();

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $attendence->store($_POST);
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
        Daily Attendence Sheet
        </div>
      <div>
        <a href="Student_list.php" class="btn btn-sm btn-primary " >Student List</a>
       
      </div>
       
        </div>
        </div>
        
        <div class="card-body">

        <form action="" method="POST">

        <table class="table">
            <p>Attendence date: <input type="date" name="date" value="<?= date("Y-m-d")?>"> </p>
            <thead class="table-dark">
                <tr>
                <th >Id</th>
                <th >Name</th>
                <th >Roll No</th>
                <th >Attendence</th>
                
                </tr>
            </thead>
            <tbody>
                <?php 
                $id=1;
                
                foreach($attendences as $attendence): ?>

                <tr>
                <td >
                <input for=""class="border border-white "name="id"style="width:75%"value="<?= $id++?>"/></td>
                <td >
                <input for=""style="width:75%" class="border border-white" name="name"value="<?= $attendence['name']?>"/></td>
                <td >
                <input for=""style="width:75%"  class="border border-white" name="roll_no"value="<?= $attendence['roll_no']?>"/></td>
      
                <td >
                <select style="width:100%"  class="form-select " name="status">
              <option style="width:100px">Present</option>
              <option>Absent</option>
            
             </select>
                    <!-- <a  onclick="present()" class="btn btn-sm btn-success">P</a>
                    <a onclick="absent()" class="btn btn-sm btn-danger">A</a> -->
                </td>
               
              
                </tr>
                <?php endforeach ; ?>
            </tbody>
            
            </table>
            <button type="submit" class="btn btn-sm btn-success  ">Submit</button> 
            </form>
        </div>

  </div>

</div>


<!-- <script>
function present() {
  document.getElementById("demo1").innerHTML = "present";
}
function absent() {
  document.getElementById("demo1").innerHTML = "absent";
}
</script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>