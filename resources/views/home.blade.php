<style>
   #home_search_box{
    width:100%;  background-image:linear-gradient(to bottom,#0892fd, #ffffff, #0892fd); text-align:center;padding:10px 0;
    position:sticky; top:-25px; z-index:5; margin-bottom:20px;
   }
   
   #home_front_first{
    width:100%;   background-image:linear-gradient(to bottom,#0892fd, #ffffff, #0892fd); text-align:center; display:flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    align-items: center;
   }

   #home_about{
    width:70%;  font-size:17px; margin:auto; 
    /* border:1px solid red; */
   }
   #home_about #home_paragraphs{
    height:100%;
    display:flex; 
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
   }

   #search_label, #front_ip_label{
        margin:auto;  font-size:40px; font-weight:; font-family:Arial Black; 
        color:rgb(15, 25, 56); text-shadow:3px 2px 5px rgb(255, 255, 255); 
        padding-bottom:10px
   }

   #main_header{
       box-shadow: 2px 2px 10px rgb(97, 97, 97);
   }
   #search_box{
        height:50px;
   }

   #home_logo{
            height:200px;
    }

    #home_content{
        background: linear-gradient(to bottom left,#Fff6, #ffff),url('{{asset('assets/img/content_bg.png')}}');
        background-repeat: no-repeat;
        background-size: 100% auto;
    }
    
    #search_param_box button{
        border:none;
        background:transparent;
        background:rgb(192, 203, 208);
        border-radius:0.5rem;
        margin-bottom:12px;
    }

    #ip_search_result_box{
        width:100%; min-height:200px; display:flex;
        max-height:500px; overflow:auto;
        margin:0; font-size:12px; line-height:1;
    }
    
    .ip_result_contents{
        border:px solid black;
        min-height:200px;
        cursor:pointer;
        /* background:rgb(137, 154, 171); */
    }

    .ip-cell:hover{
        background:rgb(189, 221, 189);

    }

    .ip-cell{
        background:rgb(183, 214, 244);
        height:95%;
        line-height:1;
    }

    .ip-cell p{
        display: -webkit-box;
        max-width: 200px;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        /* inline-size: 100%;
        overflow-wrap: break-word;
        border:1px solid #000a */
    }

     /* for checklist and forms */
     #icon_pum, #icon_cr, #icon_tm{
        width:120px; text-align:center; margin-right:50px; padding-top:30px;
    }

    .downloadable_cnf{
        display:flex; align-items: center; border:2px ridge white; 
        width:120px; height:170px; border-radius:1rem; text-align:center; 
        background:white; font-size:13px; color:black; cursor:pointer;
        
    }

    .downloadable_cnf label{
        padding:5px; cursor:pointer; 
    }

    .downloadable_cnf:hover{
        color:#0892fd; width:130px; height:175px;
    }

   @media only screen and (max-width: 930px) {
        #search_label{
            font-size:20px;
        }

        #home_search_box{
                    padding:15px 0;
                    top:5px; 
        }

        #home_logo{
            height:100px
        }

        #home_about{
            font-size:13px;  width:90%; 
        }

        #icon_pum{
            margin:0;
        }
   }

    @media only screen and (max-width: 500px) {
                #label_search{
                    display:none;
                }
                #home_search_box{
                    /* padding:10px 0; */
                    top:15px; 
                }

                #search_label{
                    font-size:13px;
                    margin-top:0;
                }

                #search_box{
                    height:30px;
                }

                #home_logo{
                    height:50px
                }

                #cnf_pum_box{
                    flex-direction: column;
                    align-items: center;
                    align-content: center;
                    
                }

             
    }

</style>


{{-- @include("home.tabngraph") --}}
<style>
    #ip_trends_box{
        width:100%;display:flex; padding:100px 0 100px 0; margin:70px 0 70px 0;
        text-align:center; flex-wrap:wrap; flex-direction: row;
        justify-content: center; background: #0a95ff; 
    }

    .ip_trends_box_contents:hover{
        opacity:0.7;
        transform: scale(1.1);
    }

    .ip_trends_box_contents{
        height:170px; margin:10px; width:200px; border-radius:1rem; border:1px solid #aaa;
        display:flex; justify-content: center; align-items: center; color:white; cursor:pointer;
    }
    
    @media only screen and (max-width: 500px) {
        .ip_trends_box_contents{ 
            height:128px; margin:5px; width:150px; 
        }
    }
