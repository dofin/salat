<?php
/* @var $this IngridController */
/* @var $model Ingrid */

$this->breadcrumbs=array(
	'Ingrids'=>array('index'),
	$model->id_ing=>array('view','id'=>$model->id_ing),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ingrid', 'url'=>array('index')),
	array('label'=>'Create Ingrid', 'url'=>array('create')),
	array('label'=>'View Ingrid', 'url'=>array('view', 'id'=>$model->id_ing)),
	array('label'=>'Manage Ingrid', 'url'=>array('admin')),
);
?>

<h1>Update Ingrid <?php echo $model->id_ing; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>