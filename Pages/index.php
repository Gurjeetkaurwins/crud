<?php
include_once("../DB/config.php");
include_once('..//Model/profile.php');
include_once('../Pages/header.php');

?>

<div class="container">

    <div class="row justify-content-center my-5">
        <div class="col-md-8">
        
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $users= userdata($conn);
                    foreach($users as $value):
                    ?>
                    <tr>
                        <th scope="row"><?php echo $value['id'] ?></th>
                        <td><?php echo $value['first_name'] ?></td>
                        <td><?php echo $value['last_name'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td>
                        <a href="<?=BASE_URL.'/pages/edit.php?id='. $value['id'];?>">
                            <button type="button" class="btn mx-1">
                                <i class="fa fa-pencil text-warning"></i>
                            </button>
                         </a>
                           <a href="<?=BASE_URL.'/Pages/delete.php?id='.$value['id'];?>"><button type="button" class="btn mx-1">
                                <i class="fa fa-trash text-danger"></i>
                            </button>
                    </a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once('./footer.php');
?>