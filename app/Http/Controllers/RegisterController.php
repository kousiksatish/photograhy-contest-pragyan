<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Register as Register;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('base');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
    }

    public function success()
    {
        //
        return view('reg_success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    	    $v = Validator::make($request->all(), [
		    'photo1'  => 'required|max:8192|mimes:jpeg,jpg',
			    'photo2'  => 'max:8192|mimes:jpeg,jpg',
			    'photo3'  => 'max:8192|mimes:jpeg,jpg',
            ]);
	    if ($v->fails())
            {
		    return view('reg_failure', array('message'=>'Please check file size and type...'));
            }
        //
        $reg = new Register;
        $reg->name = $request->get('name');
        $reg->mobile = $request->get('mobile');
        $reg->email = $request->get('email');
        $stud = $request->get('student');
        if($stud == 'yes')
        {
            $reg->student = 1;
            $reg->coll_name = $request->get('collname');
            $reg->coll_degree = $request->get('degree');
            $reg->coll_city = $request->get('city');
            $reg->coll_dept = $request->get('dept');
            $reg->coll_year = $request->get('year');
        }

/*        $rules = array(
                'photo1'=> 'required|image|max:8192',
                'photo2'=> 'image|max:8192',
                'photo3'=> 'image|max:8192'
            );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return view('reg_failure', array('message'=>'Please check file size and type'));
        }*/
        $destinationPath = base_path() . '/public/prelims/'; // upload path
        $extension = $request->file('photo1')->getClientOriginalExtension(); // getting image extension
        $fileName = str_replace(' ', '_', $reg->name) . substr($reg->mobile, 0, 5) . '_1.'.$extension; // renameing image
        $request->file('photo1')->move($destinationPath, $fileName); 
        $reg->img1_url = 'prelims/'.$fileName;
        if($request->file('photo2'))
        {
        $destinationPath = base_path() . '/public/prelims/'; // upload path
        $extension = $request->file('photo2')->getClientOriginalExtension(); // getting image extension
        $fileName = str_replace(' ', '_', $reg->name) . substr($reg->mobile, 0, 5) . '_2.'.$extension; // renameing image
        $request->file('photo2')->move($destinationPath, $fileName); 
        $reg->img2_url = 'prelims/'.$fileName;
        }
        if($request->file('photo2'))
        {
        $destinationPath = base_path() . '/public/prelims/'; // upload path
        $extension = $request->file('photo3')->getClientOriginalExtension(); // getting image extension
        $fileName = str_replace(' ', '_', $reg->name) . substr($reg->mobile, 0, 5) . '_3.'.$extension; // renameing image
        $request->file('photo3')->move($destinationPath, $fileName); 
        $reg->img3_url = 'prelims/'.$fileName;
        }
        $reg->desc1 = $request->get('desc1');
        $reg->desc2 = $request->get('desc2');
        $reg->desc3 = $request->get('desc3');
        
        $res = $request->get('g-recaptcha-response');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "secret=6Leu1BATAAAAAF5daGaPmLoWB8ddj27By7JTlQOw&response=$res");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $api_res = curl_exec ($ch);

        curl_close ($ch);
        $response_arr = json_decode($api_res, true);

        if(!$response_arr['success'])
            return view('reg_failure', array('message'=>'Captcha verification failed...'));
        
        $reg->save();
        return view('reg_success');

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

	public function view()
	{
	    $registrants = Register::paginate(10);
		$registrants->setPath('registrants');
		return view('admin/view',compact('registrants'));
	}

    public function view2()
    {
        $registrants = Register::paginate(2);
        $registrants->setPath('registrants');
        return view('admin/view2',compact('registrants'));
    }


    public function admin()
    {
        if(Session::has('admin'))
            return redirect('registrants');
        return view('admin/login');
    }

    public function adminCheck(Request $request)
    {
        $password = sha1($request->get('password'));

        if( $password == env('ADMIN_PASSWORD'))
        {
            Session::put('admin', 'admin');
            return redirect('/registrants');
        }
        else
            return redirect('/admin')->with('message', 'Incorrect username or password');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/')->with('message', 'Successfully logged out');
    }
}
