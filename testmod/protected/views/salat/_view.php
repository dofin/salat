<?php
/* @var $this SalatController */
/* @var $data Salat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sal), array('view', 'id'=>$data->id_sal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<?php echo CHtml::link(CHtml::encode('Ингридиенты'), array('view', 'id'=>$data->id_sal));?>
	<br />

</div>