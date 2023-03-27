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
            
<div class="text-block mb-3">
    <h1>PAN verification List</h1>
</div>
<table class="table table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">SN.</th>
            <th scope="col">User Name</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <th>provience1</th>
            <td>Sameer Humagain</td>
            <td>humagainsameer@gmail.com</td>
            <td>9851061534</td>
            <td>
                <div class="col-auto mt-1 mt-lg-0">
                    <a href="{{URL::to('/user-pan-detail')}}" class="btn btn-site">View Users Info</a>
                    <a href="#" class="btn btn-site btn-delete">Delete</a>
                </div>
            </td>
        </tr>
    </tbody>

</table>


        </div>
    </div>

</body>


</html>


<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>