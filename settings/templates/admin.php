<?php /**
 * Copyright (c) 2011, Robin Appelman <icewind1991@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */
$levels = array('Debug', 'Info', 'Warning', 'Error', 'Fatal');
?>

<?php

// is htaccess working ?
if (!$_['htaccessworking']) {
	?>
<fieldset class="personalblock">
	<legend><strong><?php p($l->t('Security Warning'));?></strong></legend>

	<span class="securitywarning">
		<?php p($l->t('Your data directory and your files are probably accessible from the internet. The .htaccess file is not working. We strongly suggest that you configure your webserver in a way that the data directory is no longer accessible or you move the data directory outside the webserver document root.')); ?>
	</span>

</fieldset>
<?php
}

// is WebDAV working ?
if (!$_['isWebDavWorking']) {
	?>
<fieldset class="personalblock">
	<legend><strong><?php p($l->t('Setup Warning'));?></strong></legend>

	<span class="securitywarning">
		<?php p($l->t('Your web server is not yet properly setup to allow files synchronization because the WebDAV interface seems to be broken.')); ?>
		<?php print_unescaped($l->t('Please double check the <a href="%s">installation guides</a>.', $theme->getDocBaseUrl().'/server/5.0/admin_manual/installation.html')); ?>
	</span>

</fieldset>
<?php
}

// if module fileinfo available?
if (!$_['has_fileinfo']) {
	?>
<fieldset class="personalblock">
	<legend><strong><?php p($l->t('Module \'fileinfo\' missing'));?></strong></legend>

		<span class="connectionwarning">
		<?php p($l->t('The PHP module \'fileinfo\' is missing. We strongly recommend to enable this module to get best results with mime-type detection.')); ?>
	</span>

</fieldset>
<?php
}

// is locale working ?
if (!$_['islocaleworking']) {
	?>
<fieldset class="personalblock">
	<legend><strong><?php p($l->t('Locale not working'));?></strong></legend>

		<span class="connectionwarning">
		<?php
			$locales = 'en_US.UTF-8/en_US.UTF8';
			p($l->t('System locale can\'t be set to %s. This means that there might be problems with certain characters in file names. We strongly suggest to install the required packages on your system to support %s.', array($locales, $locales)));
			?>
	</span>

</fieldset>
<?php
}

// is internet connection working ?
if (!$_['internetconnectionworking']) {
	?>
<fieldset class="personalblock">
	<legend><strong><?php p($l->t('Internet connection not working'));?></strong></legend>

		<span class="connectionwarning">
		<?php p($l->t('This server has no working internet connection. This means that some of the features like mounting of external storage, notifications about updates or installation of 3rd party apps don´t work. Accessing files from remote and sending of notification emails might also not work. We suggest to enable internet connection for this server if you want to have all features.')); ?>
	</span>

</fieldset>
<?php
}
?>

<?php foreach ($_['forms'] as $form) {
	print_unescaped($form);
}
;?>

<fieldset class="personalblock" id="backgroundjobs">
	<legend><strong><?php p($l->t('Cron'));?></strong></legend>
	<table class="nostyle">
		<tr>
			<td>
				<input type="radio" name="mode" value="ajax"
					   id="backgroundjobs_ajax" <?php if ($_['backgroundjobs_mode'] === "ajax") {
					print_unescaped('checked="checked"');
				} ?>>
				<label for="backgroundjobs_ajax">AJAX</label><br/>
				<em><?php p($l->t("Execute one task with each page loaded")); ?></em>
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="mode" value="webcron"
					   id="backgroundjobs_webcron" <?php if ($_['backgroundjobs_mode'] === "webcron") {
					print_unescaped('checked="checked"');
				} ?>>
				<label for="backgroundjobs_webcron">Webcron</label><br/>
				<em><?php p($l->t("cron.php is registered at a webcron service to call cron.php once a minute over http.")); ?></em>
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="mode" value="cron"
					   id="backgroundjobs_cron" <?php if ($_['backgroundjobs_mode'] === "cron") {
					print_unescaped('checked="checked"');
				} ?>>
				<label for="backgroundjobs_cron">Cron</label><br/>
				<em><?php p($l->t("Use systems cron service to call the cron.php file once a minute.")); ?></em>
			</td>
		</tr>
	</table>
