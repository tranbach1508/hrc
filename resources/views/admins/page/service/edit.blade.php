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
                                <form role="form" method="POST" action="{{Route('service.edit',['id'=>$service->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên dịch vụ(*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tên dịch vụ" name="name"
                                   value="{{ $service->name }}">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Loại dịch vụ (*)</label>
                            <select name="cate_id" class="form-control">
                                @foreach($cate_service as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                            <p style="color:red">{{ $errors->first('cate_id') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Tóm tắt (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tóm tắt nội dung" name="summary"
                                value="{{$service->summary}}">
                            <p style="color:red">{{ $errors->first('summary') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Nội dung (*)</label>
                            <textarea name="content" id="desc" cols="30" rows="10">{{ $service->content }}</textarea>
                            <p style="color:red">{{ $errors->first('content') }}</p>
                        </div>

                        <?php if($service->status ==1){
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

                        <div class="form-group">
                            <label>Chọn ảnh</label>
                            <input type="file" id="image" name="image" onchange="showIMG()">
                        </div>
                        <div class="form-group" id="lastImg">
                            <div>
                                <img style="width:200px" src="{{asset('images/img_service/'.$service->image)}}" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="viewImg">

                            </div>
                        </div>
                        
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
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
                                document.getElementById('viewImg').innerHTML = '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                            };
                            reader.readAsDataURL(fileInput.files[0]);
                        }
                    }
                    document.getElementById('lastImg').style.display = "none";
                }
    
    </script>

@stop