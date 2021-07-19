<?php include_once "../partials/headerLogin.php"; ?>


    <main class="login register">
        <h2 class="header">CONTACT US</h2>
        <section class="lrm">
            <form action="contact.php" method="post" class="">
                <label for="name">Name</label>
                <input type="text" class="" name="name" id="name" placeholder="" required>
                <label for="email">Email</label>
                <input type="email" class="" name="email" id="email" placeholder="" required>
                <label for="feedback">Give us feedback</label>
                <textarea id="feedback" name="feedback" class="feedback" rows="10" required></textarea>

                <input type="submit" class="submit" value="Send Feedback">
            </form>

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


