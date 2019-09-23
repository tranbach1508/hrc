<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class Sub_ad_reController extends Controller
{
    public function list()
    {
        $array['sub_ad_re']=DB::table('sub_ad_re')
                                ->join('ad_re','ad_re.id','=','sub_ad_re.cate_id')
                                ->select('sub_ad_re.*','ad_re.title as cate_name')
                                ->get();
        return view('admins.page.sub_ad_re.list',$array);
    }

    public function add()
    {
        $array['ad_re']=DB::table('ad_re')
                                ->select('ad_re.*')
                                ->get();
        return view('admins.page.sub_ad_re.add',$array);
    }

    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|min:5',
            ],
            [
                'name.required' => 'Tên danh mục là trường bắt buộc',
                'name.min' => 'Tên danh mục có ít nhất 5 ký tự',
            ]
        );
        DB::table('sub_ad_re')->insert([
            'name' =>$request->name,
            'cate_id' => $request->cate_id,
        ]);

        return redirect()->route('sub_ad_re.list');
    }

    public function edit($id)
    {
        $array['ad_re']=DB::table('ad_re')
                                ->select('ad_re.*')
                                ->get();
        $array['sub_ad_re']=DB::table('sub_ad_re')->find($id);
        return view('admins.page.sub_ad_re.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
        [
            'name' => 'required|min:5',
        ],
        [
            'name.required' => 'Tên danh mục là trường bắt buộc',
            'name.min' => 'Tên danh mục có ít nhất 5 ký tự',
        ]
    );

        DB::table('sub_ad_re')->where('id',$id)->update([
            'name' =>$request->name,
            'cate_id' => $request->cate_id,
        ]);

        return redirect()->route('sub_ad_re.list');
    }

    public function delete($id)
    {
        DB::table('sub_ad_re')->where('id',$id)->delete();
        return redirect()->route('sub_ad_re.list');
    }
}
