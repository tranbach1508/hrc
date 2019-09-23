<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SupportController extends Controller
{
    public function list()
    {
        $array['support']=DB::table('support')->get();
        return view('admins.page.support.list',$array);
    }

    public function add()
    {
        return view('admins.page.support.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'content' => 'required|min:20',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
            ]
        );
        DB::table('support')->insert([
            'title' =>$request->title,
            'content' => $request->content,
            'slug' => str_slug($request->title),
        ]);

        return redirect()->route('support.list');
    }

    public function edit($id)
    {
        $array['support']=DB::table('support')->find($id);
        return view('admins.page.support.edit',$array);
    }

    public function update(Request $request,$id)
    {

        $this->validate($request,
        [
            'title' => 'required|min:5',
            'content' => 'required|min:20',
        ],
        [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
            'content.required' => ' Nội dung là trường bắt buộc',
            'content.min' => 'Nội dung có ít nhất 20 ký tự',
        ]
    );

        DB::table('support')->where('id',$id)->update([
            'title' =>$request->title,
            'content' => $request->content,
            'slug' => str_slug($request->title),
        ]);

        return redirect()->route('support.list');
    }

    public function delete($id)
    {
        DB::table('support')->where('id',$id)->delete();
        return redirect()->route('support.list');
    }

    public function detail($slug)
    {
        $array['support'] = DB::table('support')->where('slug',$slug)->first();
        return redirect()->route('pages.hotrochitiet',$array);
    }
}
