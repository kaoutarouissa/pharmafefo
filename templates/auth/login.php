<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #0f172a, #1e293b);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-card {
        width: 360px;
        background: #ffffff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    }

    .login-card h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #0f172a;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group input {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        outline: none;
        transition: 0.2s;
    }

    .input-group input:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
    }

    button {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 10px;
        background: #3b82f6;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: 0.2s;
    }

    button:hover {
        background: #2563eb;
        transform: translateY(-1px);
    }

    .footer-text {
        text-align: center;
        margin-top: 15px;
        font-size: 12px;
        color: #64748b;
    }
</style>
</head>

<body>

<div class="login-card">
    <h2>Connexion</h2>

    <form method="POST">

        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Mot de passe" required>
        </div>

        <button type="submit">Se connecter</button>
    </form>

    <div class="footer-text">
        Pharma FEFO System
    </div>
</div>

</body>
</html>