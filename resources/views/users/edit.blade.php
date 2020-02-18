@extends('layouts')

@section('content')
  <div class="container mt-4">
    <div class="border p-4">
      <h1 class="h5 mb-4">
        ユーザーの編集
      </h1>

      <form method="user" action="{{ route('users.edit',['user' => $user]) }}">
        @csrf
        @method('PUT')

        <fieldset class="mb-4 md-4">
          <div class="form-row col-md-2">
            <label for="name">
              名前
            </label>
            <input
              id="name"
              name="name"
              class="form-control {{ $errors -> has('name')? 'is-invalid':''}}"
              value="{{ old('name')?: $user -> name }}"
              type="text"
            >
            @if($errors -> has('name'))
              <div class="invalid-feedback">
                {{ $errors -> first('name') }}
              </div>
            @endif
          </div>

          <div class="form-row col-md-2">
            <label for="email">
              メール
            </label>
            <input
              id="email"
              name="email"
              class="form-control {{ $errors -> has('email')? 'is-invalid':''}}"
              value="{{ old('email')?: $user -> email }}"
              type="text"
            >
            @if($errors -> has('email'))
              <div class="invalid-feedback">
                {{ $errors -> first('email') }}
              </div>
            @endif
          </div>

          <div class="mt-5">
            <a class="btn btn-secondary" href="{{ route('users.list',['user' => $user]) }}">
              キャンセル
            </a>

            <button type="submit" class="btn btn-primary">
              更新する
            </button>
      </form>
          <form
            style="display: inline-block"
            method="user"
            action="{{ route('users.destroy',['user' => $user]) }}"
          >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">
              削除する
            </button>
          </form>
        </div>
      </fieldset>
    </div>
  </div>
@endsection