</fieldset>

<fieldset class="personalblock" id="avatar">
	<legend><strong><?php p($l->t('Avatars')); ?></strong></legend>
	<table class="nostyle">
		<tr>
			<td>
				<input type="radio" name="avatarmode" value="gravatar"
					id="avatar_gravatar" <?php if ($_['avatar'] === "gravatar") {
						print_unescaped('checked="checked"');
					} ?>>
				<label for="avatar_gravatar">Gravatar</label><br>
				<em><?php print_unescaped($l->t('Use <a href="http://gravatar.com/">gravatar</a> for avatars')); ?></em><br>
				<em><?php p($l->t('This sends data to gravatar')); ?></em>
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="avatarmode" value="local"
					id="avatar_local" <?php if ($_['avatar'] === "local") {
						print_unescaped('checked="checked"');
					} ?>>
				<label for="avatar_local"><?php p($l->t('Local avatars')); ?></label><br>
				<em><?php p($l->t('Use local avatars, which each user has to upload themselves')); ?></em>
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="avatarmode" value="none"
					id="avatar_none" <?php if ($_['avatar'] === "none") {
						print_unescaped('checked="checked"');
					} ?>>
				<label for="avatar_none"><?php p($l->t('No avatars')); ?></label><br>
				<em><?php print_unescaped($l->t('Do not provide avatars')); ?></em>
			</td>
		</tr>
	</table>
</fieldset>

