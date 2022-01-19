<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Arac;
use App\Models\Review;
use App\Models\Image;
use App\Models\Faq;

class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id','=',0)->where('status', '=', 'True')->with('children')->get();
    }


    public static function getsetting(){
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider=Arac::select('id','title','image','price','listing_date','city')->where('status', '=', 'True')->limit(5)->get();
        $daily=Arac::select('id','title','image','price','listing_date','km','year','city')->where('status', '=', 'True')->limit(3)->inRandomOrder()->get(); //günün araçları
        $last=Arac::select('id','title','image','price','listing_date','km','year','city')->where('status', '=', 'True')->limit(3)->orderByDesc('id')->get(); //son eklenen araçlar
        $showcase=Arac::select('id','title','image','price','listing_date','km','year','city')->where('status', '=', 'True')->limit(9)->inRandomOrder()->get(); //vitrin araçları
        #print_r(($showcase));
        #exit();
        $data=[
            'setting'=>$setting,
            'slider' =>$slider,
            'daily' =>$daily,
            'last' =>$last,
            'showcase' =>$showcase,
            'page'=>'home'
        ];
        return view('home.index', $data);
    }



    public function getarac(Request $request){
        $search = $request->input('search');

        $count = Arac::where('title','like','%'.$search.'%')->get()->count();
        if ($count == 1)
        {
            $data = Arac::where('title','like','%'.$search.'%')->first();
            return redirect()->route('arac',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('araclist',['search'=>$search]);
        }
    }

    public function arac($id){
        $data = Arac::find($id);
        $datalist = Image::where('arac_id',$id)->get();
        $reviews = Review::where('arac_id',$id)->get();

        return view('home.arac_detail',['data'=>$data, 'datalist'=>$datalist,'reviews'=>$reviews] );
        
    }

    public function araclist($search){
        $datalist = Arac::where('title','like','%'.$search.'%')->where('status', '=', 'True')->get();
        return view('home.search_aracs',['search'=>$search, 'datalist'=>$datalist]);
    }
    
    public function categoryaracs($id){
        $datalist = Arac::where('category_id',$id)->where('status', '=', 'True')->get();
        $data = Category::find($id);
        return view('home.category_aracs',['data'=>$data,'datalist'=>$datalist]);
        
    }

    public function aboutus(){
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }


    public function references(){
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function faq(){
        $datalist = Faq::all();
        return view('home.faq',['datalist'=>$datalist]);
    }
    public function contact(){
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request){
        $data=new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız iletilmiştir, Teşekkür ederiz.');
        
    }

    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials=$request->only('email','password');
            if (Auth::attempt($credentials)) //girme yetkisine sahip olup olmadığını belirliyor. 
            {
                $request->session()->regenerate();
                
                return redirect()->intended('admin');
            }
            
            return back()->withErrors([
                'email' => 'The provided credentials do not our records.',
            ]);
        
        }
        else
        {
            return view('admin.login');
        }
        
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
