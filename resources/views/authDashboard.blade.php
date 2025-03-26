<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Dashboard</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                   <?php use Illuminate\Support\Facades\Auth;  ?>
            

                   <h1>Welcome {{Auth::user()->name}}</h1>
                   <h4> {{Auth::user()}} </h4>
            
            </div>
            <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="{{ route('logout') }}" class="btn btn-danger">
                <i class="fas fa-sign-out-alt me-1"></i>Logout</a>
            </div>
        </div>   
        </div>
    </div>
</body>
</html>
