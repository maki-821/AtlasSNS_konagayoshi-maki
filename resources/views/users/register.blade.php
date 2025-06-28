<form action="/register" method="POST">
    @csrf
    <input type="text" name="name" placeholder="お名前" required>
    <input type="email" name="email" placeholder="メールアドレス" required>
    <input type="password" name="password" placeholder="パスワード" required>
    <button type="submit">登録</button>
</form>
