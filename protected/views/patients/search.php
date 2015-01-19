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
				'items'=>array(
				array(
					'itemOptions' => array('class' => 'css-item'),
					'label'=>'<img src="'.Yii::app()->request->baseUrl.'images/add121.png" width="20px"/>new', 
					'url'=>array('/patients/create')),
	),
			)); ?></p>
	</div>
	



	<div style="clear: both;"></div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patients-search-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
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
		<!--<?php echo $form->dateField($model, 'birthdate'); ?>-->
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'datepicker-patientsSearchForm',
				//'flat'=>true,
				'attribute'=>'birthdate',
				'model' => $model,
				'options'=>array(
					'dateFormat'=>'dd.mm.yy',
					'maxDate'=>'new Date()', // Today
					'minDate'=>'01.01.1900',
					'showAnim'=>'blind',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
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