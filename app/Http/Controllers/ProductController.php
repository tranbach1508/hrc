<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function list()
    {
      
        $array['product']=DB::table('product')
                        ->select('product.*')
                        ->get();
        return view('admins.page.product.list',$array);
    }

    public function add()
    {
        return view('admins.page.product.add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,
            [
                'name' => 'required|min:5',
                'link' => 'required|min:10',
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'link.required' => 'Link là trường bắt buộc',
            ]
        );

      
        DB::table('product')->insert([
            'name' => $request->name,
            'link' => $request->link,
        ]);

        return redirect()->route('product.list');
    }

    public function edit($id)
    {
        $array['product']=DB::table('product')->find($id);
        return view('admins.page.product.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'name' => 'required|min:5',
                'link' => 'required|min:10',
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'link.required' => 'Link là trường bắt buộc',
            ]
        );


        DB::table('product')->where('id',$id)->update([
            'name' => $request->name,
            'link' => $request->link,
        ]);

        return redirect()->route('product.list');
    }

    public function delete($id)
    {
        DB::table('product')->where('id',$id)->delete();
        return redirect()->route('product.list');
    }
    public function show()
    {
        $product=DB::table('product')->paginate(9);
        return view('admins.page.product.list',compact('product'));
    }
}
