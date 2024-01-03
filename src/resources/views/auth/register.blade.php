<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Management</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@900&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>

<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <div class="header-utilities__left">
          <h1 class="header__logo">
            FashionablyLate
          </h1>
        </div>
        <div class="header-utilities__right">
          <div class="login__link">
            <a class="login__button-submit" href="/login">login</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="register__content">
    <div class="register-form__heading">
      <h2>register</h2>
    </div>
    <form class="form" action="/register" method="post">
      @csrf
      <div class="form-wrapper">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
          </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input type="name" id="name" name="name" placeholder="例:山田　太郎" value="{{ old('name') }}" />
              </div>
              <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
              </div>
            </div>
          </div>
          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
               <input type="email" id="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
              </div>
              <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
              </div>
            </div>
          </div>
          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">パスワード</span>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input type="password" name="password" placeholder="例:coachtech1106" value="{{ old('password') }}" />
              </div>
              <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
              </div>
            </div>
          </div>
          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">確認用パスワード</span>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input type="password" name="password" placeholder="例:coachtech1106" value="{{ old('password') }}" />
              </div>
            </div>
          </div>
          <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>