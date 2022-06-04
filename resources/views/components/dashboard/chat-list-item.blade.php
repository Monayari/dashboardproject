<li class="clearfix {{$active}}">
    <img src="{{asset($img)}}" alt="avatar">
    <div class="about">
        <div class="name">{{$name}}</div>
        <div class="status">
            <i class="material-icons {{$icon}}">fiber_manual_record</i>
            {{$lastSeen}} </div>
    </div>
</li>
