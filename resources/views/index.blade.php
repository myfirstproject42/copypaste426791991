<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Copypaste</title>
        <link rel="stylesheet" href="{{asset('bs/css/bootstrap.min.css')}}"/>
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
              <a class="navbar-brand" href="/">Copypaste</a>
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
                        <div class="row">
                            <div class="col-md-8">
                                @if(count($errors)>0)
                                    <div class="alert alert-danger">
                                        <ul> 
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>>
                                @endif
                                <h1>Добавить текст/код</h1>
                                <form method="POST" action="{{route('addPaste')}}">  
                                    <label for="description" class="control-label">Код/текст</label>
                                    <textarea class="form-control" rows="10" name="text"></textarea>
                                    <label class="control-label" for="title">Название</label>
                                    <input class="form-control" type="text" name="name"/>
                                    <label class="control-label" for="expire">Срок</label>
                                    <select class="form-control" name="expirate">
                                        <option>10 минут</option>
                                        <option>1 час</option>
                                        <option>3 часа</option>
                                        <option>1 день</option>
                                        <option>1 неделя</option>
                                        <option>1 месяц</option>
                                        <option>Без ограничений</option>
                                    </select>
                                    <label class="control-label" for="access">Доступ</label>
                                    <select class="form-control" name="access">
                                        <option>По ссылке</option>
                                        <option>Доступен всем</option>
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-default">Добавить</button>
                                    {{ csrf_field()}}
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                    
                    <div class="sidebar-module">
                        <h4>Последние публичные данные</h4>
                        <ol class="list-unstyled">
                            @foreach($pas as $pass)
                                <li><a href="{{$pass->hash_id}}">{{$pass->name}}</a></li>
                                <p>Запись добавлена {{$pass->created_at}}</p>
                            @endforeach            
                        </ol>
                    </div>
                    <div class="sidebar-module">
                        <h4>Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

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