<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container bg-light">
            <h2 style="text-align:center">List</h2>
            <div class="container"  style="width: 100%;">
                <table class="styled-table" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name </th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            @foreach ($users as $user)
                            
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->phone_no}}</td>
                                    <td>{{$user->email}}</td>
                                 </tr>

                            @endforeach
                
                    </tbody>
                 </table>
             </div> 
        </div>
</body>
</html>