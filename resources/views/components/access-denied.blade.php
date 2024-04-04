@if(session()->has('access.denied'))
<div class="alert alert-success">
    {{ session('access.denied') }}
</div>
@endif
