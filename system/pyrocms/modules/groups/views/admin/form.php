<?php if($method == 'edit'): ?>
    <h3><?php echo sprintf(lang('groups.edit_title'), $group->name); ?></h3>
<?php else: ?>
    <h3><?php echo lang('groups.add_title'); ?></h3>
<?php endif; ?>

<?php echo form_open(uri_string(), 'class="crud"'); ?>
    <ul>
		<li>
			<label for="name"><?php echo lang('groups.name');?></label>
			<?php echo form_input('name', $group->name);?>
		</li>
		<li>
			<label for="description"><?php echo lang('groups.description');?>:</label>
			<?php echo form_input('description', $group->description);?>
		</li>
    </ul>

	<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
	
<?php echo form_close();?>