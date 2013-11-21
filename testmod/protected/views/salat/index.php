<?php
/* @var $this SalatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salats',
);

$this->menu=array(
	array('label'=>'Create Salat', 'url'=>array('create')),
	array('label'=>'Manage Salat', 'url'=>array('admin')),
);
?>

<h1>Салаты</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
