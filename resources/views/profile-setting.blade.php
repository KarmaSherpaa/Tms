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

        <h1>Update Information</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 card p-3">
            <form action="" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="username" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="username" placeholder="{{$user['name']}}">
                </div>
                <div class="mb-2">
                    <label for="province" class="form-label">Province</label>
                    <input type="text" class="form-control" id="province" placeholder="{{$user['profile']['province']['province_name']}}">
                </div>
                <div class="mb-2">
                    <label for="phonenumber" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="phonenumber" placeholder="{{$user['profile']['phone']}}">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="{{$user['email']}}">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Change Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="mb-2">
                    <label for="confirm-password" class="form-label">Confirm Change Password</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                </div>
                <div class="mb-1 text-center">
                    <button type="submit" class="btn btn-primary">Update Details</button>
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
