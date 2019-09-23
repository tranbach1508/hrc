<style>
        .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
        }
        
        /* Style the buttons inside the tab */
        .tab button {
          background-color: inherit;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          transition: 0.3s;
          font-size: 17px;
          width: 25%;
        }
        
        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }
        
        /* Create an active/current tablink class */
        .tab button.active {
          background-color: #0d487f;
          color: #fff;
        }
        
        /* Style the tab content */
        .tabcontent {
          display: none;
          padding: 6px 12px;
          border: 1px solid #ccc;
          border-top: none;
        }
        </style>


@extends('lay-out.master-layout')


@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top:100px;">
                <img src="https://d2u5b7i2e9xsth.cloudfront.net/CodeCamp/CodeCamp/Upload/Course/27b7d76e83e44d85a9022d059ce68f5a.jpg" alt="" width="100%" height="auto">
                <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" style="font-size: 20px;font-weight: 700;">Giới thiệu</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')" style="font-size: 20px;font-weight: 700;">Nội dung</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')" style="font-size: 20px;font-weight: 700;">Lịch học</button>
                        <button class="tablinks" onclick="openCity(event, 'HN')" style="font-size: 20px;font-weight: 700;">Giảng viên</button>
                      </div>
                      
                      <div id="London" class="tabcontent" style="display:block">
                        <p>{{ $course_detail->intro }}</p>
                      </div>
                      
                      <div id="Paris" class="tabcontent">
                        <p>{{ $course_detail->content }}</p> 
                      </div>
                      
                      <div id="Tokyo" class="tabcontent">
                        <p>{{ $course_detail->schedule }}</p>
                    </div>

                    <div id="HN" class="tabcontent">
                        <p>{{ $course_detail->teacher }}</p>
                    </div>
                    
            </div>
            <div class="col-md-4" style="padding:30px;background-color:#f4f4f4;margin-top:100px;">
                <div class="row" style="border-bottom:#0d487f solid 1px; padding-bottom:10px;">
                    <h3 style="font-size:25px;">Thông tin khóa học</h3>
                </div>
                <div class="row">        
                    <h3 style="font-size: 20px;font-weight: 700;padding-top: 10px;color: black;">Học phí :</h3>
                    <span style="color: #b71d21;font-weight: bold;font-size: 24px;padding-left: 20px;">{{ number_format($course_detail->tuition) }} VNĐ</span>
                    <p>((Bao gồm cả Tea Break, chi phí tài liệu, in ấn, giảng viên, chứng nhận)) </p>        
                    <h3 style="font-size: 20px;font-weight: 700;padding-top: 10px;color: black;">Phí ưu đãi</h3>
                    <span style="color: #002cff;font-weight: bold;font-size: 24px;padding-left: 20px;">{{ number_format($course_detail->endow) }} VND</span>
                    <ul style="padding-top: 25px;color: #333333;">
                        <li>Học viên đăng ký trước khai giảng 15 ngày</li>
                        <li>Đăng ký từ 3 học viên</li>
                        <li>Là khách hàng thân thiết của PTI</li>
                    </ul>
                    <strong style="color:#333333;padding-top:30px;">Địa điểm :</strong>
                    <p style="padding-top:10px;">{{ $course_detail->address }}</p>
                    <strong style="color: red;font-weight: 900;font-size: 18px;">Email: {{ $course_detail->email }}</strong>
                    <strong style="color: red;font-weight: 900;font-size: 18px;">Hotline: {{ $course_detail->hotline }}</strong><br>
                    <center>
                        <button class="btn" style="background-color:#0d487f;color: #fff;margin: 60px;" data-toggle="modal" data-target="#my-modal">ĐĂNG KÍ KHÓA HỌC</button>
                    </center>
                </div>
                <div class="row" style="border-bottom:#0d487f solid 1px; padding-bottom:10px;">
                    <h3 style="font-size:20px;color:black">Chương trình đào tạo đặc biệt</h3>
                </div>
                @foreach($special_course as $value)
                <div class="row" style="margin-top:30px">
                    <div class="col-4">
                        <img src="{{ asset('images/img_course/'.$value->image) }}" alt="" width="100%">
                    </div>
                    <div class="col-8">
                        <a href="" style="font-size: 17px;color: black;font-weight: 700;">{{ $value->name }}</a><br>
                        <span style="font-size: 14px;color: black;font-weight: 700;">Học phí : </span>
                        <span style="color:#ff0000;font-weight: 700;">{{ number_format($value->tuition) }} VNĐ</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Hãy để lại thông tin của bạn</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form action="{{ route('dangkykhoahoc',['slug'=>$course_detail->slug]) }}" style="border:#f4f4f4 solid 1px;margin-top:30px" class="container" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input class="form-control" type="text" name="name" placeholder="Họ và tên"style="height:45px;">
                                </div>
                                <div class="col-6">
                                    <input class="form-control" type="text" name="phone" placeholder="Số điện thoại"style="height:45px;">
                                </div>
                                <div class="col-6">
                                    <input class="form-control" type="email" name="email" placeholder="Email"style="height:45px;margin-top:20px;">
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-info" style="width:100%;height:45px;margin-top:20px;">Đăng ký</button>
                                </div>
                            </div>
                        </form>
            </div>
        </div>
    </div>
</div>


    
@endsection


<script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        $('#my-modal').modal('show');
 </script>