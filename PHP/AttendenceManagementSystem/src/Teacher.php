<?php 
namespace App;
use PDO;
use App\DB;

class Teacher extends DB{


  

    public function store($data){    
        $name=$data['name'];
        $phone=$data['phone'];
        $qualification=$data['qualification'];
        $user_id=$data['user_id'];
        $password=$data['password'];

        $sql="insert into teachers (name,phone,qualification,user_id,password)values('$name','$phone','$qualification','$user_id','$password')";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        header('Location:Student_list.php');
    
    }

    public function index(){
       
        $userId=$_POST['user_id'];
        $pass=$_POST['pass'];
        
        $sql="select * from teachers where user_id='$userId' && password='$pass'";  
        // var_dump($sql);     
        $stmt=$this->pdo->query($sql);
        $teacher=$stmt->fetch(PDO::FETCH_ASSOC);
    //   var_dump($teacher);
        if($teacher){
 
        session_start();
        $_SESSION['is_login']=true;
        header('Location:Student_list.php');
      }
    
   
    }

}