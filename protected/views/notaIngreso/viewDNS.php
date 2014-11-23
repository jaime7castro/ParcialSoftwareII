<?php
$this->breadcrumbs=array(
	'Nota de Ingreso'=>array('index'),
        $id,	
);

$this->menu=array(
    array('label'=>'Nuevo Detalle', 'url'=>array('createDNS', 'id'=>$id)),
);
?>


<h1>Administrar Detalle de la Nota de Ingreso</h1>


<?php if($model) {?>
<table class="miGrid">
    <tr>
        <th>Id</th>
        <th>Identidicador del lote</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Contenido del Lote</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($model as $rg){  ?>
    <tr>
        <td><?php echo $rg->id; ?></td> 
        <td><?php echo $rg->lote->identidicador; ?></td>      
        <td><?php echo $rg->cantidad; ?></td>
        <td><?php echo $rg->lote->precio; ?></td>
        <td><?php echo $rg->lote->productoCodigo->descripcion; ?></td>
        <td><?php echo CHtml::link('Editar',array('updateDNS','id'=>$rg->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteDNS','id'=>$rg->id),array('confirm'=>'Está seguro que desea eliminar éste Detalle?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existe Detalle de la Nota de Ingreso</h3>";
} 



