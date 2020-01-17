<?php
 //
 //
  include "header.php";
  include_once "../controllers/student_controller.php";

  if(isset($_POST['submit'])){
    $reg_no=$_POST['reg_no'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $course=$_POST['course'];
    $year=$_POST['d_from'];
    $sem=$_POST['sem'];
    $uname=$_POST['user_name'];
    $psw=$_POST['password'];
    $con=new student_controller();
    $con->save_data($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw);
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
<link href="../css/main.css" rel="stylesheet" media="all">
	</head>
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Student Registration Form</h2>
                </div>
                <div class="card-body">
				
<!--				
<div class="row">
  <div class="login" style="text-align: center;">-->
   <form action="" method="post">
   
   <div class="form-row">
                            <div class="name">Registration number</div>
                            <div class="value">
                                <div class="input-group">
								<input type="text" name="reg_no" class="input--style-5" placeholder="Registration Number">
								 </div>
                            </div>
                        </div>
   <div class="form-row m-b-55">
   <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                        <input type="text" name="fname" class="input--style-5" placeholder="First Name"> <br>
                                         <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
										<input type="text" name="lname" class="input--style-5" placeholder="Last Name">
									<label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
										
	<div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
								<input type="text" name="email" class="input--style-5" placeholder="Email">
								
							 </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mobile">
                                </div>
                            </div>
                        </div>	
			<div class="form-row">
                            <div class="name">Dept Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="dept" class="input--style-5">
                                    <option>select</option>
									<option value="bca">BCA</option>
                                    <option value="mca">MCA</option>
                                    <option value="btech"> B.Tech</option>
                                    <option value="mtech"> M.Tech</option>
                                    <option value="phd"> PHD</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="form-row">
                            <div class="name">Course Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
									<select name="course" class="input--style-5">
									<option value="cse">CSE</option>
        <option value="eee">EEE</option>
        <option value="ece">ECE</option>
        <option value="aero">AERO</option>
        <option value="it"> IT</option>
    </select>
	 <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
   <div class="name">Choose Date</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                        
										<input type="date" name="d_from" class="input--style-5">
                                         <label class="label--desc">From</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
										<input type="date" name="d_to" class="input--style-5">
										
									<label class="label--desc"> To</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="form-row">
                            <div class="name">Select</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="sem" class="input--style-5">
                                     <option>select Sem</option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5"> 5</option>
        <option value="5"> 6</option>
        <option value="5"> 7</option>
        <option value="5"> 8</option>
                                  </select>
                                    
                                    <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            </div>		
                             <div class="form-row">
                            <div class="name">username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user_name">
                                </div>
                            </div>
                        </div>
                        
						<div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="cpassword">
                                </div>
                            </div>
                        </div>
                        							
                          <div>
                            <input type="submit" name="submit" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset">
							
                        </div>
						<a href="forgot_password.php"> Forgot Password </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
									
