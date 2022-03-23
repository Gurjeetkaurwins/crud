<DOCTYPE html>
    <html>
        <head>
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </head>
    <body>
        
<?php 
include_once('header.php');
include_once('../DB/config.php');
?>
     
        <div class="container">

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <span class="font-weight-bold text-muted">Login</span>
            </div>
            <div class="card-body">
                <form method="POST" action="../Controller/login.php">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="gurjeet@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name= "password" value="123">
                    </div>
                    <button type="submit"  name ="submit" id="submit"class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div><script>
$(document).ready(function() {
    $(document).ready(function() {
            $("#submit").click(function(event) {
                event.preventDefault();
                alert(1);
                var email = $('#email').val();
                var password = $('#password').val();


                var data = {
                    
                    email: email,
                    password: password
                }

                $.ajax({
                    url: "../Controller/login.php",
                    data: data,
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                    }
                });

            });
        });
});
     </script>
    </body>
    </html>
</DOCTYPE>
<?php
include_once('footer.php');
 ?>