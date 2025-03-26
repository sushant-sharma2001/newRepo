<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @if(session('status'))
   <div class="alert alert-success">
        {{session('status')}}
        <button class="btn-close btn-sm"></button>
    </div>
    @endif
    <ul>
        @foreach($values as $key => $value)
            @if(is_array($value))
                <li>{{ $key }}: {{ json_encode($value) }}</li>
            @else
                <li>{{ $key }}: {{ $value }}</li>
            @endif
        @endforeach
    </ul>      
</body>
</html>