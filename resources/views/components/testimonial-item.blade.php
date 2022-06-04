<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="testimonials-item {{$active}}">
        <div class="profile">
            <img src="{{asset($img)}}" alt>
        </div>
        <div class="testimonials-content">
            <h3 class="user-name">{{$name}}</h3>
            <span>{{$job}}</span>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
            </ul>
            <p>{{$description}} </p>
        </div>
    </div>
</div>
