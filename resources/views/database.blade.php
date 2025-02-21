<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
     <!-- <P>users data
        {{
            print_r($users);
        }}
    </p> -->
    <table border="1">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
        </tr>
        @foreach($users as $i)
            <tr>
                <td>{{$i->name}}</td>
                <td>{{$i->email}}</td>
                <td>{{$i->phone}}</td>
            </tr>
        @endforeach
    </table>
</div>
