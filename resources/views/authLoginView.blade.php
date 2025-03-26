<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                    @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('loginCheck') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                                @error('email')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                 <label for="password" class="form-label">Password</label>
                                 <input type="password" class="form-control" id="password" name="password" required>
                                 @error('password')
                                 <p class="alert alert-danger">{{ $message }}</p>
                                 @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success w-25">Login</button>
                            </div>
                        </form>
                        <p class="text-center mt-5">Not already registered?</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('registerPage') }}" class="btn btn-primary w-25">Register Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
