<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Copypaste</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('bs/css/bootstrap.min.css')}}"/>
        <!-- Custom styles for this template -->
        <style type="text/css">
          body {
            padding-top: 40px;
            padding-bottom: 40px;
          }
        </style>
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand"  href="/">Copypaste</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">О сервисе</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                    <li><a href="#autho">Авторизация</a></li>
                </ul>
            </div>
          </div>
        </div>


        
        <div class="container">
          <div class="blog-header">
            <h1 class="blog-title">Copypaste</h1>
            <p class="lead blog-description">Плагиат на pastebin.com</p>
          </div>
          <div class="row">
            <div class="col-sm-8 blog-main">
            <div class="container">
            @if($pasta)
               <div class="row">
                <h1 name="name">{{$pasta->name}}</h1>
                <div class="col-md-8">
                    <pre name="text">{!!$pasta->text!!}</pre>
                    <p>Создано {{$pasta->created_at}}</p>
                </div>
            
                
            </div>
            
            @else
            <h1>Паста недоступна</h1>
            @endif
            
        </div>  
       
              

            </div>

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
              <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              </div>
              <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                  <li><a href="#">January 2014</a></li>
                  <li><a href="#">December 2013</a></li>
                  <li><a href="#">November 2013</a></li>
                  <li><a href="#">October 2013</a></li>
                  <li><a href="#">September 2013</a></li>
                  <li><a href="#">August 2013</a></li>
                  <li><a href="#">July 2013</a></li>
                  <li><a href="#">June 2013</a></li>
                  <li><a href="#">May 2013</a></li>
                  <li><a href="#">April 2013</a></li>
                  <li><a href="#">March 2013</a></li>
                  <li><a href="#">February 2013</a></li>
                </ol>
              </div>
              <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                  <li><a href="#">GitHub</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Facebook</a></li>
                </ol>
              </div>
            </div><!-- /.blog-sidebar -->

          </div><!-- /.row -->

        </div><!-- /.container -->

        <div class="blog-footer">
            <p>
                <a href="#">Наверх!</a>
            </p>
        </div>

        <script src="{{asset('bs/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bs/css/bootstrap-theme.min.css')}}"></script>
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js')}}"></script>
        <script src="{{asset('bs/js/jsdocs.min.js')}}"></script>
  </body>
</html>