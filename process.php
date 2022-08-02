<?php 

$con=new mysqli("localhost","root", "", "ajax_crud");

 

    $check=$_POST["check"];
    $check();

    function insert(){

        global $con;
        $fName=$_POST['fName'];
        $uName=$_POST['uName'];
        $email=$_POST['email'];
        $status=$_POST['status'];

       $result= $con->query("INSERT INTO tbl_student (fName,uName,email,status) VALUES ('$fName','$uName','$email','$status')");

       if($result){

        echo '<div class="alert alert-success">Data Submitted</div>';
       }
       else {

        echo '<div class="alert alert-danger">Data not Submitted</div>';
       }
    }

  









?>