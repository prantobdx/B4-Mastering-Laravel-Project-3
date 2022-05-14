<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">
</head>
<body>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand" >Logo</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse"  data-target="#menu">
        <span class="navbar-toggler-icon"></span>    
        </button> 
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mx-auto">
                    <li class="navbar-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="navbar-item"><a href="{{ url('/full-name') }}" class="nav-link">Full-Name</a></li>
                    <li class="navbar-item"><a href="{{ route('calculator') }}" class="nav-link">Calculator</a></li>
                </ul>
            </div>
    </div>
  </nav>



    <script src="{{ asset('/') }}assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/') }}assets/js/bootstrap.bundle.js"></script>
</body>
</html>