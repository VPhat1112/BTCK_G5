<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <link rel="stylesheet" type='text/css' href="{{ asset('css/app.css') }}">

    
    
    <script src='main.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
        <div class="row header-blue header">
          <div class="col-6">
            @if(session('customer'))
                <div class="row flex-col-center">
                    <p class="text-sign"><a href="{{ Route('MyAccount') }}"> Welcome {{ session('customer')->name }}</a></p>
                    <p class="text-sign"><a href="{{ Route('logout') }}"> &nbsp;Logout</a></p>
                </div >
            @else
                <div class="row flex-col-center">
                    <p class="text-sign"><a href="{{ URL::to('register') }}">Đăng ký</a> &nbsp;</p>
                    <p class="text-sign">|</p>
                    <p class="text-sign">&nbsp;<a href="{{ Route('login') }}">Đăng nhập</a></p>
                </div >
            @endif
                
            
            
          </div>
          <div class="col-6">
            <div class="row flex-col-center">
                <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                  </svg>
                <p class="text-suport">&nbsp;&nbsp;support@sapo.vn &nbsp;</p>
                <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                <p class="text-suport">&nbsp;&nbsp;1900 6750 </p>
            </div >
          </div>
        </div>
        <div class="row header-mid">
          <div class="flex-between">
                <img src="{{ URL::to('upload/G5.png') }}">
                <form action="{{ route('products.search') }}" method="GET">
                    <div>
                        <input name="search" style="height: 100%; width: 570px;">
                        <button style="height: 100%;"  class="btn-search"><svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg></button>
                    </div>
                </form>
                
                <button class="btn-card" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg><a href="{{ route('cart.store') }}">({{ Session('productCount')}}) sản phẩm</a> </button>
          </div>
        </div>
        <div class="row header-bottom">
            <div class="col">
                <a href="/" class="text-menu">Trang chủ</a>
            </div>
            <div class="col">
                <a href="" class="text-menu">Giới thiệu</a>
            </div>
            <div class="col">
                <a href="" class="text-menu">Sản phẩm </a>
            </div>
            <div class="col">
                <a href="" class="text-menu">Tin tức</a>
            </div>
            <div class="col">
                <a href="" class="text-menu">Liên hệ</a>
            </div>
            </div>
            @yield('main')
        </div>
        <div class="row footer footer-flex">
            <div class="row ">
                <div class="col">
                    <p class="footer-title">Địa chỉ</p>
                    <p class="footer-text">Tầng 6 - Tòa nhà Ladeco - 266 Đội Cấn, Hà</p>
                    <p class="footer-title">Số điện thoại</p>
                    <p class="footer-text">1900 6750</p>
                    <p class="footer-title">Email</p>
                    <p class="footer-text">support@sapo.vn</p>
                </div>
                <div class="col">
                    <p class="footer-title">Địa chỉ</p>
                    <p class="footer-text">Tầng 6 - Tòa nhà Ladeco - 266 Đội Cấn, Hà</p>
                    <p class="footer-title">Số điện thoại</p>
                    <p class="footer-text">1900 6750</p>
                    <p class="footer-title">Email</p>
                    <p class="footer-text">support@sapo.vn</p>
                </div>
                <div class="col">
                    <p class="footer-title">Địa chỉ</p>
                    <p class="footer-text">Tầng 6 - Tòa nhà Ladeco - 266 Đội Cấn, Hà</p>
                    <p class="footer-title">Số điện thoại</p>
                    <p class="footer-text">1900 6750</p>
                    <p class="footer-title">Email</p>
                    <p class="footer-text">support@sapo.vn</p>
                </div>
                <div class="col">
                    <p class="footer-title">Địa chỉ</p>
                    <p class="footer-text">Tầng 6 - Tòa nhà Ladeco - 266 Đội Cấn, Hà</p>
                    <p class="footer-title">Số điện thoại</p>
                    <p class="footer-text">1900 6750</p>
                    <p class="footer-title">Email</p>
                    <p class="footer-text">support@sapo.vn</p>
                </div>
            </div>
        </div>
</body>





































