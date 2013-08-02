<?php 
/**
 * This file receives 2 GET parameters: "temp" and "userkey"
 * If both of them are valid a message is send to pushover. And pushover
 * will forward it to your devices that have the pushover application installed.
 * 
 * @file pushover.php
 * @author Sandro Meier
 * @date 02.08.2013
 */

include dirname(__FILE__) . '/lib/Pushover.php';
include dirname(__FILE__) . '/lib/functions.php';

$temperature 	= isset($_GET['temp']) ? $_GET['temp'] : NULL;
$userkey 		= isset($_GET['userkey']) ? $_GET['userkey'] : NULL;

// Validate userkey & temperature
/// @todo Validate userkey with Pushover API
if ($temperature === NULL || $userkey === NULL) {
	echo json_encode(array(
		'error' => 'Invalid data received.',
	));
	return;
}

$config = getConfig();

// Send the notification
$pushover = new Pushover();
$pushover->setToken($config['pushover_token']);
$pushover->setUser($userkey);
$pushover->setMessage("Your Raspberry Pi's temperature raised above your defined maximum temperature. " .
			"Current temperature is " . $temperature . " C.");
$result = $pushover->send();

// Return the result (boolean)
echo json_encode(array(
	'result' => $result,
));
return;
?>