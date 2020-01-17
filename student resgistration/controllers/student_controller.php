<?php
include_once '../model/student_model.php';

	
	 class student_controller{
	public function save_data($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	{
	    echo "student";
	    $obj = new student_model();
	    $obj->insert($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw);
	}
	public function update_data($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	{
	    echo "student edit";
	    $obj = new student_model();
	    $obj->update($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw);
	}
	
    public function login_data($uname,$psw)
	{
	    echo "student login";
	    $obj = new student_model();
	    $obj->login($uname,$psw);
	}
  }	 

?>