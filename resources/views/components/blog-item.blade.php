@if(Request::routeIs('blog.index'))
    @php $col = 6 ; @endphp
@else
@php $col = 4 ; @endphp
@endif

<div class="col-lg-{{$col}} col-md-6 col-sm-12">
    <div class="blog-post-thumb">
        <div class="img">
            <img src="{{asset($img)}}" alt>
            {{ $slot }}
        </div>
        <div class="post-content">
            <h3>
                <a href="{{$href}}">{{$title}}</a>
            </h3>
            <div class="text">
                {{$description}}
            </div>
            <a href="{{$href}}" class="dark-btn">ادامه مطلب</a>
        </div>
    </div>
</div>
