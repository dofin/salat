<?php
/* @var $this IngridController */
/* @var $model Ingrid */

$this->breadcrumbs=array(
	'Ingrids'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ingrid', 'url'=>array('index')),
	array('label'=>'Manage Ingrid', 'url'=>array('admin')),
);
?>

<h1>Create Ingrid</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>