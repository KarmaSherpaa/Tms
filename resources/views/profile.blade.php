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

<body class=" loading ">
    <div class="sidebar">
    <div class="sidebar-head">
        <img src="img/logo-light.svg" alt="logo" class="logo d-none d-lg-block">
        <a href="javascript:void(0);" class="sidebar-toggle menu-close d-none d-lg-block">
            <svg width="18" height="18">
                <use href="#icon-close" class="sidebar-close" />
                <use href="#icon-open" class="sidebar-open" />
            </svg>
        </a>
        <a href="javascript:void(0);" class="close-menu d-block d-lg-none float-end">
            <svg width="18" height="18">
                <use href="#icon-closex" class="menu-close" />
            </svg>
        </a>
    </div>
    <div class="sidebar-body">

        
    </div>
</div>

    <div class="main">
        <header class="header sticky-top">
            <div class="progress-indicator" style="width:30%;"></div>
            <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class=" d-lg-none mobile-header">
            <a href="javascript:void(0);" class="menu-toggle">
                <svg class="menu-icon" width="20" height="17">
                    <use href="#icon-menu"></use>
                </svg>
            </a>
            <div class="page-title">
                <h1>Energy</h1>
                <span>Project name</span>
            </div>
            <a data-bs-toggle="offcanvas" href="#searchoffcanvas" class="seach-trigger">
                <svg class=" search-icon" height="22" width="22">
                    <use href="#icon-search"></use>
                </svg>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profile.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="project.html">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tool notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="header-right d-flex align-items-center">
                <div class="search-block me-2 ">
                    <form class="search-form dropdown" role="search">
                        <div class="search-input-wrap">
                            <input class="form-control  search-input  dropdown-toggle" data-bs-toggle="dropdown"
                                type="search" placeholder="Search" aria-label="Search">
                            <svg height="13" width="13" class="search-icon">
                                <use href="#icon-search"></use>
                            </svg>
                            <div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuButton1">
                                <a class="show-result" href="search.html">Show all results</a>
                                <ul class="search-results">
                                    <li>
                                        <h4><a href="#" class="dropdown-item">Credits</a></h4>
                                        <p><a href="#" class="dropdown-item">Energy 2.1 Greenhouse Gas Emissions</a></p>
                                        <p><a href="#" class="dropdown-item">Energy 2.4 Gas Consumption</a></p>
                                    </li>
                                    <li>
                                        <h4><a href="#" class="dropdown-item">Tool notes</a></h4>
                                        <p><a href="#" class="dropdown-item">Energy 2.1 Greenhouse Gas Emissions</a></p>
                                        <p><a href="#" class="dropdown-item">Energy 2.4 Gas Consumption</a></p>
                                    </li>
                                    <li>
                                        <h4><a href="#" class="dropdown-item">Projects</a></h4>
                                        <p><a href="#" class="dropdown-item">21 Emission Street, Bruswick West, 3055</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dropdown account-setting">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="24" height="23">
                            <use href="#icon-user" />
                        </svg>
                        <span class="username">Jason</span>
                        <svg width="13" height="6">
                            <use href="#icon-arrow-down" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Invite User</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                           <li> <x-dropdown-link class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="theme-toggle">Theme
                            <a href="#" class="change-light active">
                                <svg width="16" height="16">
                                    <use href="#icon-light" />
                                </svg>
                            </a>
                            <a href="#" class="change-dark">
                                <svg width="13" height="13">
                                    <use href="#icon-dark" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!--mobile bottom sticky navigation with icons-->
<nav class="responsive-nav d-block d-lg-none">
    <ul>
        <li class="active">
            <a href="#">
                <svg width="24" height="24" class="icon-home">
                    <use href="#icon-home" class="off" />
                    <use href="#icon-home-dark" class="off dark-off" />
                    <use href="#icon-home-on" class="on" />
                </svg>
                Home
            </a>
        </li>
        <li><a href="#">
                <svg width="25" height="24" class="icon-project">
                    <use href="#icon-project" class="off" />
                    <use href="#icon-project-dark" class="off dark-off" />
                    <use href="#icon-project-on" class="on" />
                </svg>
                Projects</a></li>
        <li><a href="#">
                <svg id="icon-tool" width="19" height="24" class="icon-notes">
                    <use href="#icon-notes" class="off" />
                    <use href="#icon-notes-dark" class="off dark-off" />
                    <use href="#icon-notes-on" class="on" />
                </svg>
                Tool Notes</a></li>
        <li><a href="#">
                <svg width="6" height="24" class="icon-about">
                    <use href="#icon-about" class="off" />
                    <use href="#icon-about-dark" class="off dark-off" />
                    <use href="#icon-about-on" class="on" />
                </svg>
                About</a></li>
        <li><a href="#">
                <svg width="20" height="22" class="icon-account">
                    <use href="#icon-account" class="off" />
                    <use href="#icon-account-dark" class="off dark-off" />
                    <use href="#icon-account-on" class="on" />
                </svg>
                Account</a></li>
    </ul>
