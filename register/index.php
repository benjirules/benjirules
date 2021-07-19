<?php include_once "../partials/headerLogin.php"; ?>


    <main class="login register">
        <h2 class="header">REGISTER</h2>
        <section class="login-form">
            <form action="register.php" method="post" class="">
                <label for="username">Username</label>
                <input type="text" class="" name="username" id="username" placeholder="" required>
                <label for="email">Email</label>
                <input type="email" class="" name="email" id="email" placeholder="" required>
                <label for="pswd">Password</label>
                <input type="password" class="" name="password" id="pswd" placeholder="" required>
                <input type="submit" class="submit">
            </form>
            <div class="login-options">
                <a href="../login">Already have an account? <span>login now</span></a>
            </div>
            <div class="msg"></div>
        </section>


    </main>
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

