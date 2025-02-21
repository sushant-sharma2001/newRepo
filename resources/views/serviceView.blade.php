<div>
    <!-- Well begun is half done. - Aristotle -->
      <form action="/check" method="post">
        @csrf
            <input type="number" name="num"><br>
            <button type="submit">submit</button>
     </form>
     @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     @isset($response)
     <h4>fetching response: {{$response}}</h4>
     @endisset
</div>
