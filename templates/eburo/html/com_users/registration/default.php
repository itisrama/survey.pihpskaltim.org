<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');

$this->form->reset();
?>

<div class="row-fluid">
	<div class="col-md-6 col-md-offset-3">
		<div class="guest-wrap clearfix">
			<div class="guest-inner registration<?php echo $this->pageclass_sfx?>">
				<div class="text-center">
					<img src="<?php echo JURI::base(true).'/images/login/logo.png'?>">
				</div>
				<hr/>
				<form autocomplete="off" id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate form-horizontal">
				<?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
					<?php $fields = $this->form->getFieldset($fieldset->name);?>
					<?php if (count($fields)):?>
						<fieldset>
						<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.
						?>
							<h2><?php echo JText::_($fieldset->label);?></h2>
							<br/>
						<?php endif;?>
						<?php foreach ($fields as $field) :// Iterate through the fields in the set and display them.?>
							<?php if ($field->hidden):// If the field is hidden, just display the input.?>
								<?php echo $field->input;?>
							<?php else:?>
								<div class="form-group">

									<div class="col-sm-3 control-label">
										<?php echo $field->label; ?>
										<?php if (!$field->required && $field->type != 'Spacer') : ?>
											<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL');?></span>
										<?php endif; ?>
									</div>
									<div class="col-sm-9">
										<?php echo $field->input;?>
									</div>

								</div>
							<?php endif;?>
						<?php endforeach;?>
						</fieldset>
					<?php endif;?>
				<?php endforeach;?>
					<hr/>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JREGISTER');?></button>
							<a class="btn btn-warning cancel" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
							<input type="hidden" name="option" value="com_users" />
							<input type="hidden" name="task" value="registration.register" />
							<?php echo JHtml::_('form.token');?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>