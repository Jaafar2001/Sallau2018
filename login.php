<?php 
session_start();
if(isset($_SESSION['userlogin'])){
    header("Location: index.php");
}


;?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel ="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
</head>
<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="img/logo.jpeg" alt="login logo" class="brand_logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="">
                        <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>   
                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user" placeholder="email" required>
                        </div>
                        <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>   
                        </div>
                        <input type="password" name="password" id="password" class="form-control input_pass" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="rememnberme" class="custom-control-input" id="cutomControlInline">
                                <label for="cutomControlInline" class="custom-control-label">Rememnber me</label>
                            </div>
                        </div>
                    
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="button" name="button" id="login" class="btn login_btn">Login</button>
                </div>
                </form>
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Don't have an account  <a href="registration.php" class="ml-2"> Sign up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="">Forget your password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" 
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
     crossorigin="anonymous"></script>



<script type="text/javascript" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">

</script>
<script>
    $(function(){
        $('#login').click (function(e){
            var valid = this.form.checkValidity();

            if(valid){
                var username = $('#username').val();
                var password= $('#password').val();
            }
                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'jslogin.php',
                        data:{username: username, password: password},
                        success: function(data){
                            alert(data);
                            if($.trim(data) ==="1"){
                                setTimeout('window.location.href = "index.php"', 2000);
                            }
                        },
                        error: function(data){
                            alert('error');
                        }
            });
        });
    });
</script>
</body>
</html>