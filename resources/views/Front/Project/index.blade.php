<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamguystech.com/template/freelancer-milestones.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 20:21:53 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="{{ asset('Assets/img/favicon.png" type="image/x-icon') }}">

    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/plugins/datatables/datatables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}">

</head>
<body class="dashboard-page">

<div class="main-wrapper">


    <header class="header">
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
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
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
                    <li class="has-submenu active">
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
                            <li class="active"><a href="freelancer-project-proposals.html">Projects</a></li>
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
                    <li class="has-submenu">
                        <a href>Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="admin/index.html" target="_blank">Admin</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item dropdown account-item">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        MY ACCOUNT
                    </a>
                    <div class="dropdown-menu emp">
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="freelancer-profile.html"><i class="material-icons">verified_user</i> View profile</a>
                        <div class="drop-head">Projects Settings</div>
                        <a class="dropdown-item" href="freelancer-project-proposals.html"><i class="material-icons">business_center</i> Projects</a>
                        <a class="dropdown-item" href="freelancer-bookmarks.html"><i class="material-icons">local_play</i> Bookmarks</a>
                        <a class="dropdown-item" href="freelancer-review.html"><i class="material-icons">pie_chart</i> Reviews</a>
                        <div class="drop-head">Financial Settings</div>
                        <a class="dropdown-item bal" href="#">Balance <span class="amt">₹0.00 INR</span></a>
                        <a class="dropdown-item" href="freelancer-withdraw-money.html"><i class="material-icons">wifi_tethering</i> Withdraw funds</a>
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="freelancer-profile-settings.html"> <i class="material-icons">settings</i> Profile Settings</a>
                        <a class="dropdown-item" href="index.html"><i class="material-icons">power_settings_new</i> Logout</a>
                    </div>
                </li>
                <li><a href="post-project.html" class="login-btn">Post a Project </a></li>
            </ul>
        </nav>
    </header>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-4 theiaStickySidebar">
                    <div class="settings-widget">
                        <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                            <a href="freelancer-profile.html"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
                            <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                <p class="mb-2">Welcome,</p>
                                <h3 class="mb-0"><a href="freelancer-profile.html">John Danie S.</a></h3>
                                <p class="mb-0">@johndaniee</p>
                            </div>
                        </div>
                        <div class="settings-menu">
                            <ul>
                                <li class="nav-item">
                                    <a href="freelancer-dashboard.html" class="nav-link">
                                        <i class="material-icons">verified_user</i> Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-project-proposals.html" class="nav-link active">
                                        <i class="material-icons">business_center</i> Projects
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-favourites.html" class="nav-link">
                                        <i class="material-icons">local_play</i> Favourites
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-review.html" class="nav-link">
                                        <i class="material-icons">record_voice_over</i> Reviews
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-portfolio.html" class="nav-link">
                                        <i class="material-icons">pie_chart</i> Portfolio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-chats.html" class="nav-link">
                                        <i class="material-icons">chat</i> Messages
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-membership.html" class="nav-link">
                                        <i class="material-icons">person_add</i> Membership
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-verify-identity.html" class="nav-link">
                                        <i class="material-icons">person_pin</i> Verify Identity
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-withdraw-money.html" class="nav-link">
                                        <i class="material-icons">wifi_tethering</i> Payments
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="freelancer-profile-settings.html" class="nav-link">
                                        <i class="material-icons">settings</i> Settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">
                                        <i class="material-icons">power_settings_new</i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8">
                    <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item">
                                <a class="nav-link" href="freelancer-view-project-detail.html">Overview & Discussions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="freelancer-milestones.html">Milestones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="freelancer-task.html">Tasks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="freelancer-files.html">Files</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="freelancer-payment.html">Payments</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="my-projects-view">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="project-table">
                                        <div class="card-body">
                                            <h4>MILESTONES</h4>
                                            <div class="table-responsive table-box">
                                                <table class="table table-center table-hover datatable">
                                                    <thead class="thead-pink">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Budget</th>
                                                        <th>Progress</th>
                                                        <th>Date to start</th>
                                                        <th>Date to end</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($projets as $projet)

                                                        <tr>
                                                        <td>{{$projet->title}}</td>
                                                        <td>{{$projet->budget}}</td>
                                                        <td>
                                                            <p class="mb-0 orange-text text-center">{{$projet->progress}}%</p>
                                                            <div class="progress progress-md mb-0">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{$projet->progress}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>{{$projet->start_date}}</td>
                                                        <td>{{$projet->due_date}}</td>
                                                        <td><span class="badge badge-pill bg-success-dark">UnPaid</span></td>
                                                    </tr>

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
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">Useful Links</h2>
                            <ul>
                                <li><a href="about.html"><i class="fas fa-angle-right me-1"></i>About Us</a></li>
                                <li><a href="blog-list.html"><i class="fas fa-angle-right me-1"></i>Blog</a></li>
                                <li><a href="login.html"><i class="fas fa-angle-right me-1"></i>Login</a></li>
                                <li><a href="register.html"><i class="fas fa-angle-right me-1"></i>Register</a></li>
                                <li><a href="forgot-password.html"><i class="fas fa-angle-right me-1"></i>Forgot Password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">Help & Support</h2>
                            <ul>
                                <li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Browse Candidates</a></li>
                                <li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Employers Dashboard</a></li>
                                <li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Job Packages</a></li>
                                <li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Jobs Featured</a></li>
                                <li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Post A Job</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">Other Links</h2>
                            <ul>
                                <li><a href="freelancer-dashboard.html"><i class="fas fa-angle-right me-1"></i>Freelancers</a></li>
                                <li><a href="freelancer-portfolio.html"><i class="fas fa-angle-right me-1"></i>Freelancer Details</a></li>
                                <li><a href="project.html"><i class="fas fa-angle-right me-1"></i>Project</a></li>
                                <li><a href="project-details.html"><i class="fas fa-angle-right me-1"></i>Project Details</a></li>
                                <li><a href="post-project.html"><i class="fas fa-angle-right me-1"></i>Post Project</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">Join our Newsletter</h2>
                            <p>We help our customers harness the power of AI to make smarter decisions</p>
                            <div class="banner-content ">
                                <form class="form" name="store" method="post" action="https://kofejob.dreamguystech.com/template/project.html">
                                    <div class="form-inner">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Your Email address.....">
                                            <button class="btn btn-primary sub-btn" type="submit"><i class="fas fa-long-arrow-alt-right long-arrow"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="social-icon d-flex">
                                <span>Follow us on : </span>
                                <ul>
                                    <li><a href="#" class="icon" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
                                    <li><a href="#" class="icon" target="_blank"><i class="fab fa-instagram"></i> </a></li>
                                    <li><a href="#" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">

                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 ">
                            <div class="footer-bottom-logo">
                                <a href="index.html" class="menu-logo">
                                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 right-text">
                            <ul class="nav footer-bottom-nav">
                                <li><a href="chats.html">Chat</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="review.html">Reviews</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="term-condition.html">Terms of use</a></li>
                            </ul>
                            <div class="copyright-text">
                                <p class="mb-0">Copyright 2023 © KofeJob. All right reserved. Powered by Dreamguys Technologies</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>

</div>

<script src="{{ asset('Assets/js/jquery-3.6.1.min.js') }}"></script>

<script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('Assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('Assets/plugins/apexchart/chart-data.js') }}"></script>

<script src="{{ asset('Assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ asset('Assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
<script src="{{ asset('Assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Assets/plugins/datatables/datatables.min.js') }}"></script>


<script src="{{ asset('Assets/js/script.js') }}"></script>

</body>

<!-- Mirrored from kofejob.dreamguystech.com/template/freelancer-milestones.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 20:21:53 GMT -->
</html>