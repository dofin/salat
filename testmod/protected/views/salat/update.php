<?php
/* @var $this SalatController */
/* @var $model Salat */

$this->breadcrumbs=array(
	'Salats'=>array('index'),
	$model->title=>array('view','id'=>$model->id_sal),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salat', 'url'=>array('index')),
	array('label'=>'Create Salat', 'url'=>array('create')),
	array('label'=>'View Salat', 'url'=>array('view', 'id'=>$model->id_sal)),
	array('label'=>'Manage Salat', 'url'=>array('admin')),
);
?>

<h1>Update Salat <?php echo $model->id_sal; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>