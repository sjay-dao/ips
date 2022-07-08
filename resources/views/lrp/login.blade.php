
@if(session()->get('login_ips_enabled') == 1)
  
<script>window.location = "/";</script>

@else 
<style>
    #login_box{
        height:300px;
        width:500px;
        box-shadow:1px 1px 8px rgb(0, 153, 255, 0.5);
        margin-top:200px; 
        text-align:center;
    } 
 </style>
 
 <div style="width:100%; height:100%;">
     <section id="login_box" class="col-lg-4 p-4">
         <div class="row form-group" style="border:px solid black;">
            <label class="col-lg-12 " for="">Username</label>
            <input class="offset-lg-2 col-lg-8 form-control" type="text" id="login_user" />
         </div>
         <div class="row form-group" style="border:px solid black">
            <label class="col-lg-12" for="">Password</label>
            <input class="offset-lg-2 col-lg-8 form-control" type="password" id="password" />
         </div>
            <label class="col-lg-12" id="login_lbl" style="color:red"></label>
         <button type="button" class="btn-lg btn-success" onclick="loginToIp()" >Login</button>
     </section>
 </div>
@endif


 <script>
     getUsersFromOtherDB();
    function getUsersFromOtherDB(){
        $.ajax({
              url : "home/getUsersTest",
              method:"POST",
              success: function (data) {
                console.log(JSON.stringify(data) + "what???") ;
              },
              error: function (data, textStatus, errorThrown) {
                  console.log(JSON.stringify(data) + "error");
              }
        });
    }

    function loginToIp(){
        let username = $("#login_user").val();
        let password = $("#password").val();
        $.ajax({
              url : "login",
              method:"POST",
              data:  {'username':username,
                      'password': password
                    },
              success: function (data) {
                let str ="Invalid username or password";
                if(data == false){
                    $("#login_lbl").text(str);
                }
                console.log(data);
                //console.log(data);
              },
              error: function (data, textStatus, errorThrown) {
                  console.log(JSON.stringify(data) + "error");
              }
        });
    }

   

 </script>