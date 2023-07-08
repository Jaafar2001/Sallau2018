<?php 
require_once('config.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

</head>
<body>
    <div>
        <?php 
        
        ;?>
    </div>


    <div>
        <form action="registration.php" method="post">
            <div class="container-lg">
                <div class="row">
                <div class="col-lg-6">
                <h1>Registration</h1>
                <p>Fill the below form correctly!</p>

                <label for="firstname"><b>First Name</b></label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>

                <label for="lastname"><b>Last Name</b></label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>

                <label for="email"><b>Email Address</b></label>
                <input type="email" class="form-control" id="email" name="email" required>

                <label for="phonenumber"><b>Phone Number</b></label>
                <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>

                <label for="address"><b> User Address</b></label>
                <input type="text" class="form-control" id="address" name="address" required>
                
                <label for="state"><b>State of Origin</b></label>
                <input type="text" class="form-control" id="state" name="state" required>

                <label for="lga"><b>Local Govt</b></label>
                <input type="text" class="form-control" id="lga" name="lga" required>

                <label for="password"><b>Password</b></label>
                <input type="password" class="form-control mb-3" id="password" name="password" required>


                <input type="submit" class="btn btn-outline-info btn-lg text-center" name="create" id="register" value="sign up">
                </div>
                </div>
            </div>

        </form>
    </div>    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function(){
            $('#register').click(function(j){

                var valid = this.form.checkValidity();
                

                if(valid){
                var firstname   = $('#firstname').val();
                var lastname    = $('#lastname').val();
                var email       = $('#email').val();
                var phonenumber = $('#phonenumber').val();
                var address     = $('#address').val();
                var state       = $('#state').val();
                var lga         = $('#lga').val();
                var password    = $('#password').val();
                    j.preventDefault();

                    $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {firstname: firstname, lastname: lastname, email: email, phonenumber: phonenumber, address: address, state: state, lga: lga, password: password},
                    success: function(data){
                        Swal.fire({
                    'title': 'Successful',
                    'text': data,
                    'type':'success',
                    'icon':'success'
                   
                    })
                    },
                    error: function(data){
                      Swal.fire({
                    'title': 'Errors',
                    'text': 'Please check your data!',
                    'type':'error',
                    })
                    }

                    });

                  
                }else{
                    
                }
                
                  

            });

           
        });
    </script>

</body>
</html>