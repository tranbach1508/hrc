<?php

namespace App\Http\Controllers;
use App\models\{introduce,prize,cateprize,cateprizenew};
use Illuminate\Http\Request;
use DB;

class IntroductController extends Controller
{
    public function list()
    {
        $data['introduce']=introduce::all();
    
        return view('admins.page.introduct.list',$data);
    }


    public function edit($id)
    {
        $data['introduct']=introduce::find($id);
        return view('admins.page.introduct.edit',$data);
    }

    public function PostEdit(request $request,$id)
    {
    
        $introducts=introduce::find($id);
        $introducts->title =  $request->title;
        $introducts->content = $request->content;
        $introducts->sammary = $request->sammary;
        $introducts->slug = str_slug($request->title) ;
            
                // if($request->hasFile('image')){
                //     $file=$request->file('image');
                //     $name=$file->getClientOriginalName();
                //     $str=str_random(5);
                //     $name_file=$str."_".$name;
                //     if(file_exists('images/'.$image)&&($image !='')){
                //         unlink('images/'.$image);
                //     }
                //     $file->move('images/',$name_file);
                // }
                // else{
                //     $name_file=$img_old;
                // }


        if($request->hasFile('image'))
         {
             
            if($request->image!='')
            {
                unlink('images/'.$introducts->image);
            }
             $file=$request->image;
             $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
             $file->move('images/',$file_name);
             $introducts->image=$file_name ;
         }



        $introducts->video = $request->video;
        $introducts->nams = $request->nams;
        $introducts->thanhlap = $request->thanhlap;
        $introducts->phantram = $request->phantram;
        $introducts->noidungphantram = $request->noidungphantram;
        $introducts->doitac = $request->doitac;
        $introducts->noidungdoitac = $request->noidungdoitac;
        $introducts->nhanvien = $request->nhanvien;
        $introducts->noidungnhanvien = $request->noidungnhanvien;

        $introducts->save();
        return redirect('admin/introduct')->with('thongbao','Sửa thành công');
    }


    public function ListPrize()
    {
        $data['prize']=prize::all();
    
        return view('admins.page.prize.list',$data);
    }

    public function EditPrize($id)
    {
        $data['prize']=prize::find($id);
    
        return view('admins.page.prize.edit',$data);
    }

    public function PostEditPrize(request $request ,$id)
    {
       $prize=prize::find($id);
       $prize->title =  $request->title;
       $prize->content = $request->content;
       $prize->save();
       return redirect('admin/introduct/prize')->with('thongbao','Sửa thành công');
    }



    public function ListcatePrize()
    {
        $data['cateprize']=cateprize::all();
        return view('admins.page.cateprize.list',$data);
    }

    public function EditcatePrize($id)
    {
        $data['cateprize']=cateprize::find($id);
        return view('admins.page.cateprize.edit',$data);
    }

    public function PostEditcatePrize(request $request, $id)
    {
        $cateprize=cateprize::find($id);

        if($request->hasFile('image'))
         {
            
            if($request->image!='')
            {
                unlink('images/'.$cateprize->image);
            }
             $file=$request->image;
             $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
            
             $file->move('images/',$file_name);
             $cateprize->image=$file_name ;
         }



       $cateprize->note = $request->note;
       $cateprize->save();
       return redirect('admin/introduct/cate_prize')->with('thongbao','Sửa thành công');
    }


    public function ListcatePrizenew()
    {
        $data['cateprizenew']=cateprizenew::all();
        return view('admins.page.cateprizenew.list',$data);
    }

    public function EditcatePrizenew($id)
    {
        $data['cateprizenew']=cateprizenew::find($id);
        return view('admins.page.cateprizenew.edit',$data);
    }

    public function PostEditcatePrizenew(Request $request,$id)
    {
        $cateprizenew=cateprizenew::find($id);

        if($request->hasFile('image'))
         {
            
            if($request->image!='')
            {
                unlink('images/'.$cateprizenew->image);
            }
             $file=$request->image;
             $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
            
             $file->move('images/',$file_name);
             $cateprizenew->image=$file_name ;
         }



       $cateprizenew->note = $request->note;
       $cateprizenew->save();
       return redirect('admin/introduct/cate_prize_new')->with('thongbao','Sửa thành công');
    }
    public function show()
    {
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
        $array['service']=DB::table('service')
                        ->select('service.*')
                        ->where('status','=',1)
                        ->get();
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
        return view('pages.gioithieu',$array);
    }





}
