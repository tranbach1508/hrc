@extends('lay-out.master-layout')


@section('content')

 <!-- ##### Tin Tuc  ##### -->
 <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <div class="tt-1">
                            TIN TỨC
                        </div>
                        <div class="sp-1"></div>
                        </div>
                </div>
            </div>

            <div class="row mt-5">
                @foreach($new_list as $value)
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="single-blog-area mb-100 wow fadeInUp" >
                        <img style="height: 237px;" src="{{ asset('images/img_new/'.$value->image) }}" alt="" >
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="{{ route('tintucchitiet',['slug'=>$value->slug]) }}" class="blog-headline">
                                <h5>{{ $value->title }}</h5>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">{{ $value->created_at }}</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <div>{{ $value->summary }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="load-more text-center mt-100 wow fadeInUp" >
                        <a href="#" class="btn btn-primary">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    



@endsection