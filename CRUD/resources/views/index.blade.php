<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="{{route('create')}}">
    <button class= "btn btn-danger">Tạo mới người dùng</button>
    </form>
    </div>
    <div class="container">
            <h1>User</h1>
            <table class="table text-center">
        <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                 </tr>
        </thead>
    <tbody>
            @foreach($user as $users)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td> 
                <form action="/users/{{$user->Id}}" method="get">
                     {{csrf_field()}}
                 
                 <button type='submit' class='btn btn-success'>Show</button></form>
                <form action="{{ route('edit',$user->Id) }}" method="get">
                    {{csrf_field()}}
   
                    <button type='submit' class='btn btn-warning'>Edit</button>
                 </form>
                 <form action="{{ route('destroy',$user->Id) }}" method="POST">
                 {{csrf_field()}}
                 <button type='submit' class='btn btn-danger'>Delete</button></form>
                </td>
             </tr>
    </tbody>
    </table>
    </div>

</body>
</html>