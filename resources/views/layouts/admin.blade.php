@include('layouts.help')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRUD Laravel">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>

    <!-- Custom CSS -->
    <link href="{{ URL::asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    @yield('header-scripts')
    <!-- jquery voor o.a. loader script -->
    <script src="{{ asset("js/jquery.min.js") }}" type="text/javascript"></script>
</head>

<body id="wrapper">

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-book"></i>
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
              <li data-toggle="modal" data-target="#help"><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a></li>
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-fw"></i> Uitloggen
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>



    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{url('home')}}"><i class="fa fa-home fa-fw"></i> Startpagina</a>
                </li>
                <li>
                    <a href="{{ url ('books') }}"><i class="fa fa-book fa-fw"></i> Boeken toevoegen</a>
                </li>
                <li>
                    <a href="{{ url ('registerbooks') }}"><i class="fa fa-th-list fa-fw"></i> Alle geregistreerde boeken</a>
                </li>
                <li>
                    <a href="{{ url ('allstudents') }}"><i class="fa fa-mortar-board fa-fw"></i> Alle geregistreerde scholieren</a>
                </li>
                <li>
                    <a href="{{ url ('approvestudents') }}"><i class="fa fa-check-square-o fa-fw"></i> Aanvraag scholieren registratie</a>
                </li>
                <li>
                    <a href="{{ url ('returnbooks') }}"><i class="fa fa-exchange fa-fw"></i> Uitgifte en retour boeken</a>
                </li>
                <li>
                    <a href="{{ url ('issuedbooks') }}"><i class="fa fa-random fa-fw"></i> Boeken nu in omloop</a>
                </li>
                <br></br>
                <li>
                  <a href="{{ url('/logout') }}"
                     onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out fa-fw"></i> Logout
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">@yield('page-header')</h3>
        </div>
    </div>

    @yield('page-content')

</div>
<!-- /#page-wrapper -->


<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('dist/js/sb-admin-2.js') }}"></script>

<!-- Validator voor ISBN controle* -->
<script src="{{ asset("js/validator.js") }}" type="text/javascript"></script>


@yield('footer-scripts')

</body>
</html>
