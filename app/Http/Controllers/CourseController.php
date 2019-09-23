<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\{courses,cate_course};
use DB;

class CourseController extends Controller
{
    public function list()
    {
        
        $array['course']=DB::table('course')
                        ->join('cate_course','cate_course.id','=','course.cate_id')
                        ->select('course.*','cate_course.name as cate_name')
                        ->get();
        return view('admins.page.course.list',$array);
    }

    public function add()
    {
        $data['cate_course']=DB::table('cate_course')
                        ->select('cate_course.*')
                        ->get();
        return view('admins.page.course.add',$data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,
            [
                'name' => 'required|min:5',
                'cate_id' => 'required',
                'intro' => 'required|min:10',
                'content' => 'required|min:20',
                'tuition' => 'required',
                'email' => 'required',
                'hotline' => 'required',
                'endow' => 'required',
                'schedule' => 'required',
                'teacher' => 'required',
                'address' => 'required',
                'status' => 'required',
                'level' => 'required',
            ],
            [
                'name.required' => 'Tiêu đề là trường bắt buộc',
                'name.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'intro.required' => 'Tóm tắt là trường bắt buộc',
                'intro.min' => 'Tóm tắt có ít nhất 10 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
                'tuition.required' => 'Học phí là trường bắt buộc',
                'email.required' => 'Email là trường bắt buộc',
                'hotline.required' => 'Hotline là trường bắt buộc',
                'endow.required' => 'endow là trường bắt buộc',
                'schedule.required' => 'Lịch học là trường bắt buộc',
                'teacher.required' => 'Tên giáo viên là trường bắt buộc',
                'address.required' => 'Địa chỉ là trường bắt buộc',
                'status.required' => 'Trạng thái là trường bắt buộc',
                'level.required' => 'Cấp độ là trường bắt buộc',
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move('images/img_course/',$name);
        }
      
        DB::table('course')->insert([
         
            'name' => $request->name,
            'intro' => $request->intro,
            'content' => $request->content,
            'image' => $name,
            'status' => $request->status,
            'level' => $request->level,
            'address' => $request->address,
            'teacher' => $request->teacher,
            'schedule' => $request->schedule,
            'endow' => $request->endow,
            'tuition' => $request->tuition,
            'email' => $request->email,
            'hotline' => $request->hotline,
            'cate_id' => $request->cate_id,
            
            
        ]);

        return redirect()->route('course.list');
    }

    public function edit($id)
    {
        $array['course']=DB::table('course')->find($id);
        $array['cate_course']=DB::table('cate_course')
                        ->select('cate_course.*')
                        ->get();
        return view('admins.page.course.edit',$array);
    }

    public function detail($slug)
    {
        $array['course_detail']=DB::table('course')->where('slug',$slug)->first();
        $array['cate_course']=DB::table('cate_course')
                        ->select('cate_course.*')
                        ->get();
        $array['special_course']=DB::table('course')
                        ->select('course.*')
                        ->where('level',1)
                        ->get();
        $array['cate_service']=DB::table('cate_service')
                        ->select('cate_service.*')
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
        $array['recruitment']=DB::table('recruitment')
                        ->select('recruitment.*')
                        ->get();
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        $array['service']=DB::table('service')
                        ->select('service.*')
                        ->get();
        return view('pages.khoahocchitiet',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
        [
            'name' => 'required|min:5',
            'cate_id' => 'required',
            'intro' => 'required|min:10',
            'content' => 'required|min:20',
            'tuition' => 'required',
            'email' => 'required',
            'hotline' => 'required',
            'endow' => 'required',
            'schedule' => 'required',
            'teacher' => 'required',
            'address' => 'required',
            'status' => 'required',
            'level' => 'required',
        ],
        [
            'name.required' => 'Tiêu đề là trường bắt buộc',
            'name.min' => 'Tiêu đề có ít nhất 5 ký tự',
            'intro.required' => 'Tóm tắt là trường bắt buộc',
            'intro.min' => 'Tóm tắt có ít nhất 10 ký tự',
            'content.required' => ' Nội dung là trường bắt buộc',
            'content.min' => 'Nội dung có ít nhất 20 ký tự',
            'tuition.required' => 'Học phí là trường bắt buộc',
            'email.required' => 'Email là trường bắt buộc',
            'hotline.required' => 'Hotline là trường bắt buộc',
            'endow.required' => 'endow là trường bắt buộc',
            'schedule.required' => 'Lịch học là trường bắt buộc',
            'teacher.required' => 'Tên giáo viên là trường bắt buộc',
            'address.required' => 'Địa chỉ là trường bắt buộc',
            'status.required' => 'Trạng thái là trường bắt buộc',
            'level.required' => 'Cấp độ là trường bắt buộc',
        ]
        );
        $img_old=DB::table('course')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('images/img_course/'.$img_old)&&($img_old !='')){
                unlink('images/img_course/'.$img_old);
            }
            $file->move('images/img_course/',$name);
        }
        else{
            $name=$img_old;
        }

        DB::table('course')->where('id',$id)->update([
            'name' => $request->name,
            'intro' => $request->intro,
            'content' => $request->content,
            'image' => $name,
            'status' => $request->status,
            'level' => $request->level,
            'address' => $request->address,
            'teacher' => $request->teacher,
            'schedule' => $request->schedule,
            'endow' => $request->endow,
            'tuition' => $request->tuition,
            'email' => $request->email,
            'hotline' => $request->hotline,
            'cate_id' => $request->cate_id,
        ]);

        return redirect()->route('course.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('course')->find($id)->image;
        if(file_exists('images/img_course/'.$img_old)&&($img_old !='')){
            unlink('images/img_course/'.$img_old);
        }
        DB::table('course')->where('id',$id)->delete();
        return redirect()->route('course.list');
    }
    

    public function index($slug)
    {
        $array['support']=DB::table('support')
                        ->select('support.*')
                        ->get();
        $array['course']=DB::table('course')
                        ->join('cate_course','cate_course.id','=','course.cate_id')
                        ->select('course.*')
                        ->where('cate_course.slug',$slug)
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
        $array['service']=DB::table('service')
                        ->select('service.*')
                        ->where('status','=',1)
                        ->get();
        // $array['introduce']=DB::table('introduce')
        //                 ->select('introduce.*')
        //                 ->get();
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
        return view('pages.khoahoc',$array);
    }
}
