         
$(document).ready(function(){
  $("#sub").click(function(){
    sessionStorage.uname=$("#fname").val();
    sessionStorage.lname=$("#lname").val();
    var sEmail = $("#email").val();
    var pwd=$("#pass").val();
    var uname=$("#uname").val();
    var fname=$("#fname").val();
    var lname=$("#lname").val();
              // Checking Empty Fields





              if ($.trim(sEmail).length == 0   || $.trim(pwd).length==0 || $.trim(uname).length==0 || $.trim(fname).length==0 || $.trim(lname).length==0) {
               alert('All fields are mandatory');
               return false;
               
             }

             if (validateEmail(sEmail)) {
               alert('Nice!! your Email is valid, now you can continue..');

             }
             else {
               alert('Invalid Email Address');
               $("#email").focus();
               return false;

             } 
             if(pwd.length<8)
             {
               alert("password must be contain 8 character");
               $("#pass").focus();
              // $("#pass").addclass("error");
               //$(event.delegateTarget).addclass("error");
               return false;
             }
             else if ( !pwd.match(/[a-z]/) )
             {
              alert("password must be contain at least one lower case");
              $("#pass").focus();
              return false;
            }
            else if ( !pwd.match(/[A-Z]/) ) 
            {
              alert("password must be contain at least one upper case");
              $("#pass").focus();
              return false;
            }
            else if (! pwd.match(/\d/) )
            {
              alert("password must be contain at least one number ");
              $("#pass").focus();
              return false;
            }

            if(!uname.match("jitu") )
            {
             alert("username is wrong");
             $("#uname").focus();
             return false;
           }
           return true;

         });

       });

         function validateEmail(sEmail) {
          var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
          if (filter.test(sEmail)) {
            return true;
          }
          else {
            return false;
          }
        }
