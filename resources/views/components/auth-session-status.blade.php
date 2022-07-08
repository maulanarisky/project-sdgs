@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {!! session('success')  !!}
    </div> 
@elseif (session()->has('warning'))
    <div class="alert alert-warning col-lg-12" role="alert">
        {!! session('warning')  !!}
    </div> 
@endif
