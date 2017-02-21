<?php

require_once 'libs/phpmailer/PHPMailerAutoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $fields = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'tel' => $_POST['tel']
  ];

  $body = '<p>' . $fields['name'] . '</p><p>' . $fields['email'] . '</p><p>' . $fields['tel'] . '</p>';

  if (isset($_POST['email']) and isset($_POST['tel'])) {
    if (empty($_POST['email'])) {
      $json['errors']['email'] = 'Емейл введен неверено';
    }
    if (empty($_POST['tel'])) {
      $json['errors']['tel'] = 'Телефон введен неверно';
    }
  }
  if (isset($_POST['tel'])) {
    if (empty($_POST['tel'])) {
      $json['errors']['tel'] = 'Телефон введен неверно';
    }
  }

  if(count($json['errors']) > 0) {
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    echo json_encode($json['errors']);
    } else {
      echo '<ul>';
      foreach($json['errors'] as $key => $value) {
        echo '<li>' . $value . '</li>';
      }
      echo '</ul>';exit;
    }
  } else {
    $mail = new PHPMailer;
    $mail->SetFrom('dev@mshlmv.dev', 'Maksim');
    $mail->FromName = 'Ajax Form';
    $mail->addAddress('ipseeh@ya.ru', 'John Doe');
    $mail->isHTML();
    $mail->Subject = 'PHPMailer sendmail test';
    $mail->Body = $body;

    if($mail->send()) {
      echo 'sent';
    } else {
      echo 'nosent';
    }
  }
} else {
  echo 'error';
}

?>