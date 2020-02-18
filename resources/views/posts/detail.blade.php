@extends('layouts.app')
@section('content')
<p>タイトル：{{ $title }}</p>
<p>詳細内容：{{ $content }}</p>
<p>ユーザID：{{ $user_id }}</p>

<div class="row">
  <div class="col-sm-offset-2 col-sm-10"></div>
    <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" onclick=''/>
</div>
@endsection
