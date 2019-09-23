@extends('lay-out.master-layout')


@section('content')

<!--  <div class="site-blocks-cover overlay" style="background-image: url(images/panner-1.png); " data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1 style="color: #ed1c24 ">HRC Talent Wins</h1>
                <p class="mb-5" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>   -->


<div class="slide-one-item home-slider owl-carousel" data-aos="fade-up" data-aos-delay="200">
  @foreach($banner as $value)
    <div class="site-blocks-cover overlay" style="background-image: url(images/img_banner/{{ $value->image }}); " data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h1 style="color: #ed1c24 ">{{ $value->title }}</h1>
                            <p class="mb-5">{{ $value->content }}</p>
                            <div>
                                <a href="{{ $value->link }}" class="btn btn-primary mr-2 mb-2">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach


</div>


<div class="site-section" id="about-section">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-6 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="100">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/YjyNxGa0ThI" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <!-- <div class="experience">
              <span class="year">50 years</span>
              <span class="caption">of experience</span>
            </div> -->
            </div>
            <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="300">

                <h2 class="section-title mb-3">Welcome To HRC Company</h2>
                <p class="mb-4">HRC là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực
                    tuyến hay giáo dục trực tuyến.
                    HRC là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu
                    trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề)
                    với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu
                    tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).
                </p>
                <p><a href="#" class="btn btn-primary " style="font-size: 18px">Đọc tiếp</a></p>
            </div>
        </div>
    </div>
</div>



<div class="container learning">
    <div class="row">
        <div class="col-md-4" style="position:relative;">
            <img src="{{ asset('images/headconten.jpg')}}" alt=""
                style="position:absolute;z-index:-1;top:0;left:0;width:100%;height:auto;">
            <h3 style="color: #fff;font-size: 30px;font-weight: 900;margin-top:8px;"><i class="fa fa-address-book"
                    aria-hidden="true"></i>&nbsp; Các khóa học</h3>
        </div>
    </div>
    <div class="row woocommerce">
      @foreach($course as $value)
        <div class="col-md-4 woocommerce__list wow bounceInLeft woocommerce__list-img">
            <a href="{{ route('khoahocchitiet',['slug'=>$value->slug]) }}"><img
                    src="{{ asset('images/img_course/'.$value->image) }}"
                    alt=""></a>
            <div class="container" style="margin-left:10px;">
                <div class="row" style="padding-top:20px;">
                    <a>
                        <h5>{{ $value->name }}</h5>
                    </a>
                </div>
                <div class="row">
                    <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Avatar/8c8a595891d647edacd68413999a2a94.jpg"
                        class="rounded-circle" alt="" width="30px" height="30px">
                    <a href="" style="margin-left:10px;">{{ $value->teacher }}</a>
                </div>
                <div class="row" style="border-bottom:#EBEBEB solid 1px;padding-bottom:20px;">
                    <p style="font-size:14px;">{{ $value->intro }}</p>
                </div>
                <div class="row" style="padding:20px 0px;">
                    <div class="col-sm-5">
                        <i class="fa fa-star" aria-hidden="true"
                            style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
                        <i class="fa fa-star" aria-hidden="true"
                            style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
                        <i class="fa fa-star" aria-hidden="true"
                            style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
                        <i class="fa fa-star" aria-hidden="true"
                            style="color: #F6BC46;margin-right: 5px;font-size:13px;"></i>
                        <i class="fa fa-star" aria-hidden="true"
                            style="color: #f1f1f1;margin-right: 5px;font-size:13px;"></i>
                    </div>
                    <div class="col-3">
                        <span><img
                                src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/Lesson-Course.svg?v=3"
                                alt="" width="30px;">57</span>
                    </div>
                    <div class="col-4">
                        <span><img src="https://codelearn.io/Themes/TheCodeCampPro/assets/code-learn/students.svg?v=3"
                                alt="" width="30px">809</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <center>
        <button class="btn btn-outline-info">View More</button>
    </center>
</div>


<!-- giải pháp HRC -->

<section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mb-3" style="font-size: 30px">TƯ VẤN VÀ TUYỂN DỤNG HRC</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
          @foreach($ad_re as $value)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic1.png" alt="">
                    </div>
                    <div>
                        <h3>{{ $value->id }} {{ $value->title }}</h3>
                        @foreach($sub_ad_re as $row)
                        @if($value->id == $row->cate_id)
                        <span><i class="fas fa-check" style="color:#ed1c24"></i> {{ $row->name }}</span>
                        <br>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>







