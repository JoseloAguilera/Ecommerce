<!DOCTYPE html>
<html>

<body>
    

<?php
if(isset($_GET['hash'])){
    $hash=$_GET['hash'];
    echo "Pedido realizado correctamente el hash es ".$hash;
}else{
    echo"El pedido Jamás se realizó";
}
?>

</body>

</html>