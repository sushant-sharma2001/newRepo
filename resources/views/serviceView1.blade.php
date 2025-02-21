<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-3">
        <h1>Student Form</h1>
        <form action="/students" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">name</label>
                <input type="text" class="form-control" placeholder="enter your name" name="name" value="{{ old('name') }}">
                @error('name')
                <pre style="color:red">*{{$message }}</pre>
                @enderror
            </div>
            <div class="mb-3">
                <label for="age">age</label>
                <input type="number" class="form-control" placeholder="enter your age" name="age" value="{{ old('age') }}">
                @error('age')
                <pre style="color:red">*{{$message }}</pre>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stream">Stream</label>
                <input type="text" class="form-control" placeholder="enter stream" name="stream" value="{{ old('stream') }}">
                @error('stream')
                <pre style="color:red">*{{$message }}</pre>
                @enderror
            </div>
            <div class="mb-3">
                <label for="roll">Roll no</label>
                <input type="number" class="form-control" placeholder="enter roll no" name="roll" value="{{ old('roll') }}">
                @error('roll')
                <pre style="color:red">*{{$message }}</pre>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="address">address</label>
                <textarea class="form-control" rows="2" id="address" placeholder="your address here" name="address" value="{{ old('address') }}"></textarea>
            </div>
            <div class="form-check mb-3">
                <label for="check" class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="check" id="check">I hereby check that all information provided is accurate and complete to the best of my knowledge.
                </label>
                @error('check')
                <pre style="color:red">*{{$message }}</pre>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">submit</button>
        </form>
        
    </div>
    @isset($fetch)
        <div class="mt-3">
            <h4>Fetching response:</h4>
            <ul>
                @foreach ($fetch as $key => $value)
                    <li>{{ ucfirst($key) }}: {{ $value }}</li>            <!-- ucfirst== uppercase first letter -->
                @endforeach
            </ul>
        </div>
    @endisset
</body>
</html>
