<?php
//editar.php - VISTA
require_once("layouts/header.php");
?>
<h2 class="text-center">Edit Product</h2>
<form class="form-update" action="" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <input type="text" value="<?php echo $v['name'] ?>" name="name"> <br>
        <input type="text" value="<?php echo $v['price'] ?>" name="price"> <br>
        <input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
        <input type="submit" class="btn" name="btn" value="Update"> <br>
        <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("layouts/footer.php");

