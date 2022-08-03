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
        <option value="#">---Select--</option>
      <option value="1">Active</option>
      <option value="2">Inactive</option>
      <option value="3">Suspend</option>
      </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Your Email</label>
    <input type="text" class="form-control" id="id" placeholder="id" >
  </div>
  
  <button id="submit" type="submit" class="btn btn-primary mt-3">Submit</button>
   
   


      </div>

      <div class="col-md-6">
    <div id="output">

   
</div>
    </div>

    
     </div>
   
     </div>
   
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script src="./app.js"></script>

    
</body>
</html>