<?php

namespace App\Controllers;

class BlogsController extends Controller {
    
    public function welcome() {
        $users = [
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@framework.net'
        ];
		
		$params = ['usuarios' => $users];
		
        return view('blog.welcome', $params);
    }

    public function getAll() {
        $users = [
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@framework.net'
        ];

        return $users;
    }
}