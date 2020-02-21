<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <title>Error</title>
    <style>
    .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
    }
    .page_404  img{ width:100%;}

    .four_zero_four_bg{

        background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 400px;
        background-position: center;
    }
    .four_zero_four_bg h1{
        font-size:80px;
    }

    .four_zero_four_bg h3{
	    font-size:80px;
	}
    .link_404{
	color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}
    </style>
</head>
<body>
    @yield("contenido");
</body>
</html>
