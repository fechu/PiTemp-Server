<?php

/**
 * Creates the config and returns it.
 * If theres a file called local.config.php it will be merged with the config.php file.
 * @return Array The config array
 */
function getConfig()
{
	$config = include 'config.php';
	if (file_exists('local.config.php')) {
		// Load the local config and merge
		$localConfig = include 'local.config.php';
		$config = array_merge($config, $localConfig);
	}
	
	return $config;	
}