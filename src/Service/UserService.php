<?php

namespace Glavec\TruserBundle\Service;

class UserService {
	
	public function getUsers() {
		return array(
			array(
				"id" => 1,
				"name" => "test"
			),
			array(
				"id" => 2,
				"name" => "test 2"
			)
		);
	}
	
//	public function getUser($id) {
//
//	}
}