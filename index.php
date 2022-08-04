<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    

 <div class="container">
<div class="row mt-5 ">

   
<div class="col-md-6   p-2 " >

 <div id="msg">
 

</div>  

<div class="form-group">
    <label for="exampleInputEmail1">Your Full Name</label>
    <input type="text" class="form-control" id="fName" aria-describedby="emailHelp" placeholder="Enter Name"  >
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Your User Name</label>
    <input type="text" class="form-control" id="uName" aria-describedby="emailHelp" placeholder="Enter Name"  name="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Your Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Status</label>
      <select class="form-control"  id="status">
        <option value="0">---Select--</option>
      <option value="1">Active</option>
      <option value="2">Inactive</option>
      <option value="3">Suspend</option>
      </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Your Id</label>
    <input type="text" class="form-control" id="id" placeholder="id" >
  </div>
  
  <button id="submit" type="submit" class="btn btn-primary mt-3">Submit</button>

  <button id="update" type="submit" style="display: none;" class="btn btn-info mt-3">Update</button>
   
   


      </div>

      <div class="col-md-6">
    <div id="output">

   
</div>
    </div>

    
     </div>
   
     </div>


<!-- Button trigger modal for update -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

     


<div class="form-group">
   <label for="exampleInputEmail1">Your Full Name</label>
   <input type="text" class="form-control fName" aria-describedby="emailHelp" placeholder="Enter Name"  >
   
 </div>

 <div class="form-group">
   <label for="exampleInputEmail1">Your User Name</label>
   <input type="text" class="form-control uName"aria-describedby="emailHelp" placeholder="Enter Name"  name="" >
   
 </div>
 <div class="form-group">
   <label for="exampleInputPassword1">Your Email</label>
   <input type="email" class="form-control email" placeholder="Enter Email" >
 </div>

 <div class="form-group">
   <label for="exampleInputPassword1">Status</label>
     <select class="form-control status"  >
       <option value="0">---Select--</option>
     <option value="1">Active</option>
     <option value="2">Inactive</option>
     <option value="3">Suspend</option>
     </select>
 </div>

 <div class="form-group">
   <label for="exampleInputPassword1">Your Id</label>
   <input type="text" class="form-control id" placeholder="id" >
 </div>
 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateuserbutton">update</button>
      </div>
    </div>
  </div>
</div>













   
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <script src="./app.js"></script>

    
</body>
</html>