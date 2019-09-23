@extends('admins.layout.master-layout')
@section('title')
Sửa sản phẩm
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Sửa sản phẩm
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sửa sản phẩm</li>
            </ol>
        </section>
        <hr>

        <section class="content">
            <div class="row">
                <div class="box-header">
                    <a href="{{route('product.list')}}" class="btn btn-primary">Danh sách</a>
                </div>
                <div class="col-xs-12">
                    <div class="box">
                        <form role="form" method="POST" action="{{route('product.update',['id'=>$product->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Tên sản phẩm (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm"
                                        name="name" value="{{ $product->name }}">
                                    <p style="color:red">{{ $errors->first('name') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Link (*)</label>
                                    <input type="text" class="form-control" placeholder="Liên kết" name="link"
                                        value="{{ $product->link }}">
                                    <p style="color:red">{{ $errors->first('link') }}</p>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</div>


{{-- modal --}}


@stop
