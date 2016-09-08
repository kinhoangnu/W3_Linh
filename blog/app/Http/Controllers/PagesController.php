<?php 

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		#Process variable data or params
		#talk to the model
		#receive from the model
		#compile or process data from model
		#pass that data to needed view
		return view('pages.welcome');

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

	// public function postContact() {

	// }
}

 ?>