@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {!! session('success')  !!}
    </div> 
@endif