</style>


<div id="home_front_first">
    <div style="width:100%">
        <img id="home_logo" src="{{asset('assets/img/ip_logo_temp.png')}}" style="" alt="logo-details.png; ">
    </div>
    
    <div  id="front_ip_label" class="w-75">
        <b>Intellectual Property System</b>
    </div>
</div>

<div id="home_about" class="mt-5 mb-5 text-justify"  >
    <div id="home_paragraphs">
        <h2 class="text-center mb-5"><b  style="color:#0892fd">About</b></h2>
        <p style="text-indent: 20%;">
            In line with the Republic Act No. 8293 or the “Intellectual Property Code” of the Philippines, the DOST-FNRI recognizes that an effective intellectual property system is vital to the development of domestic and creative activity, facilitates transfer of technology, and attracts investments.
        </p>
        <p style="text-indent: 20%;">
            The DOST-FNRI, throught its scientists, inventors and authors, acknowledges its exclusive rights to its intellectual property and creations.
        </p>
        <p style="text-indent: 20%;">
            The online DOST-FNRI Intellectual Propety (IP) Database is an in-house tool that serves as an internal depository of IP data and documents used to manage, monitor and evaluate Ips filed by DOST-FNRI inventors or authors.
        </p>
        <p style="text-indent: 20%;">
            Database provides internal access to DOST-FNRI inventors or authors in monitoring the status of their IP applications (e.g. patent, utility model, copyright, trademark). Further, the database allows the generation of IP trends and gives links to downloadable IP application forms and checklists.
        </p>
    </div>
    
</div>

<div id="search_result_box" >
    <div id="home_search_box">
        <div  id= "search_label" class="w-75">
            <b>Quick Search</b>
        </div>
        <div class="w-75" style="margin:auto; font-size:15px; box-shadow:2px 2px 5px #444;">
            <div id= "search_box" class="row" >
                <input class=" form-control h-100" type="text" id="search_chars_bar" style="width:80%"/>
                <div id="search_bar_button" class="" style="background:#0892fd; cursor:pointer; width:20%;box-shadow:2px 2px 3px #0004; display:flex;justify-content: center;align-items: center;" >
                    <i class="fas fa-search"></i>   
                    <span id="label_search"> Search </span> 
                </div>
            </div>
        </div>
    </div>

    <div style="width:90%; margin:0 auto" id="result_main_box">
        <div class="row"> 
            <div class="col-lg-3 m-0 p-0" style="box-shadow:1px 0px 5px #555; min-height: 200px; border-radius:0.5rem">
                <h5 class="p-2" style="width:100%; background:#adf; text-align:center">Search By</h5>
                <div class="row m-0 p-2 " style="font-size:12px;">
                    
                    <div class="col-lg-12 p-0 mt-2" style="display:flex">
                        {{-- <input class=" mt-2 select-by-checkboxes" style="transform: scale(2); width:15%; " type=checkbox> --}}
                        <label class="" style="width:40%">Ip Type</label>
                        <select class=" p-2" name="" id="" style="width:60%">
                            <option value="-1" selected disabled>Select IP</option>
                            <option value="1">Patent</option>
                            <option value="2">Utility Model</option>
                            <option value="3">Trademark</option>
                            <option value="4">Copyright</option>
                        </select>
                    </div>

                    <div class="col-lg-12 p-0 mt-2" style="display:flex; align-items: stretch; flex-wrap: wrap; flex-direction: row;">
                        {{-- <input class=" mt-2 select-by-checkboxes" style="transform: scale(2); width:15%" type=checkbox> --}}
                        <label class="" style="width:25%">Date</label>
                        <label class="text-right" style="width:15%">From: </label>
                        <input style="width:60%; " type="date" />
                        <label class="text-right"style="width:40%;" >To:</label>
                        <input style="width:60%" type="date" />
                    </div>

                    <div class="col-lg-12 p-0 mt-2" style="display:flex">
                        {{-- <input class=" mt-2 select-by-checkboxes" style="transform: scale(2); width:15%; " type=checkbox> --}}
                        <label class="" style="width:40%">Status</label>
                        <select class=" p-2" name="" id="" style="width:60%">
                            <option value="-1" selected disabled>Select Status</option>
                            <option value="Approved">Approved</option>
                            <option value="Granted">Granted</option>
                            <option value="Withdrawn">Withdrawn</option>
                            <option value="Refused">Refused </option>
                            <option value="On process">On process</option>
                        </select>
                    </div>
                    <div class="text-center w-100 mt-3"> <button class="btn-success w-75">Search <i class="fas fa-search"></i>   </button></div>
                
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row" style="box-shadow:1px 0px 5px #555; min-height: 200px; border-radius:0.5rem">
                    
                    <h3 class="p-1" style="width:100%; background:#adf; text-align:center">Result</h3>
                    <div id="search_param_box" class="col-lg-12" style="border-bottom:1px ridge #0003">
                        <button> none x</button>
                    </div>

                    <div class="col-lg-12">
                        <div class="row" id="ip_search_result_box">
                            <div class="p-3" style="width:100%; font-size:55px; color:#0006; text-align:center">No Results Yet</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="ip_trends_box" style="">
    <div class="ip_trends_box_contents" onclick="redirectToDashoard(0)" style="background:rgb(49, 74, 100); position:relative" >
        <label style="position:absolute; z-index:100; ">
            <h2 id="all_count" style=" font-weight:bolder; font-family:Arial Black">0</h2><br>
            <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">All</h6>
        </label>  
        <i class="fa fa-lightbulb" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
    </div>
    <div class="ip_trends_box_contents" onclick="redirectToDashoard(1)" style="background:rgb(37, 97, 162); position:relative" >
        <label style="position:absolute; z-index:100; ">
            <h2 id="patent_count" style=" font-weight:bolder; font-family:Arial Black">0</h2><br>
            <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Patent</h6>
        </label>  
        <i class="fa fa-lightbulb" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
    </div>
    <div class="ip_trends_box_contents" onclick="redirectToDashoard(2)" style="background:rgb(24, 64, 108)">
        <label for="">
            <h2 id="um_count" style=" font-weight:bolder; font-family:Arial Black">0</h2><br>
            <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Utility Model</h6>
        </label>  
        <i class="fa fa-wrench" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
    </div>
    <div class="ip_trends_box_contents" onclick="redirectToDashoard(3)" style="background:rgb(89, 103, 119)">
        <label for="">
            <h2 id="tm_count" style=" font-weight:bolder; font-family:Arial Black">0</h2><br>
            <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Trademark</h6>
        </label>
        <i class="fa fa-university" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
    </div>
    <div class="ip_trends_box_contents" onclick="redirectToDashoard(4)" style="background:rgb(39, 58, 74)">
        <label for="">
            <h2 id="cr_count" style=" font-weight:bolder; font-family:Arial Black">0</h2><br>
            <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Copyright</h6>
        </label>  
        <i class="fa fa-copyright" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
    </div>
