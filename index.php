<?php
include("./partials/header.php");
?>

<?php

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>


<!-- Page content-->
<section class="my-5">
    <div class="text-center mb-4">
        <h3>HR VENTURE</h3>
        <h5 class="border-bottom pb-3 d-inline-block">Free Online Workshop</h5>
    </div>
    <div class="container">
        <a href="create.php" class="btn btn-primary float-end mb-1">CREATE</a>
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['roll'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                <?php }
                } else {
                    echo '0 result';
                }
                ?>

            </tbody>
        </table>
    </div>
</section>

<?php
include("./partials/footer.php");
?>