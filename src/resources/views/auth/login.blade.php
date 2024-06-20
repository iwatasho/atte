<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }
        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 1rem;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header a {
            text-decoration: none;
            color: #000;
            margin: 0 1rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .form-group button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 0.5rem;
            background-color: #3b82f6;
            color: #fff;
            cursor: pointer;
        }
        .form-group a {
            color: #3b82f6;
            text-decoration: none;
            display: block;
            margin-top: 1rem;
        }
        .footer {
            margin-top: 2rem;
            color: #bbb;
        }
    </style>
</head>
<body>
    <header class="header">
        <div>Atte</div>
    </header>

    <div class="container">
        <h1>ログイン</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" placeholder="メールアドレス" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="パスワード" required>
            </div>
            <div class="form-group">
                <button type="submit">ログイン</button>
            </div>
            <div class="form-group">
                <a href="{{ route('register') }}">アカウントをお持ちでない方はこちらから会員登録</a>
            </div>
        </form>
    </div>

    <footer class="footer">
        Atte, inc.
    </footer>
</body>
</html>