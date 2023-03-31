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
            
<div class="project-block">
    <div class="project-result">
        <a href="{{URL::to('/news')}}" class="btn btn-site  mb-3">Add New News</a>
    </div>
    <div class="project-item">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-auto">
                        <img src="https://picsum.photos/150/100" class="img-fluid" alt="...">
                    </div>
                    <div class="col">
                        <p class="lastedit">Last modified 23m ago</p>
                        <h2 class="project-title"><a href="#">News 1</a></h2>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde sit voluptatum odio eaque
                            corporis
                            provident assumenda harum magni
                            sed optio cumque, fuga cum? Ducimus rerum voluptatum, maxime ex similique odit?</p>
                    </div>
                </div>
                
            </div>
                <div class="col-auto mt-1 mt-lg-0">
                    <a href="{{URL::to('/edit-news')}}" class="btn btn-site">Edit</a>
                    <a href="#" class="btn btn-site btn-delete">Delete</a>
                </div>
        </div>
    </div>
    <div class="project-item">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-auto">
                        <img src="https://picsum.photos/150/100" class="img-fluid" alt="...">
                    </div>
                    <div class="col">
                        <p class="lastedit">Last modified 23m ago</p>
                        <h2 class="project-title"><a href="#">News 1</a></h2>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde sit voluptatum odio eaque
                            corporis
                            provident assumenda harum magni
                            sed optio cumque, fuga cum? Ducimus rerum voluptatum, maxime ex similique odit?</p>
                    </div>
                </div>
                
            </div>
                <div class="col-auto mt-1 mt-lg-0">
                    <a href="{{URL::to('/edit-news')}}" class="btn btn-site">Edit</a>
                    <a href="#" class="btn btn-site btn-delete">Delete</a>
                </div>
        </div>
    </div>
    <div class="project-item">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-auto">
                        <img src="https://picsum.photos/150/100" class="img-fluid" alt="...">
                    </div>
                    <div class="col">
                        <p class="lastedit">Last modified 23m ago</p>
                        <h2 class="project-title"><a href="#">News 1</a></h2>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde sit voluptatum odio eaque
                            corporis
                            provident assumenda harum magni
                            sed optio cumque, fuga cum? Ducimus rerum voluptatum, maxime ex similique odit?</p>
                    </div>
                </div>
                
            </div>
                <div class="col-auto mt-1 mt-lg-0">
                    <a href="{{URL::to('/edit-news')}}" class="btn btn-site">Edit</a>
                    <a href="#" class="btn btn-site btn-delete">Delete</a>
                </div>
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
