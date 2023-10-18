<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Blog Details</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Your blog details content goes here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details">
                    @foreach($blog as $details)
                    <div class="blog-image">
                        <img src="{{ asset('uploads/' . $details->image) }}" alt="Blog Image">
                    </div>
                    <h2 class="blog-title">{{ $details->titre }}</h2>
                    <p class="blog-author">Author: {{ $details->auteur }}</p>
                    <p class="blog-date">Date: {{ $details->created_at }}</p>
                    <div class="blog-content">
                        <p>{{ $details->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>