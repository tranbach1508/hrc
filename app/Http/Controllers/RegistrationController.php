<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class RegistrationController extends Controller
{
    public function list()
    {
        $array['registration']=DB::table('registration')
                                ->join('course','course.id','=','registration.course_id')
                                ->select('registration.*','course.name as course_name')
                                ->get();
        return view('admins.page.registration.list',$array);
    }

    // Thêm học viên
    public function insert(Request $request,$slug){
        
        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:10|max:10,integer',
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email phải đúng định dạng',
                'phone.required' => ' Số điện thoại là trường bắt buộc',
                'phone.integer' => ' Số điện thoại phải là số nguyên',
                'phone.min:10' => ' Số điện thoại phải gồm 10 số',
            ]
        );
        $id= DB::table('course')->where('slug',$slug)->first();
        DB::table('registration')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'course_id' => $id->id,
        ]);
        return redirect()->route('khoahocchitiet',['slug'=>$slug]);
    }

    public function delete($id)
    {
        DB::table('registration')->where('id',$id)->delete();
        return redirect()->route('registration.list');
    }
}