</div>

<div class="mt-5 mb-5 p-0 d-none" style=" width:90%; margin:0 auto; padding:0; margin-top:70px; ">
    <div class="row">
        <div class="col-lg-6" style="height:100%; height: 400px; background:rgb(237, 243, 255); text-align:center; display:flex;align-items: center; justify-content: center;">
            <img  src="{{asset('assets/img/ip_logo_temp.png')}}" style="height:auto; max-height:100%; max-width:100%; " alt="sample.png" alt="">
            <div></div>
        </div>
        <div class="col-lg-6 p-0" id="home_content" style=" text-align: justify; text-justify: inter-word;">
            <div class="p-2" style="width:100%;  background:#055da1; color:white"><h2>DOST-FNRI <b>IP List</b> is now availabe on our website</h2></div>
            <p style="width:100%; text-indent:50px; padding:20px; ">You're just a one search away from an Intellectual Property data that you may be looking for. Feel free to explore.</p>
        </div>
    </div>
</div> 

@include("home.tabngraph")

<div id="contact_box" class="d-" style="width:100%; display:flex; align-items: center; ">
    <div class="w-100 mt-5" style=" color:white; background:#0892fd; ">
        <div class="w-100 text-center" style="font-size:30px; padding:10px;"><b>Contact Us</b></div>
        <div class="row p-5" style="margin:auto; width:85%">
            <div class="col-lg-4 mt-5 mb-5" style=" text-align:center;">
                <a href="https://www.google.com/maps/place/Food+and+Nutrition+Research+Institute/@14.4910904,121.0464287,15z/data=!4m5!3m4!1s0x3397cf13a156afc7:0x502dc16e7aacd237!8m2!3d14.4896843!4d121.0531914">
                    <div class="" style="width:100%; ">
                        <i class="fas fa-xl fa-map-marked-alt"></i>
                    </div>
                  
                    <span style="border-top:3px; border-top:2px solid #d6edff; border-bottom: 2px solid #d6edff;">
                        <b>ADDRESS</b>
                    </span>
                    <br>
                    <br>
                    <span>
                            DOST-FNRI Building, Gen. Santos Avenue, Bicutan, Taguig City
                        
                    </span>
                </a>
            </div>
            <div class="col-lg-4 mt-5 mb-5" style=" text-align:center">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                    <div class="mt-" style="width:100%; ">
                        <i class="fas fa-xl fa-envelope"></i>
                    </div>
                    <span style="border-top:3px; border-top:2px solid #d6edff; border-bottom: 2px solid #d6edff;">
                        <b>EMAIL</b>
                    </span>
                    <br>
                    <br>
                    <span>
                        dost-fnriIP@gmail.com
                    </span>
                </a>
            </div>
            <div class="col-lg-4 mt-5 mb-5" style=" text-align:center">
                <div class="mt-" style="width:100%; ">
                    <i class="fas fa-xl fa-phone"></i>
                </div>
                <span style="border-top:3px; border-top:2px solid #d6edff; border-bottom: 2px solid #d6edff;">
                    <b>TELEPHONE</b>
                </span>
                <br>
                <br>
                <span>
                    8837-8113 102 322
                </span>
            </div>
        </div>
    </div>
