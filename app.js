jQuery(document).ready(function(){

    show();
    jQuery("#submit").click(function(){
    
        insert();
        
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

    
       

  
        
    
  
