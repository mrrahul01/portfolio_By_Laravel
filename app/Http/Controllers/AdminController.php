<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user;
use \View;
use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function userinformation()
    {
        $data=user::all();
        return view('admin')->with('data',$data);
    }

    public function destroy($id)
    {
        $response=user::find($id)->delete();
        if($response)
        {
            return redirect()->back();
        }
    }
}