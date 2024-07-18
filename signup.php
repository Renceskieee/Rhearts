<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rhearts_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $signup_feedback = "Account created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="Images/logo2.ico">
    <title>Rhearts - Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/login.css" rel="stylesheet">
</head>
<style>
body {
    overflow: hidden;
    position: fixed;
    width: 100%;
}

.unique-back-button button {
    border: none;
    background: none;
    box-shadow: none;
    padding: 0;
}

.unique-back-button svg {
    stroke: #810CA8;
    transition: transform 0.2s ease-in-out;
}

.unique-back-button button:hover svg {
    transform: scale(1.25);
}

.unique-back-button button:active svg {
    transform: scale(1.0);
}

.form-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 0 10px;
}

.wrapper {
    --input-focus: #2d8cf0;
    --font-color: #323232;
    --font-color-sub: #666;
    --bg-color: #fff;
    --bg-color-alt: #B931FC;
    --main-color: black;
    max-width: 600px;
    width: 100%;
    margin: 0 auto;
    margin-bottom: 80px;
    margin-left: 300px;
}

.switch {
    transform: translateY(-200px);
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 50px;
    width: 50px;
    height: 20px;
}

.card-side::before {
    position: absolute;
    content: 'Log in';
    left: -90px;
    top: 0;
    width: 100px;
    text-decoration: underline;
    color: var(--font-color);
    font-weight: 600;
}

.card-side::after {
    position: absolute;
    content: 'Sign up';
    left: 50px;
    top: 0;
    width: 100px;
    text-decoration: none;
    color: var(--font-color);
    font-weight: 600;
}

.toggle {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    box-sizing: border-box;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    box-shadow: 4px 4px var(--main-color);
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--bg-color);
    transition: 0.3s;
}

.slider:before {
    box-sizing: border-box;
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    border: 2px solid var(--main-color);
    border-radius: 5px;
    left: -2px;
    bottom: 2px;
    background-color: var(--bg-color);
    box-shadow: 0 3px 0 var(--main-color);
    transition: 0.3s;
}

.toggle:checked + .slider {
    background-color: var(--input-focus);
}

.toggle:checked + .slider:before {
    transform: translateX(30px);
}

.toggle:checked ~ .card-side:before {
    text-decoration: none;
}

.toggle:checked ~ .card-side:after {
    text-decoration: underline;
}

.flip-card__inner {
    width: 300px;
    height: 350px;
    position: relative;
    background-color: transparent;
    perspective: 1000px;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.toggle:checked ~ .flip-card__inner {
    transform: rotateY(180deg);
}

.toggle:checked ~ .flip-card__front {
    box-shadow: none;
}

.flip-card__front, .flip-card__back {
    padding: 20px;
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    background: lightgrey;
    gap: 20px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    box-shadow: 4px 4px var(--main-color);
}

.flip-card__back {
    width: 100%;
    transform: rotateY(180deg);
}

.flip-card__form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
}

.title {
    margin: 20px 0 20px 0;
    font-size: 25px;
    font-weight: 900;
    text-align: center;
    color: var(--main-color);
}

.flip-card__input {
    width: 250px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    font-size: 15px;
    font-weight: 600;
    color: var(--font-color);
    padding: 5px 10px;
    outline: none;
}

.flip-card__input::placeholder {
    color: var(--font-color-sub);
    opacity: 0.8;
}

.flip-card__input:focus {
    border: 2px solid var(--input-focus);
}

.flip-card__btn:active, .button-confirm:active {
    box-shadow: 0px 0px var(--main-color);
    transform: translate(3px, 3px);
}

.flip-card__btn {
    margin: 20px 0 20px 0;
    width: 120px;
    height: 50px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    font-size: 17px;
    font-weight: 600;
    color: var(--font-color);
    cursor: pointer;
    padding: 10px 20px;
}

.login-image {
    max-width: 100%;
    height: 250px;
    margin: 0 auto;
    margin-left: 60px;
}
</style>
<body>
    <div class="container mt-4">
        <a href="index.php" class="unique-back-button" title="Go Back">
            <button class="cursor-pointer duration-200 hover:scale-125 active:scale-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M11 6L5 12M5 12L11 18M5 12H19"></path>
            </svg>
            </button>
        </a>
    </div>
    
    <main class="container main-section-3">
        <div class="row justify-content-center align-items-center" style="height: 75vh;">
            <div class="col-md-6 text-center">
                <img src="Images/Transparent_2.png" alt="Rhearts Logo" class="login-image">
            </div>
            <div class="col-md-6 text-center">
                <div class="wrapper">
                    <div class="card-switch">
                        <label class="switch">
                            <input type="checkbox" class="toggle">
                            <span class="slider"></span>
                            <span class="card-side"></span>
                            <div class="flip-card__inner">
                                <div class="flip-card__front">
                                    <div class="title">Log in</div>
                                    <form class="flip-card__form" action="login.php" method="POST">
                                        <input class="flip-card__input" name="email" placeholder="Email" type="email" required>
                                        <input class="flip-card__input" name="password" placeholder="Password" type="password" required>
                                        <button class="flip-card__btn" type="submit">Let`s go!</button>
                                    </form>
                                </div>
                                <div class="flip-card__back">
                                    <div class="title">Sign up</div>
                                    <form class="flip-card__form" action="signup.php" method="POST">
                                        <input class="flip-card__input" name="name" placeholder="Name" type="text" required>
                                        <input class="flip-card__input" name="email" placeholder="Email" type="email" required>
                                        <input class="flip-card__input" name="password" placeholder="Password" type="password" required>
                                        <button class="flip-card__btn" type="submit">Confirm!</button>
                                    </form>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-custom text-center py-3 mt-4">
        <p>&copy; 2024 Rhearts. All rights reserved.</p>
    </footer>
        
    <div class="modal fade" id="signupModalSignup" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Create Account Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $signup_feedback; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var signupFeedback = "<?php echo $signup_feedback; ?>";
        if (signupFeedback !== '') {
            $(document).ready(function () {
                $('#signupModalSignup').modal('show');
            });
        }
    </script>

    <script src="JS/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
