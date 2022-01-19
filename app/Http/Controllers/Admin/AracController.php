<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Arac;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AracController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Arac::all();
        return view('admin.arac', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        return view('admin.arac_add', ['datalist' =>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Arac();

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->user_id = Auth::id();
        $data->price = (int)$request->input('price');
        $data->detail = $request->input('detail');
        $data->fuel_type = $request->input('fuel_type');
        $data->brand_id = $request->input('brand_id');
        $data->serial = $request->input('serial');
        $data->model = $request->input('model');
        $data->year = (int)$request->input('year');
        $data->km = (int)$request->input('km');
        $data->traction_type = $request->input('traction_type');
        $data->gear_type = $request->input('gear_type');
        $data->case = $request->input('case');
        $data->from_who = $request->input('from_who');
        $data->contact = $request->input('contact');
        $data->category_id = $request->input('category_id');
        $data->motor_power = $request->input('motor_power');
        $data->city = $request->input('city');
        $data->engine_capacity = $request->input('engine_capacity');
        $data->image = Storage::putFile('images', $request->file('image')); //Dosyayı yüklüyor

        $data->save();
        return redirect() -> route('admin_arac');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arac  $arac
     * @return \Illuminate\Http\Response
     */
    public function show(Arac $arac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arac  $arac
     * @return \Illuminate\Http\Response
     */
    public function edit(Arac $arac,$id)
    {
        $data = Arac::find($id);
        $datalist = Category::with('children')->get();
        return view('admin.arac_edit',['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arac  $arac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arac $arac,$id)
    {
        $data = Arac::find($id);

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->user_id = Auth::id();
        $data->price = (int)$request->input('price');
        $data->detail = $request->input('detail');
        $data->fuel_type = $request->input('fuel_type');
        $data->brand_id = $request->input('brand_id');
        $data->serial = $request->input('serial');
        $data->model = $request->input('model');
        $data->year = (int)$request->input('year');
        $data->km = (int)$request->input('km');
        $data->traction_type = $request->input('traction_type');
        $data->gear_type = $request->input('gear_type');
        $data->case = $request->input('case');
        $data->from_who = $request->input('from_who');
        $data->contact = $request->input('contact');
        $data->category_id = $request->input('category_id');
        $data->motor_power = $request->input('motor_power');
        $data->engine_capacity = $request->input('engine_capacity');
        $data->city = $request->input('city');
        if($request->file('image')!=null){
            $data->image = Storage::putFile('images', $request->file('image')); //Dosyayı yüklüyor
        }
        $data->save();
        return redirect()->route('admin_arac');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arac  $arac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arac $arac,$id)
    {

        $data = Arac::find($id);
        $data->delete();

        return redirect()->route('admin_arac');
    }
}
