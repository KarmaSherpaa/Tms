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
    <h1>User Details and Tax History</h1>
</div>
<table class="table table-striped align-middle">

    <tbody>
        <tr>
            <th scope="row"> Name : </th>
            <td>Sameer Humagain</td>
        </tr>
        <tr>
            <th scope="row"> Status : </th>
            <td>Single</td>
        </tr>
        <tr>
            <th scope="row"> Gender :</th>
            <td>male</td>
        </tr>
        <tr>
            <th scope="row"> Date Of Birth : </th>
            <td> 1993-01-26 </td>
        </tr>
        <tr>
            <th scope="row"> Citizenship Number : </th>
            <td> KAVREPALANCHOWK-301059/176438</td>
        </tr>
        <tr>
            <th scope="row"> Citizenship Issue Date : </th>
            <td> 2009</td>
        </tr>
        
        <tr>
            <th scope="row"> Father's/Mother's Name : </th>
            <td>
                DEEPAK HUMAGAIN
            </td>
        </tr>
        <tr>
            <th scope="row"> Spouse/GrandFather's Name : </th>
            <td>
                THAKUR PRASHAD HUMAGAIN
            </td>
        </tr>
        <tr>
            <th scope="row"> Contact Number : </th>
            <td>
                9851061534
            </td>
        </tr>
        <tr>
            <th scope="row"> Email : </th>
            <td>
                humagainsameer@gmail.com
            </td>
        </tr>
        <tr>
            <th scope="row"> Province </th>
            <td> Bagmati</td>
        </tr>
        <tr>
            <th scope="row"> Address : </th>
            <td>BHIMKHORI - 8, KAVRE, Kavrepalanchowk, Nepal</td>
        </tr>
        <tr>
            <th scope="row"> Nagrikta : </th>
          <td>
            <img src="{{asset('Images/back.jpeg')}}" alt="nagrikta" width="300" height="200">
            <img src="{{asset('Images/nagrikta.jpg')}}" alt="nagrikta" height="200" width="300">
          </td>
        </tr>
    </tbody>
</table>

<div class="text-block mb-3">
    <h1> Income History</h1>
</div>
<table class="table table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">Monthly Salary</th>
            <th scope="col">Bonus</th>
            <th scope="col">Allowance</th>
            <th scope="col">Others</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">20000</th>
            <th>212</th>
            <td>12324</td>
            <td>12</td>
        </tr>
    </tbody>
</table>
<div class="text-block mb-3">
    <h1> Income Deduction</h1>
</div>
<table class="table table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">Employee Provident Fund</th>
            <th scope="col">CIT( citizen investment trust)</th>
            <th scope="col">Insurance</th>
            <th scope="col">Medical Expense</th>
            <th scope="col">Other Allowable Deduction</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">20000</th>
            <th>212</th>
            <td>12324</td>
            <td>12</td>
            <td>12</td>
        </tr>
    </tbody>
</table>
<div class="text-block mb-3">
    <h1> Tax History</h1>
</div>
<table class="table table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">SN</th>
            <th scope="col">Year</th>
            <th scope="col">Total Tax Paid</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <th>2023</th>
            <td>Nrs 5000</td>
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
