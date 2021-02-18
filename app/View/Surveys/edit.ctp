<div class="surveys form">
<?php echo $this->Form->create('Survey'); ?>
	<fieldset>
		<legend><?php echo __('Edit Survey'); ?></legend>
	<?php
		echo $this->Form->input('survey_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('published');
		echo $this->Form->input('title');
		echo $this->Form->input('reward');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Survey.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Survey.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Surveys'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Surveys'), array('controller' => 'surveys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey'), array('controller' => 'surveys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
