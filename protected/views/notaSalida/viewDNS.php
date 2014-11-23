<?php
$this->breadcrumbs=array(
	'Nota de Salida'=>array('index'),
        $id,	
);

$this->menu=array(
    array('label'=>'Nuevo Detalle de la NS', 'url'=>array('createDNS', 'id'=>$id)),
);
?>


<h1>Administrar Detalle de la Nota de Salida</h1>


<?php if($model) {?>
<table class="miGrid">
    <tr>
        <th>ID</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Justificacion</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($model as $rg){  ?>
    <tr>
        <td><?php echo $rg->id; ?></td>
        
        <td><?php echo $rg->productoCodigo->descripcion; ?></td>
        <td><?php echo $rg->cantidad; ?></td>
        <td><?php echo $rg->justificacion; ?></td>
        <td><?php echo CHtml::link('Editar',array('updateDNS','id'=>$rg->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteDNS','id'=>$rg->id),array('confirm'=>'Está seguro que desea eliminar éste Detalle?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existe Detalle de la Nota de Salida</h3>";
} 



