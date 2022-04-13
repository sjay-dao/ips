<style>
.modal-content input, .modal-content label, .modal-content select, .modal-content textarea{
    font-size: 12px;
}


</style>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">
        <div class="modal-header" style="background:orange; ">
            <h5 class="modal-title " >IP Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="form-submit-ip" class="modal-body p-3">
            <div class="row form-group">
                <label class="col-sm-6" for="exampleFormControlSelect1">IP Type</label>
                <select class="col-sm-5 form-control" id="type_id">
                    <option value='' disabled selected>Select Intellectual Property</option>
                    <option value="1">Patent</option>
                    <option value="2">Utility Model</option>
                    <option value="3">Trademark</option>
                    <option value="4">Copyright</option>
                </select>
            </div>
            <div class="row form-group">
                <label class="col-sm-6" for="">Technology Name</label>
                <input class="col-sm-5 form-control" type="text" id="name"/>
            </div>
            <div class="row form-group">
                <label class="col-sm-6" for="">Document Code</label>
                <input class="col-sm-5 form-control" type="text" id="doc_code"/>
            </div>

            <div class="row form-group">
                <label class="col-sm-6" for="">Registration No</label>
                <input class="col-sm-5 form-control" type="text" id="reg_no"/>
            </div>

            <div class="row form-group">
                <label class="col-sm-6" for="">Date Filed</label>
                <input class="col-sm-5 form-control" type="date" id="date_filed"/>
            </div>

            <div class="row form-group">
                <label class="col-sm-6" for="">Author/Inventor</label>
                <textarea class="col-sm-5 form-control" rows=3 id="author_r_inventor"></textarea>
            </div>

            <div class="row form-group">
                <label class="col-sm-6" for="">Status</label>
                <input class="col-sm-5 form-control" type="text" id="status"/>
                <textarea class='offset-sm-6 col-sm-5' name='' id='status_comment' rows='2' class='' style='border:1px solid #0003' placeholder='Additional info/comments' ></textarea>
            </div>

            <div class="row form-group">
                <label class="col-sm-6" for="">Date Approved</label>
                <input class="col-sm-5 form-control" type="date" id="date_approved"/>
            </div>

            <div class="row form-group">
                <label class="col-sm-6" for="">Project Title</label>
                <textarea class='col-sm-5 form-control' name='' id='project_title' rows='2' class='' style='border:1px solid #0003' placeholder='Additional info/comments' ></textarea>
            </div>
            
            <div class="row form-group">
                <label class="col-sm-6" for="">Income Gross</label>
                <input class="col-sm-5 form-control" type="text" id="income_gross"/>
            </div>

           
            <div class="row m-0" style="width:100%; min-height:200px; max-height:400px; border:1px solid rgb(171, 170, 170); display:flex; text-align:left; overflow-y:auto; flex-direction: row; flex-wrap: wrap;">
                <div id="project_detail_extension_box" >
                    <div class='row project-info-set mb-3 p-2 ' style='box-shadow:1px 1px 3px #000a; width:95%; margin:auto'>
                        <button type=button class='offset-sm-11 col-sm-1 project-info-set-close' onclick='' style='background:transparent; color:red; border:none'>O</button>
                        <div class='col-lg-12'>
                            <div class='row'>
                                <label class='col-sm-4' for=''>Project Duration</label>
                                <input class='col-sm-4 form-control duration_from' type='date' id=''/>
                                <input class='col-sm-4 form-control duration_to' type='date' id=''/>
                                <textarea class='col-sm-12 duration_comment' name='' id='' rows='2' class='' style='border:1px solid #0003' placeholder='Additional info/comments to describe Project Duration(Optional)' ></textarea>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='row'>
                                 <label class='col-sm-5' for=''>Project Cost</label>
                                 <input class='col-sm-7 form-control project_cost num-n-dec' type='text' id=''/>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='row'>
                                 <label class='col-sm-5' for=''>Funding Source</label>
                                 <input class='col-sm-7 form-control funding_source' type='text' id=''/>
                            </div>
                        </div>
                    </div> 
                </div>
                <button type="button" class="btn-sm btn-success mb-3" id="btn_add_extension" style=" width:90%; margin:auto"> Add for another Project Extension</button>
            </div>
            
            <div class="row form-group mt-3">
                <label class="col-sm-6" for="">DOST-NAST year:</label>
                <input class="col-sm-5 form-control" type="text" placeholder = "type not yet if not awarded" id="is_nast"/>
            </div>

            <div class="row form-group">
                <label class="col-sm-6" for="">PRAISE year:</label>
                <input class="col-sm-5 form-control" type="text" placeholder = "type not yet if not awarded" id="is_praise"/>
            </div>
            
            

            <div class="row form-group p-2" id="tm-dau-form" style="display:none; border:1px solid #aaa">
                <div class="col-lg-12" >
                    <div class="row">
                        <label class="col-sm-6" for="">Used for the ff. classes of goods/services</label>
                        <textarea class='col-sm-5 ' id='goods_n_services' rows='2' class='' style='border:1px solid #0003' placeholder='' ></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <label class="col-sm-6" for="">First Used On</label>
                        <input class="col-sm-5 " type="date" id="first_use"/>
                    </div>
                </div>
                <div class="col-lg-12">		
                    <div class="row">
                        <label class="col-sm-6" for="">5 Labels or Pictures</label>
                        <input class="col-sm-5" type="text" id="pic_n_lbl"/>
                    </div>
                </div>
                <div class="mt-3" style="width:100%;  border:1px solid rgb(171, 170, 170); display:flex; text-align:left;  flex-direction: row; flex-wrap: wrap;" >
                    <div id='outlet_box' class='w-100' style="min-height:150px; max-height:250px; overflow:auto;">
                        <div class='row m-2' style='border:1px solid #aaa'>
                            <button type=button class='offset-sm-11 col-sm-1 project-info-set-close' onclick='' style='background:transparent; color:red; border:none'>O</button>
                            <div class='col-lg-12'>		
                                <div class='row'>
                                    <label class='col-sm-6' for=''>Name of Outlet</label>
                                    <input class='col-sm-6 outlet' type='text'/>
                                </div>
                            </div>
                            <div class='col-lg-12'>		
                                <div class='row'>
                                    <label class='col-sm-6' for=''>Address</label>
                                    <textarea class='col-sm-6 outlet_address' rows='2' class='' style='border:1px solid #0003' placeholder='' ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-sm btn-success mb-3" id="btn_add_outlet" style=" width:90%; margin:auto"> Add more Outlet</button>
                </div>
            </div>

            <div class="row form-group">
                <button id="btn_submitIP" type="button" class="btn-lg btn-success col-md-3 offset-md-3" data-toggle="modal" >Add</button>
                <button id = "tbn_exit_modal_ipadd" type="button" class="btn-lg btn-danger col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg">Exit</button>
                <button id = "view_values" type="button" class="btn-lg btn-danger col-md-3 d-" >Exit</button>
            </div>
        </form>
    </div>
  </div>
