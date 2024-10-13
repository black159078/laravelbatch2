<!DOCTYPE html>
<html>
    <head>
        <title>Employees Page</title>
    </head>
    <body>  
        <h3>Employees Page</h3>

        <hr/>

        <h4>Welcome to Our site</h4>
        <p>This is Employees page - edit</p>

        @php
            echo "<pre>".print_r($data['employees'],true)."</pre>";
            echo $data['employees'][0] . "<br/>";
            echo $data['employees'][1] . "<br/>";
            echo $data['employees'][2] . "<br/>";
        @endphp

        <ul>
            @foreach($data['employees'] as $employee)
                <li>{{$employee}}</li>
            @endforeach
        </ul>


    </body>
</html>