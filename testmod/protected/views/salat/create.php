<?php
/* @var $this SalatController */
/* @var $model Salat */

$this->breadcrumbs=array(
	'Salats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salat', 'url'=>array('index')),
	array('label'=>'Manage Salat', 'url'=>array('admin')),
);
?>

<h1>Create Salat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>