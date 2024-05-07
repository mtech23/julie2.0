
<?php include 'inc/loginforhead.php'; ?>

<section class="login_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-xl-6 pictures">
                <div class="row">
                    <div class="col-md-6">
                        <div class="login_first_img">
                            <img src="./images/loginformImg01.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="login_first_img">
                            <img src="./images/loginformImg02.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-xl-6 col-sm-10 mx-auto">
                <div class="right_login_form">
                    <div>
                        <h3 class="jewelry text-center">login</h3>
                        <p class="login_para text-center py-2">Let's vacation right now with tickets from us at affordable prices and
                            also trusted, friendly service and the best</p>

                        <div class="other_social_logins">
                            <div class="other_login">
                                <button class="other_login_btn">
                                    <div class="other_login_img">
                                        <img src="./images/google-icon.png" alt="">
                                    </div>
                                    <div>
                                        <span>signin with google</span>
                                    </div>
                                </button>
                                
                            </div>

                            <div class="other_login">
                                <button class="other_login_btn">
                                    <div class="other_login_img">
                                        <img src="./images/pngwing.com.png" alt="">
                                    </div>
                                    <div>
                                        <span>signin with apple ID</span>
                                    </div>
                                </button>
                                
                            </div>
                        </div>

                        <div class="mt-4">
                            <p class="signin_with_text text-center">Or Sign In With</p>
                        </div>

                        <form action="./index.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="email_label">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1" class="password_label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                            </div>

                            <div>
                                <a href="javascript:;" class="forgot_password_text">
                                    <p class="login_para text-right">Forgot Password?</p>
                                </a>
                            </div>

                            <div class="login_btn_main">
                                <button class="login_actionBtn border-0" type="submit">Login</button>
                            </div>

                            <div>
                                <span class="account_text pt-3">Don’t have an account yet? <a href="javascript:;" class="create_account_text">Create an account</a></span>
                            </div>
                           
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/loginfooter.php'; ?>

