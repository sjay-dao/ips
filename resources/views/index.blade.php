@include('header')
@include('home')
@php $records = [1,2,3];
@endphp

<style>
    .home{
        border-bottom:1px solid white;
    }

    @media only screen and (max-width: 800px) {
        #logo_label div{
            font-size:50%

        }
    }

    @media only screen and (max-width: 400px) {
        #logo_label div{
            font-size:30%
        }
    }

    
    #standard-footer a:hover{ text-decoration: underline;}
</style>

<style type="text/css" scoped="" style="display:none;">
    
    #standard-footer .row{ width: 100%; margin:0 auto}
    #standard-footer body, #standard-footer div, #standard-footer dl, #standard-footer dt, #standard-footer dd, #standard-footer ul, #standard-footer ol, #standard-footer li, #standard-footer h1, #standard-footer h2, #standard-footer h3, #standard-footer h4, #standard-footer h5, #standard-footer h6, #standard-footer pre, #standard-footer form, #standard-footer p, #standard-footer blockquote, #standard-footer th, #standard-footer td { font-size: 1rem; font-size: inherit; }
    #standard-footer{ color: rgb(0, 0, 0); padding: 1.25rem 0; font-size: .7rem;}
    #standard-footer h1, #standard-footer h2, #standard-footer h3, #standard-footer h4, #standard-footer h5, #standard-footer h6{ color: rgb(0, 0, 0);}
    #standard-footer ul{ list-style: none; margin: 0; padding: 0;}
    #standard-footer ul li{}
    #standard-footer ul li a{ color: rgb(0, 0, 0);}
    #standard-footer ul li a:hover{ text-decoration: underline;}
    #standard-footer h4 {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.9em;
    }
    </style>

@section("title", "IP - Index")


{{-- 


@if (count($records) == 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

@foreach($ips as $ip)
    <li> {{$ip->name}} </li>
@endforeach


@component('alert', ["name"=>"IP System", "date"=>date("Y-m-d H:i:s")])
kipas dpoiash do;asihn
    @slot('title')
       This is the title
    @endslot
 dasdash dwpiahe dwao;ihd wa
@endcomponent --}}



<div id="standard-footer" style="background-image:linear-gradient(to bottom,#55b6ff, #0892fd);">
    <div class="row ">
        <div class="col-lg-4 mt-5">
            <div class="row">
                <div class="col-lg-3" style="text-align:center">
                    <img src="{{asset('assets/img/dost.png')}}" style="height:auto; max-height:100px; max-width:100px; " alt="sample.png" alt="">
                </div>
                <div class="col-lg-9" id="logo_label" style="display:flex; flex-wrap: wrap; align-content: flex-start; font-size:75%; line-height:1.6">
                    <div style="font-size:11px;  font-weight:bold; width:100%; background:">Republic of the Philippines</div>
                    <div style="font-size:11px;  font-weight:bold; width:100%;  decoration:none"><b><a href="https://www.dost.gov.ph/">Department of Science and Technology</a></b></div>
                    <div style="font-size:14px; color:#1e4b6d; font-weight:bolder; width:100%; "> <a href="https://i.fnri.dost.gov.ph/"><b>Food and Nutrition Research Institute</a></b></div>
                    <div style="font-size:10px;  font-weight:bold; width:100%;">General Santos Avenue, Bicutan, Taguiug City, Philippines</div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row" >
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-5" style="padding-top:20px;">
                            <center>
                        <img src="{{asset('assets/img/gov_logo.png')}}" style="height: auto;max-height: 100px; max-width: 100px;"></center>
                        </div>
                        <div class="col-lg-7" style="padding-top:20px;">
                        <h4>Republic of the Philippines</h4>
                        <p>All content is in the public domain unless otherwise stated.</p>
                        <!-- <p>Privacy Policy</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1 offset-md-1 " style="padding-top:20px;">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                    <h4>About GOVPH</h4>
                    <p style="word-break: break-all;">Learn more about the Philippine government, its structure, how government works and the people behind it.</p>
                    <ul>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="gov.ph" href="http://www.gov.ph/">GOV.PH</a></li>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="data.gov.ph" href="http://www.gov.ph/data">Open Data Portal</a></li>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="officialgazette" href="http://www.officialgazette.gov.ph">Official Gazette</a></li>
                    </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1 offset-md-1 ">
                    <h4>Government Links</h4>
                    <ul>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="president.gov.ph" href="http://president.gov.ph/">Office of the President</a></li>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="ovp.gov.ph" href="http://ovp.gov.ph/">Office of the Vice President</a></li>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="www.senate.gov.ph" href="http://www.senate.gov.ph/">Senate of the Philippines</a></li>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="www.congress.gov.ph" href="http://www.congress.gov.ph/">House of Representatives</a></li>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="sc.judiciary.gov.ph" href="http://sc.judiciary.gov.ph/">Supreme Court</a></li>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="ca.judiciary.gov.ph" href="http://ca.judiciary.gov.ph/">Court of Appeals</a></li>
                        <li><a ga-on="click" ga-event-category="External Links" ga-event-action="sb.judiciary.gov.ph" href="http://sb.judiciary.gov.ph/">Sandiganbayan</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>