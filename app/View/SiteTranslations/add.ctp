<div class="page-content">
    <?php $this->Html->addCrumb('Site Translations', '/sitetranslations');
    $this->Html->addCrumb('Add Translation', '/sitetranslations/add');?>
<?php echo $this->Form->create('SiteTranslation'); ?>
	<fieldset>
		<legend><?php echo __('Add Site Translation'); ?></legend>
	<?php
		echo $this->Form->input('phrase_1', array('label'=>'Phrase'));
		echo $this->Form->input('phrase_2', array('label'=>'French'));
		echo $this->Form->input('phrase_3', array('label'=>'German'));
	?>
	</fieldset>
    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
    echo $this->Form->end();?>
</div>
