<?php
echo "hi";


class controller{
 var $Reg_no;
 var $Fname;
 var $Lname;
 var $Mobile;
 var $Dept_name;
 var $Course_name;
 var $password;
 var $Email;
 var $Name;
 var $Sem_no;
 var $Years;
 //private $password;
public function invoke()
{
include 'view/register.php';	
	
}
public function __construct(){
   echo "hello";
   
}
public function display()
{
   $Reg_no= $this->reg;
   $Fname= $this->first_name;
   $Lname= $this->last_name;
   $Mobile= $this->phn;
   $Dept_name= $this->dept;
   $Course_name= $this->course;
   $Password= $this->pswd;
   $Email= $this->email;
   $Name= $this->name;
   $Sem_no= $this->sem;
   $Years= $this->year;
  include '../model/model.php';
  $mod= new model();
  $mod->insert($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
  echo "ok";

}
public function log(){
	
   $uname= $this->uname;
   $pswd= $this->pswd;
   include '../model/model.php';
  $mod= new model();
  $mod->select($uname,$pswd);
}
}
 //$con=new controller($_POST['reg'], $_POST['first_name'], $_POST['last_name'], $_POST['phn'], $_POST['dept'], $_POST['course'], $_POST['pswd'], $_POST['email'], $_POST['name'], $_POST['sem'], $_POST['year']);
 //$con->display();
//require_once(../model/Loginsystem.php)
//$loginSystem = new LoginSystem();
//if($loginSystem->doLogin($this->username,$this->password))
?>
