@if(Session::has('flash_message'))
<div id="flash_message" class="alert alert-success">
    {{ Session::get('flash_message') }}
</div>
@endif
