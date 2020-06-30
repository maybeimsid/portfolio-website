<?php
use App\Form;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Skills()
    {
    return view('forms.Skills');
    }

    public function Mywork()
    {
    return view('forms.Mywork');
    }

    public function w_apps()
    {
    return view('forms.w_apps');
    }

    public function w_photography()
    {
    return view('forms.w_photography');
    }

    public function w_design()
    {
    return view('forms.w_design');
    }

    public function w_websites()
    {
    return view('forms.w_websites');
    }

    public function Hire()
    {
    return view('forms.Hire');
    }

    public function recommendations()
    {
    return view('forms.recommendations');
    }


 public function web()
    {
    return view('forms.web');
    }

    public function web_ad()
    {
    return view('forms.web_ad');
    }

    public function home_ad()
    {
    return view('forms.home_ad');
    }

    public function Skills_ad()
    {
    return view('forms.Skills_ad');
    }

    public function Mywork_ad()
    {
    return view('forms.Mywork_ad');
    }

    public function w_apps_ad()
    {
    return view('forms.w_apps_ad');
    }

    public function w_photography_ad()
    {
    return view('forms.w_photography_ad');
    }

    public function w_design_ad()
    {
    return view('forms.w_design_ad');
    }

    public function w_websites_ad()
    {
    return view('forms.w_websites_ad');
    }

    public function Hire_ad()
    {
    return view('forms.Hire_ad');
    }

    public function recommendations_ad()
    {
    return view('forms.recommendations_ad');
    }





    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('forms.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([          
        'coinname' => 'required',          
        'coinprice'=> 'required|numeric',        
    ]);         
       $form= new Form();        
       $form->coinname=$request->get('coinname');        
       $form->coinprice=$request->get('coinprice');        
       $checkbox = implode(",", $request->get('option'));        
       $form->dropdown=$request->get('dropdown');        
       $form->radio=$request->get('radio');        
       $form->checkbox = $checkbox;         
       $form->save();        
       return redirect('forms')->with('success', 'Coin has been added');
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
