@extends('admins.layout.master-layout')
@section('title')
Sửa dịch vụ
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Sửa tin tức
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sửa dịch vụ</li>
            </ol>
        </section>
        <hr>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <form role="form" method="POST" action="{{Route('course.edit',['id'=>$course->id])}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Tên khóa học (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập tên khóa học" name="name"
                                        value="{{ $course->name }}">
                                    <p style="color:red">{{ $errors->first('name') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Loại khóa học (*)</label>
                                    <select name="cate_id" class="form-control">
                                        @foreach($cate_course as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                    <p style="color:red">{{ $errors->first('cate_id') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Giới thiệu (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập giới thiệu về khóa học"
                                        name="intro" value="{{ $course->intro }}">
                                    <p style="color:red">{{ $errors->first('intro') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Nội dung (*)</label>
                                    <textarea name="content" id="desc" cols="30" rows="10">{{ $course->content }}</textarea>
                                    <p style="color:red">{{ $errors->first('content') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Học phí (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập giá học phí"
                                        name="tuition" value="{{ $course->tuition }}">
                                    <p style="color:red">{{ $errors->first('tuition') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Giá ưu đãi (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập giá ưu đãi" name="endow"
                                        value="{{ $course->endow }}">
                                    <p style="color:red">{{ $errors->first('endow') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Tên giáo viên (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập tên giáo viên"
                                        name="teacher" value="{{ $course->teacher }}">
                                    <p style="color:red">{{ $errors->first('teacher') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Lịch học (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập lịch học" name="schedule"
                                        value="{{ $course->schedule }}">
                                    <p style="color:red">{{ $errors->first('schedule') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập Địa chỉ" name="address"
                                        value="{{ $course->address }}">
                                    <p style="color:red">{{ $errors->first('address') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Email (*)</label>
                                    <input type="email" class="form-control" placeholder="Nhập Địa chỉ Email" name="email"
                                        value="{{ $course->email }}">
                                    <p style="color:red">{{ $errors->first('email') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Hotline (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập số hotline" name="hotline"
                                        value="{{ $course->hotline }}">
                                    <p style="color:red">{{ $errors->first('hotline') }}</p>
                                </div>

                                <?php if($course->status ==1){
                                    $check1 = 'checked="select"';
                                   $check0 = '';
                               }else{
                                   $check1 = '';
                                   $check0 = 'checked="select"';
                               } ?>
                               <div class="form-group">
                                   <label>Trạng thái (*)</label>
                                   <div class="radio">
                                       <label for=""><input {{$check1}} type="radio" name="status" value="1">Cho hiện</label>
                                   </div>
                                   <div class="radio">
                                       <label for=""><input {{$check0}} type="radio" name="status" value="0">Ẩn</label>
                                   </div>
                                   <p style="color:red">{{ $errors->first('status') }}</p>
                               </div>

                               <?php if($course->level ==1){
                                $check1 = 'checked="select"';
                               $check0 = '';
                           }else{
                               $check1 = '';
                               $check0 = 'checked="select"';
                           } ?>
                           <div class="form-group">
                               <label>Cấp độ (*)</label>
                               <div class="radio">
                                   <label for=""><input {{$check1}} type="radio" name="level" value="1">Đặc biệt</label>
                               </div>
                               <div class="radio">
                                   <label for=""><input {{$check0}} type="radio" name="level" value="0">Thường</label>
                               </div>
                               <p style="color:red">{{ $errors->first('level') }}</p>
                           </div>

                                <div class="form-group">
                                    <label>Chọn ảnh</label>
                                    <input type="file" id="image" name="image" onchange="showIMG()">
                                </div>
                                <p style="color:red">{{ $errors->first('image') }}</p>
                                <div class="form-group">
                                    <div id="viewImg">

                                    </div>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <b></b>
    </div>
</div>

<script language="JavaScript">
    CKEDITOR.replace('contentt', {
        filebrowserBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });


    function showIMG() {
        var fileInput = document.getElementById('image');
        var filePath = fileInput.value; //lấy giá trị input theo id
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i; //các tập tin cho phép
        //Kiểm tra định dạng
        if (!allowedExtensions.exec(filePath)) {
            alert('Bạn chỉ có thể dùng ảnh dưới định dạng .jpeg/.jpg/.png/.gif extension.');
            fileInput.value = '';
            return false;
        } else {
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('viewImg').innerHTML =
                        '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
        document.getElementById('lastImg').style.display = "none";
    }

</script>

@stop
