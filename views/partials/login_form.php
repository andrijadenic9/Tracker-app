<div class="container">
    <div class="row" style="height: 100vh; width: 100%; display:flex; flex-direction: column; justify-content: center; align-items: center;">
        <h2 class="mb-5 text-center">Tracker App</h2>
        <div class="col-4 offset-8" style="margin: 0 auto;">
            <span><?php echo (isset($_GET['user']) && $_GET['user'] === 'not_exist' && !isset($errors) ? 'User not exist' : '') ?></span>
            <form action="index.php" method="post">
                <div class="mb-3">
                    <span><?php echo (isset($email_error)) ? $email_error : '' ?></span>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <span><?php echo (isset($password_error)) ? $password_error : '' ?></span>
                    <input type="password" class="form-control" id="exampleFormControlTextarea1" name="password" placeholder="password">
                </div>
                <button class="form-control btn btn-primary" name="login">Login</button>
            </form>
        </div>
    </div>
</div>