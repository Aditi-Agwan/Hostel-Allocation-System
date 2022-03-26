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