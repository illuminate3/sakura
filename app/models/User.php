<?php

/* use Illuminate\Auth\UserTrait;
  use Illuminate\Auth\UserInterface;
  use Illuminate\Auth\Reminders\RemindableTrait;
  use Illuminate\Auth\Reminders\RemindableInterface; */

use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

//class User extends Eloquent implements UserInterface, RemindableInterface {
class User extends SentryModel {
    //use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $connection = 'fcs_staff';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

}
