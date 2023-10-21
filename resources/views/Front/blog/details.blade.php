@extends('Layouts.site')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Blog Details</title>
   
</head>
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
<img src="../assets/img/logo.png" class="img-fluid" alt="Logo">
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
<body>
<div class="blog-single-post pro-post widget-box">
<div class="blog-image">
    <br><br><br>
<a href="javascript:void(0);"><img src="{{ asset('uploads/' . $blog->image) }}" alt="Blog Image" class="img-fluid" width="200" height="200"></a>
</div>
<h3 class="blog-title">{{ $blog->titre }}</h3>
<div class="blog-info clearfix">
<div class="post-left">
<ul>
<li>
<div class="post-author">
<a href="developer-details.html"><img src="../assets/img/img-02.jpg" alt="Post Author"><span>{{ $blog->author->name }}</span></a>
</div>
</li>
<li><a href="#"><i class="far fa-calendar"></i>{{ $blog->created_at }}</a></li>
<li><a href="#"><i class="far fa-comments"></i>{{ $commentCount }}</a></li>

</ul>
</div>
</div>
<div class="blog-content">
<p>{{ $blog->description }}</p>

</div>
</div>
        
    <div class="blog-comments pro-post widget-box clearfix pb-0">
<h3 class="pro-title">Comments</h3>
<div class="pro-content pb-0">
<ul class="comments-list">

<li>
@foreach($comments as $comment)
<div class="comment">
<div class="comment-author">
<img class="avatar" alt src="../assets/img/img-05.jpg">
</div>
<div class="comment-block">
<span class="comment-by">
<span class="blog-author-name">{{ $comment->user->name }} </span>
</span>
<p>{{ $comment->comment }}</p>
</div>
</div>
@endforeach
</li>
</ul>
</div>
</div>
<div class=" pro-post widget-box  new-comment clearfix">
<h4 class="pro-title">Leave Comment</h4>
<div class="pro-content">
<form action="{{ route('StoreComment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="blogId" value="{{ $blog->id }}">
        
        <div class="form-group">
            <label for="comment">comment </label>
            <input type="text" name="comment" class="form-control" >
            @error('comment')
              <small class="form-text text-danger">{{$message}}</small>
              @enderror
        </div>
             
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</div>
</div>
</div>
</body>
</html>

@endsection