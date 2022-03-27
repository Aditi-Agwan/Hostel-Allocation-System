<?php
//header.php
include('header.php');
?>


<!-------Signup Area-------->
<section id="signup">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Signup</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Signup for Hostel Allocation Process</p>
                <span class="font-ubuntu text-black-50">I already have <a href="login.php">Login</a></span>
            </div>
            <div class="d-flex justify-content-center">
                <form action="signup.php" method="post" enctype="multipart/form-data" id="sign-form">
                    <div class="form-row">
                    <table>
                            <tr>
                                <td> <div class=".col-sm-4">
                               <input type="text" required name="firstName" id="firstName" class="form-control" placeholder="First Name">
                                </div>
                                <td>  <div class=".col-sm-4">
                             <input type="text" required name="middleName" id="middleName" class="form-control" placeholder="Middle Name">
                             </div>  
                                <td> <div class=".col-sm-4">
                              <input type="text"required name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                             </div>
                            </tr>
                        </table>
                       
                    </div>
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
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>Gender</label><br>
                        </div>
                        <div class="col">
                            <input type="radio" name="gender" value="Male">Male<br>
                        </div>
                        <div class="col">
                            <input type="radio" name="gender" value="Female">Female<br>
                        </div>
                        <input type="submit" name="Signup" value="Signup">

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<!-------Signup Area-------->

<?php
//footer.php
include('footer.php');
?>