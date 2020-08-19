
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>User</title>
   
</head>
<body>
@csrf
  
   
    
    <table border="1">	
            
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th >Email</th>
                    <th >Phone</th>
                    <th >Age</th>
                    <th >Role</th>
                    <th >Created_at</th>
                    <th >Updated_at</th>
                    <th >Deleted_at</th>
                    <th colspan="3">Action</th>
                    
                </tr>
           
                <tr>
        @foreach($registory as $data)
        
                
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->number }}</td>
                    <td>{{ $data->age }}</td>
                    <td>{{ $data->role }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ $data->updated_at }}</td>
                    <td>{{ $data->deleted_at }}</td>
                    <td><a href="{{route('editer', $data->id)}}">Edit</a></td>
                    <td><a >Delete</a></td>
                    <td><a href="{{route('fdelete',$data->id)}}">Force Delete</a></td>

                    
                </tr>
        @endforeach
        
    </table>
    <a href="{{ url('show') }}">Home</a>   
    
    
</body>
</html>






