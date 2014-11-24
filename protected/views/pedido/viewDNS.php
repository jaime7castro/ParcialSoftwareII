<?php
$this->breadcrumbs=array(
	'Pedido'=>array('index'),
        $id,	
);

$this->menu=array(
    array('label'=>'Nuevo Detalle', 'url'=>array('createDNS', 'id'=>$id)),
);
?>


<h1>Administrar Detalle del Pedido para <?php echo $ped->clienteCi->nombres." ".$ped->clienteCi->apPat?></h1>


<?php if($model) {?>
<table class="miGrid">
    <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>SubTotal</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($model as $rg){  ?>
    <tr>      
        <td><?php echo $rg->productoCodigo->descripcion; ?></td> 
        <td><?php echo $rg->cantidad; ?></td>
        <td><?php echo $rg->productoCodigo->precioVenta; ?></td>
        <td><?php echo $rg->cantidad * $rg->productoCodigo->precioVenta; ?></td>

        <td><?php echo CHtml::link('Editar',array('updateDNS','id'=>$rg->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteDNS','id'=>$rg->id),array('confirm'=>'Está seguro que desea eliminar éste Detalle?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existe Detalle para este Pedido</h3>";
} 



