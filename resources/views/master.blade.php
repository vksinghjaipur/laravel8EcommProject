<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('assets/footer.css')}}">
    <script src="{{asset('assets/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    
    <title>Ecommerce Project</title>
</head>
<body>
{{View::make('header')}}

@yield('content')

{{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:30px;
    }

</style>
</html>