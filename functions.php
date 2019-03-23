<?php

function getSocialCrow() {
	global $database;
	return $database->getOne('social_crow');
}

function socialCrow() {
	$div = '<div class="social-crow mb-3">';
  foreach (getSocialCrow() as $network => $username) {
  	if ($network == 'id') { continue; }
  	if (!empty($username)) {
  		$div .= '<a href="https://' . $network . '.com/' . $username . '"><button type="button" class="btn btn-lg btn-block mb-1 btn-' . $network . '"><i class="mdi mdi-' . $network . '"></i> ' . ucfirst($network) . '</button></a>';
  	}
  }
  $div .= '</div>';
  echo $div;
}