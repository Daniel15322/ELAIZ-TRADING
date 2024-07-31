<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <title>Document</title>
</head>
<body>
    <section>
    <div class="login-box">
        <form action="">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="key"></ion-icon></span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Souviens-toi de moi</label>
                <a href="#">Mot de passe oublié?</a>
            </div>
            <button type="submit">connexion</button>
            <div class="register-link">
                <p>Vous n'avez pas de compte?<a href="manifeste.php"> S'inscrire</a></p>
            </div>
        </form>
    </div>
    </section>
</body>
</html>
