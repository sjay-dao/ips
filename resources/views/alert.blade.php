<div class="alert alert-danger">
    <div class="alert-title">{{ $title }}</div>
    
    {{ $slot }} 
    {{ $name}}
    {{ $date ." = " . date("Y-m-d H:i:s")}}
</div>