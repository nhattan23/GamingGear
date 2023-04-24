<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Authentication</title>
    <link rel="stylesheet" href="./style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="login-page">
        <div class="form">
                <form class="login-form"  action="{{route('login-admin')}}" method="post">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    
                    @csrf
                    <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                    <span class="text-danger">
                        @error('email') {{$message}} @enderror
                    </span>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                    <span class="text-danger">
                        @error('password') {{$message}} @enderror
                    </span>
                    <button type="submit">login</button>
                  </form>
            
        </div>
    </div>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script2.js"></script>
</body>
</html>