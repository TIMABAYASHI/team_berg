<!-- プラン概要（みるだけ）ページ -->
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="/jquery-2.1.3.min.js"></script>
    <!-- fontawesomeの読み込み -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <!-- Google fontsの読みこみ -->
    <link
      href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="cssf/reset.css" />
    <link rel="stylesheet" href="cssf/select.css" />
    <title>select</title>
  </head>

  <body>
    <div class="form-container">
      <h1 class="title">デートプラン選択</h1>

      <h2 class="question">どちらかというとどっちが好き？</h2>
      <form class="form">
        <button class="form__input" name="feeling" value="0">
          落ち着くところでチル
        </button>
        <button class="form__input" name="feeling" value="1">
          アクティブに動きたい！
        </button>
        <!-- <input class="form__btn" type="submit" value="Send" /> -->
      </form>
    </div>
  </body>
</html>
