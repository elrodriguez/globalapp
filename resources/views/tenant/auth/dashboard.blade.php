@extends('tenant.layouts.guest')
@section('title', 'Dashboard')
@section('content')

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate subheader-fixed">
        <div class="sidebar-panel">
            <!-- Start:: user-->
            <div class="scroll-nav" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <div class="app-user text-center">
                    <div class="app-user-photo"><img src="{{ asset('theme/images/faces/1.jpg') }}" alt="" /></div>
                    <div class="app-user-info"><span class="app-user-name">Jesús Anaya</span>
                        <div class="app-user-control"><a class="control-item" href="#"><i class="material-icons"> settings</i></a>
                            <a class="control-item" href="#"><i class="material-icons"> email</i></a>
                            <a class="control-item" href="#"><i class="material-icons"> exit_to_app</i></a></div>
                    </div>
                </div>
                <!-- End:: user-->
                <!-- Start:: side-nav-->
                <div class="side-nav">
                    <div class="main-menu">
                        <nav class="sidebar-nav">
                            <ul class="metismenu show-on-load" id="ul-menu">
                                <li class="mm-active"><a class="" href="">
                                    <i class="fa fa-braille nav-icon"></i>&nbsp;&nbsp; Estadisticas</a>
                                </li>
                                <li class=""><a class="" href="">
                                    <i class="fa fa-shopping-cart nav-icon"></i>&nbsp;&nbsp; Pedidos del día</a>
                                </li>
                                <span class="main-menu-title">ANALIZAR</span>
                                <li class=""><a class="" href="">
                                    <i class="fa fa-clock nav-icon"></i>&nbsp;&nbsp; Historial de pedidos</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-cubes nav-icon"></i>&nbsp;&nbsp; Inventario</a>
                                </li>
                                <span class="main-menu-title">CONFIGURAR</span>
                                <li><a class="has-arrow" href="#"><i class="fa fa fa-tasks nav-icon"></i>&nbsp;&nbsp; Mi menú digital</a>
                                    <ul class="mm-collapse">
                                        <li><a href=""><i class="fa fa fa-fire nav-icon"></i>&nbsp;&nbsp; Mi página de productos</a></li>
                                        <li><a href=""><i class="fa fa fa-fire nav-icon"></i>&nbsp;&nbsp; Mi página de bienvenida</a></li>
                                    </ul>
                                </li>
                                <li><a class="has-arrow" href="#"><i class="fa fa-cogs nav-icon"></i>&nbsp;&nbsp; Ajustes</a>
                                    <ul class="mm-collapse">
                                        <li><a href=""><i class="fa fa fa-fire nav-icon"></i>&nbsp;&nbsp; Recepción de pedidos</a></li>
                                        <li><a href=""><i class="fa fa fa-fire nav-icon"></i>&nbsp;&nbsp; Mi negocio y mi equipo</a></li>
                                    </ul>
                                </li>
                                <span class="main-menu-title">MARKETING</span>
                                <li><a class="has-arrow" href="#"><i class="fa fa-bullhorn nav-icon"></i>&nbsp;&nbsp; Mi publicidad</a>
                                    <ul class="mm-collapse">
                                        <li><a href=""><i class="fa fa fa-fire nav-icon"></i>&nbsp;&nbsp; Publicidad gratuita</a></li>
                                        <li><a href=""><i class="fa fa fa-fire nav-icon"></i>&nbsp;&nbsp; Crear mis diseños</a></li>
                                        <li><a href=""><i class="fa fa fa-fire nav-icon"></i>&nbsp;&nbsp; Cupones de descuento</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-users nav-icon"></i>&nbsp;&nbsp; Mis clientes</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-wrap">
            <!-- Start::Mobile header-->
            <div class="ul-mobile-top-header bg-white"><img class="ul-brand-mobile" src=" {{ asset('theme/images/logo.png') }} " alt="" />
                <div class="flex-grow-1"></div>
                <button class="sidebar-full-toggle btn btn-icon btn-primary rounded-circle text-habicon">
                    <i class="material-icons">menu</i>
                </button>
                <i class="material-icons text-habicon ul-mobile-header-toggle">more_horiz</i>
            </div>
            <!-- End::Mobile header  -->
            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <img src=" {{ asset('theme/images/logo.png') }} " style="width: 150px;" alt="" />
                
                <div class="ul-header-topbar">
                    <div class="flex-grow-1"></div>
                    <div class="ul-search-full-width">
                        <button class="toggle-search btn btn-opacity-default rounded-circle btn-icon mx-xs" type="button"><i class="material-icons">search</i></button>
                        <div class="ul-search-input-area">
                            <input id="app-search" type="text" placeholder="Explore Arctic..." aria-label="Search" />
                            <button class="btn btn-opacity-default rounded-circle btn-icon toggle-search" type="button"><i class="material-icons">close</i></button>
                        </div>
                        <div class="ul-search-result-area">
                            <div class="search-result"></div>
                        </div>
                    </div>
                    
                    <button class="btn btn-opacity-default rounded-circle btn-icon btn-badge" data-sidebar-panel="asideNotification" title="Carrito de Compras" ><span class="badge badge-success">1</span><i class="material-icons">local_grocery_store</i></button>
                    
                    <button class="btn btn-opacity-default rounded-circle btn-icon btn-badge" data-sidebar-panel="asideNotification" title="Notificaciones" ><span class="badge badge-danger">3</span><i class="material-icons">notifications</i></button>
                    
                    <div class="dropdown language-dropdown mx-xx">
                        <div class="header-btn-group">
                            <button class="btn btn-opacity-default rounded-circle btn-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar-xs rounded-circle" src=" {{ asset('theme/images/flags/1x1/pe.svg') }} " alt="" /></button>
                        </div>
                    </div>
                    <div class="dropdown profile-dropdown ml-xs">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded" id="dropdownTopUserProfile" type="button" data-sidebar-panel="asideProfile"><span class="m-0 mr-2 font-weight-normal">Hi, Jesús Anaya</span><img class="avatar-sm rounded-circle mr-1" src=" {{ asset('theme/images/faces/1.jpg') }} " /></button>
                            <div aria-labelledby="dropdownTopUserProfile">
                                <div class="card dropdown-menu p-0 ul-avatar-dropdown">
                                    <div class="card-header bg-primary">
                                        <div class="ul-avatar-dropdown-container"><img class="avatar-md rounded-circle mr-2" src=" {{ asset('theme/images/faces/1.jpg') }} " />
                                            <div class="content">
                                                <p class="text-white font-weight-semi m-0">Jesús Anaya</p>
                                                <p class="text-small text-muted my-xs">BTS,func Idi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-xl"><a class="dropdown-item link-alt" href="#"><i class="material-icons icon icon-sm">account_box</i>My Perfil</a>
                                        <a class="dropdown-item link-alt" href="#"><i class="material-icons icon icon-sm">assignment</i>My Tasks</a>
                                        <a class="dropdown-item link-alt" href="#"><i class="material-icons icon icon-sm">message</i>Messages</a>
                                        <a class="dropdown-item link-alt" href="#"><i class="material-icons icon icon-sm">settings</i>Settings</a></div>
                                    <div class="card-footer text-muted">
                                        <button class="btn btn-raised btn-raised-primary btn-sm" type="button">Cerrar Sesión</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End::Main header-->
            <!-- Start:: content body-->
            <div class="main-content-body">
                <!-- Start:: content (Your custom content)-->
                <div class="subheader px-lg" style="padding: 10px;">
                    <div class="subheader-container">
                        <img style="width: 100%; height: 50px;" src=" {{ asset('theme/images/promo-header.png') }} " alt="">
                    </div>
                </div>
                
                <div class="container mt-lg">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-lg">
                                    <div class="card">
                                        <div class="card-body py-0 d-flex justify-content-between align-items-center">
                                            <div class="mb-3"><span class="text-small text-muted">Total </span>
                                                <h3 class="font-weight-bold">5672</h3>
                                                <div class="d-flex align-items-center"><span class="badge badge-opacity badge-primary rounded-circle badge-xxs mr-1"><i class="material-icons">call_made</i></span><span class="text-primary text-small font-weight-bold">+14% Inc</span></div>
                                            </div>
                                            <div id="management-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-lg">
                                    <div class="card">
                                        <div class="card-body py-0 d-flex justify-content-between align-items-center">
                                            <div class="mb-3"><span class="text-small text-muted">Shortlist</span>
                                                <h3 class="font-weight-bold">3045</h3>
                                                <div class="d-flex align-items-center"><span class="badge badge-opacity badge-warning rounded-circle badge-xxs mr-1"><i class="material-icons">call_made</i></span><span class="text-warning text-small font-weight-bold">+04% Inc</span></div>
                                            </div>
                                            <div id="management-chartTwo"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 mb-lg">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-lg">
                                                <div class="card-title m-0">Job Applications Last Week</div>
                                                <div class="dropdown">
                                                    <button class="btn btn-opacity btn-primary rounded-circle btn-sm btn-icon" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons text-14">date_range</i></button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Year</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Week</a></div>
                                                </div>
                                            </div>
                                            <div id="jobManagement_chart4" style="height:320px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 mb-lg">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center flex-wrap mb-md">
                                                <div class="card-title m-0">Acquisitions</div>
                                                <div class="dropdown">
                                                    <button class="btn btn-opacity btn-primary rounded-circle btn-sm btn-icon" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons text-14">date_range</i></button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                                </div>
                                            </div>
                                            <div class="d-flex jsutify-content-between align-items-center my-lg">
                                                <div class="d-flex align-items-center w-50"><i class="material-icons text-10 text-primary mr-2">lens</i>
                                                    <p class="font-weight-medium m-0">All</p>
                                                </div>
                                                <div class="flex-grow-1 mr-md w-30">
                                                    <div class="progress-wrapper">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="m-0">1290</p>
                                            </div>
                                            <div class="d-flex jsutify-content-between align-items-center my-lg">
                                                <div class="d-flex align-items-center w-50"><i class="material-icons text-10 text-warning mr-2">lens</i>
                                                    <p class="font-weight-medium m-0">Shortlisted</p>
                                                </div>
                                                <div class="flex-grow-1 mr-md w-30">
                                                    <div class="progress-wrapper">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="m-0">15%</p>
                                            </div>
                                            <div class="d-flex jsutify-content-between align-items-center my-lg">
                                                <div class="d-flex align-items-center w-50"><i class="material-icons text-10 text-primary mr-2">lens</i>
                                                    <p class="font-weight-medium m-0">Contacted</p>
                                                </div>
                                                <div class="flex-grow-1 mr-md w-30">
                                                    <div class="progress-wrapper">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="m-0">65%</p>
                                            </div>
                                            <div class="d-flex jsutify-content-between align-items-center my-lg">
                                                <div class="d-flex align-items-center w-50"><i class="material-icons text-10 text-danger mr-2">lens</i>
                                                    <p class="font-weight-medium m-0">Rejected</p>
                                                </div>
                                                <div class="flex-grow-1 mr-md w-30">
                                                    <div class="progress-wrapper">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="m-0">35%</p>
                                            </div>
                                            <div class="d-flex jsutify-content-between align-items-center my-lg">
                                                <div class="d-flex align-items-center w-50"><i class="material-icons text-10 text-info mr-2">lens</i>
                                                    <p class="font-weight-medium m-0">On Hold</p>
                                                </div>
                                                <div class="flex-grow-1 mr-md w-30">
                                                    <div class="progress-wrapper">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="m-0">35%</p>
                                            </div>
                                            <div class="d-flex jsutify-content-between align-items-center my-lg">
                                                <div class="d-flex align-items-center w-50"><i class="material-icons text-10 text-primary mr-2">lens</i>
                                                    <p class="font-weight-medium m-0">Finalised</p>
                                                </div>
                                                <div class="flex-grow-1 mr-md w-30">
                                                    <div class="progress-wrapper">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="m-0">25%</p>
                                            </div>
                                            <div class="d-flex jsutify-content-between align-items-center my-lg">
                                                <div class="d-flex align-items-center w-50"><i class="material-icons text-10 text-success mr-2">lens</i>
                                                    <p class="font-weight-medium m-0">Hired</p>
                                                </div>
                                                <div class="flex-grow-1 mr-md w-30">
                                                    <div class="progress-wrapper">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="m-0">15%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mb-lg">
                                    <div class="table-responsive shadow-6dp bg-card rounded">
                                        <table class="table borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-muted border-0">Job Post</th>
                                                    <th scope="col" class="text-muted border-0">Posted at</th>
                                                    <th scope="col" class="text-muted border-0">Applicants</th>
                                                    <th scope="col" class="text-muted border-0"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle font-weight-semi border-0"><a class="text-body" href="">Senior Fullstack Engineer</a></td>
                                                    <td class="align-middle border-0">
                                                        <span class="text-muted">01/10/2020</span>
                                                    </td>
                                                    <td class="align-middle border-0">
                                                        <div class="col-md-4 d-flex align-items-center avatar-group m-0">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/001-man.svg') }} " data-toggle="tooltip" data-placement="top" title="John M">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/002-woman.svg') }} " data-toggle="tooltip" data-placement="top" title="Alison W">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/007-woman-2.svg') }} " data-toggle="tooltip" data-placement="top" title="Alisa J">
                                                            <span class="badge rounded-circle gray-300 badge-sm">10+</span>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle border-0">
                                                        <div class="dropdown d-inline">
                                                            <button class="btn btn-light btn-icon btn-sm rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">assignment</i>View Job Post</a>
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">group</i>View Applicants</a>
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">person_add</i>Invite Applicant</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle font-weight-semi border-0"><a class="text-body" href="">Freelance Java Developer</a></td>
                                                    <td class="align-middle border-0">
                                                        <span class="text-muted">01/10/2020</span>
                                                    </td>
                                                    <td class="align-middle border-0">
                                                        <div class="col-md-4 d-flex align-items-center avatar-group m-0">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/003-man-1.svg') }} " data-toggle="tooltip" data-placement="top" title="John M">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/004-bald.svg') }} " data-toggle="tooltip" data-placement="top" title="Alison W">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/006-woman-1.svg') }} " data-toggle="tooltip" data-placement="top" title="Alisa J">
                                                            <span class="badge rounded-circle gray-300 badge-sm">6+</span>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle border-0">
                                                        <div class="dropdown d-inline">
                                                            <button class="btn btn-light btn-icon btn-sm rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">assignment</i>View Job Post</a>
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">group</i>View Applicants</a>
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">person_add</i>Invite Applicant</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle font-weight-semi border-0"><a class="text-body" href="">Python Developer</a></td>
                                                    <td class="align-middle border-0">
                                                        <span class="text-muted">01/10/2020</span>
                                                    </td>
                                                    <td class="align-middle border-0">
                                                        <div class="col-md-4 d-flex align-items-center avatar-group m-0">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/006-woman-1.svg') }} " data-toggle="tooltip" data-placement="top" title="John M">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/002-woman.svg') }} " data-toggle="tooltip" data-placement="top" title="Alison W">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/007-woman-2.svg') }} " data-toggle="tooltip" data-placement="top" title="Alisa J">
                                                            <span class="badge rounded-circle gray-300 badge-sm">4+</span>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle border-0">
                                                        <div class="dropdown d-inline">
                                                            <button class="btn btn-light btn-icon btn-sm rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">assignment</i>View Job Post</a>
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">group</i>View Applicants</a>
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">person_add</i>Invite Applicant</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle font-weight-semi border-0"><a class="text-body" href="">Product Designer</a></td>
                                                    <td class="align-middle border-0">
                                                        <span class="text-muted">01/10/2020</span>
                                                    </td>
                                                    <td class="align-middle border-0">
                                                        <div class="col-md-4 d-flex align-items-center avatar-group m-0">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/003-man-1.svg') }} " data-toggle="tooltip" data-placement="top" title="John M">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/004-bald.svg') }} " data-toggle="tooltip" data-placement="top" title="Alison W">
                                                            <img class="avatar-sm rounded-circle" src=" {{ asset('theme/images/avatars/006-woman-1.svg') }} " data-toggle="tooltip" data-placement="top" title="Alisa J">
                                                            <span class="badge rounded-circle gray-300 badge-sm">9+</span>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle border-0">
                                                        <div class="dropdown d-inline">
                                                            <button class="btn btn-light btn-icon btn-sm rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">assignment</i>View Job Post</a>
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">group</i>View Applicants</a>
                                                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">person_add</i>Invite Applicant</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mb-md">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-md">
                                                <div class="card-title m-0">Application Received Time</div>
                                                <div class="dropdown">
                                                    <button class="btn btn-opacity btn-primary rounded-circle btn-sm btn-icon" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons text-14">date_range</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: top, left; top: 38px; left: 0px;"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                                </div>
                                            </div>
                                            <div id="jobManagement_chart5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 p-0">
                            <div class="col-xl-12 col-lg-12 mb-md">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 text-center mb-lg"><img class="rounded-circle avatar-xl mb-md" src="assets/images/faces/15.jpg" alt="" srcset="" />
                                                <div class="card-title m-0">Jhon Doe</div>
                                                <p class="text-muted mb-xs">HR Manager</p>
                                                <div class="d-flex align-items-center justify-content-center"><span class="badge badge-opacity badge-primary rounded-circle badge-xxs mr-sm"><i class="material-icons text-14 align-middle">location_on</i></span><span class="text-primary text-12">New York, US</span></div>
                                            </div>
                                            <div class="col-12 mb-xxl">
                                                <div class="heading-label">Jobs Posted</div>
                                                <div class="card bg-primary text-white">
                                                    <div class="card-body pr-sm d-flex justify-content-between">
                                                        <div class="flex-1">
                                                            <div class="card-title text-white mb-xs text-15">Sr. Software Developer</div>
                                                            <p class="m-0 text-12"><span class="badge badge-warning badge-xxs rounded-circle mr-xs">95</span>Total Applications</p>
                                                        </div>
                                                        <div class="dropdown d-flex align-items-center">
                                                            <button class="btn btn-primary btn-icon btn-sm rounded-circle" id="dropdownMenuButton322" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons text-white">more_vert</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton322" x-placement="bottom-start" style="position: absolute; will-change: top, left; top: 38px; left: 0px;"><a class="dropdown-item" href="#"> <i class="material-icons icon icon-sm">visibility_off</i>Unpublish</a><a class="dropdown-item" href="#"> <i class="material-icons icon icon-sm">edit</i>Edit Job Post</a><a class="dropdown-item" href="#"> <i class="material-icons icon icon-sm">delete</i>Delete</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="ul-list-group-1">
                                                    <h6 class="heading-label">Reminder</h6>
                                                    <div class="ul-list-item mb-md">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i class="material-icons text-muted">view_week</i></span>
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-small font-weight-semi m-0">Subscription expires today</h6>
                                                                <small class="text-muted text-small">23 December 2019</small>
                                                            </div>
                                                            <div class="ul-reminder-action">
                                                                <button class="btn rounded-circle btn-icon">
                                                                    <i class="material-icons text-muted">more_horiz</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-list-item mb-md">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i class="material-icons text-muted">close</i></span>
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-small font-weight-semi m-0">You unpublished a Job</h6>
                                                                <small class="text-muted text-small">23 December 2019</small>
                                                            </div>
                                                            <div class="ul-reminder-action">
                                                                <button class="btn rounded-circle btn-icon">
                                                                    <i class="material-icons text-muted">more_horiz</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-list-item mb-md">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i class="material-icons text-muted">person</i></span>
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-small font-weight-semi m-0">5 New applicants</h6>
                                                                <small class="text-muted text-small">23 December 2019</small>
                                                            </div>
                                                            <div class="ul-reminder-action">
                                                                <button class="btn rounded-circle btn-icon">
                                                                    <i class="material-icons text-muted">more_horiz</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-list-item mb-md">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i class="material-icons text-muted">textsms</i></span>
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-small font-weight-semi m-0">New Commnet on job post</h6>
                                                                <small class="text-muted text-small">23 December 2019</small>
                                                            </div>
                                                            <div class="ul-reminder-action">
                                                                <button class="btn rounded-circle btn-icon">
                                                                    <i class="material-icons text-muted">more_horiz</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-md">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-md flex-wrap">
                                            <div class="card-title m-0">Candidates by Gender</div>
                                            <div class="dropdown">
                                                <button class="btn btn-opacity btn-primary rounded-circle btn-icon btn-sm" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons text-14">date_range</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: top, left; top: 38px; left: 0px;"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                            </div>
                                        </div>
                                        <div id="jobManagement_chart6"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <div class="flex-grow-1"></div>
                <div class="bg-card px-lg py-md d-flex justify-content-between align-items-center flex-wrap shadow-6dp">
                    <p class="text-muted m-0">Todos los derechos reservados &copy; Habicon 2022</p>
                </div>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->
        </div>
        <div class="narrow-sidebar"><span class="m-auto"> </span>
            <button class="btn btn-raised btn-raised-primary rounded-circle btn-sm btn-icon mr-0 my-12 sidebar-customizer-settings open" data-toggle="tooltip" data-placement="left" title="Theme Settings"><i class="material-icons">settings</i></button>
            <div class="ul-customizer bg-white">
                <div class="ul-customizer-header d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center"><span class="material-icons mr-2 text-primary">
                            settings
                        </span>
                        <h6 class="m-0">Theme Settings</h6>
                    </div>
                    <button class="btn rounded-circle btn-sm btn-icon m-0 customizer-close"><i class="material-icons">close</i></button>
                </div>
                <div class="ul-customizer-body p-md">
                    <div class="mt-0 mb-lg">
                        <p class="text-gray-700 font-weight-normal">Sidebar Theme</p>
                        <div class="colors" id="colors">
                            <div class="color" id="color1" data-sidebar-color="sidebar-theme-white">
                                <div class="sub-color light"></div>
                            </div>
                            <div class="color bg-slate" id="color2" data-sidebar-color="sidebar-theme-slate">
                                <div class="sub-color dark"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><span class="m-auto"></span>
            <button class="btn btn-raised btn-raised-primary rounded-circle btn-sm btn-icon mr-0 narrow-sidebar-toggle-button open"><i class="material-icons">
                    keyboard_arrow_right
                </i></button>
            <div class="toggle"></div>
        </div>
    </div>
    <!--begin::sidebar-panel-notification-->
    <div class="ul-sidebar-panel" id="asideNotification" data-position="right">
        <!--begin::sidebar-panel-notification content-->
        <div class="pt-lg pb-md">
            <div class="ul-sidebar-panel-top pb-lg px-lg">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="heading-label p-0">Notifications</div><i class="material-icons icon icon-sm hover-gray ul-sidebar-panel-close">close</i>
                </div>
            </div>
            <div data-perfect-scrollbar="" data-suppress-scroll-x="true" style="height: calc(100vh - 170px)">
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span class="badge badge-opacity rounded-circle badge-primary mr-md"><i class="material-icons">cloud_upload</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">Watson uploaded a file</a></p>
                            <p class="text-small text-muted m-0">15 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                        <div class="px-md py-sm gray-100 rounded"><img class="icon-sm" src="assets/images/file-types/001-pdf.svg" /><span class="text-small font-weight-semi"> <a class="text-body" href="#">progress_report.pdf</a></span></div>
                    </div>
                </div>
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span class="badge badge-opacity rounded-circle badge-primary mr-md"><i class="material-icons">description</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">John commented on a task</a></p>
                            <p class="text-small text-muted m-0">5 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                        <div class="px-md py-sm gray-100 rounded"><span class="text-small">
                                What's the progress of this project? <br>Can you send me the files?</span></div>
                    </div>
                </div>
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span class="badge badge-opacity rounded-circle badge-warning mr-md"><i class="material-icons">announcement</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">John opened a new Topic</a></p>
                            <p class="text-small text-muted m-0">45 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                    </div>
                </div>
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span class="badge badge-opacity rounded-circle badge-primary mr-md"><i class="material-icons">cloud_upload</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">John uploaded a file</a></p>
                            <p class="text-small text-muted m-0">15 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                        <div class="px-md py-sm gray-100 rounded"><img class="icon-sm" src="assets/images/file-types/004-xlsx.svg" /><span class="text-small font-weight-semi"> <a class="text-body" href="#">budget_report.xlsx</a></span></div>
                    </div>
                </div>
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span class="badge badge-opacity rounded-circle badge-warning mr-md"><i class="material-icons">announcement</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">John opened a new Topic</a></p>
                            <p class="text-small text-muted m-0">45 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                    </div>
                </div>
            </div>
            <div class="px-xl py-md"><a class="btn btn-opacity btn-primary w-full">View All Notificaitons</a></div>
        </div>
        <!--end::sidebar-panel-notification content-->
    </div>
    <!--end::sidebar-panel-notification-->

    
    <!--Sidebar panel Profile-->
    <div class="ul-sidebar-panel" id="asideProfile" data-position="right">
        <div class="pt-lg pb-md px-lg">
            <div class="ul-sidebar-panel-top mb-md">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="heading-label p-0">Profile</div>
                    <div class="flex-grow-1"></div><i class="material-icons icon icon-sm hover-gray ul-sidebar-panel-close">close</i>
                </div>
            </div>
            <div data-perfect-scrollbar="" data-suppress-scroll-x="true" style="height: calc(100vh - 112px)">
                <div class="ul-sidebar-aside-profile d-flex mb-xxl align-items-center"><img class="rounded-circle avatar-lg" src="assets/images/faces/1.jpg" alt="" />
                    <div class="ul-sidebar-aside-info ml-md"><a class="link-alt" href="#">
                            <div class="font-weight-semi">Tim Clarkson</div>
                        </a>
                        <p class="text-small text-muted mb-sm">Front End Developer</p>
                        <div class="d-flex ml--xs"><a class="link-alt" href="#"><i class="fab fa-google text-muted icon icon-xs hover-gray"></i></a><a class="link-alt" href="#"><i class="fab fa-twitter text-muted icon icon-xs hover-gray"></i></a><a class="link-alt" href="#"><i class="fab fa-facebook-f text-muted icon icon-xs hover-gray"></i></a></div>
                    </div>
                </div>
                <div class="heading-label">Skills </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm">A</span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Angular</p>
                        <p class="text-muted text-small">Frontend framework</p>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress-wrapper mb-xl">
                            <div class="progress-info"><span></span>
                                <div class="progress-percentage"><span>80%</span></div>
                            </div>
                            <div class="progress mb-md">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm">V</span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Vue Js</p>
                        <p class="text-muted text-small">Frontend framework</p>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress-wrapper mb-xl">
                            <div class="progress-info"><span></span>
                                <div class="progress-percentage"><span>30%</span></div>
                            </div>
                            <div class="progress mb-md">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm">R</span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">React </p>
                        <p class="text-muted text-small">Frontend framework</p>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress-wrapper mb-xl">
                            <div class="progress-info"><span></span>
                                <div class="progress-percentage"><span>50%</span></div>
                            </div>
                            <div class="progress mb-md">
                                <div class="progress-bar bg-warning" role="success" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm">W</span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Wordpress Website</p>
                        <p class="text-muted text-small">CMS</p>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress-wrapper mb-xl">
                            <div class="progress-info"><span></span>
                                <div class="progress-percentage"><span>30%</span></div>
                            </div>
                            <div class="progress mb-md">
                                <div class="progress-bar bg-success" role="warning" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-lg"></div>
                <div class="heading-label">Activity</div>
                <div class="d-flex mb-md align-items-center"><span class="badge rounded-circle badge-primary mr-sm">JH</span>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">Urgent task completed</a></p><span class="text-small text-muted">By Jhon at 3:30 PM</span>
                    </div>
                </div>
                <div class="d-flex mb-md align-items-center"><span class="badge rounded-circle badge-success mr-sm">W</span>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">Task from project Alpha</a></p><span class="text-small text-muted">By Watson at 1:30 PM</span>
                    </div>
                </div>
                <div class="d-flex mb-md align-items-center"><span class="badge rounded-circle badge-success mr-sm">R</span>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">Task from project Beta</a></p><span class="text-small text-muted">By Rafi at 9:30 AM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #000d1d; padding: 25px 15px;">
            <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Curso: SIAF - Cierre Contable Anual | Trailer</h5>
            
            </div>
            <div class="modal-body" style="padding: 10px;">
                <iframe width="100%" height="360" src="https://www.youtube.com/embed/YnhJNZxAH7A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer" style="margin-top: -10px;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="right: 50px;">Regresar</button>
            <button type="button" class="btn btn-raised btn-outline-primary" style="right: 50px;"><i class="fa fa-cart-arrow-down mr-sm"></i> Compralo x S/. 50 Soles</button>
            </div>
        </div>
        </div>
    </div>


    <div class="ul-sidebar-panel-overlay"></div>
</body>

@stop