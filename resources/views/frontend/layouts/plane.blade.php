<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html class="js cors svg" lang="{{ config('app.locale') }}" xmlns="http://www.w3.org/1999/html">
<!--<![endif]-->
     <head>
        <meta charset="utf-8" />
        <title>Enesy | Đào tạo Kỹ sư chuyên nghiệp</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Đào tạo Kỹ sư chuyên nghiệp"
           name="description" />
        <meta content="" name="author" />
        <link href="{{'frontend/css/normalize.css'}}" rel="stylesheet" type="text/css" />
        <link href="{{'frontend/css/style.css'}}" rel="stylesheet" type="text/css" />
        <link href="{{'frontend/css/custom.css'}}" rel="stylesheet" type="text/css" />
        <link href="{{'frontend/css/layout.css'}}" rel="stylesheet" type="text/css" />
        <!--JqueryModal-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="{{'frontend/vender/jquery-modal/jquery.modal.js'}}" type="text/javascript" charset="utf-8"></script>
          <script src="{{'frontend/vender/jquery-modal/highlight/highlight.pack.js'}}" type="text/javascript" charset="utf-8"></script>
           <script type="text/javascript" charset="utf-8"> hljs.initHighlightingOnLoad(); </script>
     </head>
<body>
	@yield('body')
</body>
</html>