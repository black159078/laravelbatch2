<!DOCTYPE html>
<html>
    <head>
        <title>Employees Page</title>
    </head>
    <body>  
        <h3>Employees Page</h3>

        <hr/>

        <h4>Welcome to Our site</h4>
        <p>This is Employees page - datatwo</p>

        <h3>Hi there, {{$greet}} , {{$hi}}</h3>

        @php
            echo "<pre>".print_r($staffs,true)."</pre>";
            echo $staffs[0] . "<br/>";
            echo $staffs[1] . "<br/>";
            echo $staffs[2] . "<br/>";
        @endphp

        <ul>
            @foreach($staffs as $staff)
                <li>{{$staff}}</li>
            @endforeach
        </ul>


    </body>
</html>