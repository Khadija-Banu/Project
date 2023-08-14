<?php 
namespace App;
use PDO;
use App\DB;

class Student extends DB{

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
        $name=$data['name'];
        $roll_no=$data['roll_no'];
        $course=$data['course'];
        $semester=$data['semester'];
        $department=$data['department'];

        $sql="insert into students (name,roll_no,course,semester,department)values('$name','$roll_no','$course','$semester','$department')";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        header('Location:Student_list.php');
    
    }

    public function edit($id){
        $sql="select*from students where id=$id";
        $statement=$this->pdo->query($sql);
        $students=$statement->fetch(PDO::FETCH_ASSOC);
        return $students;
    }
    public function update($data){
        $id=$data['id'];
        $name=$data['name'];
        $roll_no=$data['roll_no'];
        $course=$data['course'];
        $semester=$data['semester'];
        $department=$data['department'];

        $sql="update students set name='$name',roll_no='$roll_no',course='$course',semester='$semester',department='$department' where id=$id";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        header('Location:Student_list.php');
    }

    public function delete($id){
        
        $sql="delete from students where id=$id";
        $query=$this->pdo->query($sql);
        $query->execute();
        header('Location:Student_list.php');
    }
}