<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = \App\Models\Review::all();
        return view('admin.review', ['datalist' => $datalist]);
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
     * @param \App\Models\Review $review
     * @param $id
     * @return void
     */
    public function show(\App\Models\Review $review,$id)
    {
        $data = \App\Models\Review::find($id);
        return view('admin.review_edit',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Review $review
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,\App\Models\Review $review, $id)
    {
        $data = Review::find($id);
        $data->status = $request->input('status');
        $data->save();
        
        return back()->with('success','Mesaj Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Review $review
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\Review $review,$id)
    {
        $data = \App\Models\Review::find($id);
        $data->delete();

        return redirect()->route('admin_review')->with('success','Review deleted.');
    }
}