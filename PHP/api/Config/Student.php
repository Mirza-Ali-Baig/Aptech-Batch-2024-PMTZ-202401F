<?php

require_once 'Connection.php';
class Student extends Connection
{

    public function getAllCourses(): string
    {
        try {
            $sql = "SELECT * FROM `courses`";
            $prepare = $this->pdo->prepare($sql);
            $prepare->execute();
            $courses = $prepare->fetchAll();

            if (count($courses) > 0) {
                return $this->ApiResponse(true, "Get All Courses", $courses);
            } else {
                return $this->ApiResponse(false, "No Course Found");
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function searchCourses($search): string
    {
        try {
            $sql = "SELECT * FROM `courses` where name like :name";
            $prepare = $this->pdo->prepare($sql);
            $search="%$search%";
            $prepare->bindParam("name", $search);
            $prepare->execute();
            $courses = $prepare->fetchAll();

            if (count($courses) > 0) {
                return $this->ApiResponse(true, "Get All Courses", $courses);
            } else {
                return $this->ApiResponse(false, "No Course Found");
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function getCourse($id): string
    {
        try {
            $sql = "SELECT * FROM `courses` where `id` = ?";
            $prepare = $this->pdo->prepare($sql);
            $prepare->execute([$id]);
            $course = $prepare->fetch();

            if ($course) {
                return $this->ApiResponse(true, "Get Course", $course);
            } else {
                return $this->ApiResponse(false, "No Course Found");
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function addCourse($name)
    {
        try {
            $sql = "INSERT INTO `courses`(`name`) VALUES (?)";
            $prepare = $this->pdo->prepare($sql);
            $prepare->execute([$name]);
            return $this->ApiResponse(true, "Course Added Successfully");
        } catch (PDOException $e) {
            return $this->ApiResponse(false, "Error: " . $e->getMessage());
        }
    }
    public function updateCourse($id,$name)
    {
        try {
            $sql = "UPDATE courses SET `name` =? where `id` =?";
            $prepare = $this->pdo->prepare($sql);
            $prepare->execute([$name,$id]);
            return $this->ApiResponse(true, "Course Updated Successfully");
        } catch (PDOException $e) {
            return $this->ApiResponse(false, "Error: " . $e->getMessage());
        }
    }
    public function deleteCourse($id)
    {
        try {
            $sql = "DELETE FROM courses where id=?";
            $prepare = $this->pdo->prepare($sql);
            $prepare->execute([$id]);
            return $this->ApiResponse(true, "Course Deleted Successfully");
        } catch (PDOException $e) {
            return $this->ApiResponse(false, "Error: " . $e->getMessage());
        }
    }



    public function getAllStudents($search = null): string
    {
        try {
            $sql = "SELECT s.*, c.name as course FROM `students` s join `courses` c on s.course_id=c.id order by s.id";
            if ($search != null) {
                $sql .= " WHERE s.name LIKE :search OR c.name LIKE :search OR s.email LIKE :search";
            }
            $prepare = $this->pdo->prepare($sql);
            if ($search != null) {
                $search = "%$search%";
                $prepare->bindParam('search', $search);
            }
            $prepare->execute();
            $students = $prepare->fetchAll(PDO::FETCH_ASSOC);

            if (count($students) > 0) {
                return $this->ApiResponse(true, "Get All Students", $students);
            } else {
                return $this->ApiResponse(false, "No Student Found");
            }
        } catch (PDOException $e) {
            return $this->ApiResponse(false, "Error: " . $e->getMessage());
        }
    }
    public function getStudent($id): string
    {
        try {
            $sql = "SELECT s.*, c.name as course FROM `students` s join `courses` c on s.course_id=c.id where s.id=?";
            $prepare = $this->pdo->prepare($sql);
            $prepare->execute([$id]);
            $student = $prepare->fetch();

            if ($student) {
                return $this->ApiResponse(true, "Get Student", $student);
            } else {
                return $this->ApiResponse(false, "No Student Found");
            }
        } catch (PDOException $e) {
            return $this->ApiResponse(false, "Error: " . $e->getMessage());
        }
    }
    public function addStudent($name, $email, $phone, $course): string
    {
        try {
            $sql = "INSERT INTO `students`(`name`, `email`, `phone`, `course_id`) VALUES (?,?,?,?)";

            $prepare = $this->pdo->prepare($sql);

            $prepare->execute([$name, $email, $phone, $course]);
            if ($prepare->rowCount() > 0) {
                return $this->ApiResponse(true, "Student Added Successfully");
            } else {
                return $this->ApiResponse(false, "Failed to Add Student");
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function updateStudent($id, $name, $email, $phone, $course): string
    {
        try {
            $sql = "UPDATE `students` SET `name`=?,`email`=?,`phone`=?,`course_id`=? WHERE id=?";

            $prepare = $this->pdo->prepare($sql);

            $prepare->execute([$name, $email, $phone, $course, $id]);
            if ($prepare->rowCount() > 0) {
                return $this->ApiResponse(true, "Student Updated Successfully");
            } else {
                return $this->ApiResponse(false, "Failed to Update Student");
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function deleteStudent($id): string
    {
        try {
            $sql = "DELETE FROM `students` WHERE id=?";

            $prepare = $this->pdo->prepare($sql);

            $prepare->execute([$id]);
            if ($prepare->rowCount() > 0) {
                return $this->ApiResponse(true, "Student Deleted Successfully");
            } else {
                return $this->ApiResponse(false, "Failed to Delete Student");
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    private function ApiResponse(bool $status = true, string $message, $data = []): string
    {
        return json_encode([
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ]);
    }
}

$db = new Student();
