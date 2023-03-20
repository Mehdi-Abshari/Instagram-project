<?php
if(isset($_POST['send'])){
    $mobile=htmlentities($_POST['input_mobile']);
    $full_name=htmlentities($_POST['fn_input']);
    $username=htmlentities($_POST['username']);
    $password=htmlentities($_POST['pass']);
    print("your credential :<br>");
    print("fullname : $full_name<br>");
    print("username : $username<br>");
    print("password : $password<br>");
    print("mobile number: $mobile<br>");


}else
    print "please fill all input";