<?php
/* @var $this IngridController */
/* @var $model Ingrid */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ing'); ?>
		<?php echo $form->textField($model,'id_ing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nazvanie'); ?>
		<?php echo $form->textField($model,'nazvanie',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zena'); ?>
		<?php echo $form->textField($model,'zena'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->