<?php

include "vendor/autoload.php";
use App\Teacher;
$teacher= new Teacher();


//data insert
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
  // student class store 
$teacher->store($_POST);


}
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Bootsrap css cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- jquery cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <!-- fontawesome kit -->
        <script src="https://kit.fontawesome.com/33b73b5338.js" crossorigin="anonymous"></script>


        <style>
            .password_required{
                display: none;
            }
            .password_required ul li span::before{
                content: "×";
            }
            .password_required ul li.active{
                color:green;
            }
            .password_required ul li.active span::before{
                content: "✓";
            }

           
        </style>

        <script>
            $(document).ready(function(){
            $('#PassInput').on('focus',function(){
                $('.password_required').slideDown();
            } 
            )
            $('#PassInput').on('blur',function(){
                $('.password_required').slideUp();
            })
            $('#PassInput').on('keyup',function(){
                passValue = $(this).val();

                if(passValue.match(/[a-z]/g)){
                    $('.lowercase').addClass('active');
                }else{
                    $('.lowercase').removeClass('active');
                }

                if(passValue.match(/[A-Z]/g)){
                    $('.capital').addClass('active');
                }else{
                    $('.capital').removeClass('active');
                }

                if(passValue.match(/[0-9]/g)){
                    $('.number').addClass('active');
                }else{
                    $('.number').removeClass('active');
                }

                if(passValue.match(/[@#$%^&*]/g)){
                    $('.special').addClass('active');
                }else{
                    $('.special').removeClass('active');
                }

                if(passValue.length > 8 || passValue.length == 8){
                    $('.eight-characters').addClass('active');
                }else{
                    $('.eight-characters').removeClass('active');
                }
            })
             })
            // $(document).ready(function() {
            
            //         $("#myform").validate({
                    
            //             rules:{
            //                 EmailInput:{
            //                     required:true,
            //                     email: true
            //                 } ,
            //                 PassInput:{
            //                     required:true,
            //                     minlength:5,
            //                     maxlength:10,
            //             }
            //          }});
            //         });  
                    

                    </script> 

    </head>
    <body>
    <h1 class="text-center fst-italic bg-primary text-white p-3" style="">Attendence Management System</h1>
   
        <div class="container mt-3">
     <!-- form design -->

     <div class="card p-3">
        <form id="myform" action="" method="POST">
        <h3 class="text-center p-3" style="">Faculty Registation</h3>
            <div class="mt-4">
            <input name="name" type="text" class="form-control" placeholder="Full Name" required>
            
            </div>
         
            <div class="mt-3">
            <input name="phone" type="text" class="form-control" placeholder="+880" required>  
            </div>
            <div class="mt-3">
            <input name="qualification" type="text" class="form-control" placeholder="Qualification" required>  
            </div>
            
            <div class="mt-3">
            <input name="user_id" type="text" class="form-control" placeholder="User Id" required>  
            </div>
            

            <div class="mt-3">
            <input name="password" type="password" id="PassInput" class="form-control" placeholder="Password" required>
            </div>
            

            <div class="password_required">
                <ul class="text-danger" >
          
                    <li class="list-group-item lowercase"><span> </span> One lowercase letter</li>
                    <li class="list-group-item capital"><span></span> One capital letter</li>
                    <li class="list-group-item number"><span></span> One number</li>
                    <li class="list-group-item special"><span></span> One special character</li>
                    <li class="list-group-item eight-characters" ><span></span> At least 8 character</li>
                </ul>
            </div>
           
            <div class="text-center mt-2">
            <button type="submit" class="btn btn-primary mt-2 w-50">Submit</button>
            </div>
            <div class="text-center ">
                <a href="log_in.php" class="btn btn-success mt-3 w-25">Back</a>
           
            </div>
            
        </form>
    
        </div>

   
        </div>





    
    

        <!-- Bootsrap js cdn -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


        <!-- jquery validation cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        
    </body>
    </body>
    </html>