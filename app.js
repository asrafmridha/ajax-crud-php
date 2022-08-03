jQuery(document).ready(function(){

    show();
 
    jQuery("#submit").click(function(){
    
        insert();
        
    });

    jQuery(document).on("click","#findid",function(e){

        var id=jQuery(this).val();
         findid(id);
    })

    jQuery("#update").click(function(){

      update();



    });
    
    
    });
    
    function insert(){
        var check='insert';
        var fName=jQuery("#fName").val();
        var uName=jQuery("#uName").val();
        var email=jQuery("#email").val();
        var status=jQuery("#status").val();
      
    
       $.ajax({
    
             url: "process.php",
            type: "post",
            
            data:{
             check:check,
             fName:fName,
             uName:uName,
             email:email,
             status:status
    
            } ,
         
            success: function (response) {
                show();
                jQuery("#msg").html(response);
                jQuery(".alert").fadeOut(3000);
                jQuery("#status").val("");
                jQuery("#email").val("");
                jQuery("#uName").val("");
                jQuery("#fName").val("");
            }
        
        });
    }

    //for data show

    function show(){
        var check='show';
       
    
       $.ajax({
    
             url: "process.php",
            type: "post",
            
            data:{
             check:check,
            
    
            } ,
         
            success: function (response) {
                jQuery("#output").html(response);
               
               
            }
        
        });
    }

    function deleteid(id){
        var check='delete';
        $.ajax({
    
            url: "process.php",
           type: "post",
           
           data:{
            check:check,
            id:id
             
           } ,
           success: function (response) {
           
           
            show();
            jQuery("#msg").html(response);
            jQuery("#msg").fadeOut(3000);
           }
       }); 
    }






    function findid(id){
        var check='findid';
       
      
    
       $.ajax({
    
             url: "process.php",
            type: "post",
            dataType:"JSON",
            data:{
             check:check,
             id:id
          
    
            } ,
         
            success: function (response) {

                jQuery("#id").val(response.id);
                jQuery("#status").val(response.status);
                 jQuery("#email").val(response.email);
                 jQuery("#uName").val(response.uName);
                 jQuery("#fName").val(response.fName);
            }
        
        });
    }

    function update() {

        var check='update';
        var id=jQuery("#findid").val();
        var fName=jQuery("#fName").val();
        var uName=jQuery("#uName").val();
        var email=jQuery("#email").val();
        var status=jQuery("#status").val();
   
       
    
        $.ajax({
     
              url: "process.php",
             type: "post",
             
             data:{
              check:check,
              id:id,
              fName:fName,
              uName:uName,
              email:email,
              status:status
             
     
             } ,
          
             success: function (response) {
                show();
                 jQuery("#msg").html(response);
                
                
             }
         
         });
     }
    
         



      
    
       

  
        
    
  
