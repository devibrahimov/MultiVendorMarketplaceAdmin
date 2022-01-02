

@if(session()->has('feedback'))
    @php
        $feedback =  session()->get('feedback') ;
    @endphp
    <div class="alert alert-{{ $feedback['type']}} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ $feedback['title']}} <br>
        {{ $feedback['message']}}
    </div>

@endif
