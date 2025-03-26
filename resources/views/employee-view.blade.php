<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->



</div>
<h1>Users List</h1>
    <ul>
        @foreach ($data as $employee)
           <li> {{ $employee->name }}</li><br>
        @endforeach
    </ul>
    <h2>links to next pages</h2>
    
    {{ $data->links() }}