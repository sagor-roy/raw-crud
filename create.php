<?php
include("./partials/header.php");
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];

    $error_message;
    if (empty($name) || empty($roll)) {
        $error_message = 'input field is required';
    } else {
        $sql = "INSERT INTO `user` (`name`,`email`,`roll`) VALUES ('$name','$email','$roll')";

        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
        } else {
            echo 'something is wrong';
        }
    }
}


?>

<!-- Page content-->
<section class="my-5">
    <div class="text-center mb-4">
        <h3 class="border-bottom pb-3 d-inline-block">CREATE STUDENT</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card card-body">
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger">
                            <?php echo $error_message ?>
                        </div>
                    <?php } ?>
                    <form action="create.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Roll</label>
                            <input type="number" name="roll" class="form-control" placeholder="Enter your roll">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="index.php" class="btn btn-warning">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include("./partials/footer.php");
?>