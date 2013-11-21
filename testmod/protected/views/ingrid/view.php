<?php
/* @var $this IngridController */
/* @var $model Ingrid */

$this->breadcrumbs=array(
	'Ingrids'=>array('index'),
	$model->id_ing,
);

$this->menu=array(
	array('label'=>'List Ingrid', 'url'=>array('index')),
	array('label'=>'Create Ingrid', 'url'=>array('create')),
	array('label'=>'Update Ingrid', 'url'=>array('update', 'id'=>$model->id_ing)),
	array('label'=>'Delete Ingrid', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ing),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ingrid', 'url'=>array('admin')),
);
?>

<h1>View Ingrid #<?php echo $model->id_ing; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ing',
		'nazvanie',
		'zena',
	),
)); ?>
