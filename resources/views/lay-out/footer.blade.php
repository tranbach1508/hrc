<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">Về Chúng Tôi</h2>
            @foreach($infocompany as $value)
            <p style="font-size: 14px"><i class="fas fa-user-alt"></i> {{ $value->name }}</p>
            <p style="font-size: 14px"><i class="far fa-address-book"></i> Mã số thuế: {{ $value->tax_code }}</p>
            <p style="font-size: 14px" ><i class="far fa-address-book"></i> {{ $value->phone }}</p>
            <p style="font-size: 14px" ><i class="fas fa-user-alt"></i> {{ $value->email }}</p>
            @endforeach
          </div>
          <div class="col-md-4 ml-auto" style="margin-left:0 !important">
            <h2 class="footer-heading mb-4">Dịch Vụ</h2>
            <ul class="list-unstyled" style="font-size: 14px">
              @foreach($service as $value)
              <li><a href="#"> >> {{ $value->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">Hỗ Trợ</h2>
            <ul class="list-unstyled" style="font-size: 14px">
              @foreach($support as $value)
              <li><a href="{{ route('hotrochitiet',['slug'=>$value->slug]) }}"> >> {{ $value->title }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h2 class="footer-heading mb-4">Sản Phẩm Dịch Vụ của Talent Wins</h2>
        <ul class="list-unstyled" style="font-size: 14px">
          @foreach($product as $value)
          <li><a href="#"> >> {{ $value->name }}</a></li>
          @endforeach
        </ul>

      </div>
    </div>
    <hr>
    <div class="row  text-center">
      <div class="col-md-12">
        <div class="border-top pt-2">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> | Designed by Talent Wins 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>

    </div>
  </div>
</footer>