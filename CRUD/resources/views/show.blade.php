<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1 class="text-center mt-5 text-uppercase">users list</h1></h1>
            <table class="table table-hover mt-3 table-bordered">
            <thead>
            <tr class="text-center">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody class="text-center">
          
            <tr>
            <td >{{$user->Id}}</td>
            <td >{{$user->Name}}</td>
            <td >{{$user->Email}}</td>
            <td >{{$user->Password}}</td>
            <td>{{$user->Created_at}}</td>
            <td>{{$user->Updated_at}}</td>
            <td class="d-flex justify-content-around">
                    <form action="{{ route('users.edit',$user->Id) }}" method="get">
                {{csrf_field()}}
                         <button type='submit' class='btn btn-warning'>Edit</button>
                    </form>
                    <form action="{{asset('users/' . $user->Id)}}" method="POST">
                     {{csrf_field()}}
                    <button type='submit' class='btn btn-danger'>Delete</button></form></td>
            </tr>
         
            </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>