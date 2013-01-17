<?php

class User extends Eloquent{

	public static $table = 'users';

	public static $key = 'id';

	public static function first_user()
	{
		$user = new User;

		$user = User::find(1);

		return $user->username;
	}
}