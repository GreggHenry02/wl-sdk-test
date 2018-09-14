<?php

namespace WellnessLiving\Core\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;

/**
 * Signs user up.
 */
class RegisterModel extends WlModelAbstract
{
  /**
   * Application ID.
   *
   * @post post
   * @var string
   */
  public $s_application = '';

  /**
   * Email.
   *
   * @post post
   * @var string
   */
  public $s_mail = '';

  /**
   * First name.
   *
   * @post post
   * @var string
   */
  public $s_name_first = '';

  /**
   * Last name.
   *
   * @post post
   * @var string
   */
  public $s_name_last = '';

  /**
   * Password.
   *
   * @post post
   * @var string
   */
  public $s_password = '';

  /**
   * Password confirmation.
   *
   * @post post
   * @var string
   */
  public $s_password_confirm = '';
}

?>