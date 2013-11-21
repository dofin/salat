<?php
/* @var $this JoinController */
/* @var $model Join */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'join-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sal'); ?>
		<?php echo $form->textField($model,'id_sal'); ?>
		<?php echo $form->error($model,'id_sal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ing'); ?>
		<?php echo $form->textField($model,'id_ing'); ?>
		<?php echo $form->error($model,'id_ing'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->