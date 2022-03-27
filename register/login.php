<?php
//header.php
include('header.php');
?>


<!-------Login Area-------->
<section id="Login">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Login</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Login for Hostel Allocation Process</p>
                <span class="font-ubuntu text-black-50">Don't have an account <a href="signup.php">Register</a></span>
            </div>
            <div class="d-flex justify-content-center">
                <form action="login.php" method="post" enctype="multipart/form-data" id="sign-form">
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="passsword" class="form-control" placeholder="Password*">
                        </div>
                    </div>
                    <div class="elem-group">
                      <label for="captcha">Please Enter the Captcha Text</label>
                      <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
                      <br>
                      <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                    </div>
                    <input type="submit" name ="login" value = "Login">
                </form>
            </div>

        </div>
    </div>
</section>

<!-------Login Area-------->

<?php
//footer.php
include('footer.php');
?>