<?php
/* @var $this JoinController */
/* @var $model Join */

$this->breadcrumbs=array(
	'Joins'=>array('index'),
	$model->id_dj=>array('view','id'=>$model->id_dj),
	'Update',
);

$this->menu=array(
	array('label'=>'List Join', 'url'=>array('index')),
	array('label'=>'Create Join', 'url'=>array('create')),
	array('label'=>'View Join', 'url'=>array('view', 'id'=>$model->id_dj)),
	array('label'=>'Manage Join', 'url'=>array('admin')),
);
?>

<h1>Update Join <?php echo $model->id_dj; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>