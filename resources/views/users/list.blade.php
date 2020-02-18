@extends('layouts')

@section('content')

    <div class="container mt-4">
      @foreach($users as $user)
        <div class="card mb-4">
          <div class="card-header">
            名前:
            {{ $user->name }}
          </div>
          <div class="card-body">
            {{ $user->email }}<br>
            <td>
              <a class="card-link" href="{{ route('users.edit',['users' => $user]) }}">
                編集・削除
              </a>
            </td>
          </div>
          <div class="card-footer">
            <row class="mr-2">
              登録日:{{ $user -> created_at -> format('Y.m.d') }}
            </row>
          </div>
        </div>
      @endforeach
      <div class="d-flex justify-content-center mb-5">
        {{ $users -> links() }}
      </div>
    </div>
@endsection
