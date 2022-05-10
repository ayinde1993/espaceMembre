<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="sweetalert2/sweetalert2.all.min.js"></script>
</head>
<body>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] !='' ) 
    {
        ?>
        <script>
        Swal.fire({
                 title: "<?php echo $_SESSION['status']; ?>",
                 icon: "<?php echo $_SESSION['status_code']; ?>",
                button: "ok. Done!",
              });
        </script>
        <?php
         unset($_SESSION['status']);
    }
    ?>


</body>
</html>

