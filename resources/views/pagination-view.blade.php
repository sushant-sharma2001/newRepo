<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
     inside pagination view 

    </div>
    <h1>Users List</h1>
    <ul>
        @foreach ($users as $user)
            {{ $user->name }}<br>
        @endforeach
    </ul>
    <h2>links to next pages</h2>
    
    {{ $users->links() }}
    