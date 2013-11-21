<?php
/* @var $this IngridController */
/* @var $model Ingrid */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ingrid-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nazvanie'); ?>
		<?php echo $form->textField($model,'nazvanie',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nazvanie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zena'); ?>
		<?php echo $form->textField($model,'zena'); ?>
		<?php echo $form->error($model,'zena'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->