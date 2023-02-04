<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee Việt Nam | Mua và Bán Trên Ứng Dụng Di Động Hoặc Website</title>
    <!-- Link icon shopee -->
    <link rel="icon" href="{{asset('/img/lg-icon-shopee.png') }}">
    <!-- Link font-awesome -->
    <link href="{{ asset('/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <!-- Link bootstrap -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Link css -->
    <link href="{{ asset('/css/header-footer-index.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/chatbox.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <!-- Begin Header -->
    <header class="header fixed-top text-white">
        @if (Session::has("user"))
        <div class="header__navbar container d-flex justify-content-between mb-2">
            <div class="header__navbar--social d-flex align-items-center">
                <a href="{{route('admin')}}" target="_blank" class="p-2">Kênh Người Bán</a>
                ||
                <a class="p-2">Tải ứng dụng</a>
                |
                <span class="p-2">Kết nối </span>
                <a href="https://www.facebook.com/tabaphu/" target="_blank" class="fa-brands fa-facebook p-1"></a>
                <a href="https://www.instagram.com/tabaphu/" target="_blank" class="fa-brands fa-instagram p-1"></a>
            </div>
            <div class="header__navbar--login-register d-flex align-items-center">
                <a class="p-2">
                    <i class="fa-solid fa-bell"></i>
                    Thông báo
                </a>
                <a class="p-2">
                    <i class="fa-solid fa-circle-question"></i>
                    Hỗ trợ
                </a>
                <a class="p-2">
                    <i class="fa-solid fa-globe"></i>
                    Tiếng Việt
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
                <div class="header__navbar--user d-flex align-items-center">
                    <img class="border rounded-circle me-1" src="{{ Session::get('user')->avatar }}" alt="">
                    <a href="{{route('user.purchase')}}" class="dropbtn">{{ Session::get('user')->name }}</a>
                    <div class="header__navbar--user-action">
                        <a href="{{route('user.account.profile')}}">Tài Khoản Của Tôi</a>
                        <a href="{{route('user.purchase')}}">Đơn Mua</a>
                        <a href="">Đăng Xuất</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__search container d-flex justify-content-between">
            <a href="{{route('index')}}" class="header__search--logo">
                <img src="{{asset('/img/logo-shopee.png')}}" alt="">
            </a>
            <div class="header__search--search">
                <div class="d-flex justify-content-between align-items-center bg-white rounded">
                    <input type="text" class="mx-2" placeholder="TÌM KIẾM">
                    <i class="fa-solid fa-magnifying-glass text-white py-2 px-3 m-1 rounded"></i>
                </div>
                <div class="d-flex align-items-center py-2">
                    <a href="{{ route('category-dad', ['id' => 1]) }}" class="me-2 text-white">Thời Trang Nam</a>
                    <a href="{{ route('category-dad', ['id' => 2]) }}" class="me-2 text-white">Thời Trang Nữ</a>
                    <a href="{{ route('category-dad', ['id' => 3]) }}" class="me-2 text-white">Phụ Kiện & Điện Thoại</a>
                    <a href="{{ route('category-dad', ['id' => 4]) }}" class="me-2 text-white">Mẹ & Bé</a>
                    <a href="{{ route('category-dad', ['id' => 5]) }}" class="me-2 text-white">Thiết Bị Điện Tử</a>
                    <a href="{{ route('category-dad', ['id' => 6]) }}" class="me-2 text-white">Nhà Cửa & Đời Sống</a>
                    <a href="{{ route('category-dad', ['id' => 7]) }}" class="me-2 text-white">Máy Tính & Laptop</a>
                    <a href="{{ route('category-dad', ['id' => 8]) }}" class="me-2 text-white">Sắc Đẹp</a>
                </div>
            </div>
            <div class="header__search--cart d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-cart-shopping text-white"></i>
            </div>
        </div>
        @else
        <div class="header__navbar container d-flex justify-content-between mb-2">
            <div class="header__navbar--social d-flex align-items-center text-white">
                <a href="{{route('admin')}}" target="_blank" class="p-2">Kênh Người Bán</a>
                ||
                <a class="p-2">Trở thành Người bán Shopee</a>
                |
                <a class="p-2">Tải ứng dụng</a>
                ||
                <span class="p-2">Kết nối </span>
                <a href="https://www.facebook.com/tabaphu/" target="_blank" class="fa-brands fa-facebook p-1"></a>
                <a href="https://www.instagram.com/tabaphu/" target="_blank" class="fa-brands fa-instagram p-1"></a>
            </div>
            <div class="header__navbar--login-register d-flex align-items-center text-white">
                <a class="p-2">
                    <i class="fa-solid fa-bell"></i>
                    Thông báo
                </a>
                <a class="p-2">
                    <i class="fa-solid fa-circle-question"></i>
                    Hỗ trợ
                </a>
                <a class="p-2">
                    <i class="fa-solid fa-globe"></i>
                    Tiếng Việt
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
                <a href="{{route('buyer.register')}}" class="p-2">Đăng ký</a>
                |
                <a href="{{route('buyer.login')}}" class="p-2">Đăng nhập</a>
            </div>
        </div>
        <div class="header__search container d-flex justify-content-between">
            <a href="{{route('index')}}" class="header__search--logo">
                <img src="{{asset('/img/logo-shopee.png')}}" alt="">
            </a>
            <div class="header__search--search">
                <div class="d-flex justify-content-between align-items-center bg-white rounded">
                    <input type="text" class="mx-2" placeholder="TÌM KIẾM">
                    <i class="fa-solid fa-magnifying-glass text-white py-2 px-3 m-1 rounded"></i>
                </div>
                <div class="d-flex align-items-center py-2">
                    <a href="{{ route('category-dad', ['id' => 1]) }}" class="me-2 text-white">Thời Trang Nam</a>
                    <a href="{{ route('category-dad', ['id' => 2]) }}" class="me-2 text-white">Thời Trang Nữ</a>
                    <a href="{{ route('category-dad', ['id' => 3]) }}" class="me-2 text-white">Phụ Kiện & Điện Thoại</a>
                    <a href="{{ route('category-dad', ['id' => 4]) }}" class="me-2 text-white">Mẹ & Bé</a>
                    <a href="{{ route('category-dad', ['id' => 5]) }}" class="me-2 text-white">Thiết Bị Điện Tử</a>
                    <a href="{{ route('category-dad', ['id' => 6]) }}" class="me-2 text-white">Nhà Cửa & Đời Sống</a>
                    <a href="{{ route('category-dad', ['id' => 7]) }}" class="me-2 text-white">Máy Tính & Laptop</a>
                    <a href="{{ route('category-dad', ['id' => 8]) }}" class="me-2 text-white">Sắc Đẹp</a>
                </div>
            </div>
            <div class="header__search--cart d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-cart-shopping text-white"></i>
            </div>
        </div>
        @endif
    </header>
    <!-- End Header -->

    <!-- Begin Main -->
    <div class="main">
        @yield('main')
    </div>
    <!-- End Main -->

    <!-- Begin Footer -->
    <footer class="footer">
        <div class="footer__nav d-flex justify-content-between container border-bottom">
            <div class="footer__nav--div">
                <h6 class="footer__nav--div-title">
                    CHĂM SÓC KHÁCH HÀNG
                </h6>
                <a class="d-block">Trung tâm trợ giúp</a>
                <a class="d-block">Shopee Blog</a>
                <a class="d-block">Shopee Mall</a>
                <a class="d-block">Hướng Dẫn Mua Hàng</a>
                <a class="d-block">Hướng Dẫn Bán Hàng</a>
                <a class="d-block">Thanh Toán</a>
                <a class="d-block">Shopee Xu</a>
                <a class="d-block">Vận Chuyển</a>
                <a class="d-block">Trả Hàng & Hoàn Tiền</a>
                <a class="d-block">Chăm Sóc Khách Hàng</a>
                <a class="d-block">Chính Sách Bảo Hành</a>
            </div>
            <div class="footer__nav--div">
                <h6 class="footer__nav--div-title">
                    VỀ SHOPEE
                </h6>
                <a class="d-block">Giới Thiệu Về Shopee Việt Nam</a>
                <a class="d-block">Tuyển Dụng</a>
                <a class="d-block">Điều Khoản Shopee</a>
                <a class="d-block">Chính Sách Bảo Mật</a>
                <a class="d-block">Chính Hãng</a>
                <a class="d-block">Kênh Người Bán</a>
                <a class="d-block">Flash Sales</a>
                <a class="d-block">Chương Trình Tiếp Thị Liên Kết Shopee</a>
                <a class="d-block">Liên Hệ Với Truyền Thông</a>
            </div>
            <div class="footer__nav--div">
                <h6 class="footer__nav--div-title">
                    THANH TOÁN
                </h6>
                <img src="{{asset('/img/footer/footer-1.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-2.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-3.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-4.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-5.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-6.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-7.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-8.png')}}" class="footer__nav--div-logo" alt="">
                <h6 class="footer__nav--div-title-2">
                    ĐƠN VỊ VẬN CHUYỂN
                </h6>
                <img src="{{asset('/img/footer/footer-9.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-10.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-11.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-12.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-13.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-14.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-15.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-16.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-17.png')}}" class="footer__nav--div-logo" alt="">
                <img src="{{asset('/img/footer/footer-18.png')}}" class="footer__nav--div-logo" alt="">
            </div>
            <div class="footer__nav--div">
                <h6 class="footer__nav--div-title">
                    THEO DÕI CHÚNG TÔI TRÊN
                </h6>
                <div>
                    <i class="fa-brands fa-facebook"></i>
                    <a href="https://www.facebook.com/tabaphu/" target="_blank">Facebook</a>
                </div>
                <div>
                    <i class="fa-brands fa-square-instagram"></i>
                    <a href="https://www.instagram.com/tabaphu/" target="_blank">Instagram</a>
                </div>
                <div>
                    <i class="fa-brands fa-linkedin"></i>
                    <a href="https://www.linkedin.com/in/tabaphu/" target="_blank">LinkedIn</a>
                </div>
            </div>
            <div class="footer__nav--div">
                <h6 class="footer__nav--div-title">
                    TẢI ỨNG DỤNG SHOPEE NGAY THÔI
                </h6>
                <div class="d-flex">
                    <img src="{{asset('/img/footer/footer-19.png')}}" class="footer__nav--div-scan" alt="">
                    <div>
                        <img src="{{asset('/img/footer/footer-20.png')}}" class="footer__nav--div-app" alt="">
                        <img src="{{asset('/img/footer/footer-21.png')}}" class="footer__nav--div-app" alt="">
                        <img src="{{asset('/img/footer/footer-22.png')}}" class="footer__nav--div-app" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__address container">
            <div class="footer__address--country d-flex justify-content-between py-5">
                <div class="w-25">
                    © 2022 Shopee. Tất cả các quyền được bảo lưu.
                </div>
                <div class="text-center w-75">
                    Quốc gia & Khu vực: <a>Singapore</a>|
                    <a>Indonesia</a>|
                    <a>Đài Loan</a>|
                    <a>Thái Lan</a>|
                    <a>Malaysia</a>|
                    <a>Việt Nam</a>|
                    <a>Philippines</a>|
                    <a>Brazil</a>|
                    <a>México</a>|
                    <a>Colombia</a>|
                    <a>Chile</a>|
                    <a>Poland</a>
                </div>
            </div>
            <div class="footer__address--policy text-center pb-5">
                <a>CHÍNH SÁCH BẢO MẬT</a>|
                <a>QUY CHẾ HOẠT ĐỘNG</a>|
                <a>CHÍNH SÁCH VẬN CHUYỂN</a>|
                <a>CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</a>
            </div>
            <div class="footer__address--img d-flex justify-content-center pb-2">
                <img src="{{asset('/img/footer/footer-23.png')}}" class="me-2" alt="">
                <img src="{{asset('/img/footer/footer-23.png')}}" class="me-2" alt="">
                <img src="{{asset('/img/footer/footer-23.png')}}" alt="">
            </div>
            <div class="footer__address--name text-center pb-3">
                Công ty TNHH Shopee
            </div>
            <div class="footer__address--name text-center pb-1">
                Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shopee.vn
            </div>
            <div class="footer__address--name text-center pb-1">
                Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí - Điện thoại liên hệ: 024 73081221 (ext 4678)
            </div>
            <div class="footer__address--name text-center pb-1">
                Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày 10/02/2015
            </div>
            <div class="footer__address--name text-center pb-3">
                © 2015 - Bản quyền thuộc về Công ty TNHH Shopee
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    @if (Session::has("user"))
    @include('chat-box')
    @endif

    <div style="
      z-index: 9999;
      position: fixed;
      bottom: 12px;
      right: 12px;
    ">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" />
    </div>

    <!-- Link script bootstrap -->
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <!-- Link script jquery -->
    <script src="{{ asset('/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('/js/chatbox.js') }}"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-analytics.js";
        import {
            getMessaging,
            getToken,
            onMessage,
        } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-messaging.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyApUvTvJDv8Qf8HvCl6Oy3xTLmcn1ZUFa4",
            authDomain: "shopee-clone-47e23.firebaseapp.com",
            projectId: "shopee-clone-47e23",
            storageBucket: "shopee-clone-47e23.appspot.com",
            messagingSenderId: "760436911597",
            appId: "1:760436911597:web:29dc45143d45eb73768be4",
            measurementId: "G-JRG32DL22G"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);

        // Retrieve Firebase Messaging object.
        const messaging = getMessaging(app);
        const publicVapidKey = "{{ env('WEB_PUSH_CERTIFICATES') }}";
        // Add the public key generated from the console here.
        getToken(messaging, {
                vapidKey: publicVapidKey
            })
            .then((currentToken) => {
                if (currentToken) {
                    console.log("hoand token :", currentToken)
                    sendTokenToServer(currentToken);
                    // Send the token to your server and update the UI if necessary
                    // ...
                } else {
                    // Show permission request UI
                    console.log('No registration token available. Request permission to generate one.');
                    // ...
                }
            }).catch((err) => {
                console.log('An error occurred while retrieving token. ', err);
                // ...
            });

        function sendTokenToServer(device_token) {
            const user = "{{ Session::get('user') }}";
            if (!!user) {
                const user_id = "{{ optional(Session::get('user'))->id }}"
                axios.post(`/api{{config('endpoints.UPDATE_TOKEN')}}`, {
                    device_token,
                    user_id
                }).then(res => {})
            }
        }

        // Lắng nghe khi app đang chạy
        onMessage(messaging, (payload) => {
            console.log('hoand', payload);

            const title = payload?.notification?.title;
            const body = payload?.notification?.body;

            const div = document.createElement('div');
            div.innerHTML = `
              <div class="toast-header">
                <!-- <img src="..." class="rounded me-2" alt="..."> -->
                <strong class="me-auto">${title}</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body">
                ${body}
              </div>
            `;

            document.getElementById('liveToast').appendChild(div);

            $("#liveToast").removeClass("hide");
            $("#liveToast").addClass("show");


            const div2 = document.createElement('div');
            
            div2.innerHTML = `
              <div class="chat-detail-container">
                <div class="detail-content-container">
                  <div class="their-message-container">
                    <div class="content-message">${body}</div>
                  </div>
                </div>
              </div>
            `;

            // add new message to view chat
            document.getElementById("viewChat").appendChild(div2);

            // scroll to bottom view chat
            $("#viewChat").animate({scrollTop:$("#viewChat")[0].scrollHeight}, 'slow')

            // auto close toast
            setTimeout(()=>{
              $("#liveToast").removeClass("show");
              $("#liveToast").addClass("hide");
              $("#liveToast").empty();
            }, 3000)
        });
    </script>
    @stack('scripts')
</body>

</html>