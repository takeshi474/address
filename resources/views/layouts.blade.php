<!DOCTYPE html>
<html lang="ja" dir="ja">
  <head>
    <meta charset="utf-8">
    <title>Laravel address</title>

    <style>
    .flex-center {
        align-items: right;
        display: flex;
        justify-content: center;
    }
    </style>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >

  </head>
  <!-- コンテンツの表示 -->
  <body>
    <header class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('') }}">
        Laravel address
      </a>
    </div>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">ホーム</a>
                @else
                    <a href="{{ url('/login') }}">ログイン</a>
                    @if (Route::has('register'))
                        <a href="{{ url('/register') }}">新規登録</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

  </header>

  <div>
    @yield('content')
  </div>
  </body>
</html>
