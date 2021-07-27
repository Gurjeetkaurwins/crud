<?php include_once('header.php'); ?>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold text-muted">Sign up</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="../Controller/register.php">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_Name" aria-describedby="emailHelp" placeholder="Enter email" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="Last_name">Last Name</label>
                            <input type="text" class="form-control" id="Last_Name" aria-describedby="emailHelp" placeholder="Enter email" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="Email_address">Email address</label>
                            <input type="email" class="form-control" id="Email_address" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="Confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                        </div>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>