<?php

require( dirname( __FILE__ ) . '/../vendor/autoload.php' );

$options = array(
	'cluster' => 'ap1',
	'encrypted' => true
);
$pusher = new Pusher(
	'9c092f95150ac02fb35c',
	'98d26c1e62fd5fe2abca',
	'305301',
	$options
);

$text = htmlspecialchars($_REQUEST['message']);

$data['message'] = $text;
$pusher->trigger('notifications', 'new_notification', $data);
?>