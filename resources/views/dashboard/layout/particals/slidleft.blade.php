<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <div class="sidebar-profile clearfix">
                    <div class="profile-img">
                        <img src="{{asset('/images/dashboard/usrbig.jpg')}}" alt="profile">
                    </div>
                    <div class="profile-info">
                        <h3>آرش خادملو</h3>
                        <p>خوش آمدید !</p>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{route('dashboard.index')}}">
                    <i class="menu-icon ti-home"></i>
                    <span>خانه</span>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.profile.index')}}">پروفایل</a>

            </li>


            <li class="active">
                <a href="{{route('dashboard.chat.index')}}">

                    <i class="menu-icon ti-comment"></i>
                    <span>چت</span>
                </a>

            <li>
                <a href="{{route('dashboard.portfolio.index')}}">

                    <i class="menu-icon ti-briefcase"></i>
                    <span>نمونه کارها</span>
                </a>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <span>مدیریت محتوا</span>
                </a>
                <ul class="ml-menu">
				 @can('ismodir')
                    <li>
                        <a href="{{route('projects.index')}}">مدیریت پروژه ها</a>
                    </li>
                    <li>
                        <a href="{{route('tags.index')}}">مدیریت تگ ها</a>
                    </li>
                    <li>
                        <a href="{{route('categories.index')}}"> مدیریت دسته بندی ها</a>
                    </li>
  @endcan
@can('isadmin')

  <li>
                        <a href="{{route('projects.index')}}">مدیریت پروژه ها</a>
                    </li>
                    <li>
                        <a href="{{route('tags.index')}}">مدیریت تگ ها</a>
                    </li>
                    <li>
                        <a href="{{route('categories.index')}}"> مدیریت دسته بندی ها</a>
                    </li>
					
					@endcan
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-shopping-cart-full"></i>
                    <span>فروشگاه</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('dashboard.product.index')}}">محصولات</a>
                    </li>


                </ul>
            </li>

            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-user"></i>
                    <span>مدیریت کاربران</span>
                </a>
                <ul class="ml-menu">
                    @can('ismodir')
                        <li>
                            <a href="{{route('architects.list')}}">معمار</a>
                        </li>

                        <li>
                            <a href="{{route('users.list')}}">کاربر</a>
                        </li>


                        <li>
                            <a href="{{route('admins.list')}}">ادمین</a>
                        </li>


                    @endcan

                    @can('isadmin')
                        <li>
                            <a href="{{route('architects.list')}}">معمار</a>
                        </li>

                        <li>
                            <a href="{{route('users.list')}}">کاربر</a>
                        </li>
                    @endcan

                  <!--@can('isuser')
                        <li>
                            <a href="{{route('user.index')}}">کاربر</a>
                        </li>
                    @endcan

                    @can('isarchitect')
                        <li>
                            <a href="{{route('user.index')}}">معمار</a>
                        </li>
                    @endcan-->

</ul>
            </li>


        </ul>
    </div>
    <!-- #Menu -->
</aside>
