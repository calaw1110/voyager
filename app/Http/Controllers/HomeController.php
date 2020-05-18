<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //此控制器的所有方法都需要有登入才能訪問
        // $this->middleware('auth');

        //此控制器的store()需要有登入才能訪問
        // $this->middleware('auth')->only('store');

        //除index()外，此控制器的其他方法需要有登入才能訪問
        // $this->middleware('auth')->except('index');
    }
    public function index(Request $request, $id, $course)
    {
        //

        //作法1 利用view()的第2參數來傳
        $url = '<a href="www.google.com">www.google.com</a>';
        $l = '123';
        $data = ['id' => $id, 'course' => $course, 'url' => $url, 'f' => $l];
        return view('index', $data);

        //作法2 利用with()方法來傳
        // $ff = '000';
        // $ll = '111';
        // return view('index')->with(['first' => $ff, 'last' => $ll]);

        //作法3 搭配compact()來建立陣列
        // $a = "a";
        // $b = "b";
        // return view('index', compact('a', 'b'));
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
}