</nav>

<!--mobile search offcanvas-->
<div class="offcanvas offcanvas-end search-offcanvas" tabindex="-1" id="searchoffcanvas"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header text-center">
        <h5 class="offcanvas-title" id="searchoffcanvas">Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            <form class="search-form">
                <div class="search-input-wrap mb-1">
                    <input class="form-control  search-input  dropdown-toggle" data-bs-toggle="dropdown" type="search"
                        placeholder="Search" aria-label="Search">
                    <svg height="13" width="13" class="search-icon">
                        <use href="#icon-search"></use>
                    </svg>
                </div>
                <button type="button" class="btn btn-site btn-block" data-bs-dismiss="offcanvas"
                    aria-label="Close">Search</button>

            </form>
            <hr>
            <a class="show-result" href="search.html">Show all results</a>
            <ul class="search-results">
                <li>
                    <h4>Credits</h4>
                    <p>Energy 2.1 Greenhouse Gas Emissions</p>
                    <p>Energy 2.4 Gas Consumption</p>
                </li>
                <li>
                    <h4>Tool notes</h4>
                    <p>Energy 2.1 Greenhouse Gas Emissions</p>
                    <p>Energy 2.4 Gas Consumption</p>
                </li>
                <li>
                    <h4>Projects</h4>
                    <p>21 Emission Street, Bruswick West, 3055</p>
                </li>
            </ul>
        </div>
    </div>
</div>


<!--mobile Project search offcanvas-->
<div class="offcanvas offcanvas-end search-offcanvas" tabindex="-1" id="projectsoffcanvas"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header text-center">
        <h5 class="offcanvas-title" id="searchoffcanvas">Project Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>Projects can be searched on project number, identifier, address or name</p>
        <div>
            <form class="search-form">
                <div class="search-input-wrap mb-1">
                    <input class="form-control  search-input  dropdown-toggle" data-bs-toggle="dropdown" type="search"
                        placeholder="Search" aria-label="Search">
                    <svg height="13" width="13" class="search-icon">
                        <use href="#icon-search"></use>
                    </svg>
                </div>
                <select class="form-select mb-1" aria-label="building select">
                    <option selected>All site types</option>
                    <option value="1">Warehouse 12-24</option>
                    <option value="2">Warehouse 24-34</option>
                    <option value="3">Warehouse 35-40</option>
                </select>
                <select class="form-select mb-1" aria-label="Space group slect">
                    <option selected>All councils</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select mb-1" aria-label="Spaces select">
                    <option selected>All engines</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select mb-1" aria-label="Spaces select">
                    <option selected>Status</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <button type="button" class="btn btn-site btn-block" data-bs-dismiss="offcanvas"
                    aria-label="Close">Search</button>

            </form>
        </div>
    </div>
</div>
            
            
        </header>
        <div class="inner">
            
<div class="text-block">
    <h1>Profile</h1>
    <p>Welcome to the Built Environment Sustainability Scorecard.</p>

    <p>Your project has been created. You can now set up your buildings and any dwellings or non-residential spaces.
        Once
        these are created the BESS category pages will populate with the credits that apply for your project. </p>

    <p>For further information on setting up your project please consult the Tool Notes.</p>
