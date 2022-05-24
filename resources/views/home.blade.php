<style>
   #home_search_box{
    width:100%;  background-image:linear-gradient(to bottom,#0892fd, #ffffff, #0892fd); text-align:center;padding:10px 0;
    position:sticky; top:-25px; z-index:5; margin-bottom:20px;
   }
   
   #home_front_first{
    /* margin-top:10vh; */
    width:100%;   background-image:linear-gradient(to bottom,#0892fd, #ffffff, #0892fd); text-align:center; display:flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    align-items: center;
   }

   #home_about{
    width:70vw;  font-size:17px; margin:auto;
    /* border:1px solid red; */
   }
   #home_about #home_paragraphs{
    height: 100vh;
    display:flex; 
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
   }

  

   #main_header{
       box-shadow: 2px 2px 10px rgb(97, 97, 97);
   }

   #home_logo{
            height:200px;
    }

    #home_content{
        background: linear-gradient(to bottom left,#Fff6, #ffff),url('{{asset('assets/img/content_bg.png')}}');
        background-repeat: no-repeat;
        background-size: 100% auto;
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
            display:none;
        }

        #home_search_box{
                    padding:15px 0;
                    top:15px; 
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
                    top:45px; 
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


<style>
    /* for trend box */
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

<style>
    /* for table */
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
    }
    table th{
    background:#2076b7;
    font-size:12px;
    color:white;
    text-shadow:1px 1px 3px #000a;
    /* text-align: center */
    }
    table td{
        word-wrap: break-word;
        font-size:10px;
        max-width: 150px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    table thead{
    position:sticky;
    top:0px;
    text-align:center;
    }
</style>

<style> 
    /*  for quick search box*/
   #search_box{
        height:50px;
   }

    #search_label, #front_ip_label{
        margin:auto;  font-size:40px; font-weight:; font-family:Arial Black; 
        color:rgb(15, 25, 56); text-shadow:3px 2px 5px rgb(255, 255, 255); 
        padding-bottom:10px
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
        flex-direction: row;
        flex-wrap: wrap;
        display:none;
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

    .view-button{
        border-radius:.5rem ;  background:#055da1;
        border:1px solid #75c3ff; color:white;
    }

    .view-button-selected{
         color:#055da1;
         border:1px solid #181818; background:white;
    }
    .btn_pagination{
        background:#055da1;
        border:1px solid #75c3ff;
        width:15%;
        color:white;
    }
</style>

<div id="home_front_first">
    <div style="width:100%">
        <img id="home_logo" src="{{asset('assets/img/ip_logo_temp.png')}}" style="" alt="logo-details.png; ">
    </div>
    
    <div  id="front_ip_label" class="w-75">
        <b>FNRI Intellectual Property System (FNRI-IPS)</b>
    </div>
</div>

