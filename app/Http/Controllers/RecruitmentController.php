<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class RecruitmentController extends Controller
{
    public function list()
    {
        
        $array['recruitment']=DB::table('recruitment')
                        ->select('recruitment.*')
                        ->get();
        return view('admins.page.recruitment.list',$array);
    }

    public function add()
    {
        return view('admins.page.recruitment.add');
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'content' => 'required|min:20',
                'summary' => 'required',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'summary.required' => ' Nội dung tóm tắt là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move('images/img_recruitment/',$name);
        }
      
        DB::table('recruitment')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'summary' => $request->summary,
            'image' => $name,
            'slug' => str_slug($request->title),
            'status' => $request->status,
        ]);

        return redirect()->route('recruitment.list');
    }

    public function edit($id)
    {
        $array['recruitment']=DB::table('recruitment')->find($id);
        return view('admins.page.recruitment.edit',$array);
    }

    public function detail($slug)
    {
        $array['recruitment_detail']=DB::table('recruitment')->where('slug',$slug)->first();
        $array['support']=DB::table('support')
                        ->select('support.*')
                        ->get();
        $array['new_recruitment']=DB::table('recruitment')
        ->select('recruitment.*')
        ->where('status',1)
        ->orderby('id','desc')
        ->get(5);
        $array['service']=DB::table('service')
                        ->select('service.*')
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
        return view('pages.tuyendungchitiet',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
        [
            'title' => 'required|min:5',
            'content' => 'required|min:20',
            'summary' => 'required',
        ],
        [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
            'content.required' => ' Nội dung là trường bắt buộc',
            'summary.required' => ' Nội dung tóm tắt là trường bắt buộc',
            'content.min' => 'Nội dung có ít nhất 20 ký tự',
        ]
        );
        $img_old=DB::table('recruitment')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('images/img_recruitment/'.$img_old)&&($img_old !='')){
                unlink('images/img_recruitment/'.$img_old);
            }
            $file->move('images/img_recruitment/',$name);
        }
        else{
            $name=$img_old;
        }

        DB::table('recruitment')->where('id',$id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'summary' => $request->summary,
            'image' => $name,
            'slug' => str_slug($request->title),
            'status' => $request->status,
        ]);

        return redirect()->route('recruitment.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('recruitment')->find($id)->image;
        if(file_exists('images/img_recruitment/'.$img_old)&&($img_old !='')){
            unlink('images/img_recruitment/'.$img_old);
        }
        DB::table('recruitment')->where('id',$id)->delete();
        return redirect()->route('recruitment.list');
    }
    
    public function show()
    {
        $array['support']=DB::table('support')
                        ->select('support.*')
                        ->get();
        $array['service']=DB::table('service')
                        ->select('service.*')
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
        return view('pages.tuyendung',$array);
    }
}
