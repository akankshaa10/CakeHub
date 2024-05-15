<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
session_start();
require_once("cakedatabase.php");
$db_handle = new DBController();
if(isset($_SESSION["cart_item"]))
{
    $total_quantity = 0;
    $total_price = 0;
}
?> 


<?php   
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
    ?>
        <tr>
        <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
        <td><?php echo $item["code"]; ?></td>
        <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
        <td  style="text-align:right;"><?php echo "Rs. ".$item["price"]; ?></td>
        <td  style="text-align:right;"><?php echo "Rs. ". number_format($item_price,2); ?></td>
        <td style="text-align:center;"><a href="eggless.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
        </tr>
        <?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"]*$item["quantity"]);
    }


    ?>

    <?php
$tot=number_format($total_price, 2);
?>

</body>
</html>