<?php include_once('header.php');
include_once("../Model/edit.php");
//print_r($_GET);
// echo "<pre>";
// print_r(getuserByID($conn,$_GET['id']));
// echo "</pre>";
?>

<?php 
        if( isset($_GET['id']) ):
            $userdata = getuserByID($conn,$_GET['id']); 
            // $userdata =  updateuser();
    ?>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold text-muted">Edit Form</span>
                </div>
                <div class="card-body">
                    <form method="post" action="../Controller/edit.php">
                    
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?=$_GET['id']?>">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="Firstname" name="first_name" value="<?=$userdata['first_name']?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Lastname" name="last_name"
                            value="<?=$userdata['last_name']?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email"
                            value="<?=$userdata['email'] ?>">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<?php include_once('footer.php'); ?>