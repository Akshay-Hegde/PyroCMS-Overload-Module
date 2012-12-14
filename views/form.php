<section class="title">
<h4>Add/Edit Overload</h4>
</section>

<section class="item">
	
<?php echo form_open(); ?>

<div class="tabs">

	<ul class="tab-menu">
		<li><a href="#general-tab"><span>General</span></a></li>
		<li><a href="#css-tab"><span>CSS</span></a></li>
		<li><a href="#js-tab"><span>Javascript</span></a></li>
		<li><a href="#data-tab"><span>Data</span></a></li>
	</ul>
	
	<!-- Content tab -->
	<div class="form_inputs" id="general-tab">
		<fieldset>
			<ul>
				<li>
					<label for="title">Title <span>*</span></label>
					<div class="input"><?php echo form_input('title', isset($title) ? $title : NULL, 'maxlength="100" id="title"'); ?></div>				
				</li>
				
				<li>
					<label for="slug">Route<small>Which routes would you like this overload to apply to?</small></label>
					<div class="input"><?php echo form_input('route', isset($route) ? $route : NULL, 'maxlength="100" class="width-20"'); ?></div>
				</li>
				
				<li>
					<label for="status">Module</label>
					<div class="input"><?php echo form_dropdown('module', $modules_list, isset($module) ? $module : NULL) ?></div>
				</li>
				
				<li>
					<label for="slug">Class</label>
					<div class="input"><?php echo form_input('class', isset($class) ? $class : NULL, 'maxlength="100" class="width-20"'); ?></div>
				</li>

				<li>
					<label for="slug">Method</label>
					<div class="input"><?php echo form_input('method', isset($method) ? $method : NULL, 'maxlength="100" class="width-20"'); ?></div>
				</li>
			</ul>
		</fieldset>
	</div>

	<!-- CSS tab -->
	<div class="form_inputs" id="css-tab">
		<fieldset>
			<ul>
				<li>
					<textarea name="css" height="500" id="css" class="css_editor" width="100%"><?php echo isset($css) ? $css : NULL; ?></textarea>				
				</li>
			</ul>
		</fieldset>
	</div>

	<!-- JS tab -->
	<div class="form_inputs" id="js-tab">
		<fieldset>
			<ul>
				<li>
					<textarea name="js" height="500" id="css" class="js_editor" width="100%"><?php echo isset($js) ? $js : NULL; ?></textarea>				
				</li>
			</ul>
		</fieldset>
	</div>

	<!-- Data tab -->
	<div class="form_inputs" id="data-tab">
		<fieldset>
			<ul>
				<?php if (isset($data) AND ! empty($data)): ?>
					<?php foreach ($data as $key => $value): ?>
						<li>
							<label style="width: 65px !important;">Key-Value <span>*</span></label>
							<div class="input key">
								<input type="text" name="data_key[]" value="<?php echo set_value('data_key[]', $key); ?>">
							</div>
							<div class="input value">
								<textarea name="data_value[]"><?php echo set_value('data_value[]', $value); ?></textarea>
							</div>
						</li>
					<?php endforeach; ?>
				<?php else: ?>
					<li>
						<label style="width: 65px !important;">Key-Value <span>*</span></label>
						<div class="input key">
							<input type="text" name="data_key[]" value="<?php echo set_value('data_key[]'); ?>">
						</div>
						<div class="input value">
							<textarea name="data_value[]"><?php echo set_value('data_value[]'); ?></textarea>
						</div>
					</li>
				<?php endif; ?>
			</ul>

			<button type="button" class="btn blue kv_button">
				<span>Add</span>
			</button>
		</fieldset>
	</div>

</div>

<div class="buttons">
	<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'save_exit', 'cancel'))); ?>
</div>

<?php echo form_close(); ?>

</section>