<div id="home_about" class="text-justify">
    <div id="home_paragraphs" class="mt-5 mb-5">
        <h2 class="text-center mb-5"><b  style="color:#0892fd">About</b></h2>
        <p style="text-indent: 20%;">
            In line with the Republic Act No. 8293 or the “Intellectual Property Code” of the Philippines, the DOST-FNRI recognizes that an effective intellectual property system is vital to the development of domestic and creative activity, facilitates transfer of technology, and attracts investments.
        </p>
        <p style="text-indent: 20%;">
            The DOST-FNRI, through its scientists, inventors and authors, acknowledges its exclusive rights to its intellectual property and creations.
        </p>
        <p style="text-indent: 20%;">
            The online DOST-FNRI Intellectual Propety (IP) Database is an in-house tool that serves as an internal depository of IP data and documents used to manage, monitor and evaluate IPs filed by DOST-FNRI inventors or authors.
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
                <input class=" form-control h-100" type="text" id="search_chars_bar" placeholder="Search word you remember" style="width:80%"/>
                <div id="search_bar_button" class="" style="color:#fff; background:#0892fd; cursor:pointer; width:20%;box-shadow:2px 2px 3px #0004; display:flex;justify-content: center;align-items: center;" >
                    <i class="fas fa-search"></i>   
                    <span id="label_search"> Search </span> 
                </div>
            </div>
        </div>
    </div>

    <div style="width:90%; margin:0 auto" id="result_main_box">
        <div class="row"> 
            <div class="col-lg-3 m-0 p-0" style="box-shadow:1px 0px 5px #; min-height: 200px; border-radius:0.5rem">
                <h5 class="p-2" style="width:100%; background:#0892fd; color:white; text-align:center">Search By</h5>
                <div class="row m-0" style="font-size:12px;">
                    <div class="col-lg-12 p-0 mt-2" style="display:flex; align-items: stretch; flex-wrap: wrap; flex-direction: row;">
                        {{-- <input class=" mt-2 select-by-checkboxes" style="transform: scale(2); width:15%" type=checkbox> --}}
                        <label class="" style="width:100%; text-align:center">Year</label>
                        <label class="text-right" style="width:15%">From: </label>
                        <input id="search_yearfrom" onchange="$('#search_bar_button').trigger('click')" style="width:30%; " type="number" min='1987' value='1987'/>
                        <label class="text-right"style="width:10%;" >To:</label>
                        <input id="search_yearto" onchange="$('#search_bar_button').trigger('click')" style="width:30%" type="number" min='1987' value='2022'/>
                    </div>

                    <div class="col-lg-12 p-0 mt-2" style="display:flex">
                        {{-- <input class=" mt-2 select-by-checkboxes" style="transform: scale(2); width:15%; " type=checkbox> --}}
                        <label class="" style="width:40%">Ip Type</label>
                        <select id= "ip_select" onchange="$('#search_bar_button').trigger('click')" class=" p-2" name="" id="" style="width:60%">
                            <option value='' selected >All</option>
                            <option value="1">Patent</option>
                            <option value="2">Utility Model</option>
                            <option value="3">Trademark</option>
                            <option value="4">Copyright</option>
                        </select>
                    </div>

                    <div class="col-lg-12 p-0 mt-2 mb-2" style="display:flex">
                        {{-- <input class=" mt-2 select-by-checkboxes" style="transform: scale(2); width:15%; " type=checkbox> --}}
                        <label class="" style="width:40%">Status</label>
                        <select id="status_select" onchange="$('#search_bar_button').trigger('click')" class=" p-2" name="" id="" style="width:60%">
                            <option value="" selected >All</option>
                            <option value="Approved">Approved</option>
                            <option value="Granted">Granted</option>
                            <option value="Withdrawn">Withdrawn</option>
                            <option value="Refused">Refused </option>
                            <option value="On process">On process</option>
                        </select>
                    </div>
                    {{-- <div class="text-center w-100 mt-3"> <button class="btn-success w-75">Refresh <i class="fas fa-search"></i>   </button></div> --}}
                
                </div>
            </div>
            <div class="offset-lg-1 col-lg-8" >
                <div class="row" style="box-shadow:1px 0px 5px #; min-height: 200px; border-radius:0.5rem">
                    
                    <h3 class="p-1" style="width:100%; background:#0892fd; color:white;  text-align:center">Result</h3>
                    {{-- <div id="search_param_box" class="col-lg-12" style="border-bottom:1px ridge #0003">
                        <button> none x</button>
                    </div> --}}
                    <div class="col-lg-12">
                        <div class="mb-2" style="display:flex; align-items: flex-end; justify-content: space-between;  font-size:12px; background:#ddd; justify-content: space-around; flex-wrap: wrap; color:#259; ">
                            <div style="width:170px;">
                                <button type="button" onclick="displayRowsOfIpToTable(rows_of_ip, -1)" value='-1' class='btn_pagination'  style="border-radius: .5rem 0 0 0 ; ">
                                    <i class="fas fa-chevron-left fa-lg"></i>
                                </button>
                                <label type="button" class="m-0">Page 
                                    <b><span id='current_page'>1</span></b> of
                                    <b><span id='page_total'>1</span></b>
                                </label>
                                <button type="button" onclick="displayRowsOfIpToTable(rows_of_ip, 1)" value ='1' class='btn_pagination' style="border-radius: 0 .5rem 0 0 ;">
                                    <i class="fas fa-chevron-right fa-lg"></i> 
                                </button>
                                <input type="text" onchange="displayRowsOfIpToTable(rows_of_ip)" style="width:25px; border:none" id='page_rows_cnt' value='15'/>
                            </div>
                            <div style="width:150px; ">
                                <label class="m-0" style="border-radius:.5rem ; width:;">View By</label>
                                <button type="button " class="view-button" value='1'><i class="fas fa-table"></i></button>
                                <button type="button " class="view-button" value='2'><i class="fas fa-square"></i></button>
                                <button type="button " class="view-button" value='3'><i class="fas fa-prescription-bottle"></i></button>
                            </div>

                            <div id= "quick_search_sort_box" style="width:280px; display:">
                                <label type="button" style="border-radius:.5rem ; width:;">Sort By</label>
                                <select id="tbl_search_sorter" class=" p-2" name="" id="" style="width:60%">
                                    <option value="type_id">IP Type</option>
                                    <option value="doc_code">Document Code</option>
                                    <option value="date_filed">Date Filed</option>
                                    <option value="name">Title</option>
                                    <option value="reg_no">Application No.</option>
                                    <option value="author_r_inventor">Inventors/ Authors</option>
                                    <option value="status">Status</option>
                                    <option value="date_approved">Date Approved/ Granted</option>
                                </select>
                                <button type="button " onclick="$('#tbl_search_sorter').trigger('change', [{}, true]);" 
                                style="border-radius:.5rem ;color:#259; "><i class="fas fa-sort-alpha-down"></i></button>
                                <button type="button " onclick="$('#tbl_search_sorter').trigger('change', [{}, false]);"  
                                style="border-radius:.5rem ;color:#259; "><i class="fas fa-sort-alpha-up"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" style="overflow-y:auto; width:100%; height:500px;">
                        <div class = "view-type" value="1" style="width:98%; background:#ffffff; margin:auto; padding:0; box-shadow:1px 1px 5px #0005;">
                            <table id="tbl_detailed" class="table table-striped table-bordered table-sm" cellspacing="0" style="background:rgb(255, 255, 255)">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>IP Type</th>
                                        <th>Document Code</th>
                                        <th>Date Filed</th>
                                        <th style="min-width:150px;">Title</th>
                                        <th>Application No.</th>
                                        <th style="min-width:150px;">Inventors/ Authors</th>
                                        <th>Status</th>
                                        <th>Date Approved/ Granted</th>
                                        <!-- <th>Date of Expiration</th> -->
                                    </tr>
                               </thead>
                                <tbody id="ip_tbl_body">
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="view-type" value="2" id="ip_search_result_box">
                            <div class="p-3" style="width:100%; font-size:55px; color:#0006; text-align:center">No Results Yet</div>
                        </div>

                        <div class = "view-type" value="3" style="max-height:500px; background:rgb(255, 255, 255); width:90%; margin:auto; display:none">
                            <table id="tbl_title" class="table table-striped table-bordered table-sm" cellspacing="0" >
                                <thead id="ip_tbl_head2">
                                    <tr>
                                        <th>No.</th>
                                        <th>View</th>
                                        <th>Title</th>
                                    </tr>
                               </thead>
                                <tbody id="ip_tbl_body2">
                                   
                                </tbody>
                            </table>
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
        <i class="fa fa-border-all" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
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

