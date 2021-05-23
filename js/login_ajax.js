
// ajax call for  login

document.getElementById("submitBtn").addEventListener("click",function () {
    alert("df");
    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
          type: 'POST',
          url: 'php/login.php',
          data : {
            email: email,
            password:password
          },
          success:function(response){
              alert(response);
               console.log(response);
               if(response.trim() == "success"){
                $("#loginMsg").html("<b class='text-success'>login successfull</b>");

             
               }
               else{
                $("#loginMsg").html("<b class='text-danger'>login failed</b>");
               }
         },

       
    })
});