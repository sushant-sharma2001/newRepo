<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
     <!-- <h1>
        {{$students}}
     </h1> -->
     <table border="1">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>batch</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
        </tr>
        @endforeach
     </table>
</div>
