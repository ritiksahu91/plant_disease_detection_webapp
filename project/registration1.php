<?php
    

    include_once "../universal/share.php";

    $uname=$_POST['uname'];
    $pass1=$_POST['pass1'];
    $email=$_POST['uemail'];

    
    $sub_obj=mysqli_query($conn,"select * from user where name='$uname' && mobileno='$mobile'");
    $total=mysqli_num_rows($sub_obj);
    if($total>0){
        echo"user name $uname is already exist";
        echo"<br>";
        echo"<a href='register2.html'>  
        <button >try again</button>
        </a>";
        die;
    }
    $cmd="insert into user(name,password, mobileno,Email) values('$uname','$pass1','$mobile','$email')";
    mysqli_query($conn,$cmd);
    echo"<h1>registration successfull</h1>";
    
        header('location:login1.html');
    
?>