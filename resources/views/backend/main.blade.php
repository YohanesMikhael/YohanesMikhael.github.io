<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title> My Admin </title>
        <link rel="website icon" type="png" href="assets/img/logo1.png">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/pace/pace.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/DataTables/datatables.min.css') }}" rel="stylesheet">   


        <!-- Theme Styles -->
        <link href="{{ asset('assets/css/main.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        

        <div class="page-container">
            
            <div class="page-sidebar">
                <a class="logo">Welcome </a>
                <ul class="list-unstyled accordion-menu">
                    <li class="{{ Request::route()->getName() == 'dashboard.index' ? 'active-page' : '' }}">
                        <a href="{{ route('dashboard.index') }}"><i data-feather="home"></i>Home</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'sosmed.index' ? 'active-page' : '' }}">
                        <a href="{{ route('sosmed.index') }}"><i data-feather="link"></i>Sosial Media</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'framework.index' || Request::route()->getName() == 'language.index' ? 'active-page' : '' }}">
                        <a href="#"><i data-feather="code"></i>Skills<i class="fas fa-chevron-right dropdown-icon"></i></a>
                        <ul class="">
                            <li>
                                <a href="{{ route('language.index') }}" class="{{ Request::route()->getName() == 'language.index' ? 'active' : '' }}">
                                    <i class="far fa-circle"></i>Language & Database 
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('framework.index') }}" class="{{ Request::route()->getName() == 'framework.index' ? 'active' : '' }}">
                                    <i class="far fa-circle"></i>Tools & Framework
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::route()->getName() == 'web.index' || Request::route()->getName() == 'mobile.index' ? 'active-page' : '' }}">
                        <a href="#"><i data-feather="server"></i>Projects<i class="fas fa-chevron-right dropdown-icon"></i></a>
                        <ul class="">
                            <li><a href="{{ route('web.index') }}" class="{{ Request::route()->getName() == 'web.index' ? 'active' : '' }}"><i class="far fa-circle"></i>Web Projects</a></li>
                            <li><a href="#"><i class="far fa-circle"></i>Mobile Projects</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::route()->getName() == 'feedback.index' ? 'active-page' : '' }}" >
                        <a href="{{ route('feedback.index') }}"><i data-feather="inbox"></i>Feedback</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'account.index' ? 'active-page' : '' }}" >
                        <a href="{{ route('account.index') }}"><i data-feather="shield"></i> Account</a>
                    </li>
                </ul>
                <a href="#" id="sidebar-collapsed-toggle"><i data-feather="arrow-right"></i></a>
            </div>

            <div class="page-content">

                <div class="page-header">
                    <nav class="navbar navbar-expand-lg d-flex justify-content-between">

                        <div class="header-title flex-fill">
                            <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>
                            <h5>{{ $title }}</h5>
                        </div>
                    
                        <div class="flex-fill" id="headerNav">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/photo.png') }}" alt=""></a>
                                    <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button class="dropdown-item" type="submit">
                                                <i class="mx-1"data-feather="log-out"></i>Logout
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>


                @yield('content')
            </div>
        </div>
        
        <!-- Javascripts -->
        <script src="{{ asset('assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }} "></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js') }} "></script>
        <script src="{{ asset('assets/plugins/pace/pace.min.js') }} "></script>
        <script src="{{ asset('assets/plugins/DataTables/datatables.min.js') }} "></script>
        <script src="{{ asset('assets/js/main.min.js') }} "></script>
        <script src="{{ asset('assets/js/datatables.js') }} "></script>
    </body>
</html>