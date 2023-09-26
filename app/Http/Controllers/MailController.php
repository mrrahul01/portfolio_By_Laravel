<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\userlogin;
use \View;
use Validator;
use Illuminate\Mail\Mailer;
use Redirect;
use Session;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

    public function basic_email(){
    $name = Input::get('name');
    $surname = Input::get('surname');
    $email = Input::get('email');
    $phone = Input::get('phone');
    $message1 = Input::get('message');


$data=['name'=> $name, 'LastName'=> $surname, 'email'=> $email, 'phone'=> $phone, 'message1'=> $message1];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('razzkhan207@gmail.com','ToTesting')->subject('Send Mail from Laravel');
            $message->from('mr.ruhul.khan@gmail.com','From My Portfolio');
            
        });
        // echo 'basic email was sent!!!';
        return redirect()->back();
    }

    public function html_email(){
         $data=['name'=>'ToTesting'];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('razzkhan207@gmail.com','ToTesting')->subject('you can use your HTML Email Templete');
            $message->from('mr.ruhul.khan@gmail.com','FromTesting');
        });
        echo 'HTML email was sent!!!';
    }

    public function attaachment_email(){
        $data=['name'=>'ToTesting'];
        Mail::send(['text'=>'mail'],$data, function($message){
            $message->to('razzkhan207@gmail.com','ToTesting')->subject('you can use your HTML Email Templete');
            $message->attach('C:\xampp\htdocs\myportfolio\resources\assets\img\thanknew.jpg');
            $message->from('mr.ruhul.khan@gmail.com','FromTesting');
        });
        echo 'HTML email was sent!!!';
    }
}
