@extends('layouts')

@section('content')
  <div class="container mt-4">
    <div class="border p-4">
      <h1 class="h5 mb-4">
        投稿の新規作成
      </h1>
      <form method="POST" action="{{route('posts.create')}}">
        @csrf
        <fieldset class="mb-4">
          <div class="form-row col-md-2">
            <label for="lastname">
              苗字
            </label>
            <input
              id="lastname"
              name="lastname"
              class="form-control {{ $errors->has('lastname')?'is-invalid':''}}"
              value="{{ old('lastname') }}"
              type="text"
            >
            @if ($errors->has('lastname'))
              <div class="invalid-feedback">
                {{ $errors->first('lastname') }}
              </div>
            @endif
          </div>

            <div class="form-row col-md-2">
              <label for="firstname">
                名前
              </label>
              <input
                id="firstname"
                name="firstname"
                class="form-control {{ $errors->has('firstname')?'is-invalid':''}}"
                value="{{ old('firstname') }}"
                type="text"
              >
              @if ($errors->has('firstname'))
                <div class="invalid-feedback">
                  {{ $errors->first('firstname') }}
                </div>
              @endif
            </div>

          <div class="form-row col-md-2">
            <label for="postal">
              郵便番号
            </label>
            <input
              id="postal"
              name="postal"
              class="form-control {{ $errors->has('postal')?'is-invalid':''}}"
              value="{{ old('postal') }}"
              type="text"
              data-formrun-type="postal"
              maxlength='7'
            >
            @if ($errors->has('postal'))
              <div class="invalid-feedback">
                {{ $errors->first('postal') }}
              </div>
            @endif
          </div>

          <div class="form-row col-md-2">
              <label for="prefectures">
                都道府県
              </label>
              <select
              id="prefectures"
              name="prefectures"
              class="form-control {{ $errors->has('prefectures')? 'is-invalid':'' }}"
              value="{{ old('prefectures') }}"
              data-formrun-type="prefectures"
              >
              <option value="" selected>選択してください</option>
              <option value="北海道" @if( old('prefectures') == '北海道') selected @endif>北海道</option>
              <option value="青森県" @if( old('prefectures') == '青森県') selected @endif>青森県</option>
              <option value="岩手県" @if( old('prefectures') == '岩手県') selected @endif>岩手県</option>
              <option value="宮城県" @if( old('prefectures') == '宮城県') selected @endif>宮城県</option>
              <option value="秋田県" @if( old('prefectures') == '秋田県') selected @endif>秋田県</option>
              <option value="山形県" @if( old('prefectures') == '山形県') selected @endif>山形県</option>
              <option value="福島県" @if( old('prefectures') == '福島県') selected @endif>福島県</option>
              <option value="茨城県" @if( old('prefectures') == '茨城県') selected @endif>茨城県</option>
              <option value="栃木県" @if( old('prefectures') == '栃木県') selected @endif>栃木県</option>
              <option value="群馬県" @if( old('prefectures') == '群馬県') selected @endif>群馬県</option>
              <option value="埼玉県" @if( old('prefectures') == '埼玉県') selected @endif>埼玉県</option>
              <option value="千葉県" @if( old('prefectures') == '千葉県') selected @endif>千葉県</option>
              <option value="東京都" @if( old('prefectures') == '東京都') selected @endif>東京都</option>
              <option value="神奈川県" @if( old('prefectures') == '神奈川県') selected @endif>神奈川県</option>
              <option value="新潟県" @if( old('prefectures') == '新潟県') selected @endif>新潟県</option>
              <option value="富山県" @if( old('prefectures') == '富山県') selected @endif>富山県</option>
              <option value="石川県" @if( old('prefectures') == '石川県') selected @endif>石川県</option>
              <option value="福井県" @if( old('prefectures') == '福井県') selected @endif>福井県</option>
              <option value="山梨県" @if( old('prefectures') == '山梨県') selected @endif>山梨県</option>
              <option value="長野県" @if( old('prefectures') == '長野県') selected @endif>長野県</option>
              <option value="岐阜県" @if( old('prefectures') == '岐阜県') selected @endif>岐阜県</option>
              <option value="静岡県" @if( old('prefectures') == '静岡県') selected @endif>静岡県</option>
              <option value="愛知県" @if( old('prefectures') == '愛知県') selected @endif>愛知県</option>
              <option value="三重県" @if( old('prefectures') == '三重県') selected @endif>三重県</option>
              <option value="滋賀県" @if( old('prefectures') == '滋賀県') selected @endif>滋賀県</option>
              <option value="京都府" @if( old('prefectures') == '京都府') selected @endif>京都府</option>
              <option value="大阪府" @if( old('prefectures') == '大阪府') selected @endif>大阪府</option>
              <option value="兵庫県" @if( old('prefectures') == '兵庫県') selected @endif>兵庫県</option>
              <option value="奈良県" @if( old('prefectures') == '奈良県') selected @endif>奈良県</option>
              <option value="和歌山県" @if( old('prefectures') == '和歌山県') selected @endif>和歌山県</option>
              <option value="鳥取県" @if( old('prefectures') == '鳥取県') selected @endif>鳥取県</option>
              <option value="島根県" @if( old('prefectures') == '島根県') selected @endif>島根県</option>
              <option value="岡山県" @if( old('prefectures') == '岡山県') selected @endif>岡山県</option>
              <option value="広島県" @if( old('prefectures') == '広島県') selected @endif>広島県</option>
              <option value="山口県" @if( old('prefectures') == '山口県') selected @endif>山口県</option>
              <option value="徳島県" @if( old('prefectures') == '徳島県') selected @endif>徳島県</option>
              <option value="香川県" @if( old('prefectures') == '香川県') selected @endif>香川県</option>
              <option value="愛媛県" @if( old('prefectures') == '愛媛県') selected @endif>愛媛県</option>
              <option value="高知県" @if( old('prefectures') == '高知県') selected @endif>高知県</option>
              <option value="福岡県" @if( old('prefectures') == '福岡県') selected @endif>福岡県</option>
              <option value="佐賀県" @if( old('prefectures') == '佐賀県') selected @endif>佐賀県</option>
              <option value="長崎県" @if( old('prefectures') == '長崎県') selected @endif>長崎県</option>
              <option value="熊本県" @if( old('prefectures') == '熊本県') selected @endif>熊本県</option>
              <option value="大分県" @if( old('prefectures') == '大分県') selected @endif>大分県</option>
              <option value="宮崎県" @if( old('prefectures') == '宮崎県') selected @endif>宮崎県</option>
              <option value="鹿児島県" @if( old('prefectures') == '鹿児島県') selected @endif>鹿児島県</option>
              <option value="沖縄県" @if( old('prefectures') == '沖縄県') selected @endif>沖縄県</option>
              </select>

            @if ($errors->has('prefectures'))
              <div class="invalid-feedback">
                {{ $errors->first('prefectures') }}
              </div>
            @endif
          </div>

            <div class="form-row col-md-2">
              <label for="town">
                市町村
              </label>
              <input
                id="town"
                name="town"
                class="form-control {{ $errors->has('town')?'is-invalid':''}}"
                value="{{ old('town') }}"
                type="text"
                data-formrun-type="town"
              >
              @if ($errors->has('town'))
                <div class="invalid-feedback">
                  {{ $errors->first('town') }}
                </div>
              @endif
            </div>

              <div class="form-row col-md-4">
                <label for="street">
                  番地
                </label>
                <input
                  id="street"
                  name="street"
                  class="form-control {{ $errors->has('street')?'is-invalid':''}}"
                  value="{{ old('street') }}"
                  type="text"
                  data-formrun-type="street"
                >
                @if ($errors->has('street'))
                  <div class="invalid-feedback">
                    {{ $errors->first('street') }}
                  </div>
                @endif
              </div>

                <div class="form-row col-md-2">
                  <label for="tel">
                    電話番号
                  </label>
                  <input
                    id="tel"
                    name="tel"
                    class="form-control {{ $errors->has('tel')?'is-invalid':''}}"
                    value="{{ old('tel') }}"
                    type="text"
                    maxlength='11'
                  >
                  @if ($errors->has('tel'))
                    <div class="invalid-feedback">
                      {{ $errors->first('tel') }}
                    </div>
                  @endif
                </div>

          <div class="mt-5">
            <a class="btn btn-secondary" href="{{ route('top') }}">
              キャンセル
            </a>

            <button type="submit" class="btn btn-primary">
              投稿する
            </button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
@endsection
