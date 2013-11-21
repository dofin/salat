<?php
/* @var $this SalatController */
/* @var $model Salat */

$this->breadcrumbs=array(
	'Salats'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Salat', 'url'=>array('index')),
	array('label'=>'Create Salat', 'url'=>array('create')),
	array('label'=>'Update Salat', 'url'=>array('update', 'id'=>$model->id_sal)),
	array('label'=>'Delete Salat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salat', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->title; ?></h1>
<h4>Ингридиенты:</h4>

<?php 

Salat::sumIngrid($model->id_sal-1)

/*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sal',
		'title',
        array(
'label'=>'Category',
'type'=>'raw',
'value'=>Salat::sumIngrid($model->id_sal-1),

),
	),
));*/ ?>
