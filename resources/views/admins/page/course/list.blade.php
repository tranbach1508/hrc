@extends('admins.layout.master-layout')
@section('title')
    Danh sách khóa học
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Danh sách khóa học
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Danh sách khóa học</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                <div class="box-header">
                    <a href="{{route('course.add')}}" class="btn btn-primary">Thêm khóa học</a>
                </div>
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="col-md-2">Tên khóa học</th>
                                        <th class="col-md-2">Loại khóa học</th>
                                        <th class="col-md-2">Ảnh</th>
                                        <th class="col-md-2">Học phí</th>
                                        <th class="col-md-2">Giá ƯD</th>
                                        <th class="col-md-2">Giới thiệu</th>
                                        <th class="col-md-2">Nội dung</th>
                                        <th class="col-md-2">Lịch học</th>
                                        <th class="col-md-2">Giáo viên</th>
                                        <th class="col-md-2">Địa chỉ</th>
                                        <th class="col-md-2">Cấp độ</th>
                                        <th class="col-md-2">Trạng thái</th>
                                        <th class="col-md-3">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($course as $value)
                                        <tr class="odd gradeX" >
                                            <td >{{$value->name}}</td>
                                            <td >{{$value->cate_name}}</td>
                                            <td ><img style="width:100%" src="{{asset('images/img_course/'.$value->image)}}"></td>
                                            <td >{{$value->tuition}}</td>
                                            <td >{{$value->endow}}</td>
                                            <td >
                                                <div style="overflow: auto; height: 100px">{{ $value->intro }}</div>
                                            </td>
                                            <td >
                                                <div style="overflow: auto; height: 100px">{{ $value->content }}</div>
                                            </td>
                                            <td >{{$value->schedule}}</td>
                                            <td >{{$value->teacher}}</td>
                                            <td >{{$value->address}}</td>
                                            <td >
                                                    @if($value->level==1)
                                                    Đặc biệt
                                                    @else
                                                    Bình thường
                                                    @endif
                                                </td>
                                            <td >
                                                @if($value->status==1)
                                                Cho hiện
                                                @else
                                                Ẩn
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-default" href="{{Route('course.edit',['id'=> $value->id]) }}">Sửa</a>
                                                <a href="{{Route('course.delete',['id'=> $value->id]) }}" class="btn btn-danger" onclick="return confirmAction()">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <b></b>
    </div>
</div>

<script language="JavaScript">
        function confirmAction() {
            return confirm("Bạn có chắc chắn không ?")
        }
        
    
    </script>

{{-- modal --}}
<div class="container container-fluid">
        <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="modal-title">Thông tin người dùng tin tức</h2>
                        {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button> --}}
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body" id="cont">
                        
                    </div>
                    
                        
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                    </div>
                </div>
                </div>
                
            </div>
    </div>
@stop