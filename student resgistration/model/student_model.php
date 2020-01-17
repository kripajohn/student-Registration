<?php
// Riya 

// Student Registration action page
   
	include_once "../view/header.php";
	include_once "../controllers/student_controller.php";
 	
	
    
	class student_model
	{

	     public function insert($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
		 {
		 include('../config/connection.php');
		 $connection = new PDO($dsn, $username, $password, $options);
	      $sql="INSERT INTO student (reg_no, fname, lname, mobile, email, dept_name, course_name, sem_no, year, username, password)
              VALUES ('$reg_no', '$fname', '$lname', '$mobile', '$email', '$dept',  '$course', '$sem', '$year', '$uname', '$psw')";

	     $connection->exec($sql);
	     //echo $sql;
         echo "New record created successfully";
	    }

	    public function update($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	    {
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    echo $sql = "UPDATE student SET reg_no='$reg_no', fname='$fname', lname='$lname', mobile='$mobile', email='$email', dept_name='$dept', course_name='$course', sem_no='$sem', username='$uname', password='$psw'";
	    $stmt = $connection->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount() . " records UPDATED successfully";
    }

    public function login($uname,$psw)
	    {
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    $stmt = $connection->prepare("SELECT * FROM student WHERE username='$uname' AND password='$psw'"); 
            $stmt->execute();
            echo "Welcome".$uname;
        }
	
	}	
/*	
catch(PDOException $e)
    {
    echo $sql . "<br> errorrrrrrrr" . $e->getMessage();
    }

     
    
*/
?>
