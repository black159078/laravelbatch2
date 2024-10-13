<!DOCTYPE html>
<html>
    <head>
        <title>Student Page</title>
    </head>
    <body>  
        <h3>Student Page</h3>

        <hr/>

        <h4>Welcome to Our site</h4>
        <p>This is student page - edit</p>

        <ul>
            <li><a href="{{ URL::to('/students') }}">Index</a></li>
            <li><a href="{{ URL::to('/students/show') }}">Show</a></li>
            <li><a href="{{ route('students.edit') }}">Edit</a></li>
        </ul>

    </body>
</html>
