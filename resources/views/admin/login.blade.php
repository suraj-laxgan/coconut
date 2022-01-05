<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        .login{
            margin: 100px 300px;
            border: 1px solid #6699ff;
            border-radius: 5px;
            background-color:#ccffff;
        }
        .login_input{
            padding: 10px;
        }
        .login_header{
            /* border: 1px solid red; */
            /* color:#6699ff; */
            background-color:#6699ff;
            text-align: center;
            padding: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container-fluid ">
       <div class="login">
               <h3 class="login_header">Admin Login</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- @if (session('errmsg'))
                    <div class="alert alert-danger">
                        {{ session('errmsg') }}
                    </div>
                @endif -->
           <form action="{{url('admin-login')}}" method="POST">
               @csrf
               <div class="login_input">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email_id" placeholder="Enter Your Email Id">
               </div>
               <div  class="login_input">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
               </div>
               <!-- <div  class="login_input">
                    <input type="text">
               </div> -->
               <!-- <button type="button" class="btn btn-primary " style="margin: 10px;">Submit</button> -->
               <button class="btn btn-primary" type="submit" style="margin: 10px;">Login</button>
           </form>
       </div>
    </div>
</body>
</html>