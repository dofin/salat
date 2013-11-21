<?php
/* @var $this IngridController */
/* @var $data Ingrid */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ing')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ing), array('view', 'id'=>$data->id_ing)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazvanie')); ?>:</b>
	<?php echo CHtml::encode($data->nazvanie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zena')); ?>:</b>
	<?php echo CHtml::encode($data->zena); ?>
	<br />


</div>