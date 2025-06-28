<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- IEブラウザ対策 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ページの内容を表す文章">
    <meta name="csrf-token" content="トークン値">
    <title>Atlas - 新規ユーザー登録</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/logout.css">
    <!-- スマホ、タブレット対応 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- サイトのアイコン指定 -->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png">
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png">
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png">
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png">
    <!-- iphoneのアプリアイコン指定 -->
</head>
<body>
    <div class="register-wrapper">
        <h1 class="logo">Atlas</h1>
        <p class="sub-title">Social Network Service</p>
        <h2>新規ユーザー登録</h2>
        <form>
            <label>ユーザー名 <input type="text" name="username"></label>
            <label>メールアドレス <input type="email" name="email"></label>
            <label>パスワード <input type="password" name="password"></label>
            <label>パスワード確認 <input type="password" name="password_confirmation"></label>
            <button type="submit">登録</button>
        </form>
        <a href="login.html">ログイン画面へ戻る</a>
    </div>
</body>
</html>
