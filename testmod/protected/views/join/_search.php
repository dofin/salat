<?php
/* @var $this JoinController */
/* @var $model Join */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_dj'); ?>
		<?php echo $form->textField($model,'id_dj'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sal'); ?>
		<?php echo $form->textField($model,'id_sal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ing'); ?>
		<?php echo $form->textField($model,'id_ing'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->