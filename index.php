<?php
$json = file_get_contents("https://jubelagjson.herokuapp.com/json.php");

$data = json_decode($json,true);
$list = $data['ballpen'];


?>

<h1>Ballpens </h1>

<table border="1px">
    <tr>
        <td>Name</td>
        <td>Price</td>
        <td>Color</td>
        <td>Supplier</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['ballpen_name'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['color'];?></td>
        <td><?php echo $value['supplier'];?></td>
    </tr>
<?php
}
?>
</table>
