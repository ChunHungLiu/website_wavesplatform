<?
$email = 'rideon@wavesplatform.com';
$from = 'Waves Platform';

$body = '<b>Name:</b> '.$_POST['name'].'<br>';
$body .= '<b>Email:</b> '.$_POST['email'].'<br>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: '. $from . "\r\n";
$headers .= 'Reply-To: '. $_POST['email'] . "\r\n";

$body = wordwrap($body, 70, "\r\n");

$subject = 'Inquiry to Waves Platform';

if ( mail($email, $subject, $body, $headers) ) {
	?><h5 class="teal-text text-darken-3" data-i18n='form-success'></h5><?
}
else {
	?><h5 class="red-text text-darken-2" data-i18n='form-error'></h5><?
}
?>
