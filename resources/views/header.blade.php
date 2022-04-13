<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Favicons -->
        <link href="assets/img/dost.png" rel="icon">
        <link href="assets/img/dost.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.datatable.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/fontawesome/css/all.min.css')}}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}
            body{margin:0}
            a{background-color:transparent}[hidden]{display:none}
            /* html{
                font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,
                Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0
            } */
            a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Poppins', sans-serif;
                color: black;
                font-size: 15px;
                line-height: 1.80857;
            }
            

            /* for scrollbar design */
            ::-webkit-scrollbar {
                width: 5px;
            }

            ::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
                border-radius: 10px;
            }

            ::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
            }


            #header_menu .col{
                width:120px;
                font-size: 15px;
                color:white;
            }

            #header_menu .col:hover{
                /* background:#9d3d01; */
                color:#fff;
                cursor:pointer;
                text-shadow:1px 1px 10px white;
                /* font-size:20px; */
                border-bottom:1px solid white;
            }

            .list_boxes:hover{
                background:#0002;
            }
            #header-pop-up-box{
                display:none; position:absolute;  top:55px; left:-180px; width:300px; 
                background:rgb(255, 255, 255); box-shadow:2px 2px 5px #0006; border-radius:0 0 .5rem .5rem; text-align: left;
            }

            #header-pop-up-box-profile{
                display:none; position:absolute;  top:40px; left:-40px; width:200px; 
                background:#0892fd; box-shadow:2px 2px 5px #0006; border-radius:0 0 .5rem .5rem; text-align: left;
                color:rgb(39, 26, 2);  overflow:auto;
            }

            #header-pop-up-box-home{
                display:none; position:absolute;  top:40px; left:-40px; width:200px; 
                background:#0892fd; box-shadow:2px 2px 5px #0006; border-radius:0 0 .5rem .5rem; text-align: left;
                color:rgb(39, 26, 2);  overflow:auto;
            }

            #header-pop-up-box-profile div, #header-pop-up-box-home div{
                width:100%;
                border-bottom:1px solid rgb(255, 255, 255);
                text-align:center;
                color:white;
            }

            #logo1{
                height:50px; float:left;
            }

            #logo2{
                height:50px; float:left; display:none;
            }

            @media only screen and (max-width: 1200px) {
                #header_menu {
                    display:;
                }
                #logo2{
                    display:block;
                }
                #logo1{
                    display:none;
                }
            }

            @media only screen and (max-width: 740px) {
                #header_menu {
                    display:none;
                }
            }

            #header_logo a{
                color: #007bff;
                font-weight:500;
            }

            #main_header{
                background-image: url(https://i.fnri.dost.gov.ph/assets/pinoy_assest/images/header_img.png);
                position: sticky;
                top:0;
                left:0; 
                margin: 0;
                background-position: left;
                background-size: auto 100%;
                /* background:url('{{asset('assets/img/header_img.png')}}'); */
                background-repeat: no-repeat;
                background-color: #0892fd;
                /* background-image:linear-gradient(to bottom right,#280f00, #ff9b5f, #ffede2); */
                width:100%;
                z-index:120;
                 /* height:55px;  */
                align-items: center;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                box-shadow:1px 1px 15px#9b9b9b;
                padding: 5px 15px;
            }
        </style>
    </head>
