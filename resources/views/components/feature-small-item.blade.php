@foreach($items as $item)
<div class="col-lg-6 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
    <a href="blue-features-single.html " class="features-small-item {{ $item["property"] }}">
        <div class="icon">
            <i class="fa {{ $item["iconClass"] }}"></i>
        </div>
        <h5 class="features-title">{{ $item["title"] }}</h5>
        <p>{{ $item["description"] }}</p>
    </a>
</div>
@endforeach
