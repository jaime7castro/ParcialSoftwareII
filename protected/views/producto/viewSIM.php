<?php
$this->breadcrumbs=array(
	'Producto'=>array('index'),
        $id,	
);

$this->menu=array(
        array('label'=>'Nuevo Producto Similar', 'url'=>array('createSIM', 'id'=>$id)),
);
?>


<h1>Ver los Productos Similares de <?php echo $pro->descripcion?></h1>


<?php if($detalleContactoP) {?>
   
<table class="miGrid">
    <tr>
        <th>Codigo</th>
        <th>Producto</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($detalleContactoP as $dc){  ?>
    <tr>
        <td><?php echo $dc->Producto_codigoSimilar; ?></td>
        <td><?php echo $dc->productoCodigoSimilar->descripcion; ?></td>
        <td><?php echo CHtml::link('Editar',array('updateSIM','id'=>$dc->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteSIM','id'=>$dc->id),array('confirm'=>'Está seguro que desea eliminar este producto similar?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existen Productos similares</h3>";
} 



