<div class="col-md-3 col-sm-6">
    <div class="product-grid">
        <div class="product-image">
            <a href="#">
                <img class="pic-1" src="{{$img1}}" alt>
                <img class="pic-2" src="{{$img2}}" alt>
            </a>
            <ul class="social">
                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a></li>
                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i class="fa fa-shopping-bag"></i></a></li>
                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
            <span class="product-new-label">حراج</span>
            <span class="product-discount-label">{{$percent}}</span>
        </div>
        <ul class="rating">
            @for($counter=1 ; $counter<=(int)$stars ; $counter++)
                <li class="fa fa-star"></li>
            @endfor
            @for($counter=1; $counter <= 5-(int)$stars ; $counter++)
                <li class="fa fa-star disable"></li>
            @endfor

        </ul>
        <div class="product-content">
            <h3 class="title"><a href="#">{{$name}}</a></h3>
            <div class="price">{{$price}}
                <span>{{$offPrice}}</span>
            </div>
            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
        </div>
    </div>
</div>
