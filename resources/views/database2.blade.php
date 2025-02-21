<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
     <!-- <h1>
        {{$data}}
     </h1> -->
     <table border="1">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>batch</th>
        </tr>
        @foreach($data as $i)
        <tr>
            <td>{{$i->name}}</td>
            <td>{{$i->email}}</td>
            <td>{{$i->batch}}</td>
        </tr>
        @endforeach
     </table>
</div>
