<!-- ログイン入力画面 -->
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="js/jquery-2.1.3.min.js"></script>

    <!-- Google fontsの読みこみ -->
    <link
      href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="cssf/reset.css" />
    <link rel="stylesheet" href="cssf/index.css" />
    <title>ログイン</title>
  </head>

  <body>
    <div class="form-container">
      <h1 class="title">Log In</h1>
      <form class="form">
        <input
          class="form__input"
          type="text"
          name="email"
          placeholder="Email"
        />
        <input
          class="form__input"
          type="password"
          name="password"
          placeholder="Password"
        />
        <input class="form__btn" type="submit" value="Log In" />
        <div class="form__remember">
          <input id="remember" type="checkbox" name="remember" value="on" />
          <label for="remember">Remember me</label>
        </div>
      </form>
      <div class="policy">
        アカウントを作成することにより Bergの利用規約とプライバシーポリシーに
        同意するものとみなされます
      </div>
    </div>
  </body>
</html>
