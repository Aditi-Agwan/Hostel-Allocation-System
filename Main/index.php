<?php
//header.php
include('header.php');
?>


<!-------Login Area-------->
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3">
                        <span>Log In </span>
                        <span>Sign Up</span>
                    </h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                    <label for="reg-log"></label>

                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Log In</h4>
                                        <form action="authLogin.php" method="post" enctype="multipart/form-data" id="login-form">
                                         
                                         <div class="form-group">
                                             <input type="email" required name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                             <i class="input-icon uil uil-at"></i>
                                          </div>
                                          
                                          <div class="form-group mt-2">
                                             <input type="password" required name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                             <i class="input-icon uil uil-lock-alt"></i>
                                          </div>
                                          <div class="elem-group">
                                             <label for="captcha">Please Enter the Captcha Text</label>
                                             <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
                                             <input type="text" id="captcha" name="captcha_challenge">
                                          </div>
                                          <input type="submit" name ="login" value = "Login">
                                        </form>
                                        <p class="mb-0 mt-4 text-center">
                                            <a href="" class="link">Forgot your password?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-------Login Area-------->
                            <!-------Signup Area-------->
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb--5 pb-1">Sign Up</h4>
                                        <div class="form-group">
                                        <form action="#" method="post" enctype="multipart/form-data" id="sign-form">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-group mt-2">
                                                            <input type="text" required name="firstName" class="form-style" placeholder="First" id="firstName" autocomplete="off">
                                                            <i class="input-icon uil uil-user"></i>
                                                        </div>
                                                    <td>
                                                        <div class="form-group mt-2 ">
                                                            <input type="text"required name="middleName" class="form-style" placeholder="Middle" id="firstName" autocomplete="off">
                                                        </div>
                                                    <td>
                                                        <div class="form-group mt-2">
                                                            <input type="text" required name="lastName" class="form-style" placeholder="Last" id="firstName" autocomplete="off">
                                                        </div>
                                                </tr>
                                            </table>
                                            <div class="form-group mt-2">
                                                <input type="email" required name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-phone-alt"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="number" required name="number" class="form-style" placeholder="Your Mobile Number" id="number" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <p>GENDER</p>
                                                <div class="radio-container">
                                                    <input checked="checked" type="radio" name="gender" value="1" id="male" />
                                                    <label for="male">MALE</label>
                                                    <input type="radio" name="gender" value="0" id="female" />
                                                    <label for="female">FEMALE</label>
                                                </div>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="cnfpass" class="form-style" placeholder="Confirm Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <input type="submit" name="Signup" value="Signup">
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-------Signup Area-------->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    //footer.php
    include('footer.php');
    ?>