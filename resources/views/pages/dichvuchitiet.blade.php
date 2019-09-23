@extends('lay-out.master-layout')


@section('content')
<section style="padding-top:100px">
    <div class="container mb-5">

        <div class="row">
            <div class="col-12">
                <div class="tt-1">
                    DỊCH VỤ
                </div>
                <div class="sp-1"></div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-9 mb-3">
                <h3 class="text-center mb-3">{{ $service_detail->name }}</h3>
                <div class="pt-3">
                    {{ $service_detail->content }}
                </div>
            </div>
            <div class="col-md-3">
                    <ul class="list-group ">
                        <li class="list-group-item tintuc-1 font-weight-bold text-center"> TIN TỨC MỚI NHẤT</li>
                        @foreach($new_service as $value)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 " style="padding:0"><img
                                        src="{{ asset('images/img_service/'.$value->image) }}"
                                        style="width: 100%">
                                </div>
                                <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                    <a href="{{ Route('tintucchitiet',['slug'=>$value->slug]) }}"
                                        style="color:black"><span>{{$value->name}}</span></a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

        </div>


    </div>

</section>
@endsection
