<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\{inforcompany,product,elearning,subelearning,cate_new,talentwins,course,support,cate_course};

use DB;

class Cate_courseController extends Controller
{
    // Chuyển trang danh sách loại dịch vụ
    public function list()
    {
        $array['cate_course']=DB::table('cate_course')
                        ->select('cate_course.*')
                        ->get();
        return view('admins.page.cate_course.list',$array);
    }
    // Chuyển đến trang thêm loại dịch vụ
    public function add()
    {
        $array['cate_course']=DB::table('cate_course')->get();
        return view('admins.page.cate_course.add',$array);
    }
    // Thêm loại dịch vụ
    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ],
            [
                'title.required' => 'Tên loại dịch vụ là trường bắt buộc'
            ]
        );

        DB::table('cate_course')->insert([
            'name' => $request->name,
            'slug' => str_slug($request->name)
        ]);

        return redirect()->route('cate_course.list');
    }

    // chuyển trang sửa loại dịch vụ
    public function edit($id)
    {
        $array['cate_course']=DB::table('cate_course')->find($id);
        return view('admins.page.cate_course.edit',$array);
    }

    // Sửa loại dịch vụ
    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ],
            [
                'title.required' => 'Tên loại dịch vụ là trường bắt buộc'
            ]
        );

        DB::table('cate_course')->where('id',$id)->update([
            'name' => $request->name,
            'slug' => str_slug($request->name)
        ]);

        return redirect()->route('cate_course.list');
    }

    public function delete($id)
    {
        DB::table('cate_course')->where('id',$id)->delete();
        return redirect()->route('cate_course.list');
    }

    public function show($slug)
    {
        $array['course']=DB::table('course')
                            ->join('cate_course','cate_course.id','=','course.cate_id')
                            ->select('course.*','cate_course.slug as cate_slug')
                            ->where('cate_course.slug',$slug)
                            ->get();
        $array['talentwins']=talentwins::all();
        $array['cate_new']=cate_new::all();
        $array['cate_course']=cate_course::all();
        $array['infocompany']=inforcompany::all();
        $array['product']=product::all();
        $array['support']=support::all();
        return view('pages.dichvu',$array);
    }
}
