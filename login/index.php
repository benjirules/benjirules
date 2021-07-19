<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include_once "../partials/headerLogin.php"; ?>
    <main class="login">
        <h2 class="header">Login</h2>
        <section class="login-form">
            <form action="authenticate.php" method="post">
                <label for="username">Username</label>
                <input type="text" class="" name="username" id="username" placeholder="" required>
                <label for="pwd">Password</label>
                <input type="password" class="" name="password" id="pwd" placeholder="" required>
                <input type="submit" class="submit">
            </form>
            <div class="login-options">
                <div>
                    <a href="C:\xampp\htdocs\register">Don't have an account | <span>register</span></a>
                </div>
            </div>
        </section>
    </main>
    <div class="msg"></div>
    <script>
        let form = document.querySelector('.register form');
        form.onsubmit = function(event) {
            event.preventDefault();
            let form_data = new FormData(form);
            let xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.onload = function () {
                document.querySelector('.msg').innerHTML = this.responseText;
                document.querySelector('.msg').classList.add('show');
                let close = document.querySelector('.close');
                close.addEventListener("click", function(){
                    document.querySelector('.msg').classList.remove('show');
                });
            };
            xhr.send(form_data);
        };
    </script>
<?php include_once '../partials/footer.php';