</div>

<script>
    duration_string = ""; project_string = ""; funding_string = ""; outlet_string = ""; address_string = "";

    $("#type_id").change(function(){
        if(this.value == 3)
            $("#tm-dau-form").show();
        else
        $("#tm-dau-form").hide();
    });

    $("#btn_submitIP").click(function(){
        let type_id = ($("#type_id").val() == '')?'-1':$("#type_id").val();
        let doc_code = ($("#doc_code").val() == '')?"none":$("#doc_code").val();
        let date_filed = ($("#date_filed").val() == '')?"none":$("#date_filed").val();
        let name = ($("#name").val() == '')?"none":$("#name").val();
        let reg_no = ($("#reg_no").val() == '')?"none":$("#reg_no").val();
        let author_r_inventor = ($("#author_r_inventor").val() == '')?"none":$("#author_r_inventor").val();
        let status = ($("#status").val() == '')?"none":$("#status").val() + "&" + $("#status_comment").val();
        let date_approved = ($("#date_approved").val() == '')?"none":$("#date_approved").val();
        let project_title = ($("#project_title").val() == '')?"none":$("#project_title").val();
        let nast_award = ($("#is_nast").val() == '')?"none":$("#is_nast").val();
        let praise_award = ($("#is_praise").val() == '')?"none":$("#is_praise").val();
        // let duration = (($("#duration_from").val() == '')?"none":$("#duration_from").val()) + "-" + ($("#duration_to").val() == '')?"none":$("#duration_to").val();
        // let project_cost = ($("#project_cost").val() == '')?"none":$("#project_cost").val();
        // let funding_source = ($("#funding_source").val() == '')?"none":$("#funding_source").val();
        let income_gross = ($("#income_gross").val() == '')?"none":$("#income_gross").val();
        
        //data for TM DAU
        let goods_n_services = ($("#goods_n_services").val() == '')?"none":$("#goods_n_services").val();
        let first_use = ($("#first_use").val() == '')?null:$("#first_use").val();
        // let outlet = ($("#outlet").val() == '')?"none":$("#outlet").val();
        // let outlet_address = ($("#outlet_address").val() == '')?"none":$("#outlet_address").val();
        let pic_n_lbl = ($("#pic_n_lbl").val() == '')?"none":$("#pic_n_lbl").val();


        console.log(type_id + name + doc_code);
        //get all duration from
        let duration = ($( ".duration_from" ).first().val() == '')?"none":'';
        $( ".duration_from" ).each(function( i ) {
            duration += this.value + "&" + $(".duration_to")[i].value + "&" + $(".duration_comment")[i].value + "^";
        });
            duration = duration.slice(0,-1);
        // get all project_cost
        let  project_cost = ($( ".project_cost" ).first().val() == '')?"none":'';
        $( ".project_cost" ).each(function( i ) {
            project_cost += this.value + "&" ;
        });
        project_cost = project_cost.slice(0,-1);
        //get all funding_source
        let funding_source = ($( ".funding_source" ).first().val() == '')?"none":'';
        $( ".funding_source" ).each(function( i ) {
            funding_source += this.value + "&" ;
        });
            funding_source = funding_source.slice(0,-1);
        
          //get all outlet
          let outlet = ($( ".outlet" ).first().val() == '')?"none":'';
        $( ".outlet" ).each(function( i ) {
            outlet += this.value + "&" ;
        });
        outlet = outlet.slice(0,-1);
        //get all address_string
        let outlet_address = ($( ".outlet_address" ).first().val() == '')?"none":'';
        $( ".outlet_address" ).each(function( i ) {
            outlet_address += this.value + "&" ;
        });
        outlet_address = outlet_address.slice(0,-1);

        let is_valid = true;
        $( ".form-control" ).each(function( index ) {
            console.log( index + ": " + $( this ).text() );
            $( this ).css('background', 'none');
            if(this.value == ''){
                console.log($( this ).prop('id') + " - missing field");
                $( this ).css('background', '#faaa');
                is_valid = false;
                // return 0;
            }
        });
        if(is_valid){
            $.ajax({
                    url : "ips/submit",
                    method:"POST",
                    data: {
                        // "_token": "{{ csrf_token() }}",
                        "type_id": type_id,
                        "doc_code":doc_code,
                        "date_filed":date_filed,
                        "name":name,
                        "reg_no":reg_no,
                        "author_r_inventor":author_r_inventor,
                        "status":status,
                        "date_approved":date_approved,
                        "project_title":project_title,
                        "duration":duration,
                        "project_cost":project_cost,
                        "funding_source":funding_source,
                        "income_gross":income_gross,
                        "praise_award":praise_award,
                        "nast_award":nast_award,
                        "goods_n_services":goods_n_services,
                        "first_use":first_use,
                        "pic_n_lbl":pic_n_lbl,
                        "outlet":outlet,
                        "outlet_address":outlet_address,
                        // _token: "{{ csrf_token() }}",
                    },
                    dataType: "JSON",
                    success: function (data) {
                    $("#tbn_exit_modal_ipadd").trigger('click');
                    console.log(data);
                    alert("IP is successfully added!");
                    location.reload();
                    },
                    error: function (data, textStatus, errorThrown) {
                        console.log(data.responseText);

                    },
                });
        }

        else{
            alert("There's a missing input");
        }
    });

    $("#btn_add_extension").click(function(){
        $("#project_detail_extension_box").append(
        "<div class='row project-info-set mb-3 p-2' style='box-shadow:1px 1px 3px #000a; width:95%; margin:auto' >"+
                        "<button type=button class='offset-sm-11 col-sm-1' onclick='deleteExtensionForm(this)' style='background:transparent; color:red; border:none'>X</button>"+
                        "<div class='col-lg-12'>"+
                            "<div class='row'>"+
                                "<label class='col-sm-4' for=''>Project Duration</label>"+
                                "<input class='col-sm-4 form-control duration_from' type='date' />"+
                                "<input class='col-sm-4 form-control duration_to' type='date' id=''/>"+
                                "<textarea class='col-sm-12 duration_comment' name='' id='' rows='2' style='border:1px solid #0003' class='' placeholder='Additional info/comments to describe Project Duration(Optional)' ></textarea>"+
                            "</div>"+
                        "</div>"+
                        "<div class='col-lg-12'>"+
                            "<div class='row'>"+
                                "<label class='col-sm-5' for=''>Project Cost</label>"+
                                "<input class='col-sm-7 form-control project_cost num-n-dec' type='text' />"+
                            "</div>"+
                        "</div>"+
                        "<div class='col-lg-12'>"+
                            "<div class='row'>"+
                                "<label class='col-sm-5' for=''>Project Source</label>"+
                                "<input class='col-sm-7 form-control funding_source' type='text' id=''/>"+
                            "</div>"+
                        "</div>"+
            "</div>"
        )
    });
    $("#btn_add_outlet").click(function(){
        $("#outlet_box").append(
            "<div class='row m-2' style='border:1px solid #aaa'>"+
                "<button type=button class='offset-sm-11 col-sm-1 project-info-set-close' onclick='deleteOutletForm(this)' style='background:transparent; color:red; border:none'>X</button>"+
                    "<div class='col-lg-12'>	"+	
                            "<div class='row'>"+
                                "<label class='col-sm-6' for=''>Name of Outlet</label>"+
                                "<input class='col-sm-5 outlet' type='text'/>"+
                            "</div>"+
                        "</div>"+
                        "<div class='col-lg-12'>		"+
                            "<div class='row'>"+
                                "<label class='col-sm-6' for=''>Address</label>"+
                                "<textarea class='col-sm-5 outlet_address'  rows='2' class='' style='border:1px solid #0003' placeholder='' ></textarea>"+
                            "</div>"+
                        "</div>"+
                    "</div>"
        )
    });
    

    $("#view_values").click(function(){
        duration_string = "none";
        $( ".duration_from" ).each(function( i ) {
            duration_string += this.value + "&" + $(".duration_to")[i].value + "&" + $(".duration_comment")[i].value + "^";
            if(this.value == ''){
                console.log($( this ).prop('id') + " - missing field");
                is_valid = false;
                // return 0;
            }
        });
         // get all project_cost
         let  project_string = "";
        $( ".project_cost" ).each(function( i ) {
            project_string += this.value + "&" ;
        });

        //get all funding_source
        let funding_string = "";
        $( ".funding_source" ).each(function( i ) {
            funding_string += this.value + "&" ;
        });

        //get all outlet
        let outlet_string = "";
        $( ".outlet" ).each(function( i ) {
            outlet_string += this.value + "&" ;
        });
        outlet_string = outlet_string.slice(0,-1);
        //get all address_string
        let address_string = "";
        $( ".outlet_address" ).each(function( i ) {
            address_string += this.value + "&" ;
        });
        address_string = address_string.slice(0,-1);
        // alert(duration_string);
        // alert(project_string);
        // alert(funding_string);
        // alert(address_string);
        // alert(outlet_string);
        alert( $( "#date_filed" ).val());

    });

   
   function deleteExtensionForm(this_object){
        let parent = $(this_object).parent();
        $(parent).remove();
   }

   function deleteOutletForm(this_object){
        let parent = $(this_object).parent();
        $(parent).remove();
   }

   //for only numbers and decimals allowed
   $(".num-n-dec").keydown(function (event) {
    if (event.shiftKey == true) {
        event.preventDefault();
    }

    if ((event.keyCode >= 48 && event.keyCode <= 57) || 
        (event.keyCode >= 96 && event.keyCode <= 105) || 
        event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
        event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

    } else {
        event.preventDefault();
    }

    if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
        event.preventDefault(); 
    //if a decimal has been added, disable the "."-button

    });
</script>