<!-- tin tức -->

<section class="site-section testimonial-wrap" id="testimonials-section">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mb-3" style="font-size: 30px">TIN TỨC</h2>
            </div>
        </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">

        <div class="container">
            <div class="row">
              @foreach($new1 as $value)
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="{{ asset('images/img_new/'.$value->image) }}" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">{{ $value->title }}</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span>{{ $value->created_at }}<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>{{ $value->summary }}</p>

                    </div>
                </div>
                @endforeach
            </div>


        </div>


        <div class="container">
            <div class="row">
                @foreach($new2 as $value)
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="{{ asset('images/img_new/'.$value->image) }}" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">{{ $value->title }}</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span>{{ $value->created_at }}<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>{{ $value->summary }}</p>

                    </div>
                </div>
                @endforeach
            </div>


        </div>


        <div class="container">
            <div class="row">
                @foreach($new3 as $value)
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="{{ asset('images/img_new/'.$value->image) }}" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">{{ $value->title }}</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span>{{ $value->created_at }}<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>{{ $value->summary }}</p>

                    </div>
                </div>
                @endforeach
            </div>


        </div>

        <div class="container">
            <div class="row">
                @foreach($new4 as $value)
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="{{ asset('images/img_new/'.$value->image) }}" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">{{ $value->title }}</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span>{{ $value->created_at }}<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>{{ $value->summary }}</p>

                    </div>
                </div>
                @endforeach
            </div>


        </div>

    </div>
</section>




<!-- <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div> -->





<section class="site-section ok" id="contact-section">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mt-0" style="font-size: 30px">LIÊN HỆ</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-7 mb-5 " style="background-color: #F0FFF0; border-radius: 50px">



                <form style="padding:20px" method="POST" action="{{ route('themlienhe') }}">
                  @csrf
                    <h6 class=" text-center mt-4">Anh Chị vui lòng để lại thông tin liên hệ để được eWins tư vấn, hỗ
                        trợ!</h6>
                    <div class="form-group mb-0 mt-4">
                        <label for="name" class="font-weight-bold text-ct">Tên Công ty</label>
                        <input type="text" class="form-control" placeholder="Nhập tên Công ty..."
                            name="name_city">
                    </div>
                    <div class="form-group mb-0">
                        <label for="name" class="font-weight-bold text-ct">Họ tên</label>
                        <input type="text" class="form-control" placeholder="Nhập họ và tên..."
                            name="name">
                    </div>
                    <div class="form-group mb-0">
                        <label for="address_city" class="font-weight-bold text-ct">Địa chỉ Công ty</label>
                        <input type="text" class="form-control" placeholder="Nhập địa chỉ Công ty..."
                            name="address_city">
                    </div>
                    <div class="form-group mb-0">
                        <label for="phone" class="font-weight-bold text-ct">Số điện thoại</label>
                        <input type="text" class="form-control d-right" placeholder="Nhập số điện thoại"
                            name="phone">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Email</label>
                        <input type="email" class="form-control d-right" placeholder="Nhập địa chỉ email..."
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="content" class="font-weight-bold text-ct">Nội dung</label>
                        <textarea class="form-control" rows="4" id="comment" placeholder="Nhập nội dung"
                            name="content"></textarea>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Gửi</button>



                </form>
            </div>
            <div class="col-md-5" style="">
              @foreach($infocompany as $value)
                <div class="p-4 mb-3 " style="padding:30px">
                    <p class="mb-4 font-weight-bold mt-4">{{ $value->name }}</p>
                    <p class="mb-0 font-weight-bold"> <i class="fas fa-map-marker-alt fa-fw"></i> Địa chỉ</p>
                    <p class="mb-4" style="color:#04B404">{{ $value->address }}</p>

                    <p class="mb-0 font-weight-bold"><i class="fa fa-phone"></i> Số Điện Thoại</p>
                    <p class="mb-0"><a href="#" style="color:#04B404">{{ $value->phone }}</a></p>

                    <p class="mb-0 font-weight-bold icon-envelope"> Email</p>
                    <p class="mb-0"><a href="#" style="color:#04B404">{{ $value->email }}</a></p>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>



@endsection
