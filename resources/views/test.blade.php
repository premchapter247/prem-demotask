<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Page</title>
    </head>
    <body>
        <h1>This is static test page</h1>
        <h3>User Normal Information</h2>
        <ol>
            @foreach($info as $value)
                <li>
                    <b>Title</b> {{$value->title}} <br>
                    <b>Description</b> {{$value->description}}
                </li>
            @endforeach 
        </ol>
    </body>
</html>