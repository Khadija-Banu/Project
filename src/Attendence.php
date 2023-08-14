<?php 
namespace App;
use PDO;
use App\DB;

class Attendence extends DB{

    // data read  
    public function index()
    {
        $sql = "select * from students";
        $statement = $this->pdo->query($sql);
        $students = $statement->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($students);
        return $students;
    }

    public function store($data){
        $id=$data['id'];
        $name=$data['name'];
        $roll_no=$data['roll_no'];
        $status=$data['status'];
        $date=$data['date'];

        $sql="insert into attendences (id,name,roll_no,status,date)values('$id','$name','$roll_no','$status','$date')";
      
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        // var_dump($statement);
       header('Location:Student_list.php');
    }
    
    // public function mstore(){

    //     for($i=0;$i<count($_POST['id']);$i++){

    //                   $id = $_POST['id'][$i];           
    //                   $name = $_POST['name'][$i];
    //                   $roll_no = $_POST['roll_no'][$i];
    //                   $status = $_POST['status'][$i];
    //                   $date = $_POST['date'][$i];
    //                   if($name!=='' && $roll_no!=='' && $status!=='' && $date!==''){
    //                       $sql="insert into attendences (id,name,roll_no,status,date)values('$id','$name','$roll_no','$status','$date')";
               
                         
    //                   }
                      
    //                   $stmt=$this->pdo->prepare($sql);  
    //                 //   var_dump($stmt);
    //           }
              
    //           $stmt->execute();
              
    //            header('Location:Student_list.php');
    //     }
    public function index1()
    {
        $sql = "select * from attendences";
        $statement = $this->pdo->query($sql);
        $students = $statement->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($students);
        return $students;
    }

}