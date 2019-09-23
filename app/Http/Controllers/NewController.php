<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\{news,cate_new};
use DB;

class NewController extends Controller
{
    public function list()
    {
        
        $array['new']=DB::table('new')
                        ->join('cate_new','cate_new.id','=','new.cate_new')
                        ->select('new.*','cate_new.name as cate_name')
                        ->get();
        return view('admins.page.new.list',$array);
    }

    public function add()
    {
        $data['catenew']=cate_new::all();
        // dd($data);
        return view('admins.page.new.add',$data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'summary' => 'required|min:10',
                'content' => 'required|min:20',
                'image' => 'required',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'summary.required' => 'Tóm tắt là trường bắt buộc',
                'summary.min' => 'Tóm tắt có ít nhất 10 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
                'image.required' => 'Ảnh là trường bắt buộc',
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move('images/img_new/',$name);
        }
      
        DB::table('new')->insert([
         
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'image' => $name,
            'slug' => str_slug($request->title),
            'status' => $request->status,
            'cate_new'=>$request->name
            
            
        ]);

        return redirect()->route('new.list');
    }

    public function edit($id)
    {
        $array['new']=DB::table('new')->find($id);
        return view('admins.page.new.edit',$array);
    }

    public function detail($slug)
    {
        $array['new_detail']=DB::table('new')->where('slug',$slug)->first();
        $array['new']=DB::table('new')
                        ->select('new.*')
                        ->take(5)
                        ->get();
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        $array['cate_service']=DB::table('cate_service')
                        ->select('cate_service.*')
                        ->get();
        $array['talentwins']=DB::table('talent_wins')
                        ->select('talent_wins.*')
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
        return view('pages.tintucchitiet',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'summary' => 'required|min:10',
                'content' => 'required|min:20',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'summary.required' => 'Tóm tắt là trường bắt buộc',
                'summary.min' => 'Tóm tắt có ít nhất 10 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
            ]
        );
        $img_old=DB::table('new')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('images/img_new/'.$img_old)&&($img_old !='')){
                unlink('images/img_new/'.$img_old);
            }
            $file->move('images/img_new/',$name);
        }
        else{
            $name=$img_old;
        }

        DB::table('new')->where('id',$id)->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'image' => $name,
            'slug' => str_slug($request->title),
            'status' => $request->status,
        ]);

        return redirect()->route('new.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('new')->find($id)->image;
        if(file_exists('images/img_new/'.$img_old)&&($img_old !='')){
            unlink('images/img_new/'.$img_old);
        }
        DB::table('new')->where('id',$id)->delete();
        return redirect()->route('new.list');
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
        $array['service']=DB::table('service')
                        ->select('service.*')
                        ->get();
        $array['new_list']=DB::table('new')
                        ->join('cate_new','cate_new.id','=','new.cate_new')
                        ->select('new.*')
                        ->where('cate_new.slug',$slug)
                        ->where('status',1)
                        ->get();
        $array['recruitment']=DB::table('recruitment')
                        ->select('recruitment.*')
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
        return view('pages.tinTuc',$array);
    }
}
