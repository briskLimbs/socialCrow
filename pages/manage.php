<?php

global $database;
$addons = new Addons();

if (isset($_POST['update'])) {
	unset($_POST['update']);
	if ($database->update('social_crow', $_POST)) {
		$parameters['message'] = 'SocialCrow settings updated successfully';
	}
}

$widget = getSocialCrow();
$parameters['widget'] = $widget;
$parameters['_title'] = 'SocialCrow Settings';
$parameters['mainSection'] = 'social_crow';
$addons->display(CROW_CORE_NAME, 'pages/manage.html', $parameters);