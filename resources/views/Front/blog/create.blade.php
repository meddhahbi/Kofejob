@extends('Layouts.site')


@section('content')


<header class="header header-bg">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="index.html" class="navbar-brand logo">
<img src="../../assets/img/logo.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="index.html" class="menu-logo">
<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li class="has-submenu">
<a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="index.html">Home</a></li>
<li><a href="index-2.html">Home-2</a></li>
<li><a href="index-3.html">Home-3</a></li>
<li><a href="index-4.html">Home-4</a></li>
<li><a href="index-5.html">Home-5</a></li>
</ul>
</li>
<li class="has-submenu">
<a href>For Employers<i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li class="has-submenu">
<a href="#">Freelancer</a>
<ul class="submenu">
<li><a href="developer.html">Freelancer</a></li>
<li><a href="developer-details.html">Freelancer Details</a></li>
</ul>
</li>
<li><a href="dashboard.html">Dashboard</a></li>
<li><a href="company-profile.html">My Profile</a></li>
<li><a href="company-details.html">Company Details</a></li>
<li><a href="manage-projects.html">Projects</a></li>
<li><a href="favourites.html">Favourites</a></li>
<li><a href="membership-plans.html">Membership</a></li>
<li><a href="milestones.html">Milestones</a></li>
<li><a href="chats.html">Chats</a></li>
<li><a href="review.html">Review</a></li>
<li><a href="deposit-funds.html">Payments</a></li>
<li><a href="verify-identity.html">Verify Identity</a></li>
<li><a href="profile-settings.html">Settings</a></li>
</ul>
</li>
<li class="has-submenu">
<a href>For Freelancer<i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li class="has-submenu">
<a href="#">Projects</a>
<ul class="submenu">
<li><a href="project.html">Projects</a></li>
<li><a href="project-details.html">Project Details</a></li>
</ul>
</li>
<li><a href="freelancer-dashboard.html">Dashboard</a></li>
<li><a href="developer-profile.html">My Profile</a></li>
<li><a href="developer-details.html">Freelancer Details</a></li>
<li><a href="freelancer-project-proposals.html">Projects</a></li>
<li><a href="freelancer-favourites.html">Favourites</a></li>
<li><a href="freelancer-membership.html">Membership</a></li>
<li><a href="freelancer-change-password.html">Change Password</a></li>
<li><a href="freelancer-chats.html">Chats</a></li>
<li><a href="freelancer-review.html">Review</a></li>
<li><a href="freelancer-withdraw-money.html">Payments</a></li>
<li><a href="freelancer-verify-identity.html">Verify Identity</a></li>
<li><a href="freelancer-profile-settings.html">Settings</a></li>
</ul>
</li>
<li class="has-submenu">
<a href>Pages <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="about.html">About us</a></li>
<li><a href="blank-page.html">Starter Page</a></li>
<li><a href="404-page.html">404 Page</a></li>
<li class="has-submenu">
<a href="invoices.html">Invoices</a>
<ul class="submenu">
<li><a href="freelancer-invoices.html">Invoices</a></li>
<li><a href="view-invoice.html">Invoice View</a></li>
</ul>
</li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="onboard-screen.html">Onboard Screen</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
<li><a href="change-password.html">Change Password</a></li>
</ul>
</li>
<li class="has-submenu active">
<a href>Blog <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="blog-list.html">Blog List</a></li>
<li class="active"><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li>
<li>
<a href="admin/index.html" target="_blank">Admin</a>
</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li><a href="register.html" class="reg-btn"><i class="fas fa-user"></i> Register</a></li>
<li><a href="login.html" class="log-btn"><i class="fas fa-lock"></i> Login</a></li>
<li><a href="post-project.html" class="login-btn">Post a Project </a></li>
</ul>
</nav>
</header>

    <div class="content">
    <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="select-project mb-4">
                        <form action="{{route('StoreBlog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="title-box widget-box">

                                <div class="title-content">
                                    <div class="title-detail">
                                        <h3>Blog Title</h3>
                                        <div class="form-group mb-0">
                                            <input type="text" id="title" name="titre" class="form-control" placeholder="Enter blog title...">
                                            @error('titre')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

   
                                <div class="title-content pb-0">
                                    <div class="title-detail">
                                        <h3>Write blog's description </h3>
                                        <div class="form-group mb-0">
                                            <textarea id="description" name="description" class="form-control summernote" rows="5" placeholder="Describe your blog..."></textarea>
                                            @error('description')
                                            <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="title-content pb-0">
                                <div class="title-detail">
                                <h3>Blog's image </h3>
                                    <input
                                        type="file"
                                        name="image"
                                        id="inputImage"
                                        class="form-control ">
                                        @error('image')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-end">
                                        <div class="btn-item">
                                            <button type="submit" class="btn next-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
