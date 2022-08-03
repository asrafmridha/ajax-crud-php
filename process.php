
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

    function show(){

     global $con;

     $result =$con->query("SELECT *FROM tbl_student");
     $output= "<table class='table' border='1'> <tr>
     
     <th>First Name</th>
     <th>User Name</th>
     <th>Email</th>
     <th>Status</th>
     <th>Action</th>

     
     
     
     </tr> ";
     if($result->num_rows>0){
          
        while($data=$result->fetch_assoc()){

            $output.='<tr>
            
            <td>'.$data['fName'].'</td>
            <td>'.$data['uName'].'</td>
            <td>'.$data['email'].'</td>
            <td>'.$data['status'].'</td>
            <td><button class"btn btn-info" id="findid" value="'.$data['id'].'">Update</button> </td>
            <td><button class"btn btn-info" onclick="deleteid('.$data['id'].')" >Delete</button> </td>
            </tr>';
        }
        $output.='</table>';
        echo $output;

     }
     else{



        echo "data not found";
     }

    }

    function delete(){

        global $con;
        $id=$_POST['id'];

       $result= $con->query("DELETE FROM tbl_student WHERE id='$id'");

      if($result){
        echo '<div class="alert alert-danger">Date Delete Successfully</div>';
      }
      else{
        echo '<div class="alert alert-danger">Date not  Deleted </div>';
      }
       

    }

    function findid(){

        global $con;
        $id=$_POST['id'];

       $result= $con->query("SELECT *FROM tbl_student WHERE id='$id'");

       $res=$result->fetch_assoc();

       echo json_encode($res);



    }

     function update(){
        global $con;
        $id=$_POST['id'];
        $fName=$_POST['fName'];
        $uName=$_POST['uName'];
        $email=$_POST['email'];
        $status=$_POST['status'];

        $result= $con->query("UPDATE tbl_student SET fName='$fName', uName='$uName', email='$email', status='$status' WHERE id='$id' ");

        if($result){
          echo '<div class="alert alert-danger">Date update Successfully</div>';

        }else{

          echo '<div class="alert alert-danger">Date not updated </div>';
        }

     }



?>