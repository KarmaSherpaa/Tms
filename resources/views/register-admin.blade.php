<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{asset('cssFile/styles.min.css')}}">
<link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
<link rel="icon" type="image/x-icon" href="img/favicon.ico"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500;700&family=Inter:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet"> 

<title>TMS</title>

<meta name="title" content="TMS">

</head>

<body class=" dashboard ">
   <x-sidebar></x-sidebar>
            
            
        <div class="inner">
            
<div class="text-block">
    <div class="text-center">

        <h1>Register Admin</h1>
        <p>Welcome to the Tax Management System.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 card p-3">
            <form method="POST" action="{{ route('admin.register') }}">
             @csrf
                <div class="mb-2">
                    <label for="username" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="username" name="name"placeholder="Username">
                </div>
                <div class="mb-2">
                    <label for="province" class="form-label">Province</label>
                    <select name="province_id" id="">
                        <option value="1">province 1</option>
                        <option value="2">Province 2</option>
                        <option value="3">province 3</option>
                        <option value="4">Province 4</option>
                        <option value="5">province 5</option>
                        <option value="6">Province 6</option>
                        <option value="7">province 7</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="phonenumber" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="phonenumber" name="phone" placeholder="9851011212">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="mb-2">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Confirm Password">
                </div>
                <div class="mb-1 text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>



        </div>
    </div>

</body>


</html>


<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
