@if(session()->has('error'))
<div class="alert alert-success">
    {{ session('error') }}
</div>
@endif
