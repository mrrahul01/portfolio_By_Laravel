<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;

class EdituserController extends Controller
{
   public function update($id)
	{
		
 
        $destinationPath = '../resources/assets/assets/images/'; // upload path
      // $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
		
		$password = Input::get('password');
		$password = bcrypt($password);

		$data=[

			'image' => $fileName,
			'full_name' => Input::get('full_name'),
			'address' => Input::get('address'),
            'email' => Input::get('email'),
            'password' => $password,
            'phone' => Input::get('phone')
            
		];

		$response = User::find($id)->update($data);
		if ($response) {
			return redirect()->back()->with('success', 'Information Updated Successfully'); 
		}
	}
}
