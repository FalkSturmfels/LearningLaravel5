@if(Session::has('flash_message'))
    <div class="alert alert-success {{Session::has('flash_message_important') ? "alert-important" : ""}}
            fade in">
        @if(Session::has('flash_message_important'))
            <button class="close" data-dismiss="alert" aria-label="close" aria-hidden="true">&times;</button>
        @endif
        {{session("flash_message")}}
    </div>
@endif