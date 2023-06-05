@extends('admin.layout1.master')
@section('content')
    <!--*******************
            Preloader start
        ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <!--*******************
            Preloader end
        ********************-->


    <!--**********************************
            Main wrapper start
        ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
                Nav header start
            ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    {{-- <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span> --}}
                    <span class="brand-title">
                        {{-- <img src="images/logo-text.png" alt=""> --}}
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
                Nav header end
            ***********************************-->

        <!--**********************************
                Header start
            ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                                    class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard"
                            aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">


                            </a>
                            {{-- <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg"
                                                    alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg"
                                                    alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg"
                                                    alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg"
                                                    alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div> --}}
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">


                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                {{-- <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div> --}}
                            </div>
                        </li>
                        {{-- <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                                <span>English</span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li> --}}
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                {{-- <img src="images/user/1.png" height="40" width="40" alt=""> --}}
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="{{ route('appProfile') }}"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>
                                        {{-- <li>
                                            <i class="icon-envelope-open"></i> <span>Inbox</span>
                                            <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li> --}}

                                        <hr class="my-2">
                                        <li>
                                            <a href="{{route("logout")}}"><i class="icon-lock"></i> <span>Log out</span></a>
                                        </li>
                                        {{-- <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

        <!--**********************************
                Sidebar start
            ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('userdashboard.index') }}">User dashboard</a></li>
                            <li><a href="{{ route('lessordashboard.index') }}">Lessor dashboard</a></li>
                            <li><a href="{{ route('productdashboard.index') }}">Product dashboard</a></li>
                            <li><a href="{{ route('reviewdashboard.index') }}">Review dashboard</a></li>
                            <li><a href="{{ route('bookingdashboard.index') }}">Booking dashboard</a></li>
                        </ul>
                    </li>
                    
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
                Sidebar end
            ***********************************-->

        <!--**********************************
                Content body start
            ***********************************-->
        <div class="content-body">
            {{-- @foreach ($products as $product) --}}
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                             <div class="card-body">
                                <h3 class="card-title text-white">Products rents</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $productCount }}</h2>
                                    {{-- <p class="text-white mb-0"></p> --}}
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
 {{-- @endforeach --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Lessors</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $lessorCount }}</h2>
                                    {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Users</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $userCount }}</h2>
                                    {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">categories</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $categoryCount }}</h2>
                                    {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>



                <div class="row">





                    <div class="row">

                        @foreach ($reviews as $review)
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center container width" style="height: 200px">
                                        <img src="{{ $review->user->image }}" class="rounded-circle" width="70px" height="70px" alt="picture">
                                        <h5 class="mt-3 mb-1"><strong>{{ $review->user->name }}</strong></h5>
                                        <div class="rating">
                                            <span class="stars">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $review->rating)
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                            </span>
                                            <span class="rating-value">({{ $review->rating }})</span>
                                        </div>
                                        <p class="comment">{{ $review->comment }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        @endforeach

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="active-member">
                                        <div class="table-responsive">
                                            <form action="" method="GET">
                                                <label for="status">Filter by Status:</label>
                                                <select name="status" id="status">
                                                    <option value="all"
                                                        {{ request('status') == 'all' ? 'selected' : '' }}>All</option>
                                                    <option value="1"
                                                        {{ request('status') == '1' ? 'selected' : '' }}>unavilable</option>
                                                    <option value="2"
                                                        {{ request('status') == '0' ? 'selected' : '' }}>Avilable
                                                    </option>

                                                </select>

                                                <label for="price">Filter by Price:</label>
                                                <input type="number" name="price" id="price"
                                                    value="{{ request('price') }}" placeholder="Enter max price">


                                                <button type="submit">Filter</button>
                                            </form>
                                            <table class="table table-xs mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>product_name</th>
                                                        <th>product_description</th>
                                                        <th>product_price</th>
                                                        <th>Status</th>
                                                        <th>product_type</th>
                                                        <th>category_id </th>
                                                        <th>image1</th>
                                                        <th>lessor_id </th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    @foreach ($products as $product)
                                                        @if (request('status') == 'all' || request('status') == $product->status)
                                                            <tr>
                                                                <td>{{ $product->product_name }}</td>
                                                                <td>{{ $product->product_description }}</td>
                                                                <td>{{ $product->product_price }}</td>
                                                                <td>{{ $product->status }}</td>
                                                                <td>{{ $product->product_type }}</td>
                                                                <td>{{ $product->category_id }}</td>
                                                                <td>{{ $product->image1 }}</td>
                                                                <td>{{ $product->lessor_id }}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>


                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- #/ container -->
        </div>
        <!--**********************************
                Content body end
            ***********************************-->


        <!--**********************************
                Footer start
            ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by Majdouleen </p>
            </div>
        </div>
        <!--**********************************
                Footer end
            ***********************************-->
    </div>
    <!--**********************************
            Main wrapper end
        ***********************************-->

    <!--**********************************
            Scripts
        ***********************************-->
@endsection
