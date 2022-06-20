<style>
#ipview_body label, #ipview_body textarea{
    font-size:13px;
}

.modal-text{
    display:none;
}


</style>
<button type="button" id= "btn_open_viewip" class="btn-sm btn-success btn-sm d-none" data-toggle="modal" data-target=".bd-example-modal-xl" >Open view ip</button>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background:orange; ">
                <h5 class="modal-title " >View IP Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class='row m-1' class="modal-body p-3" id="ipview_body">
                <div class='col-lg-4'>  
                    <div style="border:1px solid black; height:400px; background:rgb(237, 243, 255); text-align:center; display:flex;align-items: center; justify-content: center;">
                        <img  class="col-lg-12" src="{{asset('assets/img/upload_img.png')}}" style="height:auto; max-height:100%; max-width:100%; " alt="sample.png" alt="">
                    </div>
                    
                    <div  class="row mt-3">
                        <label class="col-lg-4 font-weight-bold">Name:</label>
                        <label class="col-lg-8 modal-label" id="view_lbl_name"></label>
                        <input class="col-lg-7 modal-text" id="modal_name" type="text" / >
                    </div>
                </div>
                
                <div class='col-lg-4' style="">
                    <div  class="row">
                        <label class="col-lg-5 font-weight-bold">Document code:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_doc_code">FNRI-IPD-TM-000006</label>
                        <input class="col-lg-7 modal-text" id="modal_doc_code" type="text" / >
                    </div>
                    <div  class="row">
                        <label class="col-lg-5 font-weight-bold">Date Filed:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_date_filed">2014-03-10</label>
                        <input class="col-lg-7 modal-text" id="modal_date_filed" type="text" / >
                    </div>
                    <div  class="row">
                        <label class="col-lg-5 font-weight-bold">Registration No.:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_reg_no">4/2014/00002945</label>
                        <input class="col-lg-7 modal-text" id="modal_reg_no" type="text" / >
                    </div>
                    <div  class="row">
                        <label class="col-lg-5 font-weight-bold">Authors/Inventors:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_aut_n_inv">Marie T. Bugas; Julieta Dorado</label>
                        <input class="col-lg-7 modal-text" id="modal_aut_n_inv" type="text" / >
                    </div>
                    <div  class="row">
                        <label class="col-lg-5 font-weight-bold">Status:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_status" >Approved</label>
                        <input class="col-lg-7 modal-text" id="modal_status" type="text" / >
                    </div>
                    <div  class="row">
                        <label class="col-lg-5 font-weight-bold">Date Approved:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_date_approved" >2014-07-10</label>
                        <input class="col-lg-7 modal-text" id="modal_date_approved" type="text" / >
                    </div>

                    <div id="for-trademark-dau">
                        <div  class="row mt-5">
                            <label class="col-lg-5 font-weight-bold">Used for the ff. classes of goods/services:</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_use_for_gns" >sdas</label>
                            <input class="col-lg-7 modal-text" id="modal_use_for_gns" type="text" / >
                        </div>
                        <div  class="row">
                            <label class="col-lg-5 font-weight-bold">First Used On</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_first_use" >2014-07-10</label>
                            <input class="col-lg-7 modal-text" id="modal_first_use" type="text" / >
                        </div>
                        <div  class="row">
                            <label class="col-lg-5 font-weight-bold">5 Labels or Pictures</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_5lbl_or_pic"></label>
                            <input class="col-lg-7 modal-text" id="modal_5lbl_or_pic" type="text" / >
                        </div>
                        <div class="mt-3" style="width:100%;  border:1px solid rgb(171, 170, 170); display:flex; text-align:left;  flex-direction: row; flex-wrap: wrap;" >
                            <div id='outlet_box' class='w-100' style="max-height:110px; overflow:auto;">
                                <div class='row m-2' style='border:1px solid #aaa'>
                                    <div class='col-lg-12'>		
                                        <div class='row'>
                                            <label class='col-sm-5' for=''>Name of Outlet</label>
                                            <label class="col-lg-7 modal-label"></label>
                                            <input class='col-lg-7 modal-text' id='modal_' type='text' / >
                                        </div>
                                    </div>
                                    <div class='col-lg-12'>		
                                        <div class='row'>
                                            <label class='col-sm-5' for=''>Address:</label>
                                            <label class="col-lg-7 modal-label"></label>
                                            <input class='col-lg-7 modal-text' id='modal_' type='text' / >
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class='col-lg-4'style="">
                    <div  class="row mb-2">
                        <label class="col-lg-5 font-weight-bold">Project Title:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_proj_title">Lost</label>
                        <input class='col-lg-7 modal-text' id='modal_proj_title' type='text' / >
                    </div>
                    <div id="view-ip-duration-content-box" style="max-height:300px; overflow:auto">
                        
                    </div>
                    <div  class="row mt-2">
                        <label class="col-lg-5 font-weight-bold">Gross Income:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_gross_amount">N/A</label>
                        <input class='col-lg-7 modal-text' id='modal_gross_amount' type='text' / >
                    </div>

                    <div  class="row mt-2">
                        <label class="col-lg-5 font-weight-bold">PRAISE Award:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_praise">2018 PRAISE</label>
                        <input class='col-lg-7 modal-text' id='modal_praise' type='text' / >
                    </div>

                    <div  class="row mt-2">
                        <label class="col-lg-5 font-weight-bold">NAST Award:</label>
                        <label class="col-lg-7 modal-label" id="view_lbl_nast" >N/A</label>
                        <input class='col-lg-7 modal-text' id='modal_nast' type='text' / >
                    </div>

                    <h5><b>3RD Declaration of Actual Use</b></h5>
                    <div class="col-lg-12">		
                        <div class="row">
                            <label class="col-sm-5" for="">Register No</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_3rd_regno"></label>
                            <input class="col-sm-7 modal-text" type="text" id="modal_3rd_regno"/>
                        </div>
                    </div>
                    <div class="col-lg-12">		
                        <div class="row">
                            <label class="col-sm-5" for="">Status</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_3rd_status"></label>
                            <input class="col-sm-7 modal-text" type="text" id="modal_3rd_status"/>
                        </div>
                    </div>
                    <div class="col-lg-12">		
                        <div class="row">
                            <label class="col-sm-5" for="">Date</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_3rd_date"></label>
                            <input class="col-sm-7 modal-text" type="date" id="modal_3rd_date"/>
                        </div>
                    </div>
                    <h5><b>5TH Declaration of Actual Use</b></h5>
                    <div class="col-lg-12">		
                        <div class="row">
                            <label class="col-sm-5" for="">Register No</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_5th_regno"></label>
                            <input class="col-sm-7 modal-text" type="text" id="modal_5th_reg_no"/>
                        </div>
                    </div>
                    <div class="col-lg-12">		
                        <div class="row">
                            <label class="col-sm-5" for="">Status</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_5th_status"></label>
                            <input class="col-sm-7 modal-text" type="text" id="modal_5th_status"/>
                        </div>
                    </div>
                    <div class="col-lg-12">		
                        <div class="row">
                            <label class="col-sm-5" for="">Date</label>
                            <label class="col-lg-7 modal-label" id="view_lbl_5th_date"></label>
                            <input class="col-sm-7 modal-text" type="date" id="modal_5th_date"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

   
    data = {
        author_r_inventor: "DOST-FNRI submitted by Ms. Jessel May D. Casuga",
        date_approved: "2018-03-15",
        date_filed: "2017-08-07",
        doc_code: "FNRI-IPD-TM-000036",
        duration: "2018-01-01&2018-12-31&",
        first_use: "1970-01-01",
        funding_source: "GF",
        goods_n_services: "none",
        id: 25,
        income_gross: "N/A",
        name: "Proficiency Testing Logo",
        nast_award: "not yet",
        outlet: "Sample1&Sample2",
        outlet_address: "Add1&add2",
        pic_n_lbl: "none",
        praise_award: "2018",
        project_cost: "100000.00",
        project_title: "Improvement/Updating of E-Access Portal for the FNRI Existing Reference Materials and Proficiency Testing Schemes (Continuing)",
        reg_no: "04-2017-00012565",
        regno_3rd_dou: "none",
        regno_5th_dou: "none",
        status: "Approved&",
        status_3rd_dou: "none",
        status_5th_dou: "none",
        status_renewal: "none",
        type_id: 3
    }
    // fillIpData(data);

    $("#btn_open_viewip").click(function(e, json, val){
        if(val == 'edit'){
            $(".modal-label").hide();
            $(".modal-text").show();
        }else{
            $(".modal-label").show();
            $(".modal-text").hide();
        }
    });

    function fillIpData(row){
        // console.log(row);
        $("#view_lbl_name").text(row.name);
        $("#view_lbl_doc_code").text(row.doc_code);
        $("#view_lbl_date_filed").text(row.date_filed);
        $("#view_lbl_reg_no").text(row.reg_no);
        $("#view_lbl_aut_n_inv").text(row.author_r_inventor);
        $("#view_lbl_status").text(row.status);
        $("#view_lbl_date_approved").text(row.date_approved);
        $("#view_lbl_use_for_gns").text(row.goods_n_services);
        $("#view_lbl_first_use").text(row.first_use);
        $("#view_lbl_5lbl_or_pic").text(row.pic_n_lbl);
        $("#view_lbl_proj_title").text(row.project_title);
        $("#view_lbl_gross_amount").text(row.income_gross);
        $("#view_lbl_praise").text(row.praise_award);
        $("#view_lbl_nast").text(row.nast_award);
        $("#view_lbl_3rd_regno").text(row.regno_3rd_dou);
        $("#view_lbl_3rd_date").text(row.date_3rd_dou + " ");
        $("#view_lbl_3rd_status").text(row.status_3rd_dou + " ");
        $("#view_lbl_5th_regno").text(row.regno_5th_dou);
        $("#view_lbl_5th_date").text(row.date_5th_dou+ " ");
        $("#view_lbl_5th_status").text(row.status_5th_dou);

        //for label
        $("#modal_name").val(row.name);
        $("#modal_doc_code").val(row.doc_code + "dkas dw ");
        $("#modal_date_filed").val(row.date_filed);
        $("#modal_reg_no").val(row.reg_no);
        $("#modal_aut_n_inv").val(row.author_r_inventor);
        $("#modal_status").val(row.status);
        $("#modal_date_approved").val(row.date_approved);
        $("#modal_use_for_gns").val(row.goods_n_services);
        $("#modal_first_use").val(row.first_use);
        $("#modal_5lbl_or_pic").val(row.pic_n_lbl);
        $("#modal_proj_title").val(row.project_title);
        $("#modal_gross_amount").val(row.income_gross);
        $("#modal_praise").val(row.praise_award);
        $("#modal_nast").val(row.nast_award);
        $("#modal_3rd_regno").val(row.regno_3rd_dou);
        $("#modal_3rd_date").val(row.date_3rd_dou + " ");
        $("#modal_3rd_status").val(row.status_3rd_dou + " ");
        $("#modal_5th_regno").val(row.regno_5th_dou);
        $("#modal_5th_date").val(row.date_5th_dou+ " ");
        $("#modal_5th_status").val(row.status_5th_dou);

        let outlets = row.outlet.split("&");
        let outlet_address = row.outlet_address.split("&");
        x=0;
        $("#outlet_box").html("");
        outlets.forEach(function (item) {   
            $("#outlet_box").append(
            "<div class='row m-2' style='border:1px solid #aaa'>"+
                    "<div class='col-lg-12'>		"+
                        "<div class='row'>"+
                            "<label class='col-sm-5' for=''>Name of Outlet</label>"+
                            "<label class='col-lg-'>"+item+"</label>"+
                        "</div>"+
                    "</div>"+
                    "<div class='col-lg-12'>		"+
                        "<div class='row'>"+
                            "<label class='col-sm-5' for=''>Address:</label>"+
                            "<label class='col-lg-7'>"+outlet_address[x]+"</label>"+
                        "</div>"+
                    "</div>"+
                "</div>"
            );
            x++;
        });

        let durations = row.duration.split("^");
        let cost = row.project_cost.split("&");
        let source = row.funding_source.split("&");
        x=0;
        durations.forEach(function (item) {   
            let content = item.split("&");
            $("#view-ip-duration-content-box").append(
                "<div class='row project-info-set mb-3 p-2 ' style='box-shadow:1px 1px 3px #000a; width:95%; margin:auto; line-height:1.1'>"+
                                "<div class='col-lg-12'>"+
                                    "<div class='row'>"+
                                        "<label class='col-sm-12 pb-2' for=''>Project Duration</label>"+
                                        "<label class='col-sm-4 ' for=''>From</label>"+
                                        "<label class='col-sm-8 ' type='date' >"+content[0]+"</label>"+
                                        "<label class='col-sm-4 '>To</label>"+
                                        "<label class='col-sm-8 ' type='date' >"+content[1]+"</label>"+
                                        "<textarea class='offset-md-4 col-sm-8' name='' id='' rows='3' class='' "+
                                        "style='border:1px solid #0003' placeholder='Additional info/comments to describe Project Duration(Optional)' >"+content[2]+"</textarea>"+
                                    "</div>"+
                                "</div>"+
                                "<div class='col-lg-12'>"+
                                    "<div class='row'>"+
                                        "<label class='col-sm-5' for=''>Project Cost</label>"+
                                        "<label class='col-lg-7'>"+cost[x]+"</label>"+
                                    "</div>"+
                                "</div>"+
                                "<div class='col-lg-12'>"+
                                    "<div class='row'>"+
                                        "<label class='col-sm-5' for=''>Funding Source</label>"+
                                        "<label class='col-lg-7'>"+source[x]+"</label>"+
                                    "</div>"+
                                "</div>"+
                            "</div> "
            );
            x++;
        });

    }
</script>