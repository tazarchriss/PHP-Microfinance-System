<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IMARIKA | Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/fontawesome.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 mt-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-dark"></div>
                                    <div class="card-body">
                                        <form method="post" action="config/authentication.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                                <!-- Login failure message -->
                                            <?php
                                            if (isset($_GET["fail"])){
                                            ?>
                                            <p class="alert alert-danger">wrong username or password</p>
                                            <?php     
                                            }

                                            ?>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgot Password?</a>
                                                <button class="btn btn-primary col-md-5" name="login" type="submit">Login</button>
                                               
                                            </div>
                                        </form>
                                    </div>
         
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
     <?php include 'include/footer.php'; ?>
