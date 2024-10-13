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

        <h3>Hi there, {{$greeting}} , {{$hifi}}</h3>

        @php
            echo "<pre>".print_r($employees,true)."</pre>";
            echo $employees[0] . "<br/>";
            echo $employees[1] . "<br/>";
            echo $employees[2] . "<br/>";
        @endphp

        <ul>
            @foreach($employees as $employee)
                <li>{{$employee}}</li>
            @endforeach
        </ul>


    </body>
</html>