<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $reg->save();

        return redirect('register/success');

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
}