<fieldset class="personalblock" id="shareAPI">
	<legend><strong><?php p($l->t('Sharing'));?></strong></legend>
	<table class="shareAPI nostyle">
		<tr>
			<td id="enable">
				<input type="checkbox" name="shareapi_enabled" id="shareAPIEnabled"
					   value="1" <?php if ($_['shareAPIEnabled'] === 'yes') print_unescaped('checked="checked"'); ?> />
				<label for="shareAPIEnabled"><?php p($l->t('Enable Share API'));?></label><br/>
				<em><?php p($l->t('Allow apps to use the Share API')); ?></em>
			</td>
		</tr>
		<tr>
			<td <?php if ($_['shareAPIEnabled'] === 'no') print_unescaped('style="display:none"');?>>
				<input type="checkbox" name="shareapi_allow_links" id="allowLinks"
					   value="1" <?php if ($_['allowLinks'] === 'yes') print_unescaped('checked="checked"'); ?> />
				<label for="allowLinks"><?php p($l->t('Allow links'));?></label><br/>
				<em><?php p($l->t('Allow users to share items to the public with links')); ?></em>
			</td>
		</tr>
		<?php if (!\OCP\App::isEnabled('files_encryption')) { ?>
		<tr>
			<td <?php if ($_['shareAPIEnabled'] == 'no') print_unescaped('style="display:none"');?>>
				<input type="checkbox" name="shareapi_allow_public_upload" id="allowPublicUpload"
				       value="1" <?php if ($_['allowPublicUpload'] == 'yes') print_unescaped('checked="checked"'); ?> />
				<label for="allowPublicUpload"><?php p($l->t('Allow public uploads'));?></label><br/>
				<em><?php p($l->t('Allow users to enable others to upload into their publicly shared folders')); ?></em>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td <?php if ($_['shareAPIEnabled'] === 'no') print_unescaped('style="display:none"');?>>
				<input type="checkbox" name="shareapi_allow_resharing" id="allowResharing"
					   value="1" <?php if ($_['allowResharing'] === 'yes') print_unescaped('checked="checked"'); ?> />
				<label for="allowResharing"><?php p($l->t('Allow resharing'));?></label><br/>
				<em><?php p($l->t('Allow users to share items shared with them again')); ?></em>
			</td>
		</tr>
		<tr>
			<td <?php if ($_['shareAPIEnabled'] === 'no') print_unescaped('style="display:none"');?>>
				<input type="radio" name="shareapi_share_policy" id="sharePolicyGlobal"
					   value="global" <?php if ($_['sharePolicy'] === 'global') print_unescaped('checked="checked"'); ?> />
				<label for="sharePolicyGlobal"><?php p($l->t('Allow users to share with anyone')); ?></label><br/>
				<input type="radio" name="shareapi_share_policy" id="sharePolicyGroupsOnly"
					   value="groups_only" <?php if ($_['sharePolicy'] === 'groups_only') print_unescaped('checked="checked"'); ?> />
				<label for="sharePolicyGroupsOnly"><?php p($l->t('Allow users to only share with users in their groups'));?></label><br/>
			</td>
		</tr>
	</table>
</fieldset>

<fieldset class="personalblock" id="security">
	<legend><strong><?php p($l->t('Security'));?></strong></legend>
	<table class="nostyle">
		<tr>
			<td id="enable">
				<input type="checkbox" name="forcessl"  id="enforceHTTPSEnabled"
					<?php if ($_['enforceHTTPSEnabled']) {
						print_unescaped('checked="checked" ');
						print_unescaped('value="false"');
					}  else {
						print_unescaped('value="true"');
					}
					?>
					<?php if (!$_['isConnectedViaHTTPS']) p('disabled'); ?> />
				<label for="forcessl"><?php p($l->t('Enforce HTTPS'));?></label><br/>
				<em><?php p($l->t(
					'Forces the clients to connect to %s via an encrypted connection.',
					$theme->getName()
				)); ?></em>
				<?php if (!$_['isConnectedViaHTTPS']) {
					print_unescaped("<br/><em>");
					p($l->t(
						'Please connect to your %s via HTTPS to enable or disable the SSL enforcement.',
						$theme->getName()
					));
					print_unescaped("</em>");
				}
				?>
			</td>
		</tr>
	</table>
</fieldset>

<fieldset class="personalblock">
	<legend><strong><?php p($l->t('Log'));?></strong></legend>
	<?php p($l->t('Log level'));?> <select name='loglevel' id='loglevel'>
	<option value='<?php p($_['loglevel'])?>'><?php p($levels[$_['loglevel']])?></option>
	<?php for ($i = 0; $i < 5; $i++):
	if ($i !== $_['loglevel']):?>
		<option value='<?php p($i)?>'><?php p($levels[$i])?></option>
		<?php endif;
endfor;?>
</select>
	<table id="log">
		<?php foreach ($_['entries'] as $entry): ?>
		<tr>
			<td>
				<?php p($levels[$entry->level]);?>
			</td>
			<td>
				<?php p($entry->app);?>
			</td>
			<td>
				<?php p($entry->message);?>
			</td>
			<td>
				<?php if(is_int($entry->time)){
					p(OC_Util::formatDate($entry->time)); 
				} else {
					p($entry->time);
				}?>
			</td>
		</tr>
		<?php endforeach;?>
	</table>
	<?php if ($_['entriesremain']): ?>
	<input id="moreLog" type="button" value="<?php p($l->t('More'));?>...">
	<input id="lessLog" type="button" value="<?php p($l->t('Less'));?>...">
	<?php endif; ?>

</fieldset>

<fieldset class="personalblock">
	<legend><strong><?php p($l->t('Version'));?></strong></legend>
	<strong><?php p($theme->getTitle()); ?></strong> <?php p(OC_Util::getVersionString()); ?>
<?php if (OC_Util::getEditionString() === ''): ?>
	<p>
		<?php print_unescaped($l->t('Developed by the <a href="http://ownCloud.org/contact" target="_blank">ownCloud community</a>, the <a href="https://github.com/owncloud" target="_blank">source code</a> is licensed under the <a href="http://www.gnu.org/licenses/agpl-3.0.html" target="_blank"><abbr title="Affero General Public License">AGPL</abbr></a>.')); ?>
	</p>
<?php endif; ?>
</fieldset>
<fieldset class="personalblock credits-footer">
<p>
	<?php print_unescaped($theme->getShortFooter()); ?>
</p>
</fieldset>
