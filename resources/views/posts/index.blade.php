@extends('layouts')

@section('content')

  <div class="mb-4">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
      投稿を新規作成する
    </a>
  </div>
    <div class="container mt-4">
      @foreach($posts as $post)
        <div class="card mb-4">
          <div class="card-header">
            名前:
            {{ $post->lastname }}
            {{ $post->firstname }}
          </div>
          <div class="card-body">
            〒{{ $post->postal }}<br>
            {{ $post->prefectures }}
            {{ $post->town }}
            {{ $post->street }}<br>
            {{ $post->tel }}
            <p class="card-text">
            </p>
            <td>
                @if(Auth::user() -> id === $post -> user_id)
              <a class="card-link" href="{{ route('posts.edit',['post' => $post]) }}">
                編集・削除
              </a>
                @endif
            </td>
          </div>
          <div class="card-footer">
            <row class="mr-2">
              投稿日:{{ $post -> created_at -> format('Y.m.d') }}
              <div class="float-right">
                投稿者:{{ $post -> user -> name }}
              </div>
            </row>
          <p class="card-text">
          </p>
          </div>
        </div>
      @endforeach
      <div class="d-flex justify-content-center mb-5">
        {{ $posts -> links() }}
      </div>
    </div>
@endsection
