<?php
/* @var $this IngridController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ingrids',
);

$this->menu=array(
	array('label'=>'Create Ingrid', 'url'=>array('create')),
	array('label'=>'Manage Ingrid', 'url'=>array('admin')),
);
?>

<h1>Ingrids</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
