<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <h1> this is view 2 </h1>
    <p>data here:{{$data}}</p>
    <p>{{rand()}}
    <p>foreach here: @forEach($array as $i){
        {{$i}}
        }@endforeach
    </p>
    <p>
        for here: @for($i=0;$i<count($array);$i++){
            {{$array[$i];}}
        }
        @endfor
    </p>
    <h1>string array</h1>
    <p>
        @forEach($string as $i){
            {{$i}}
        }
        @endforeach
    </p>
    <h1>associative array</h1>
    <p>
       @forEach($associative as $key=>$value){
        {{$key}}=>{{$value}}
       } 
       @endforeach
    </p>
</div>