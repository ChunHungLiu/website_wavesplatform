<?php
include('./mchimp.php');


use \DrewM\MailChimp\MailChimp;
$MailChimp = new MailChimp('6fcf1211dade6eda1cfb5e63304d7cc0-us13');


/* List all the mailing lists
--------------------------------------------------------*/
//$result = $MailChimp->get('lists');
//print_r($result);


/* Last error returned by the API
--------------------------------------------------------*/
//print_r($MailChimp->getLastResponse());
//print_r($MailChimp->getLastRequest());


if ($_POST) {

  /* Subscribe someone to a list '89172f4bbc'
  --------------------------------------------------------*/
  $list_id = '89172f4bbc';
  $result = $MailChimp->post("lists/$list_id/members", array(
    'email_address' => $_POST['email'],
    'status'        => 'subscribed'
  ));

  if (!empty($result['detail'])) {
    $pieces = preg_split('@(?=Use)@', $result['detail']);
    echo $pieces[0];
  } elseif (!empty($result['email_address'])) {
    echo "Got it, You've been added to our email list";
  } else {
    $result = "";
  }

}