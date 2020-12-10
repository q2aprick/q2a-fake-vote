<?php

/*
	Plugin Name: Q2A Fake Vote
	Plugin URI: https://github.com/q2aprick/q2a-fake-vote
	Plugin Update Check URI: 
	Plugin Description: Increase vote +5.
	Plugin Version: 1.0
	Plugin Date: 2020-12-10
	Plugin Author: Q2A Prick
	Plugin Author URI: https://github.com/q2aprick
	Plugin Minimum Question2Answer Version:
	Plugin Minimum PHP Version:
	Plugin License: copy lefted          
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

        qa_register_plugin_overrides('fakevote.php');

/*
	Omit PHP closing tag to help avoid accidental output
*/
