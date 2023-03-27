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
    <h1>Tax Slab</h1>
</div>
<table class="table table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">Annual Income</th>
            <th scope="col"> Tax Rate </th>
            <th scope="col">tax Amount</th>
            <th scope="col">Annual Tax Amount</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>UP to 50,0000</td>
            <td>1%</td>
            <td>rs 5000</td>
            <td>RS 5000</td>
        </tr>
        <tr>
            <td>UP to 50,0000</td>
            <td>1%</td>
            <td>rs 5000</td>
            <td>RS 5000</td>
        </tr>
         <tr>
            <td>UP to 50,0000</td>
            <td>1%</td>
            <td>rs 5000</td>
            <td>RS 5000</td>
        </tr>
         <tr>
            <td>UP to 50,0000</td>
            <td>1%</td>
            <td>rs 5000</td>
            <td>RS 5000</td>
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
