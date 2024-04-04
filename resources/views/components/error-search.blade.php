@if(session()->has('errorSearch'))
<div class="alert alert-success">
    {{ session('errorSearch') }}
</div>
@endif