</html>

        <header id="main_header" >
                <div id="header_logo" >        
                    <a style="padding: 0 25px; margin: 0px;" class="navbar-brand" href="https://i.fnri.dost.gov.ph/login/homepage"><b style="font-size: 140%;">iFNRI</b></a>
                        
                    {{-- <img id="logo1" src="{{asset('assets/img/logo-details.png')}}" style="" alt="logo-details.png"> --}}
                    {{-- <img id="logo2" src="{{asset('assets/img/dost.png')}}" style="" alt="logo-details.png; "> --}}
                </div>
                <div id="header_menu" class="row" style="height:100%; float:right; margin-right:2%; font-weight:bold; text-align:center">
                    <div class="col  p-2 home" id="home"><span>Home <i class="fas fa-home"></i></span>
                        
                        <div id="header-pop-up-box-home">
                            <div class="p-2"><a href="/#home_about" >About <span><i class="fa-brands fa-searchengin"></i></span> </a></div>
                            <div class="p-2"><a href="/#search_result_box" >Quick Search <span><i class="fas fa-user-alt"></i></span> </a></div>
                            <div class="p-2"><a href="/#ip_trends_box" >Ip Trends <span><i class="fas fa-sign-out"></i></span> </a></div>
                            <div class="p-2"><a href="/#checklist_and_forms" >Application Checklist <span><i class="fas fa-sign-out"></i></span> </a></div>
                            <div class="p-2"><a href="/#contact_box" >Contact <span><i class="fas fa-sign-out"></i></span> </a></div>
                        </div>
                    </div>
                    <div class="col  p-2 ip-view" id="profile"  style="position:relative;">
                        <span>Profile <i class="fas fa-user"></i></span>
                        <div id="header-pop-up-box-profile">
                            <div class="p-2"><a href="/addIP" >Dashboard <span><i class="fa-brands fa-searchengin"></i></span> </a></div>
                            <div class="p-2"><a href="/" >Account <span><i class="fas fa-user-alt"></i></span> </a></div>
                            <div class="p-2"><a href="/" >Logout <span><i class="fas fa-sign-out"></i></span> </a></div>
                        </div>
                    </div>
                    <div class="col p-2" id="notif_bell" style="position:relative;">
                        <a>Notifs
                            <i class="fa-lg fa-solid fa-bell " ></i>
                            <span id="notif_circle" style="background:rgb(173, 17, 17); color:rgb(255, 255, 255);  
                            border-radius:50%; height:15px; width:15px; position:absolute; top:0; left:100px; font-size:10px; font-weight:lighter">999</span>
                            <div id="header-pop-up-box" style="color:rgb(39, 26, 2); height:400px; overflow:auto">
                                <div style="position:sticky; top:0; background:white; display:flex; justify-content: space-between; font-size:12px; padding:0 5px;">
                                    <label class="pl-2">Notifications</label>
                                    <label class=" text-primary pr-2"><a href="http://127.0.0.1:8000/viewdeadline">View all</a></label>
                                </div>
                                
                                <div  id='notif_list_box' style='width:100%; font-size:10px; font-weight:lighter'>
                                    {{--notification contents  --}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </header>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.datatable.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {{-- {!! Toastr::message() !!} --}}
  


  <script>// for header functions
    
    getNotifications();
    
    $("#notif_bell").hover(function(){
      // alert("Yeah you have " + $(this).text() + " notifications");
      $("#header-pop-up-box").show();
    }, function(){
      $("#header-pop-up-box").hide();
    });

    $("#profile").hover(function(){
      // alert("Yeah you have " + $(this).text() + " notifications");
      $("#header-pop-up-box-profile").show();
    }, function(){
      $("#header-pop-up-box-profile").hide();
    });

    $("#home").hover(function(){
      // alert("Yeah you have " + $(this).text() + " notifications");
      $("#header-pop-up-box-home").show();
    }, function(){
      $("#header-pop-up-box-home").hide();
    });
  
    function getNotifications(){
      $.ajax({
                url : "ips/set_notifs",
                method:"POST",
                success: function (data) {
                  let notifications = JSON.parse(data);
                  console.log(data + "success");
                  $("#notif_circle").html(notifications.length);
                  jQuery.each( notifications, function( i, val ) {
                    $("#notif_list_box").append(
                    "<div class='mb-1 list_boxes' id='list_box_1' style='height:55px; width:100%;  overflow:auto; '>"+
                      "<div style='height:100%; width:70px; border:1px solid #0006; float:left'> pic</div>"+
                      "<div style='width:200px; height:100%; border:px solid green;  float:left; overflow:hidden'>"+
                          "<div class='p-1'  style='height:70%; width:100%; background:; float:left; line-height:12px; text-align: "+
                          "left; word-wrap: break-word; white-space: normal; word-break: break-all; '><b>"+val.name+"</b> - "+val.date_filed+"</p></div>"+
                          "<div class='pl-1' style='height:30%; width:100%; background:; float:left; color:#23a; font-weight:bolder'><label>"+val.days+" days left</label></div>"+
                      "</div>"+
                      
                        "<div style='width:25px; height:100%; border:px solid black; float:left' >"+
                          "<div class='mt-3' style='border:px solid blue; border-radius:50%; width:20px; height:20px; background:#aaa '> </div>"+
                        "</div>"+
                    "</div>");
                    });
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data.message + "error");
                    
                }
            });
    }
  
  
  </script>