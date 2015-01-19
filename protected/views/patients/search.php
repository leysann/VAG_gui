<?php
/* @var $this PatientsSearchController */
/* @var $model PatientsSearchForm */
/* @var $form CActiveForm */
?>

<div class="form">
	<div class="newpat">
		<p class="alignleft">Search Patient</p>
		<p class="alignright"><?php $this->widget('zii.widgets.CMenu',
			array(
				'encodeLabel'=>false,
				'htmlOptions'=>array('class' => 'css-item'),
				'activeCssClass'=>'active',
				'items'=>array(
				 array(
					'label'=>'<img src="images/add121.png" width="20px" style="margin-right:5px; margin-top:5px;"/>new', 
					'url'=>array('/patients/create')),
	),
			)); ?></p>
	</div>

	<div style="clear: both;"></div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patients-search-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'datepicker-patientsSearchForm',
				'attribute'=>'birthdate',
				'model' => $model,
				'options'=>array(
					'dateFormat'=>'dd.mm.yy',
					'maxDate'=>'new Date()', // Today
					'minDate'=>'01.01.1900',
					'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
					'changeYear'=>true,
					'yearRange'=>'1900:'.date("Y"),
				))
			);
		?>
		<?php echo $form->error($model,'birthdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->