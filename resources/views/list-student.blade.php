<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
     <h1>student's list</h1>
     <table border="1">
      <tr>
        <th>name</th>
        <th>email</th>
        <th>age</th>
        <th>created at</th>
      </tr>
      @foreach($data as $i)
      <tr>
         <td>{{$i->name}}</td> 
         <td>{{$i->email}}</td> 
         <td>{{$i->age}}</td> 
         <td>{{$i->created_at}}</td> 
      </tr>
      @endforeach
     </table>
</div>
