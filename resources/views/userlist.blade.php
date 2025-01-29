<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userlisttable</title>
</head>
<body>
    <h1 style="text-align:center">User List</h1>
    <table border="1" width="50%" style="margin: auto;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
           
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['address']}}</td>
            
           
            
        </tr>
        @endforeach
    </table>
</body>
</html>