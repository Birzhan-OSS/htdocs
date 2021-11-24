<?php
use oat\tao\helpers\Layout;
use oat\tao\model\theme\Theme;
?>



<div id="login-box" class="animate__animated animate__flipInY entry-point entry-point-container">
	
	<?=Layout::renderThemeTemplate(Theme::CONTEXT_BACKOFFICE, 'login-message')?>
	<div id="login-box-inner-container" class="myclass_two">
	</div>

	<?php foreach(get_data('entryPoints') as $entrypoint): ?>
	<div class="login__btn__gd">
	
	<a href="<?= $entrypoint->getUrl() ?>">
	  <button  class="login_btn">		
			НАЧАТЬ ОБУЧЕНИЕ
		</button>
		</a>
	</div>
	<?php endforeach;?>
</div>
<?php if(get_data('show_gdpr')): ?>
<?=Layout::renderThemeTemplate(Theme::CONTEXT_BACKOFFICE, 'gdpr')?>
<?php endif; ?>

<script>
	var link = document.getElementById('body_id');
	link.style.overflow = 'hidden';
	link.style.background = '#f5f5f5';
	var link = document.getElementById('html_id');
	link.style.background = '#f5f5f5';
	requirejs.config({
		config: {
			'controller/login': {
				'message': {
					'info': <?= json_encode(get_data('msg')) ?>,
					'error': <?= json_encode(urldecode(get_data('errorMessage'))) ?>
                },
				'disableAutocomplete': <?= get_data('autocompleteDisabled') ?>,
				'enablePasswordReveal': <?= get_data('passwordRevealEnabled') ?>,
				'fieldMessages': {
					'login': <?= json_encode(get_data('fieldMessages_password')) ?>,
					'password': <?= json_encode(get_data('fieldMessages_password')) ?>
                }
			}
		}
	});
</script>