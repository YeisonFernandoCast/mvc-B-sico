<?php
// index.php - MUESTRALA TABLA
require_once("layouts/header.php");
?>
<div class="container">
<a href="index.php?m=nuevo" class="btn-new" style= text-align:center>Create new product</a>
</div>
<table>
    <tr>
        <td>Id</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Action</td>        
    </tr>
    <tbody>
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['id'] ?> </td>
                        <td><?php echo $v['name'] ?> </td>
                        <td><?php echo $v['price'] ?> </td>
                        <td>
                            <a class="btn" href="index.php?m=editar&id=<?php echo $v['id']?>">Update</a>
                            <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('Are you sure you want to delete this record?'); false">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>                    
            <?php else: ?>
                <tr>
                    <td colspan="3">No records found in database</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");