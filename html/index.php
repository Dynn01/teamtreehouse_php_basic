<?php 
$name="Khoirudin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-4 border bg-secondary">
                <div class="d-flex flex-column mt-3">
                 <img class="mx-auto d-block" src="images/logo.png" alt="logo" width="90px">
                </div>
                <div class="d-flex flex-column">
                    <h3 class="mx-auto d-block text-light m-3"><?php echo $name; ?></h3>
                </div>
            </div>
            <div class="content col-8 border vh-100">
               <div class="d-flex flex-column border">
                   <p class="h2 mx-auto d-block">My First Page PHP</p>
               </div>
               <section class="border">
                   <p class="h3">Units</p>
                <?php include "../units.php"; ?>
                <p class="lead"><?php echo derajat(12); ?></p>
               </section>
               <section class="border vh-100">
                   <p class="h3">Strings</p>
                <?php include "../strings.php"; ?>
                <p class="lead"><?php echo askName("AhMAd DhAnI"); ?></p>
               </section>
               <div class="d-flex flex-column position-absolute fixed-bottom border mb-1">
                   <p class="mx-auto d-block">copyright&copy; <?php echo $name." last modified: ". date("F, d, Y, H:i:s.", getlastmod()); ?></p>
               </div>
            </div>
        </div>
    </div>



    <script src="assets/JS/jquery-3.5.1.slim.full.js"></script>
    <script src="assets/JS/popper.min.js"></script>
    <script src="assets/JS/bootstrap.min.js"></script>
</body>
</html>