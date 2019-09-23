<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class CateNewController extends Controller
{
    public function list()
    { 
        $array['cate_new']=DB::table('cate_new')->get();
        return view('admins.page.cate_new.list',$array);
    }

    public function add()
    {
        return view('admins.page.cate_new.add');
    }

    public function insert(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required|min:3',
        ],
        [
            'name.required' => 'Tên là trường bắt buộc',
            'name.min' => 'Ít nhất 3 ký tự',
        ]
        );

        DB::table('cate_new')->insert([
            'name' =>$request->name,
            'slug' =>str_slug($request->name),
        ]);
        return redirect()->route('cate_new.list');
    }

    public function edit($id)
    {
        // dd($id);
        $cate_new=DB::table('cate_new')->find($id);
        return view('admins.page.cate_new.edit',compact('cate_new'));
    }

    public function update(Request $request,$id)
    {   
        $this->validate($request,
        [
            'name' => 'required|min:3',
        ],
        [
            'name.required' => 'Tên là trường bắt buộc',
            'name.min' => 'Ít nhất 3 ký tự',
        ]
        );
        DB::table('cate_new')->where('id',$id)->update([
            'name' => $request->name,
            'slug'=>str_slug($request->name),
        ]);
        return redirect()->route('cate_new.list');
    }

    public function delete($id)
    {
        DB::table('cate_new')->where('id',$id)->delete();
        return redirect()->route('cate_new.list');
    }
}
