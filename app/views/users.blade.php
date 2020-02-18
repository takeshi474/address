<!DOCTYPE html>
<html lang="ja" dir="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Laravel Quickstart</h1>

    @yield(`content`)
    @extends(`layout`)
    @section(`content`)
      Users!
    @stop
  </body>
</html>
