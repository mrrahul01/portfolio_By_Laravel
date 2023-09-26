<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Request;
use Session;
class ApplyController extends Controller {
public function upload() {
  // getting all of the post data
 
    
      $destinationPath = '../resources/assets/assets/images/'; // upload path
      // $destinationPath = 'uploads'; // upload path
      $extension = Input::file('picture')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('picture')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      // Session::flash('success', 'Upload successfully'); 
      // return Redirect::to('userlogin');
    }
   
      // sending back with error message.
      // Session::flash('error', 'uploaded file is not valid');
     
    }
  

