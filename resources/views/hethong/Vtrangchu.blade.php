@extends('Hethong.layout.header')
@section('content')
<style>
  .pricing .box {
    box-shadow: 0 3px 20px -2px rgb(24 24 25 / 48%);
  }
  .css-plus{
    color: #fff;
    font-weight: 1000;
  }
  .padding-row{
    padding: 20px 10px;
  }
  .section-title {
    text-align: left;
    padding-bottom: 30px;
  }
  .section-title {
    text-align: left;
    padding: 10px;
}
.box-timkiem{
  background: #fff;
  padding: 20px;
  max-width: 400px;
}
.row-input{
  padding: 10px;
}
.padding-iterm{
  padding: 10px;
}
.background-hover:hover {
    box-shadow: 0 3px 20px -2px rgb(24 24 25 / 60%);
    opacity: 1.3;
    cursor: pointer;
    -webkit-transition: box-shadow 0.3s ease-out;
    -moz-transition: box-shadow 0.3s ease-out;
    -o-transition: box-shadow 0.3s ease-out;
    transition: box-shadow 0.3s ease-out;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="{{asset('Hethong/trangchu.css')}}">
<script src="https://code.angularjs.org/1.3.0-rc.2/angular.js"></script>
<script src="{{asset('Hethong/js/Star.js')}}"></script>
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Cửa hàng chuyên mua bán xe máy cũ <br>Hồng Hoan</h1>
        <h2>Chúng tôi rất vinh hạnh khi được phục vụ quý khách</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Về chúng tôi</a>
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <div class="box-timkiem">
          <div class="row-input">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Hãng xe">
          </div>
          <div class="row-input">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" placeholder="Hãng xe">
          </div>
          <div class="row-input">
            <select class="form-control js-example-basic-single">
              <option value="AL">Alabama</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="row-input">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<main id="main">
  <section id="cliens" class="cliens section-bg">
    <div class="container">
      <div class="row" data-aos="zoom-in">
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('Template/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('Template/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('Template/assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('Template/assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('Template/assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

    <section id="pricing" class="pricing faq section-bg">
        <div class="container" style="background: #ffff;">
            <div class="row" style="padding-top: 10px;">
                <div class="col-md-12" style="border-bottom: 1px solid #f1f1f1;">
                    <h3>Tin đăng mới nhất</h3>
                </div>
            </div>
            <div class="row padding-row" style="padding-top: 10px;">
                <div class="col-md-3" style="padding: 10px;">
                    <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                        <div class="iterm-chitiet">
                            <a href="">
                                <img
                                    src="https://media.baoquangninh.com.vn/dataimages/202010/original/images1437945_hon_da.jpg"
                                    alt="" width="100%" height="100%">
                            </a>
                        </div>
                        <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                            <div class="link-row" style="display: inline; padding: 10px;">
                                <a href="{{asset('Template/assets/img/portfolio/portfolio-6.jpg')}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link css-plus"
                                   title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="portfolio-details.html" class="details-link  css-plus" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-row-right">
                                <p>Xe gia - Honda Vario 2021</p>
                            </div>
                            <div class="col-row-left">
                                <p style="color: red;font-weight: bold;">Giá: 10đ</p>
                            </div>
                            <div class="col-row-right">
                                <p>Hãng xe: Honda</p>
                            </div>
                            <div class="col-row-right">
                                <p>Thời gian đăng: 01/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 10px;">
                    <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                        <div class="iterm-chitiet">
                            <a href="">
                                <img
                                    src="https://media.baoquangninh.com.vn/dataimages/202010/original/images1437945_hon_da.jpg"
                                    alt="" width="100%" height="100%">
                            </a>
                        </div>
                        <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                            <div class="link-row" style="display: inline; padding: 10px;">
                                <a href="{{asset('Template/assets/img/portfolio/portfolio-6.jpg')}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link css-plus"
                                   title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="portfolio-details.html" class="details-link  css-plus" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-row-right">
                                <p>Xe gia - Honda Vario 2021</p>
                            </div>
                            <div class="col-row-left">
                                <p style="color: red;font-weight: bold;">Giá: 10đ</p>
                            </div>
                            <div class="col-row-right">
                                <p>Hãng xe: Honda</p>
                            </div>
                            <div class="col-row-right">
                                <p>Thời gian đăng: 01/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 10px;">
                    <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                        <div class="iterm-chitiet">
                            <a href="">
                                <img
                                    src="https://media.baoquangninh.com.vn/dataimages/202010/original/images1437945_hon_da.jpg"
                                    alt="" width="100%" height="100%">
                            </a>
                        </div>
                        <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                            <div class="link-row" style="display: inline; padding: 10px;">
                                <a href="{{asset('Template/assets/img/portfolio/portfolio-6.jpg')}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link css-plus"
                                   title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="portfolio-details.html" class="details-link  css-plus" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-row-right">
                                <p>Xe gia - Honda Vario 2021</p>
                            </div>
                            <div class="col-row-left">
                                <p style="color: red;font-weight: bold;">Giá: 10đ</p>
                            </div>
                            <div class="col-row-right">
                                <p>Hãng xe: Honda</p>
                            </div>
                            <div class="col-row-right">
                                <p>Thời gian đăng: 01/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 10px;">
                    <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                        <div class="iterm-chitiet">
                            <a href="">
                                <img
                                    src="https://media.baoquangninh.com.vn/dataimages/202010/original/images1437945_hon_da.jpg"
                                    alt="" width="100%" height="100%">
                            </a>
                        </div>
                        <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                            <div class="link-row" style="display: inline; padding: 10px;">
                                <a href="{{asset('Template/assets/img/portfolio/portfolio-6.jpg')}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link css-plus"
                                   title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="portfolio-details.html" class="details-link  css-plus" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-row-right">
                                <p>Xe gia - Honda Vario 2021</p>
                            </div>
                            <div class="col-row-left">
                                <p style="color: red;font-weight: bold;">Giá: 10đ</p>
                            </div>
                            <div class="col-row-right">
                                <p>Hãng xe: Honda</p>
                            </div>
                            <div class="col-row-right">
                                <p>Thời gian đăng: 01/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 10px;">
                    <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                        <div class="iterm-chitiet">
                            <a href="">
                                <img
                                    src="https://media.baoquangninh.com.vn/dataimages/202010/original/images1437945_hon_da.jpg"
                                    alt="" width="100%" height="100%">
                            </a>
                        </div>
                        <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                            <div class="link-row" style="display: inline; padding: 10px;">
                                <a href="{{asset('Template/assets/img/portfolio/portfolio-6.jpg')}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link css-plus"
                                   title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="portfolio-details.html" class="details-link  css-plus" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-row-right">
                                <p>Xe gia - Honda Vario 2021</p>
                            </div>
                            <div class="col-row-left">
                                <p style="color: red;font-weight: bold;">Giá: 10đ</p>
                            </div>
                            <div class="col-row-right">
                                <p>Hãng xe: Honda</p>
                            </div>
                            <div class="col-row-right">
                                <p>Thời gian đăng: 01/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 10px;">
                    <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                        <div class="iterm-chitiet">
                            <a href="">
                                <img
                                    src="https://media.baoquangninh.com.vn/dataimages/202010/original/images1437945_hon_da.jpg"
                                    alt="" width="100%" height="100%">
                            </a>
                        </div>
                        <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                            <div class="link-row" style="display: inline; padding: 10px;">
                                <a href="{{asset('Template/assets/img/portfolio/portfolio-6.jpg')}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link css-plus"
                                   title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="portfolio-details.html" class="details-link  css-plus" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-row-right">
                                <p>Xe gia - Honda Vario 2021</p>
                            </div>
                            <div class="col-row-left">
                                <p style="color: red;font-weight: bold;">Giá: 10đ</p>
                            </div>
                            <div class="col-row-right">
                                <p>Hãng xe: Honda</p>
                            </div>
                            <div class="col-row-right">
                                <p>Thời gian đăng: 01/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 10px;">
                    <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                        <div class="iterm-chitiet">
                            <a href="">
                                <img
                                    src="https://media.baoquangninh.com.vn/dataimages/202010/original/images1437945_hon_da.jpg"
                                    alt="" width="100%" height="100%">
                            </a>
                        </div>
                        <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                            <div class="link-row" style="display: inline; padding: 10px;">
                                <a href="{{asset('Template/assets/img/portfolio/portfolio-6.jpg')}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link css-plus"
                                   title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="portfolio-details.html" class="details-link  css-plus" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-row-right">
                                <p>Xe gia - Honda Vario 2021</p>
                            </div>
                            <div class="col-row-left">
                                <p style="color: red;font-weight: bold;">Giá: 10đ</p>
                            </div>
                            <div class="col-row-right">
                                <p>Hãng xe: Honda</p>
                            </div>
                            <div class="col-row-right">
                                <p>Thời gian đăng: 01/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 10px;">
                    <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                        <div class="iterm-chitiet">
                            <a href="">
                                <img
                                    src="https://media.baoquangninh.com.vn/dataimages/202010/original/images1437945_hon_da.jpg"
                                    alt="" width="100%" height="100%">
                            </a>
                        </div>
                        <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                            <div class="link-row" style="display: inline; padding: 10px;">
                                <a href="{{asset('Template/assets/img/portfolio/portfolio-6.jpg')}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link css-plus"
                                   title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="portfolio-details.html" class="details-link  css-plus" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-row-right">
                                <p>Xe gia - Honda Vario 2021</p>
                            </div>
                            <div class="col-row-left">
                                <p style="color: red;font-weight: bold;">Giá: 10đ</p>
                            </div>
                            <div class="col-row-right">
                                <p>Hãng xe: Honda</p>
                            </div>
                            <div class="col-row-right">
                                <p>Thời gian đăng: 01/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" style="border-top: 1px solid #f1f1f1;padding-top: 10px;">
                    <h3>Xem chi tiết</h3>
                </div>
            </div>
        </div>
    </section>

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Liên hệ với chúng tôi</h2>
        <p>Hãy liên hệ với cúng tôi để nhận tư vấn với </p>
      </div>

      <div class="row">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Địa chỉ:</h4>
              <p>Số 210A,</p>
            </div>
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>
            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
</main>
@endsection
