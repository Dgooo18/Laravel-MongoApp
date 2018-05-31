<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testUser extends Eloquent
{
	protected $connection='mongodb';
	protected $collection = 'testUser';
}
