<?php

require_once 'Connection.php';
class Student extends Connection{

    public function getAllCourses($id =null):array
    {
        try
        {
            $sql="SELECT * FROM `courses`";
            $prepare=$this->pdo->prepare($sql);
            $prepare->execute();
            $courses= $prepare->fetchAll(PDO::FETCH_ASSOC);

            return $courses;
        }
        catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }
    public function getAllStudents($search=null):array
    {
        try
        {
            $sql="SELECT s.*, c.name as course FROM `students` s join `courses` c on s.course_id=c.id";
            if($search!=null){
                $sql.=" WHERE s.name LIKE :search OR c.name LIKE :search OR s.email LIKE :search";
            }
            $prepare=$this->pdo->prepare($sql);
            if($search!=null){
                $search="%$search%";
                $prepare->bindParam('search',$search);
            }
            $prepare->execute();
            $students= $prepare->fetchAll(PDO::FETCH_ASSOC);

            return $students;
        }
        catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }
    public function addStudent($name,$email,$phone,$course):bool
    {
        try
        {
            $sql="INSERT INTO `students`(`name`, `email`, `phone`, `course_id`) VALUES (?,?,?,?)";

            $prepare=$this->pdo->prepare($sql);

            $prepare->execute([$name,$email,$phone,$course]);
            return true;
        }
        catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }
    public function updateStudent($id,$name,$email,$phone,$course):bool
    {
        try
        {
            $sql="UPDATE `students` SET `name`=?,`email`=?,`phone`=?,`course_id`=? WHERE id=?";

            $prepare=$this->pdo->prepare($sql);

            $prepare->execute([$name,$email,$phone,$course,$id]);
            return true;
        }
        catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }
    public function deleteStudent($id):bool
    {
        try
        {
            $sql="DELETE FROM `students` WHERE id=?";

            $prepare=$this->pdo->prepare($sql);

            $prepare->execute([$id]);
            return true;
        }
        catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }

}

$db=new Student();