<!DOCTYPE html>
<html>
    <head>
        <title>Employees Page</title>
    </head>
    <body>  
        <h3>Employees Page</h3>

        <hr/>

        <h4>Welcome to Our site</h4>
        <p>This is Employees page - index</p>

        <?php

            foreach($employeedatas as $employeedata){
                echo $employeedata . "<br/>";
            }

        ?>


        @php
            foreach($employeedatas as $employeedata){
                    echo $employeedata . "<br/>";
                }
        @endphp

        @foreach($employeedatas as $employeedata)
            {{ $employeedata }}
        @endforeach

            
        @foreach($employeedatas as $employeedata)
            {!! $employeedata !!}
        @endforeach

        <ul>
            @foreach($employeedatas as $employeedata)
                <li>{{$employeedata}}</li>
            @endforeach
        </ul>

        <?php $city = "Mandalay"; ?>

        @php echo $city; @endphp

        @if($city === "Yangon")
            <h3>You were correct</h3>
        @else
            <h3>You were wrong</h3>
        @endif

        @php
            echo "<pre>".print_r($employeedatas,true)."</pre>";
            echo $employeedatas["name"]."<br/>";
            echo $employeedatas["email"]."<br/>";
            echo $employeedatas["phone"]."<br/>";
        @endphp


    </body>
</html>