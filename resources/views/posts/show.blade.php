@extends('layouts')

@section('content')

  <div class="mb-4 text-right">
    <a class="btn btn-primary" href="{{ route('posts.edit', ['post' => $post]) }}">
      編集する
    </a>

    @if ($errors->has('lastname'))
      <div class="invalid-feedback">
        {{ $errors->first('lastname') }}
      </div>
    @endif

    @if ($errors->has('firstname'))
      <div class="invalid-feedback">
        {{ $errors->first('firstname') }}
      </div>
    @endif

    @if ($errors->has('postal'))
      <div class="invalid-feedback">
        {{ $errors->first('postal') }}
      </div>
    @endif

    @if ($errors->has('prefectures'))
      <div class="invalid-feedback">
        {{ $errors->first('prefectures') }}
      </div>
    @endif

    @if ($errors->has('town'))
      <div class="invalid-feedback">
        {{ $errors->first('town') }}
      </div>
    @endif

    @if ($errors->has('street'))
      <div class="invalid-feedback">
        {{ $errors->first('street') }}
      </div>
    @endif

    @if ($errors->has('tel'))
      <div class="invalid-feedback">
        {{ $errors->first('tel') }}
      </div>
    @endif

    <form
      style="display: inline-block"
      method="POST"
      action="{{ route('posts.destroy',['post' => $post]) }}"
    >
      @csrf
      @method('DELETE')

      <button class="btn btn-danger">
        削除する
      </button>
    </form>
      <div class="container mt-4">
        <div class="border p-4">
          <h1 class="h5 mb-4">
            {{ $post->title }}
          </h1>

          <p class="mb-5">
            {{!! nl2br(e($post->content)) !!}}
          </p>

        </div>
      </div>
  </div>
@endsection
