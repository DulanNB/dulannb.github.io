@include('layouts.header')
@include('layouts.sidebar')

<style>
    .header_area .navbar {
        background: -webkit-linear-gradient(
            0deg, #000000 0%, #227483 100%);
    }
    .submit_btn {
        border: 0px solid #000000;
    }
    .contact_info .info_item i {
        color: #33314f;
    }.banner_area .box_1620 {
         bottom: 0px
     }
    .contact_area {
         padding-top:0px;
         padding-bottom: 120px;
    }
    .loader {
        align-content: center;
        border: 16px solid #f3f3f3;
        border-top: 16px solid #2d2f30;
        border-radius: 50%;
        margin-bottom: 10px;
        width: 60px;
        height: 60px;
        animation: spin 2s linear infinite;
     }
    .contact_area {
        margin-top: -205px;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .banner_area .banner_inner .banner_content h2 {
        margin-top: 200px;
    }
    .banner_area{
        bottom: 103px;
    }

</style>

<section class="banner_area">
    <div class="box_1620">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact Me</h2>
                    <div class="page_link">
                        <a href="/">Dulan N</a>
                        <a href="/contact">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="contact_area p_120">
    <div class="d-flex justify-content-center" id="loader" style="visibility: hidden">
        <div class="loader align-self-center"  ></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">


                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Kandy, SriLanka</h6>
                        <p></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="tel:0772141220">+94 772141220</a></h6>
                        <p></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#"> dulan418@gmail.com </a></h6>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="{{route('contact.store')}}" method="post" id="contactForm"
                      novalidate="novalidate">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject"
                                   placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1"
                                      placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn" style="    background-image: -webkit-linear-gradient(
0deg
, #000000 0%, #88f3ff 100%);">Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Thank you</h2>
                <p>Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>


<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Sorry !</h2>
                <p> Something went wrong </p>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
