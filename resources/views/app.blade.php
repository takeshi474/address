<!DOCTYPE html>
<html lang="ja" dir="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="google=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap4 CDN -->
    <title>@yield('title') - App Name</title>

  </head>
  <content>
    {{-- コンテンツの表示　--}}
    <div class="container">
      @yield('content')
    </div>
  </content>
</html>
