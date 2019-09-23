<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\{inforcompany,product,cate_service,cateprizenew,cate_new,service,support,introduce,prize,cateprize};

use DB;

class HomeController extends Controller

{
    public function home()
    {
        
        return view('admins.dashboard');
    }



    public function index()
    {
        $array['course']=DB::table('course')
                        ->select('course.*')
                        ->orderby('id','desc')
                        ->take(6)
                        ->get();
        $array['support']=DB::table('support')
                        ->select('support.*')
                        ->get();
        $array['cate_course']=DB::table('cate_course')
                        ->select('cate_course.*')
                        ->get();
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        $array['recruitment']=DB::table('recruitment')
                        ->select('recruitment.*')
                        ->get();
        $array['banner']=DB::table('banner')
                        ->select('banner.*')
                        ->where('status','=',1)
                        ->get();
        $array['service']=DB::table('service')
                        ->select('service.*')
                        ->where('status','=',1)
                        ->get();
        // $array['introduce']=DB::table('introduce')
        //                 ->select('introduce.*')
        //                 ->get();
        $array['cate_service']=DB::table('cate_service')
                        ->select('cate_service.*')
                        ->get();
        $array['infocompany']=DB::table('infor_company')
                        ->select('infor_company.*')
                        ->where('id',1)
                        ->get();
        $array['ad_re']=DB::table('ad_re')
                        ->select('ad_re.*')
                        ->get();
        $array['sub_ad_re']=DB::table('sub_ad_re')
                        ->select('sub_ad_re.*')
                        ->get();
        $array['product']=DB::table('product')
                        ->select('product.*')
                        ->get();
        $array['new1']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->where('new.status','=',1)
                        ->skip(0)
                        ->take(3)
                        ->get();
        $array['new2']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->where('new.status','=',1)
                        ->skip(3)
                        ->take(3)
                        ->get();
         $array['new3']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->where('new.status','=',1)
                        ->skip(6)
                        ->take(3)
                        ->get();
        $array['new4']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->where('new.status','=',1)
                        ->skip(9)
                        ->take(3)
                        ->get();
                       
                        // $array['service']=service::all();
                        // $array['introduce']=introduce::all();       
        return view('pages.home',$array);
    }
    public function menu()
    {
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        return view('master-layout',$array);
    }



    public function list()
    {
        
        $data['service']=service::all();
        
        return view('pages.lienhe',$data);
    }


    public function talenwin()
    {
       
        $data['service']=service::all();
        
        return view('pages.talentwins',$data);
    }



    public function trainghiem()
    {
       
        $data['service']=service::all();
       
        return view('pages.traiNghiem',$data);
    }

    public function about()
    {
        $data['cateprizenew']=cateprizenew::all();
        $data['prize']=prize::all();
        $data['cateprize']=cateprize::all();
        $data['introduce']=introduce::all();        
        return view('pages.gioithieu',$data);
    }

    public function news()
    {
        
        $data['service']=service::all();
        
        return view('pages.tinTuc',$data);
    }


    public function service()
    {
       
        $data['service']=service::all();
       
       
        return view('pages.dichvu',$data);
    }


    public function newchitiet()
    {
        
        $data['service']=service::all();
       
        return view('pages.tintucchitiet',$data);
    }

    public function talenchitiet()
    {
        
        $data['service']=service::all();
       
        return view('pages.talentchitiet',$data);
    }

    public function product()
    {
       
        $service=service::all();
        $product=DB::table('product')->paginate(9);
        return view('pages.traiNghiem',compact('product','service'));
    }



}
