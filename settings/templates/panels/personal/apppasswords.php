<?php
	OC_Util::addScript('settings', 'authtoken');
	OC_Util::addScript('settings', 'authtoken_collection');
	OC_Util::addScript('settings', 'authtoken_view');
?>
<div id="apppasswords" class="section">
	<h2><?php p($l->t('App passwords'));?></h2>
	<span class="hidden-when-empty"><?php p($l->t("You've linked these apps."));?></span>
	<table>
		<thead class="hidden-when-empty">
			<tr>
				<th><?php p($l->t('Name'));?></th>
				<th><?php p($l->t('Most recent activity'));?></th>
				<th></th>
			</tr>
		</thead>
		<tbody class="token-list icon-loading">
		</tbody>
	</table>
	<p><?php p($l->t('An app password is a passcode that gives an app or device permissions to access your %s account.', [$theme->getName()]));?></p>
	<div id="app-password-form">
		<input id="app-password-name" type="text" placeholder="<?php p($l->t('App name')); ?>">
		<button id="add-app-password" class="button"><?php p($l->t('Create new app password')); ?></button>
	</div>
	<div id="app-password-result" class="hidden">
		<span><?php p($l->t('Use the credentials below to configure your app or device.')); ?></span>
		<div class="app-password-row">
			<span class="app-password-label"><?php p($l->t('Username')); ?></span>
			<input id="new-app-login-name" type="text" readonly="readonly"/>
		</div>
		<div class="app-password-row">
			<span class="app-password-label"><?php p($l->t('Password')); ?></span>
			<input id="new-app-password" type="text" readonly="readonly"/>
			<button id="app-password-hide" class="button"><?php p($l->t('Done')); ?></button>
		</div>
	</div>
</div>
