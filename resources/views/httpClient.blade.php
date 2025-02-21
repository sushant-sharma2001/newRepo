<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
     <h1>http client view</h1>
     {{print_r($data)}}
     <ul>
        <li>
        <span>Name:</span><span>{{$data->name}}</span>
        </li>
        <li>
        <span>email:</span><span>{{$data->email}}</span>
        </li>
        <li>
        <span>phone:</span><span>{{$data->phone}}</span>
        </li>
     </ul>
</div>
