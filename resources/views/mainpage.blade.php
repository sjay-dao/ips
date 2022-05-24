@include('header')
@section('title', 'IP - View Table')
@if(session()->get('login_ips_enabled') != 1)
    @include("login")
@else 
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
@endif
