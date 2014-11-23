<?php
$this->breadcrumbs=array(
	'Producto'=>array('index'),
        $id,	
);

$this->menu=array(
        array('label'=>'Nuevo Funcion', 'url'=>array('createDCP', 'id'=>$id)),
);
?>


<h1>Ver las Funciones de <?php echo $pro->descripcion?></h1>


<?php if($detalleContactoP) {?>
   
<table class="miGrid">
    <tr>
        <th>Codigo</th>
        <th>Funcion</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($detalleContactoP as $dc){  ?>
    <tr>
        <td><?php echo $dc->Funcion_id; ?></td>
        <td><?php echo $dc->funcion->descripcion; ?></td>
        <td><?php echo CHtml::link('Editar',array('updateDCP','id'=>$dc->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteDCP','id'=>$dc->id),array('confirm'=>'Está seguro que desea eliminar esta Funcion?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existen funciones para esta Producto</h3>";
} 



