<?php
 include '../controller/reg_action.php';
  class model{
 	public  $conn;
 	
  	public function __construct()
  	{
   
    //$conn = mysqli_connect("localhost","root","") or die('Not connected to Database<br>' . mysql_error());
         }
  	
  	public function insert($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
  	{
       $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "studentsystem";
  		echo $Reg_no;
  		echo $Fname;
		echo $Lname;
		echo $Mobile;
		echo $Dept_name;
		echo $Course_name;
		echo $Password;
		echo $Email;
		echo $Name;
		echo $Sem_no;
		echo $Years;
	$conn =mysqli_connect($host, $username, $password,$dbname);

    echo  $sql = "INSERT INTO student (reg,first_name,last_name,phn,dept,course,pswd,email,uname,sem,year)
              VALUES ('$Reg_no','$Fname','$Lname','$Mobile','$Dept_name','$Course_name','$Password','$Email','$Name','$Sem_no','$Years')";

        if (mysqli_query($conn,$sql)) {
             echo "New record created successfully";
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

         mysqli_close($conn);





	    }
		public function select($uname,$pswd){
			
			$host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "studmanagement";
	 $conn =mysqli_connect($host, $username, $password,$dbname);
	  $sql = "select * from student where uname='$uname' && pswd='$pswd'";
		$r=$conn->query($sql);	
		if ($r==TRUE){
			echo "<script>window.location='';</script>";
			
		}
		else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
		}
  	}



 ?>