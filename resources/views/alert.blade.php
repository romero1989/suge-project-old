@if(Session::has('alert_message'))
    <div class="alert alert-info">
        {{ Session::get('alert_message') }}
    </div>
@endif