<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      
    </head>
    <body>
    
          
@foreach($registery as $data)         
    <form method="post" action="{{route('update',$data->id)}}">
        
    @csrf
    @method('put')
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value={{$data->name}}>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value={{$data->email}}>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="numb">Number</label>
                <input type="number" class="form-control" id="number" name="number" value={{$data->number}}>
            </div>
            <div class="form-group">
                <label for="numb">Age</label>
                <input type="number" class="form-control" id="age" name="age" value={{$data->role}}>
            </div>
            
            <div class="form-group">
                <label for="name">Role</label>
                <input type="text" class="form-control" id="role" name="role" value={{$data->role}}>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>

@endforeach
                
    </body>
</html>
