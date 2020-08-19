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


          
                  
<form method="post" action="{{route('register')}}">

        {{csrf_field()}}
        
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div> -->
            <div class="form-group">
                <label for="numb">Number</label>
                <input type="number" class="form-control" id="number" name="number">
            </div>
            <div class="form-group">
                <label for="numb">Age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            
            <div class="form-group">
                <label for="name">Role</label>
                <input type="text" class="form-control" id="role" name="role">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button><a href="{{ url('show') }}">Home</a>
        </div>
       
    

</form>


                
    </body>
</html>
