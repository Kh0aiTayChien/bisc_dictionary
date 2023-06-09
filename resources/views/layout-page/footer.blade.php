<style>
    a {
        text-decoration: none !important; /* loại bỏ gạch chân */
        color: #ffffff !important; /* đặt màu chữ là trắng */
    }

    a:hover {
        color: #ffc107 !important; /* đổi màu chữ khi hover sang màu vàng */
    }
    .white-hover:hover{
        color: white !important;
    }
    .scale {
        animation: pulse 1.5s ease-in-out infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(33, 150, 243, 0.4);
        }
        70% {
            box-shadow: 0 0 0 20px rgba(33, 150, 243, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(33, 150, 243, 0);
        }
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4) !important;
    }

    .modal-content {
        background-color: white !important;
        width: 15%;
        height: 30%;
        margin: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        clear: both; /* đặt các giá trị xung quanh */
    }

    .close {
        color: #aaa;
        position: absolute; /* sử dụng position để đặt vị trí */
        top: 0;
        right: 0;
        font-size: 28px;
        font-weight: bold;
        margin: 10px;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    @media (max-width: 1366px) {
        .fixed-bottom {
            position: relative !important;
            width: 100% !important;
        }
    }
    .open-san{
        font-family: 'Open Sans', sans-serif;
        font-size: 1.5rem;
    }
    .open-san-sm{
        font-family: 'Open Sans', sans-serif;
        font-size: 1rem;
    }
</style>
<section class="footer mt-auto py-3 text-light fixed-bottom" style="background-color: #143444">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4 d-flex justify-content-center">
                <h2 class="footer-heading"><a href="https://bisc.edu.vn/" class="logo">
                        <img src="{{(asset('img/logo-footer.png'))}}" style="width: 109px; height: 25px"></a></h2>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading open-san">VỀ CHÚNG TÔI</h2>
                <ul class="list-unstyled">
                    <li>
                        <div class="py-1 d-block">
                            <p>Đơn vị tiên phong triển khai các khóa học về Kế toán - Kiểm toán - Tài chính bằng phương pháp Blended Learning tại Việt Nam</p>
                            </div>
                    </li>
                    <li>
                        <div class="py-1 d-block">
                            <a href="https://bisconline.edu.vn/" class="py-1 d-block btn btn-outline-warning text-light scale white-hover open-san-sm">KHÓA HỌC KẾ KIỂM MIỄN PHÍ </a>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading open-san">LIÊN HỆ</h2>
                <ul class="list-unstyled">
                    <li><a href="tel:085 8822 168" class="call-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            085 8822 168</a></li>
                    <li></li>
                    <a href="https://bisc.edu.vn/" class="py-1 d-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                        https://bisc.edu.vn/</a>
                    <li>
                        <div class="py-1 d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                            training@bisc.edu.vn</div>
                    </li>

                    <li>
                        <div class="py-1 d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z"/>
                                <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                            </svg>
                            Tầng 4, tòa nhà Lakeview, 71 Chùa Láng, Đống Đa, Hà Nội</div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <div class="fb-page" data-href="https://www.facebook.com/BISCTrainingCenter" data-tabs="timeline"
                     data-width="" data-height="70" data-small-header="true" data-adapt-container-width="true"
                     data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/BISCTrainingCenter" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/BISCTrainingCenter">BISC</a></blockquote>
                </div>
                <ul class="ftco-footer-social p-0 mt-3 ms-4">
                    <span class="ftco-animate me-2"><a href="https://www.facebook.com/BISCTrainingCenter"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Facebook">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                     class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
                            </span>
                        </a></span>
                    <span class="ftco-animate me-2"><a href="https://www.youtube.com/@bisc538/featured"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Youtube"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                     class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
                            </span></a></span>
                    <span class="ftco-animate "><a
                                href="https://www.tiktok.com/@bisctrainingcenter?_t=8axfjG6xiGg&_r=1"
                                data-toggle="tooltip" data-placement="top"
                                title="tiktok"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                     class="bi bi-tiktok" viewBox="0 0 16 16">
  <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
</svg>
                            </span></a></span>
                    <span class="ftco-animate "><div class="btn btn-sm border-0 bg-transparent"
                                data-toggle="tooltip" data-placement="top" id="openModal"
                                title="zalo"><span>
{{--                                <svg id="changeColor" fill="#DC7633" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55" zoomAndPan="magnify" viewBox="0 0 375 374.9999" height="55" version="1.0"><defs><path id="pathAttribute" d="M 11.972656 11.972656 L 362.972656 11.972656 L 362.972656 362.972656 L 11.972656 362.972656 Z M 11.972656 11.972656 " fill="#ffffff"></path></defs><g><path id="pathAttribute" d="M 340.148438 22.917969 C 346.667969 22.917969 352.027344 28.277344 352.027344 34.796875 L 352.027344 340.148438 C 352.027344 346.667969 346.667969 352.027344 340.148438 352.027344 L 34.796875 352.027344 C 28.277344 352.027344 22.917969 346.667969 22.917969 340.148438 L 22.917969 34.796875 C 22.917969 28.277344 28.277344 22.917969 34.796875 22.917969 L 340.148438 22.917969 M 340.148438 11.972656 L 34.796875 11.972656 C 22.222656 11.972656 11.972656 22.222656 11.972656 34.796875 L 11.972656 340.148438 C 11.972656 352.722656 22.222656 362.972656 34.796875 362.972656 L 340.148438 362.972656 C 352.722656 362.972656 362.972656 352.722656 362.972656 340.148438 L 362.972656 34.796875 C 362.972656 22.222656 352.722656 11.972656 340.148438 11.972656 " fill-opacity="1" fill-rule="nonzero" fill="#ffffff"></path></g><g id="inner-icon" transform="translate(85, 75)"> <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor" height="199.8" width="199.8"><title>Zalo</title><path d="M12.49 10.2722v-.4496h1.3467v6.3218h-.7704a.576.576 0 01-.5763-.5729l-.0006.0005a3.273 3.273 0 01-1.9372.6321c-1.8138 0-3.2844-1.4697-3.2844-3.2823 0-1.8125 1.4706-3.2822 3.2844-3.2822a3.273 3.273 0 011.9372.6321l.0006.0005zM6.9188 7.7896v.205c0 .3823-.051.6944-.2995 1.0605l-.03.0343c-.0542.0615-.1815.206-.2421.2843L2.024 14.8h4.8948v.7682a.5764.5764 0 01-.5767.5761H0v-.3622c0-.4436.1102-.6414.2495-.8476L4.8582 9.23H.1922V7.7896h6.7266zm8.5513 8.3548a.4805.4805 0 01-.4803-.4798v-7.875h1.4416v8.3548H15.47zM20.6934 9.6C22.52 9.6 24 11.0807 24 12.9044c0 1.8252-1.4801 3.306-3.3066 3.306-1.8264 0-3.3066-1.4808-3.3066-3.306 0-1.8237 1.4802-3.3044 3.3066-3.3044zm-10.1412 5.253c1.0675 0 1.9324-.8645 1.9324-1.9312 0-1.065-.865-1.9295-1.9324-1.9295s-1.9324.8644-1.9324 1.9295c0 1.0667.865 1.9312 1.9324 1.9312zm10.1412-.0033c1.0737 0 1.945-.8707 1.945-1.9453 0-1.073-.8713-1.9436-1.945-1.9436-1.0753 0-1.945.8706-1.945 1.9436 0 1.0746.8697 1.9453 1.945 1.9453z" id="mainIconPathAttribute" fill="#ffffff"></path></svg> </g></svg>--}}
                                <svg id="Layer_1" fill="#FFFFFF" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="55" zoomAndPan="magnify" viewBox="0 0 375 374.9999" height="55" version="1.0"><path d="M57.62,1.57C68.21-.1,79-.11,89.68.13L88.76,1a108.19,108.19,0,0,0-34,36.21c-16.82,28.93-22.95,63.14-21.56,96.3,1.38,27,7.86,54.15,21.6,77.62,2.3,4.2,6.13,7.91,6.19,13,.43,10.94-5,21.25-12.3,29.07l1.43,1.5c6.85,7.48,14.16,14.51,21.12,21.89,9.89,11.18,21.16,21.08,30.85,32.46-16.12.24-32.43,1-48.36-2A65.42,65.42,0,0,1,7.38,270.65C2.23,259.91.69,247.9.29,236.13q0-81.51,0-163C.51,55,5.32,36,18.1,22.5A65.2,65.2,0,0,1,57.62,1.57Z"/><path d="M204.44,101.35h12.88q-.1,37.7,0,75.4c-4.2-.59-11.19,2.1-12.77-3.49C204.29,149.3,204.53,125.32,204.44,101.35Z"/><path d="M73.2,102.24c20,0,39.9-.15,59.85,0-.14,3.91-.36,8.17-3,11.33-13.64,17-27,34.18-40.62,51.16,14.49.09,29,0,43.47,0-.27,3.39.92,7.34-1.28,10.28-1.38,1.9-3.88,1.73-5.95,1.75-18.13-.1-36.26.09-54.38-.1,0-3.83.09-8.07,2.77-11.12,13.48-16.91,27.12-33.7,40.54-50.65-13.79,0-27.59-.09-41.38.06C73.15,110.73,73.18,106.48,73.2,102.24Z"/><path d="M249.25,118.88c14.36-3.21,29.94,6.22,33.87,20.36,4.93,14.71-4.07,32.2-18.94,36.68-12.63,4.45-27.75-1.36-34.3-13a29.63,29.63,0,0,1,19.37-44ZM249,131.62c-8.76,3.09-13.48,13.75-10.06,22.36,2.83,8.14,12.36,13.12,20.64,10.62,9.45-2.26,15.16-13.33,11.81-22.4C268.6,133.22,257.75,128,249,131.62Z"/><path d="M142.87,129.35c6.91-8.56,19-12.78,29.67-9.73a36.28,36.28,0,0,1,9.79,4.52c0-.94-.1-2.81-.13-3.75l12.08,0q0,28.2,0,56.41c-3-.08-6,.27-8.88-.33-2-.83-2.67-3.06-3.48-4.88-11.12,8.64-28.59,6.68-37.83-3.84C134.25,157.53,133.74,140.17,142.87,129.35Zm16.28,2.52c-9.26,3.26-13.75,15.19-9.06,23.79,4,8.38,15.26,11.9,23.31,7.28a17.35,17.35,0,0,0,7.71-21.43C178,133.05,167.51,128.31,159.15,131.87Z"/><path d="M308.19,229.47l.79-.86c.41,15.63-1.28,31.94-9,45.85a65.61,65.61,0,0,1-43.3,32.32c-10.21,2.11-20.68,2.58-31.08,2.45h-96c-9.2-.15-18.42.28-27.59-.2-9.69-11.38-21-21.28-30.85-32.46-7-7.38-14.27-14.41-21.12-21.89a80.92,80.92,0,0,0,39.34-7c24.06,15.68,52.65,23.09,81,25.53,28.37,2.16,57.28-.8,84.27-10C274.78,256.2,293.94,245.41,308.19,229.47Z"/></svg>
                            </span></div></span>

                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="{{asset('img/qr-code.jpg')}}" style="height: 25rem; width: 18rem" alt="">
        </div>
    </div>
</section>
<script>
    $(document).ready(function(event) {
        $("#openModal").click(function() {
            $(".modal").show();
        });

        $(".close").click(function() {
            $(".modal").fadeOut();
        });
        $('body').click(function(event) {
            // Kiểm tra xem phần tử được click có thuộc về modal không
            if ($(event.target).hasClass('modal')) {
                // Nếu không thuộc về modal, tắt modal đó
                $('.modal').fadeOut();
            }
        });
    });
</script>
