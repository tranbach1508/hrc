<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\{inforcompany,product,cate_new,support,cate_service};

use DB;

class ServiceController extends Controller
{
    // Chuyển trang danh sách dịch vụ
    public function list()
    {
        $array['service']=DB::table('service')
                        ->join('cate_service','cate_service.id','=','service.cate_id')
                        ->select('service.*','cate_service.name as cate_name')
                        ->get();
        return view('admins.page.service.list',$array);
    }

    // Chuyển trang thêm dịch vụ
    public function add()
    {
        $array['cate_service']=DB::table('cate_service')->get();
        return view('admins.page.service.add',$array);
    }

    // Thêm dịch vụ
    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'content' => 'required',
                'summary' => 'required',
                'cate_id' => 'required',
            ],
            [
                'name.required' => 'Tên dịch vụ là trường bắt buộc',
                'content.required' => 'Nội dung là trường bắt buộc',
                'summary.required' => 'Nội dung tóm tắt là trường bắt buộc',
                'cate_id.required' => 'Loại dịch vụ là trường bắt buộc'
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;

            $file->move('images/img_service/',$name_file);
        }
        DB::table('service')->insert([
            'name' => $request->name,
            'image' => $name_file,
            'content' => $request->content,
            'summary' => $request->summary,
            'cate_id' => $request->cate_id,
            'slug' => str_slug($request->name),
            'status' => $request->status,
        ]);

        return redirect()->route('service.list');
    }

    public function edit($id)
    {
        $array['service']=DB::table('service')->find($id);
        $cate_service['cate_service']=DB::table('cate_service')->get();
        return view('admins.page.service.edit',$array,$cate_service);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'content' => 'required',
                'summary' => 'required',
                'cate_id' => 'required',
            ],
            [
                'name.required' => 'Tên dịch vụ là trường bắt buộc',
                'summary.required' => 'Nội dung tóm tắt là trường bắt buộc',
                'content.required' => 'Nội dung là trường bắt buộc',
                'cate_id.required' => 'Loại dịch vụ là trường bắt buộc'
            ]
        );

        $img_old=DB::table('service')->find($id)->image;

        if(!empty($_FILES['image']['name'])){
                $file = $_FILES['image'];
                $name_file = time().'-'.$file['name'];
            if(file_exists('images/img_service/'.$img_old)&&($img_old !='')){
                unlink('images/img_service/'.$img_old);
            }
            move_uploaded_file($file['tmp_name'], 'images/img_service/'.$name_file);
        }
        else{
            $name_file=$img_old;
        }

        DB::table('service')->where('id',$id)->update([
            'name' => $request->name,
            'image' => $name_file,
            'summary' => $request->summary,
            'content' => $request->content,
            'cate_id' => $request->cate_id,
            'slug' => str_slug($request->name),
            'status' => $request->status,
        ]);

        return redirect()->route('service.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('service')->find($id)->image;
        if(file_exists('images/img_service/'.$img_old)&&($img_old !='')){
            unlink('images/img_service/'.$img_old);
        }
        DB::table('service')->where('id',$id)->delete();
        return redirect()->route('service.list');
    }
    public function show($slug)
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
                        ->get();
        $array['service_list']=DB::table('service')
                        ->join('cate_service','cate_service.id','=','service.cate_id')
                        ->select('service.*')
                        ->where('cate_service.slug',$slug)
                        ->where('status',1)
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
        return view('pages.dichvu',$array);
    }
    
    public function detail($slug)
    {
        $array['service_detail']=DB::table('service')->where('slug',$slug)->first();
        $array['new_service']=DB::table('service')
        ->select('service.*')
        ->where('status',1)
        ->orderby('id','desc')
        ->get(5);
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        $array['service']=DB::table('service')
                        ->select('service.*')
                        ->get();
        $array['cate_course']=DB::table('cate_course')
                        ->select('cate_course.*')
                        ->get();
        $array['recruitment']=DB::table('recruitment')
                        ->select('recruitment.*')
                        ->get();
        $array['cate_service']=DB::table('cate_service')
                        ->select('cate_service.*')
                        ->get();
        $array['support']=DB::table('support')
                        ->select('support.*')
                        ->get();
        $array['adviser']=DB::table('adviser')
                        ->select('adviser.*')
                        ->skip(0)
                        ->take(3)
                        ->get();
        $array['infocompany']=DB::table('infor_company')
                        ->select('infor_company.*')
                        ->get();
        $array['product']=DB::table('product')
                        ->select('product.*')
                        ->get();
        return view('pages.dichvuchitiet',$array);
    }
}
