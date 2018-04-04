<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
    color: orange;
}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
}
</style>
</head>
<body>
    <div id="app">
        @include ('inc/postsNav');
        @include ('inc/messages');
        <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Sidebar - Quick links</div>
                            <div class="panel-body" align="center">
                                    <img src="../../public/images/add2.jpg" style="height:250px; width:200px;">
                                </div>
                                <div class="panel-footer">
                                    BMW
                                </div>

                                <div class="panel-body" align="center">
                                        <img src="../../public/images/add.jpg" style="height:200px; width:200px;">
                                    </div>
                                    <div class="panel-footer">
                                        Shoes
                                    </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</div> 
    </div>

    <!-- Scripts -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    

    <div class="footer">
            <p style="padding-top:10px;">@2018</p>
          </div>
</body>
</html>
