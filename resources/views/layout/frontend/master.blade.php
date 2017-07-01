<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    
    <title>TUNNELLING INTERNATIONAL</title>
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet"> 
    <!-- css -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/fonts.css') !!}" rel="stylesheet" type="text/css" />

    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>	  
	  @include('layout.frontend.header')
	  
	  @yield('content')	  	
	  @include('layout.frontend.footer')
    
  </body>
</html>