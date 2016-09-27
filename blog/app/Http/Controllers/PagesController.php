<?php 

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		#Process variable data or params
		#talk to the model
		#receive from the model
		#compile or process data from model
		#pass that data to needed view
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		$first = 'Linh';
		$last = 'Hoang';
		$full = $first . " " . $last;
		$email = 'kinhoangnu1@gmail.com';

		//pass variable $full to become $fullname so it can be accessed in view
		// return view('pages.about')->withFullname($full)->withEmail($email);
		
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $full;
		return view('pages.about')->withData($data);

	}

	public function getContact() {
		return view('pages.contact');

	}

	public function getLogin() {
		return view('auth.login');

	}

	// public function postContact() {

	// }
}

 ?>