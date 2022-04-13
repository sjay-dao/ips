
@include("header")
{{-- @include("home.tabngraph") --}}
<style>
    #ip_trends_box{
        width:100%; border:1px solid black; display:flex; 
        text-align:center; flex-wrap:wrap; flex-direction: row;
        justify-content: center;
    }

    .ip_trends_box_contents{
        height:170px; margin:10px; width:200px; border-radius:1rem; border:1px solid #aaa;
        display:flex; justify-content: center; align-items: center; color:white; cursor:pointer;
    }
</style>

<div id="ip_trends_box" style="">
        <div class="ip_trends_box_contents" style="background:rgb(37, 97, 162); position:relative" >
            <label style="position:absolute; z-index:100; ">
                <h2 id="all_count" style=" font-weight:bolder; font-family:Arial Black">1</h2><br>
                <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">All</h6>
            </label>  
            <i class="fa fa-lightbulb" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </div>
        <div class="ip_trends_box_contents" style="background:rgb(37, 97, 162); position:relative" >
            <label style="position:absolute; z-index:100; ">
                <h2 id="patent_count" style=" font-weight:bolder; font-family:Arial Black">1</h2><br>
                <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Patent</h6>
            </label>  
            <i class="fa fa-lightbulb" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </div>
        <div class="ip_trends_box_contents" style="background:rgb(89, 103, 119)">
            <label for="">
                <h2 id="tm_count" style=" font-weight:bolder; font-family:Arial Black">2</h2><br>
                <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Trademark</h6>
            </label>
            <i class="fa fa-university" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </div>
        <div class="ip_trends_box_contents" style="background:rgb(24, 64, 108)">
            <label for="">
                <h2 id="um_count" style=" font-weight:bolder; font-family:Arial Black">3</h2><br>
                <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Utility Model</h6>
            </label>  
            <i class="fa fa-wrench" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </div>
        <div class="ip_trends_box_contents" style="background:rgb(39, 58, 74)">
            <label for="">
                <h2 id="cr_count" style=" font-weight:bolder; font-family:Arial Black">4</h2><br>
                <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Copyright</h6>
            </label>  
            <i class="fa fa-copyright" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </div>
</div>


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
</script>