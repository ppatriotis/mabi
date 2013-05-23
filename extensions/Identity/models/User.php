<?php

namespace MABI\Identity;

include_once __DIR__ . '/../../../Model.php';

use MABI\Model;

class User extends Model {
  /**
   * @var \DateTime
   */
  public $created;

  /**
   * @var string
   */
  public $email;

  /**
   * @var string
   *
   * @field internal
   */
  public $passHash;

  /**
   * @var string
   *
   * @field internal
   */
  public $salt;

  /**
   * @var string
   *
   * @field external
   */
  public $password;
}
