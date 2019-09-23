<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class Ad_reController extends Controller
{
    public function list()
    {
        $array['ad_re']=DB::table('ad_re')->get();
        return view('admins.page.ad_re.list',$array);
    }

    public function add()
    {
        return view('admins.page.ad_re.add');
    }

    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'icon' => 'required',
                'status' =>'required',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'status.required' => 'Trạng thái là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'icon.required' => 'Ảnh là trường bắt buộc',
            ]
        );

        if ($request->hasFile('icon')) {
            $file=$request->file('icon');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;

            $file->move('images/img_ad_re/',$name_file);
        }
        DB::table('ad_re')->insert([
            'title' => $request->title,
            'icon' => $name_file,
            'status' => $request->status,
        ]);

        return redirect()->route('ad_re.list');
    }

    public function edit($id)
    {
        $array['ad_re']=DB::table('ad_re')->find($id);
        return view('admins.page.ad_re.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
        [
            'title' => 'required',
            'status' => 'required',
        ],
        [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'status.required' => 'Trạng thái là trường bắt buộc',
        ]
        );
        $img_old=DB::table('ad_re')->find($id)->icon;

        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;
            if(file_exists('images/img_ad_re/'.$img_old)&&($img_old !='')){
                unlink('images/img_ad_re/'.$img_old);
            }
            $file->move('images/img_ad_re/',$name_file);
        }
        else{
            $name_file=$img_old;
        }

        DB::table('ad_re')->where('id',$id)->update([
            'title' => $request->title,
            'icon' => $name_file,
            'status' => $request->status,
        ]);

        return redirect()->route('ad_re.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('ad_re')->find($id)->icon;
        if(file_exists('images/img_ad_re/'.$img_old)&&($img_old !='')){
            unlink('images/img_ad_re/'.$img_old);
        }
        DB::table('ad_re')->where('id',$id)->delete();
        return redirect()->route('ad_re.list');
    }

   
}
