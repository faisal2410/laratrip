<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png')}}">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/font_awesome_5_free.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/duotone-dark.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/fontawesome-iconpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap4-toggle.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/air-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">

    <script src="{{ asset('dist/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('dist/js/popper.min.js')}}"></script>
    <script src="{{ asset('dist/js/tooltip.js')}}"></script>
    <script src="{{ asset('dist/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('dist/js/moment.min.js')}}"></script>
    <script src="{{ asset('dist/js/stisla.js')}}"></script>
    <script src="{{ asset('dist/js/jscolor.js')}}"></script>
    <script src="{{ asset('dist/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('dist/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('dist/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('dist/js/iziToast.min.js')}}"></script>
    <script src="{{ asset('dist/js/fontawesome-iconpicker.js')}}"></script>
    <script src="{{ asset('dist/js/air-datepicker.min.js')}}"></script>
    <script src="{{ asset('dist/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('dist/js/bootstrap4-toggle.min.js')}}"></script>
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        @yield('main_content')

    </div>
</div>

<script src="{{ asset('dist/js/scripts.js')}}"></script>
<script src="{{ asset('dist/js/custom.js')}}"></script>

</body>
</html>
