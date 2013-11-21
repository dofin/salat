<?php
/* @var $this JoinController */
/* @var $model Join */

$this->breadcrumbs=array(
	'Joins'=>array('index'),
	$model->id_dj,
);

$this->menu=array(
	array('label'=>'List Join', 'url'=>array('index')),
	array('label'=>'Create Join', 'url'=>array('create')),
	array('label'=>'Update Join', 'url'=>array('update', 'id'=>$model->id_dj)),
	array('label'=>'Delete Join', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dj),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Join', 'url'=>array('admin')),
);
?>

<h1>View Join #<?php echo $model->id_dj; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dj',
		'id_sal',
		'id_ing',
	),
)); ?>
