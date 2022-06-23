<!DOCTYPE HTML>
<html>

<head>
    <title>{{ $title ?? "Strona laravel"}}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

     @yield('menu')

    <hr />

    @yield('content')

    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/validator.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () =>{
            const selects = document.querySelectorAll("select");
            const datePickers = document.querySelectorAll('.datepicker');
            const timePickers = document.querySelectorAll('.timepicker');
            const selectsEl = M.FormSelect.init(selects);
            const timePickersEl = M.Timepicker.init(timePickers,{
                twelveHour: false,
                defaultTime: 'now',
            });
            const datePickersEl = M.Datepicker.init(datePickers,{
                defaultDate: new Date(),
                setDefaultDate: true,
            });
        });
    </script>
</body>

</html>