</div>

<div id="checklist_and_forms" class="mt-5 " style="background:#fff; color:#0892fd; ">
    <div class="w-100 pt-2" style="border-bottom:3px solid white">
        <center><h4><b>Application Checklists and Forms</b></h4> </center>
    </div>
    
    <div class="row p-5 mb-5" style="border:px solid white; margin:auto; width:95%; ">
        <div class="w-100 mb-5 pb-3" id ="cnf_pum_box" style="border-bottom:10px solid rgb(53, 153, 254);  display:flex; flex-wrap:wrap;gap: 20px; ">
                <div id= "icon_pum">
                    <img src="{{asset('assets/img/ip-icon/patent_icon.png')}}" alt="">
                    <br>
                    <label for="">Patent/Utility Model</label>
                </div>

                <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                    <label for="">Description and Registration Procedure<br><br><i class="fas fa-download"></i></label>
                </a>
                <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                   
                    <label for="">Application Checklist<br><br><i class="fas fa-download"></i></label>
                </a>
                <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                   
                    <label for="">Preliminary Search Report Template<br><br><i class="fas fa-download"></i></label>
                </a>
                <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                   
                    <label for="">Invention Disclosure Form<br><br><i class="fas fa-download"></i></label>
                </a>
                <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                    <label for="">Technical Report Template<br><br><i class="fas fa-download"></i></label>
                </a>
                <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                    <label for="">Project Information Sheet Template<br><br><i class="fas fa-download"></i>
                    </label>
                </a>
        </div>
        <div class="w-100 mb-5 pb-3" id ="cnf_pum_box" style="border-bottom:10px solid rgb(53, 153, 254);   display:flex; flex-wrap:wrap;gap: 20px; ">
            
            
            <div id= "icon_pum">
                <img src="{{asset('assets/img/ip-icon/tm_icon.png')}}" alt="">
                <br>
                <label for="">Trademark</label>
            </div>
            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                    <label for="">Description and Registration Procedure<br><br><i class="fas fa-download"></i></label>
            </a>
            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
            
                <label for="">Application Checklist<br><br><i class="fas fa-download"></i></label>
            </a>
            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
            
                <label for="">Copyright Affidavit Form<br><br><i class="fas fa-download"></i></label>
            </a>
            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
            
                <label for="">Deed of Assignment<br><br><i class="fas fa-download"></i></label>
            </a>
            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                <label for="">Project Information Sheet Template<br><br><i class="fas fa-download"></i></label>
            </a>
        </div>
        <div class="w-100 mb-5 pb-3" id ="cnf_pum_box" style="border-bottom:10px solid rgb(53, 153, 254);   display:flex; flex-wrap:wrap;gap: 20px; ">
            <div id= "icon_pum">
                <img src="{{asset('assets/img/ip-icon/cr_icon.png')}}" alt="">
                <br>
                <label for="">Copyright</label>
            </div>

            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                <label for="">Description and Registration Procedure<br><br><i class="fas fa-download"></i></label>
            </a>
            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
               
                <label for="">Application Checklist<br><br><i class="fas fa-download"></i></label>
            </a>
            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                <label for="">Application Form<br><br><i class="fas fa-download"></i></label>
            </a>
            <a href="{{asset('assets/checklist-and-forms/sample.docx')}}" class="downloadable_cnf" download>
                <label for="">Project Information Sheet<br><br><i class="fas fa-download"></i></label>
            </a>
        </div>
        
    </div>