@include("ipviewinmodal")
<script>
    console.log("Sample- {{ session()->get('name') }}");
    let rows_of_ip;
    let ip_type; 
    $( document ).ready(function() {
        setInitialsForHome();
    });
    
    $("#tbl_search_sorter").change("Hi Sjay", function(e, json, order){ 
        // alert(e.data + " - show - " + order);
        // console.log(this.value + JSON.stringify(rows_of_ip));
        // alert(this.value);
        let asc;
        order==undefined?asc = true:asc=order;
        //sort algorithm
        for(x=0; x<rows_of_ip.length; x++){
            for(y=x+1; y<rows_of_ip.length; y++){
                if(rows_of_ip[x][this.value] > rows_of_ip[y][this.value] && asc == true){ // for asc
                    let temp = rows_of_ip[y];
                    rows_of_ip[y]= rows_of_ip[x];
                    rows_of_ip[x] = temp;
                } else if(rows_of_ip[x][this.value] < rows_of_ip[y][this.value] && asc == false){ // for desc
                    let temp = rows_of_ip[y];
                    rows_of_ip[y]= rows_of_ip[x];
                    rows_of_ip[x] = temp;
                }
            }
            // rows_of_ip[x].sort(function(a, b){return a[this.value] - b[this.value]});
        }
            displayRowsOfIpToTable(rows_of_ip);
    });
    
    $(".view-button").click(function(){
        let view_no = $(this).val()-1;
        (view_no != 2)?$("#quick_search_sort_box").show():$("#quick_search_sort_box").hide();
        console.log( view_no + ": " + $(this).index()  + " - " + $(".view-type").eq(view_no).index());
        $(".view-button-active").removeClass("view-button-active").addClass('view-button');
        $(this).addClass("view-button-active").removeClass('view-button'); // this is for effects

        $(".view-type").css('display', 'none');
        view_no != 1?$(".view-type").eq(view_no).css("display", "table"):$(".view-type").eq(view_no).css("display", "flex");
    });

    $("#search_bar_button").click( function (e, json, val) {
        // alert('search' + (val!=undefined));
        $('html,body').animate({scrollTop: $("#result_main_box").offset().top}, 1000); // automatically scroll to location
        console.log("Came from search bar");
        let search_word = "%"+$("#search_chars_bar").val()+ "%";
        let ip_type_select = $("#ip_select").val();
        let status = $("#status_select").val();
        let yearfrom = $("#search_yearfrom").val();
        let yearto = $("#search_yearto").val();
        // let page_current_num = (val!=undefined)?parseInt($("#current_page").text())+val:$("#current_page").text();
        // $("#current_page").text((page_current_num<=parseInt($("#page_total").text()) && page_current_num>0)?page_current_num:$("#current_page").text());
        // let page_rows = parseInt($("#page_rows_cnt").val()); //number of rows for each page (limit 0, rows)
        // let start_row = (parseInt($("#current_page").text())-1) * page_rows; //which row will start (limit start, rows)

        /*display the parameter searches
        //....arguments.......
        */

        $.ajax({
            url : "home/search_word",
            method:"POST",
            data:   {
                        'search_word':search_word, 
                        'ip_type': ip_type_select, 
                        'status':status, 
                        'yearfrom':yearfrom, 
                        'yearto':yearto,
                        // 'start_row':start_row,
                        // 'page_rows':page_rows
                    },
            success: function (data) {
                // console.log(data);
                rows_of_ip = JSON.parse(data);
                // console.log(data+ " - success");
                displayRowsOfIpToTable(rows_of_ip);
            },
            error: function (data, textStatus, errorThrown) {
                console.log(JSON.stringify(data) + "error");
            }
        });
    });

    $("#search_param_box button").click(function(){
        $(this).remove();
    });

    function displayRowsOfIpToTable(rows, val){ 

        let page_current_num = (val!=undefined)?parseInt($("#current_page").text())+val:$("#current_page").text();
        $("#current_page").text((page_current_num<=parseInt($("#page_total").text()) && page_current_num>0)?page_current_num:$("#current_page").text());
        let page_rows = parseInt($("#page_rows_cnt").val()); //number of rows for each page (limit 0, rows)
        let start_row = (parseInt($("#current_page").text())-1) * page_rows; //which row will start (limit start, rows)
        let end_row = start_row+page_rows<rows.length?start_row+page_rows:rows.length; // to precise end rows

        $("#page_total").text(Math.ceil(rows.length/page_rows));
        console.log($("#page_total").text() + "-hiyah");
        $("#ip_search_result_box").html("");
        $("#tbl_detailed tbody").html("");
        $("#tbl_title tbody").html("");
        for(x=start_row; x<end_row; x++){
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
                    "<p class='col-sm-7'>"+rows[x].status.replace('&', '<br>')+"</p>"+
                "</div>"+
                "<div class='row'>"+
                    "<p class='col-sm-5'><b>Reg. No:</b></p>"+
                    "<p class='col-sm-7 '>"+rows[x].reg_no+"</p>"+
                "</div>"+
            "</div></div>");

            //for detailed table
            $("#tbl_detailed tbody").append("<tr>"+
                "<td>"+(x+1)+"</td>"+
                "<td>"+ip_type[rows[x].type_id-1]+"</td>"+
                "<td>"+rows[x].doc_code+"</td>"+
                "<td>"+rows[x].date_filed+"</td>"+
                "<td>"+rows[x].name+"</td>"+
                "<td>"+rows[x].reg_no+"</td>"+
                "<td>"+rows[x].author_r_inventor+"</td>"+
                "<td>"+rows[x].status.replace('&', '<br>')+"</td>"+
                "<td>"+rows[x].date_approved+"</td>"+
                // "<td>"+rows[x].+"</td>"+
            +"</tr>");
            
            $("#tbl_title tbody").append("<tr>"+
                "<td>"+(x+1)+"</td>"+
                "<td style='width:85px;'><i class='fas fa-eye m-2' onclick='viewIP("+JSON.stringify(rows[x])+")'></i></td>"+
                "<td>"+rows[x].name+ "</td>"+
            "</tr>");  
        }
        // console.log($("#ip_search_result_box").html());
    }

    function viewIP(ip_data){
        console.log(ip_data);
        $("#btn_open_viewip").trigger('click');
        fillIpData(ip_data);
    }

    function setInitialsForHome(){
            ip_type = ["Patent", "Utility Model",  "Trademark","Copyright"];
            $( ".view-button" ).first().trigger('click');
            $("#search_bar_button").trigger('click');
            $("#home_front_first").css("height", window.innerHeight *.7);
            // $("#home_about").css("min-height", window.innerHeight);
            // $("#search_result_box").css("height", window.innerHeight);
            $("#contact_box").css("margin-top", window.innerHeight*.3 );
            $("#contact_box").css("margin-bottom", window.innerHeight*.3 );
            // $("#checklist_and_forms").css("height", window.innerHeight);
            // $("#graphs_charts_box").css("height", window.innerHeight);
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