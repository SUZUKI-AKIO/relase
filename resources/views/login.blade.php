<!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
 </head>
<body>
    <div class="login-container">
        <h1>ログイン</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <div class="checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember" style="white-space: nowrap;">ログイン情報を保管する</label>
                </div>
            </div>
            <div class="form-group">
                <label>&#8203;</label>
                <input type="submit" class="btn-login" value="ログイン">
                <span class="forgot-password">
                    <a href="forgot_password.html">パスワードをお忘れですか？</a>
                </span>
            </div>
        </form>
    </div>
</body>
</html>












