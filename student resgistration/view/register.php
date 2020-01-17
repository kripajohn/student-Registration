
<?php 
include "header.php";
//include "../model/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
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
                    <form method="POST" name="registration" onsubmit="return validate()" action="../controller/reg_action.php/display">
					
					
					
					
					
					
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Registration number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="reg">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
						
						
						<div class="form-row">
                            <div class="name">Dept Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="dept" class="input--style-5">
                                            <option disabled="disabled"  selected="selected">Choose option</option>
                                            <option>BTECH</option>
                                            <option>MTECH</option>
                                            <option>BCA</option>
											<option>MCA</option>
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
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>CSE</option>
                                            <option>ECE</option>
                                            <option>EEE</option>
											<option>IT</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="phn">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Sem</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="sem">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Year</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="year">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="uname">
                                </div>
                            </div>
                        </div>
                        
						<div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pswd">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="cpswd">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div>
                            <input class="btn btn--radius-2 btn--red" name="submit" value="Register" type="submit">
							
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	<script>
function validate()
{
var fname=document.registration.first_name.value;
var lname=document.registration.last_name.value;
var reg=document.registration.reg.value;
var email=document.registration.email.value;
   var atposition=email.indexOf("@");
   var dotposition=email.lastIndexOf(".");
var genderM=document.registration.gender.value;
var genderF=document.registration.gender.value;
var phonenum=document.registration.phn.value;
var uname=document.registration.uname.value;
var password=document.registration.pswd.value;
var password2=document.registration.cpswd.value;


if(fname==""||fname==null)
{
alert("firstname can't be blank");
document.registration.first_name.focus();
return false;
}
else if(lname==""||lname==null)
{
alert("lastname can't be blank");
document.registration.last_name.focus();
return false;
}
else if(reg==""||reg==null)
{
alert("name can't be blank");
document.registration.reg.focus();
return false;
}

else if(atposition<1||dotposition<atposition+2||dotposition+2>=email.length)
{
alert("Please enter a valid email id");
return false;
}
else if(genderM.checked==false && genderF.checked==false )
{
 alert("You must select male or female");
 return false;
    }
	else if(phonenum.length<10){
alert("phonenum must be 10 values");
return false;
}
else if(uname==""||uname==null)
{
alert("username can't be blank");
document.registration.uname.focus();
return false;
}
else if(password.length<6){
alert("password must be 6");
document.registration.pswd.focus();
return false;
}
else if(password!=password2){
alert("password must be same");
return false;
}
else{
alert("successfulllll");
return true;
}


}
</script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php 
include "footer.php";

?>