<?php

namespace App\Http\Controllers\API;

use App\Slide;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Combo;

class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        $link=[
            'home'=>route('index'),
            'about'=>route('about'),
            'service'=>route('service'),
            'contact'=>route('contact'),
            'news'=>route('news'),
            'emshop'=>route('emshop')
        ];
        return $this->sendResponse([
            'contact' => $contact,
            'link'=>$link
        ], 'successfully');
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
    public function show()
    {
        $slide = Slide::all();
        $combo = Combo::all();
        return $this->sendResponse([
            'slide' => $slide,
            'combo' => $combo
        ], 'successfully');
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
