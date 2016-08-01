<?php

namespace Drupal\udn_login\Controller;

use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Form\UserLoginForm;

class UdnUserLoginForm extends UserLoginForm {

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);

    unset($form['name']['#title']);
    unset($form['name']['#description']);
    $form['name']['#udn_label'] = '帳號';
    // $form['name']['#attributes']['placeholder'] = '帳號';

    unset($form['pass']['#title']);
    unset($form['pass']['#description']);
    $form['pass']['#udn_label'] = '密碼';
    // $form['pass']['#attributes']['placeholder'] = '密碼';

    $form['#theme'] = [ 'udn_login' ];

    return $form;
  }

}
