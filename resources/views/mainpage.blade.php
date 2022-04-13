@include('header')
@section('title', 'IP - View Table')
{{-- <div id="header" style="position:fixed; top:0; left:0 width:100%; height:30px; background-image: linear-gradient(#975, #Fca);">
    This is header
</div> --}}

{{-- <body style="background:url('{{asset('assets/img/bg1_op.png')}}')"> --}}
 <body>
     @if ($vars->url == 'deadline')
        @include('deadlines.deadline')
    @elseif ($vars->url == 'viewip')
        @include('ips.ipsview')
        @include('ips.ipsadd')
        @include('ipviewinmodal')
    @endif 
    {{-- echo {{ $vars . "- hey look at me"}} --}}
    {{-- @include('ips.ipsview')
    @include('ips.ipsadd') --}}
</body>

@include('footer')