</div>
<div class="card-block">
    <div class="card-block-head">
        <div class="card-block-title">
            <h3># Core Details</h3>
            <a href="#" class="btn btn-site btn-edit">Edit</a>
        </div>
        <p>Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis
            lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
    </div>
    <table class="table table-bordered ">
        <tbody>
            <tr>
                <td>
                    <div class="aligner">
                        Label
                        <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                            <svg height="20" width="20">
                                <use href="#icon-help" />
                            </svg>
                        </a>
                    </div>
                </td>
                <td>29 Irvine Cres, Brunswick West, 3055, VIC</td>
            </tr>
            <tr>
                <td>
                    <div class="aligner">
                        Council
                        <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                            <svg height="20" width="20">
                                <use href="#icon-help" />
                            </svg>
                        </a>
                    </div>
                </td>
                <td>Moorland</td>
            </tr>
            <tr>
                <td>
                    <div class="aligner">
                        Aboriginal place name
                        <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                            <svg height="20" width="20">
                                <use href="#icon-help" />
                            </svg>
                        </a>
                    </div>
                </td>
                <td>Wurundjeri Woi wurrung</td>
            </tr>
            <tr>
                <td>
                    <div class="aligner">
                        Planning Number
                        <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                            <svg height="20" width="20">
                                <use href="#icon-help" />
                            </svg>
                        </a>
                    </div>
                </td>
                <td>123456789</td>
            </tr>
            <tr>
                <td>
                    <div class="aligner">
                        Site area
                        <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                            <svg height="20" width="20">
                                <use href="#icon-help" />
                            </svg>
                        </a>
                    </div>
                </td>
                <td>7934</td>
            </tr>
            <tr>
                <td>
                    <div class="aligner">
                        Square Metres
                        <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                            <svg height="20" width="20">
                                <use href="#icon-help" />
                            </svg>
                        </a>
                    </div>
                </td>
                <td>100</td>
            </tr>
            <tr>
                <td>
                    <div class="aligner">
                        Street Address
                        <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                            <svg height="20" width="20">
                                <use href="#icon-help" />
                            </svg>
                        </a>
                    </div>
                </td>
                <td>29 Irvine Cres, Brunswick West, 3055, VIC</td>
            </tr>
            <tr>
                <td>
                    <div class="aligner">
                        Site type
                        <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                            <svg height="20" width="20">
                                <use href="#icon-help" />
                            </svg>
                        </a>
                    </div>
                </td>
                <td>Lorum ipsum</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="card-block">
    <div class="card-block-head">
        <div class="card-block-title">
            <h3># Buildings</h3>
        </div>
        <p>Please enter details for each building in the development.
            You must account for all buildings. Enter and assign dwellings and/or non-residential spaces after entering
            the building information.</p>
        <p>For more information about buildings, please see <a href="#">Tool Notes.</a></p>
        <a href="#" class="btn btn-site btn-edit">Add new buildings</a>
    </div>
    <div class="add-items">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th colspan="2">
                        <div class="aligner">
                            <span>Title</span>
                            <a href="#" class="btn btn-site btn-edit">Edit</a>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="aligner">
                            Label
                            <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                                <svg height="20" width="20">
                                    <use href="#icon-help" />
                                </svg>
                            </a>
                        </div>
                    </td>
                    <td>Warehouse 1-7</td>
                </tr>
                <tr>
                    <td class="haslabelinfo">
                        <div class="aligner">
                            <div class="items-label">
                                Building height
                                <span>(number of levels excluding basements)</span>
                            </div>

                            <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                                <svg height="20" width="20">
                                    <use href="#icon-help" />
                                </svg>
                            </a>
                        </div>
                    </td>
                    <td>Moorland</td>
                </tr>
                <tr>
                    <td class="haslabelinfo">
                        <div class="aligner">
                            <div class="items-label">
                                Building footprint
                                <span>Square Metres</span>
                            </div>
                            <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                                <svg height="20" width="20">
                                    <use href="#icon-help" />
                                </svg>
                            </a>
                        </div>
                    </td>
                    <td>3056.0</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="add-items">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th colspan="2">
                        <div class="aligner">
                            <span>Title</span>
                            <a href="#" class="btn btn-site btn-edit">Edit</a>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="aligner">
                            Label
                            <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                                <svg height="20" width="20">
                                    <use href="#icon-help" />
                                </svg>
                            </a>
                        </div>
                    </td>
                    <td>Warehouse 1-7</td>
                </tr>
                <tr>
                    <td class="haslabelinfo">
                        <div class="aligner">
                            <div class="items-label">
                                Building height
                                <span>(number of levels excluding basements)</span>
                            </div>

                            <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                                <svg height="20" width="20">
                                    <use href="#icon-help" />
                                </svg>
                            </a>
                        </div>
                    </td>
                    <td>2</td>
                </tr>
                <tr>
                    <td class="haslabelinfo">
                        <div class="aligner">
                            <div class="items-label">
                                Building footprint
                                <span>Square Metres</span>
                            </div>
                            <a href="#" class="help" data-bs-toggle="tooltip" data-bs-title="Help Notes">
                                <svg height="20" width="20">
                                    <use href="#icon-help" />
                                </svg>
                            </a>
                        </div>
                    </td>
                    <td>3056.0</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


        </div>
    </div>

</body>


</html>

<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
