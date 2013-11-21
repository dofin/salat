<?php
/* @var $this JoinController */
/* @var $data Join */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dj')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dj), array('view', 'id'=>$data->id_dj)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sal')); ?>:</b>
	<?php echo CHtml::encode($data->id_sal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ing')); ?>:</b>
	<?php echo CHtml::encode($data->id_ing); ?>
	<br />


</div>