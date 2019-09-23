<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class InforCompanyController extends Controller
{
    public function list()
    {
        $array['infor_company']=DB::table('infor_company')->get();
        return view('admins.page.infor_company.list',$array);
    }

    public function edit($id)
    {
        $array['infor_company']=DB::table('infor_company')->find($id);
        return view('admins.page.infor_company.edit',$array);
    }

    public function update(Request $request,$id)
    {

        $this->validate($request,
            [
                'name' => 'required|min:5',
                'address' => 'required|min:10',
                'tax_code' => 'required|numeric',
                'phone' => 'required|numeric',
                'email' => 'required|email',
            ],
            [
                'name.required' => 'Tên là trường bắt buộc',
                'name.min' => 'Tên có ít nhất 5 ký tự',
                'address.required' => 'Địa chỉ là trường bắt buộc',
                'address.min' => 'Địa chỉ có ít nhất 10 ký tự',
                'tax_code.required' => 'Mã số thuế là trường bắt buộc',
                'tax_code.numeric' => 'Mã số thuế phải là ký tự số',
                'phone.required' => ' Số điện thoại là trường bắt buộc',
                'phone.numeric' => 'Số điện thoại của bạn chứa kí tự đặc biệt hoặc khoảng trống hoặc chữ cái',
                'email.required' => ' Email là trường bắt buộc',
                'email.email' => 'Email của bạn sai định dạng',
            ]
        );

        DB::table('infor_company')->where('id',$id)->update([
            'name' =>$request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'tax_code' => $request->tax_code,
            'email' => $request->email,
        ]);

        return redirect()->route('infor_company.list');
    }

}
