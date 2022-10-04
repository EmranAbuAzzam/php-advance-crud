<?php
include "./includes/header.php";
include "./includes/conn.php";
?>

<div class="container mt-5">
    <div class="row ">
    <h1 class="col-10 px-0" style="color:blue;">Details</h1>
    <a class="btn btn-secondary fs-4 col-1" href="./create.php"><i class="bi bi-plus fs-3"></i>Add</a>
    </div>
    <div class="row">
    <table class="table table-striped  mt-3">
        <thead>
            <tr>
            
                <th scope="col">Image</th>
                <th scope="col">Address</th>
                <th scope="col">Salary</th>
                <th scope="col" ><b style="">Action</b></th>
            </tr>
        </thead>
        <tbody>
        <?php 
        include "./operations/viewAll.php";
        ?>
        </tbody>
    </table>
    </div>
</div>


<?php 
include "./includes/footer.php";
?>
