<?php
// nuevo.php - CREAR NUEVO PRODUCTO
require_once("layouts/header.php");
?>
<h2 class="text-center">Enter your products</h2>
<form class="form-create" action="" method="get">
    <input type="text" placeholder="Product name:" name="name"> <br>
    <input type="text" placeholder="Product price:" name="price"> <br>
    <input type="submit" class="btn" name="btn" value="Create"> <br>
    <input type="hidden" name="m" value="guardar">
</form> 

<?php
require_once("layouts/footer.php");
