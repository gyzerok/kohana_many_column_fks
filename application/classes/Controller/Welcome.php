<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$user = ORM::factory('user', 1);
        $this->response->body(View::factory('index.tpl', array('user' => $user)));
	}

} // End Welcome
