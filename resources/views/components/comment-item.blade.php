<li>
    <div class="avatar">
        <img src="{{asset($img)}}" alt>
    </div>
    <div class="comment-content">
        <div class="comment-by">
            <strong>{{$name}}</strong>
            <span>{{$date}}</span>
            <a href="#" class="btn-reply"><i class="fa fa-reply"></i> پاسخ</a>
        </div>
        <p>{{$content}}</p>
    </div>
</li>
