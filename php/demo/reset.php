<?php
    session_start();
    require_once "../include/connection.php";
    if(!isset($_SESSION['otp_verify'])||
    !isset($_SESSION['otp_email'])||!$_SESSION['otp_verify'])
    {
        echo "<div style='text-align:center;margin-top:50px;'>
        <h4>Unauthorized access</h4>
        <p><a href='forgot.php'>Start again</a></p>
      </div>";
       exit;
    }
    if(isset($_POST['reset_pass']))
    {
        $newpwd = trim($_POST['new_password']);
        if(strlen($newpwd)<6)
        {
            $error = "Password must be at least 6 characters.";
        }
        else
        {
            $hash = password_hash($newpwd,PASSWORD_DEFAULT);

            $sql =$db->prepare("UPDATE login SET password = ? WHERE email=?");
            $sql->execute([$hash,$_SESSION['otp_email']]);

            session_unset();
            $success = "Password reset successful!";
            header("refresh:2;url=login.php");

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from freshcart.codescandy.com/pages/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Oct 2024 07:27:49 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta content="Codescandy" name="author" />
      <title>Forget Password eCommerce HTML Template - FreshCart</title>
      <!-- Favicon icon-->
      <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico" />

      <!-- Libs CSS -->
      <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
      <link href="../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
      <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

      <!-- Theme CSS -->
      <link rel="stylesheet" href="../assets/css/theme.min.css" />
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag() {
            dataLayer.push(arguments);
         }
         gtag("js", new Date());

         gtag("config", "G-M8S4MT3EYG");
      </script>
      <script type="text/javascript">
         (function (c, l, a, r, i, t, y) {
            c[a] =
               c[a] ||
               function () {
                  (c[a].q = c[a].q || []).push(arguments);
               };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
         })(window, document, "clarity", "script", "kuc8w5o9nt");
      </script>
   </head>

   <body>
      <!-- navigation -->
      <div class="border-bottom shadow-sm">
         <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
               <a class="navbar-brand" href="../index.html">
                    <img src="../assets/images/logo/logo1.png" height="80px" width="100px" alt="" class="d-inline-block align-text-top" />
               </a>
               <span class="navbar-text">
                  Already have an account?
                  <a href="signin.html">Sign in</a>
               </span>
            </div>
         </nav>
      </div>

      <main>
         <!-- section -->
         <section class="my-lg-14 my-8">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                     <!-- img -->
                     <img src="../assets/images/svg-graphics/reset.png" alt="" class="img-fluid" />
                  </div>
                  <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1 d-flex align-items-center">
                     <div>
                        <div class="mb-lg-9 mb-5">
                           <!-- heading -->
                           <h1 class="mb-2 h2 fw-bold">Reset your password?</h1>
                        </div>
                        <!-- form -->
                        <form class="needs-validation" novalidate>
                           <!-- row -->
                           <div class="row g-3">
                              <!-- col -->
                              <div class="col-12">
                                 <!-- input -->
                                 <label for="formForgetEmail" class="form-label visually-hidden">password</label>
                                 <input type="password" class="form-control" id="formForgetEmail" placeholder="*******" required name="password" />
                                 <div class="invalid-feedback">Please enter correct password.</div>
                              </div>

                              <!-- btn -->
                              <div class="col-12 d-grid gap-2">
                                 <a href="index.php" class="btn btn-light">Back</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      
 <?php require_once("../include/footer.php");?>