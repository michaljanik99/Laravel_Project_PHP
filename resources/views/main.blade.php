<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $title ?? "Strona laravel"}}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<nav class="nav-extended blue darken-1">
    <div class="nav-wrapper" style="padding: 10px">
        <a href="/" class="brand-logo">Manage your tasks 2.0  <i class="large material-icons right">insert_chart</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/users">Users</a></li>
            <li><a href="/priorityes">Priorityes</a></li>
            <li><a href="/sprints">Sprints</a></li>
            <li><a href="/tasks">Tasks</a></li>
            <li><a href="/positions">Positions</a></li>
        </ul>
    </div>
    <div class="nav-content center-align" style="padding: 10px">
        <span class="nav-title ">{{ $title ?? "Strona laravel"}}</span>

    </div>
</nav>
@yield('menu')
@yield('content')
<footer class="page-footer blue darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Course design for advanced web services programming</h5>
                <p class="grey-text text-lighten-4">Design by Michal Janik</p>
                <p class="grey-text text-lighten-4"><a href="https://github.com/michaljanik99/Laravel_Project_PHP" class="blue-text text-lighten-4">Link to the project repository</a></p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/users">Users</a></li>
                    <li><a class="grey-text text-lighten-3" href="/priorityes">Priorityes</a></li>
                    <li><a class="grey-text text-lighten-3" href="/sprints">Sprints</a></li>
                    <li><a class="grey-text text-lighten-3" href="/tasks">Tasks</a></li>
                    <li><a class="grey-text text-lighten-3" href="/positions">Positions</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2022 WSB-NLU
            <a class="grey-text text-lighten-4 right" href="https://www.wsb-nlu.edu.pl/">Webiste WSB-NLU</a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/validator.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const selects = document.querySelectorAll("select");
        const datePickers = document.querySelectorAll('.datepicker');
        const timePickers = document.querySelectorAll('.timepicker');
        const selectsEl = M.FormSelect.init(selects);
        const timePickersEl = M.Timepicker.init(timePickers, {
            twelveHour: false,
            defaultTime: 'now',
        });
        const datePickersEl = M.Datepicker.init(datePickers, {
            defaultDate: new Date(),
            setDefaultDate: true,
        });
    });
</script>
</body>
</html>
