@extends('lay-out.master-layout')

@section('content')
<section style="padding-top:100px" id="dv">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tt-1">
                    TUYỂN DỤNG
                </div>
                <div class="sp-1"></div>
            </div>
        </div>
        @foreach($recruitment as $value)
        <div class="row mt-5">
            <div class="col-12 col-md-4" data-aos="fade-right">
                <div class="thumbnail">
                    <img src="{{ asset('images/img_recruitment/'.$value->image) }}" alt=""
                        style="width:80%;height: 80%">
                </div>
            </div>
            <div class="col-12 col-md-8" data-aos="fade-left" data-aos-delay="100">
                <div>
                    <h6>
                        <a href="" style="font-size: 22px">{{ $value->title }}</a>
                    </h6>
                    <small><i class='far fa-calendar-alt'></i> &nbsp;(Ngày:
                        {{ $value->created_at }})</small>
                    <div>{{ $value->content }}</div>
                    <a href="{{ route('tuyendungchitiet',['slug'=>$value->slug]) }}" class="btn btn-outline-success btn-sm">
                        Đọc tiếp >>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</section>
@endsection
