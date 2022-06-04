<div class="cover" data-image="assets/images/photos/parallax-counter.jpg">
    <div class="page-top">
        <div class="container">
            <div class="row">

                    @if(Request::RouteIs('blog-single'))
                    <div class="offset-lg-3 col-lg-6">
                        @yield('head')
                    </div>

                @else
                <div class="col-lg-12">
                    @yield('head')
                </div>

                @endif
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><a href="blue-index.html" class="home"><i class="fa fa-home"></i></a></li>
                @yield('text')
            </ol>
        </div>
 </div>
        </div>
    </div>
</div>