</div>

<script>
    $("#home_front_first").css("height", window.innerHeight);
    // $("#home_about").css("height", window.innerHeight);
    // $("#search_result_box").css("height", window.innerHeight);
    $("#contact_box").css("margin-top", window.innerHeight*.3 );
    $("#contact_box").css("margin-bottom", window.innerHeight*.3 );
    // $("#checklist_and_forms").css("height", window.innerHeight);
    // $("#graphs_charts_box").css("height", window.innerHeight);

    $("#search_bar_button").click( function (e) {
        $('html,body').animate({scrollTop: $("#result_main_box").offset().top}, 1000); // automatically scroll to location
        let ip_type = ["Patent", "Trademark", "Utility Model", "Copyright"];
        console.log("Came from search bar");
        let search_word = $("#search_chars_bar").val();
            $.ajax({
                url : "home/search_word",
                method:"POST",
                data:  'search_word=' +search_word,
                success: function (data) {
                    let rows = JSON.parse(data);
                    console.log(data+ " - success");
                    $("#ip_search_result_box").html("");
                    for(x=0; x<rows.length; x++){
                        $("#ip_search_result_box").append(
                            "<div class='col-lg-4 ip_result_contents'>"+
                            "<div class='m-1 p-2 ip-cell' onclick='viewIP("+JSON.stringify(rows[x])+")'>"+
                        
                            "<div class='row'>"+
                                "<p class='col-lg-5'><b>Name:</b></p>"+
                                " <p class='col-lg-7 '>"+rows[x].name+"</p>"+
                            "</div>"+
                            "<div class='row'>"+
                                "<p class='col-sm-5'><b>IP Type:</b></p>"+
                                "<p class='col-sm-7 text-truncate'>"+ip_type[rows[x].type_id-1]+"</p>"+
                            "</div>"+
                            "<div class='row'>"+
                                "<p class='col-sm-5'><b>Date Filed:</b></p>"+
                                "<p class='col-sm-7'>"+rows[x].date_filed+"</p>"+
                            "</div>"+
                            "<div class='row'>"+
                                "<p class='col-sm-5'><b>Status:</b></p>"+
                                "<p class='col-sm-7'>"+rows[x].status+"</p>"+
                            "</div>"+
                            "<div class='row'>"+
                                "<p class='col-sm-5'><b>Reg. No:</b></p>"+
                                "<p class='col-sm-7 '>"+rows[x].reg_no+"</p>"+
                            "</div>"+
                        "</div></div>");
                    }
                    console.log($("#ip_search_result_box").html());
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data.message + "error");
                }
            });
    });

    $("#search_param_box button").click(function(){
        $(this).remove();
    });

    function viewIP(ip_data){
    console.log(ip_data);
    $("#btn_open_viewip").trigger('click');
    fillIpData(ip_data);
  }
</script>


<script>
    
    getIpTypesCounts(); 
    function getIpTypesCounts(){
        let ids = ["all_count", "patent_count", "um_count", "tm_count", "cr_count"];
        $.ajax({
              url : "home/iptrends",
              method:"POST",
            //   data:  'search_word=' +search_word,
              success: function (data) {
                  let counts = JSON.parse(data);
                  console.log(data+ " - success");
                  counts.forEach((element, index) => {
                      $("#"+ids[index]).text(element);
                  });
              },
              error: function (data, textStatus, errorThrown) {
                  console.log(JSON.stringify(data) + "error");
              }
          });
    }

    function redirectToDashoard(iptype){
       window.location.href = 'addIP?iptype='+iptype;
        // $.ajax({
        //       url : "home/todashboard",
        //       method:"POST",
        //       data:{'iptype':iptype},
        //       success: function (data) {
        //         //   console.log(data+ " - success");
        //          $(html).html(data);
        //       },
        //       error: function (data, textStatus, errorThrown) {
        //           console.log(JSON.stringify(data) + "error");
        //       }
        // });
    }
</script>