<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Users extends Eloquent {
    protected $table = "users";
}