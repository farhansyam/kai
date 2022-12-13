<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/simplebar.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/metismenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
		
		<title>KAI Team</title>

        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>

    <body>

        
        <!-- Start Main Content Wrapper Area -->
        <div class="main-content-wrapper d-flex flex-column">

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="main-responsive-nav">
                    <div class="main-responsive-menu">
                        <div class="responsive-burger-menu d-lg-none d-block">
                            <span class="top-bar"></span>
                            <span class="middle-bar"></span>
                            <span class="bottom-bar"></span>
                        </div>
                    </div>
                </div>

                <div class="main-navbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a href="{{url('forum')}}" class="navbar-brand d-flex align-items-center">
                            <img src="{{asset('images/2.png')}}" alt="image" width="100px">
                        </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-burger-menu m-auto">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>

                            <div class="search-box m-auto">
                                <form>
                                    <input type="text" class="input-search" placeholder="Search...">
                                    <button type="submit"><i class="ri-search-line"></i></button>
                                </form>
                            </div>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="{{url('forum')}}" class="home-btn"><i class="flaticon-home"></i></a>
                                </div>
                                <div class="option-item">
                                    <div class="dropdown notifications-nav-item">
                                        <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="notifications-btn">
                                                <i class="flaticon-bell"></i>
                                                <span>1</span>
                                            </div>
                                        </a>
            
                                        <div class="dropdown-menu">
                                            <div class="notifications-header d-flex justify-content-between align-items-center">
                                                <h3>Notifications</h3>
                                                <i class="flaticon-menu"></i>
                                            </div>
                                            <div class="notifications-body" data-simplebar>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src=" assets/images/user/user-1.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#"> KAI-TEAM</a></h4>
                                                        <span>Add A Photo In Design Forum</span>
                                                        <span class="main-color">3 Days Ago</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src=" assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Joko</a></h4>
                                                        <span>Posted A Project</span>
                                                        <span class="main-color">20 Minites Ago</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src=" ../assets/images/user/user-7.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#"> KAI-TEAM</a></h4>
                                                        <span>Add A Photo In Design Group</span>
                                                        <span class="main-color">3 Days Ago</span>
                                                    </div>
                                                </div>
                                                <div class="view-all-notifications-btn">
                                                    <a href="notifications.html" class="default-btn">View All Notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <div class="dropdown profile-nav-item">
                                        <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="menu-profile">
                                                <img src=" {{asset('images/user/farhan.png')}}" class="rounded-circle" alt="image">
                                                <span class="name"> {{auth()->user()->name}}</span>
                                                <span class="status-online"></span>
                                            </div>
                                        </a>
            
                                        <div class="dropdown-menu">
                                            <div class="profile-header">
                                                <h3> {{auth()->user()->name}}</h3>
                                                <a href="mailto:kai-team@gmail.com">{{auth()->user()->email}}</a>
                                            </div>
                                            <ul class="profile-body">
                                                
                                                <li><i class="flaticon-logout"></i> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="others-option-for-responsive">
                    <div class="container">
                        <div class="dot-menu">
                            <div class="inner">
                                <div class="circle circle-one"></div>
                                <div class="circle circle-two"></div>
                                <div class="circle circle-three"></div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="option-inner">
                                <div class="others-options d-flex align-items-center">
                                    <div class="option-item">
                                        <a href="index.html" class="home-btn"><i class="flaticon-home"></i></a>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown friend-requests-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="friend-requests-btn">
                                                    <i class="flaticon-user"></i>
                                                    <span>3</span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="friend-requests-header d-flex justify-content-between align-items-center">
                                                    <h3>Friend Requests</h3>
                                                    <i class="flaticon-menu"></i>
                                                </div>
    
                                                <div class="friend-requests-body">
                                                    <div class="item d-flex align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-2.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
    
                                                        <div class="content d-flex justify-content-between align-items-center">
                                                            <div class="text">
                                                                <h4><a href="#">Sandra Cross</a></h4>
                                                                <span>26 Friends</span>
                                                            </div>
                                                            <div class="btn-box d-flex align-items-center">
                                                                <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                                
                                                                <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-3.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
    
                                                        <div class="content d-flex justify-content-between align-items-center">
                                                            <div class="text">
                                                                <h4><a href="#">Kenneth Crowe</a></h4>
                                                                <span>53 Friends</span>
                                                            </div>
                                                            <div class="btn-box d-flex align-items-center">
                                                                <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                                
                                                                <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-4.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
    
                                                        <div class="content d-flex justify-content-between align-items-center">
                                                            <div class="text">
                                                                <h4><a href="#">Andrea Harwell</a></h4>
                                                                <span>99 Friends</span>
                                                            </div>
                                                            <div class="btn-box d-flex align-items-center">
                                                                <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                                
                                                                <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
    
                                                        <div class="content d-flex justify-content-between align-items-center">
                                                            <div class="text">
                                                                <h4><a href="#">John Lago</a></h4>
                                                                <span>18 Friends</span>
                                                            </div>
                                                            <div class="btn-box d-flex align-items-center">
                                                                <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                                
                                                                <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="view-all-requests-btn">
                                                        <a href="friends.html" class="default-btn">View All Requests</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown messages-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="messages-btn">
                                                    <i class="flaticon-email"></i>
                                                    <span>2</span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="messages-search-box">
                                                    <form>
                                                        <input type="text" class="input-search" placeholder="Search Message...">
                                                        <button type="submit"><i class="ri-search-line"></i></button>
                                                    </form>
                                                </div>
                                                <div class="messages-body">
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">James Vanwin</a></h4>
                                                            <span>Hello Dear I Want Talk To You</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-12.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Harry Lopez</a></h4>
                                                            <span>Hi. I Am looking For UI Designer</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-13.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#"> KAI-TEAM</a></h4>
                                                            <span>Thanks For Connecting!</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-14.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Russe Smith</a></h4>
                                                            <span>Thanks For Connecting!</span>
                                                        </div>
                                                    </div>
                                                    <div class="view-all-messages-btn">
                                                        <a href="messages.html" class="default-btn">View All Messages</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown notifications-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="notifications-btn">
                                                    <i class="flaticon-bell"></i>
                                                    <span>1</span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="notifications-header d-flex justify-content-between align-items-center">
                                                    <h3>Notifications</h3>
                                                    <i class="flaticon-menu"></i>
                                                </div>
                                                <div class="notifications-body">
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">James Vanwin</a></h4>
                                                            <span>Posted A Comment On Your Status</span>
                                                            <span class="main-color">20 Minites Ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-12.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Harry Lopez</a></h4>
                                                            <span>Sent You A Friend Request</span>
                                                            <span class="main-color">2 Days Ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src=" assets/images/user/user-13.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#"> KAI-TEAM</a></h4>
                                                            <span>Add A Photo In Design Group</span>
                                                            <span class="main-color">3 Days Ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="view-all-notifications-btn">
                                                        <a href="notifications.html" class="default-btn">View All Notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown language-option">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon-global"></i>
                                                <span class="lang-name"></span>
                                            </button>
                                            <div class="dropdown-menu language-dropdown-menu">
                                                <a class="dropdown-item" href="#">
                                                    <img src=" assets/images/uk.png" alt="flag">
                                                    Eng
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <img src=" assets/images/china.png" alt="flag">
                                                    简体中文
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <img src=" assets/images/uae.png" alt="flag">
                                                    العربيّة
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown profile-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="menu-profile">
                                                    <img src=" assets/images/user/user-1.jpg" class="rounded-circle" alt="image">
                                                    <span class="name"> KAI-TEAM</span>
                                                    <span class="status-online"></span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="profile-header">
                                                    <h3> KAI-TEAM</h3>
                                                    <a href="mailto: kai-team@gmail.com"> kai-team@gmail.com</a>
                                                </div>
                                                <ul class="profile-body">
                                                    <li><i class="flaticon-user"></i> <a href="my-profile.html">My Profile</a></li>
                                                    <li><i class="flaticon-settings"></i> <a href="setting.html">Setting</a></li>
                                                    <li><i class="flaticon-information"></i> <a href="help-and-support.html">Help & Support</a></li>
                                                    <li><i class="flaticon-logout"></i> <a href="index.html">Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="search-box">
                                            <form>
                                                <input type="text" class="input-search" placeholder="Search...">
                                                <button type="submit"><i class="ri-search-line"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            <!-- End Navbar Area -->
            
            <!-- Start Sidemenu Area -->
            <div class="sidemenu-area">
                <div class="responsive-burger-menu d-lg-none d-block">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>

                <div class="sidemenu-body">
                    <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
                        <li class="nav-item active">
                            <a href="{{route('forum')}}" class="nav-link">
                                <span class="icon"><i class="flaticon-newspaper"></i></span>
                                <span class="menu-title">Forums Feed</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('project')}}" class="nav-link">
                                <span class="icon"><i class="flaticon-online-shopping"></i></span>
                                <span class="menu-title">Freelance Project</span>
                            </a>
                        </li>
                       @if (auth()->user()->role == 1)
                        <li class="nav-item">
                            <a href="{{url('users')}}" class="nav-link">
                                <span class="icon"><i class="flaticon-team"></i></span>
                                <span class="menu-title">Daftar Users</span>
                            </a>
                        </li>
                       @endif
                    </ul>
                </div>
            </div>
        <!-- End Sidemenu Area -->

        <!-- Start Content Page Box Area -->
       <div class="my-profile-inner-box">
                    <div class="profile-cover-image">
                        <a href="#">
                            <img src="{{asset('assets/images/my-profile-bg.jpg')}}" alt="image">
                        </a>
                        {{-- <a href="#" class="edit-cover-btn">Edit Cover</a> --}}
                    </div>

                    <div class="profile-info-box">
                        <div class="inner-info-box d-flex justify-content-between align-items-center">
                            <div class="info-image">
                                <a href="#">
                                    <img src="{{asset('assets/images/user/farhan.png')}}" alt="image">
                                </a>
                                <div class="icon">
                                    <a href="#"><i class="flaticon-photo-camera"></i></a>
                                </div>
                            </div>
                            <div class="info-text ms-3"><br>
                                <h3><a href="#">{{$users->name}}</a></h3>
                                <span><a href="mailto:{{$users->email}}">{{$users->email}}</a></span>
                            </div>
                            <ul class="statistics">
                                <li>
                                    <a href="#">
                                        <span class="item-number">2</span> 
                                        <span class="item-text">Forum</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="profile-list-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="timeline-tab" data-bs-toggle="tab" href="#timeline" role="tab" aria-controls="timeline">Timeline</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                 <div class="col-lg-9 col-md-12">
                        <div class="news-feed-area">

                         
                                {{--  --}}
                           @foreach ($forums as $forum)
                            @if($forum->user->id == $ids)   
                            <div class="news-feed news-feed-post">
                                <div class="post-header d-flex justify-content-between align-items-center">
                                    <div class="image">
                                        <a href="#"><img src=" {{asset('images/user/farhan.png')}}" class="rounded-circle" alt="image"></a>
                                    </div>
                                    <div class="info ms-3">
                                        <span class="name"><a href="#">{{$forum->user->name}}</a></span>
                                        <span class="small-text"><a href="#">{{$forum->created_at}}</a></span>
                                    </div>
                                            <a href="{{route('posts.view',$forum->id)}}"><button class="btn btn-success">Join</button></a>
                                </div>

                                <div class="post-body">
                                    <p>{{$forum->title}}
                            </p>
                                </div>
                            </div>
                            {{-- <a href="{{url('forum/')}}/{{$forum->id_forum}}#disqus_thread"></a> --}}
                            @endif
                            @endforeach     
                            

                            <div class="load-more-posts-btn">
                                {{-- <a href="#"><i class="flaticon-loading"></i> Load More Posts</a> --}}
                            </div>
                        </div>
                    </div>
        <!-- End Content Page Box Area -->

        <!-- Start Right Sidebar Area -->

    </div>
    <!-- End Main Content Wrapper Area -->

    <!-- Start Copyright Area -->
    <div class="copyrights-area">
        <div class="container">
            <div class="row align-items-center">
                <p><i class="ri-copyright-line"></i>KAI Team</i></p>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Links of JS files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>