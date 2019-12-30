<footer>
    <div class="container">
        <div class="row footer">
            <div class="col-12">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?=base_url('')?>assets/img/logo/logo-footer.png">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h5>Contact Info</h5>
                <p><span><i class="fas fa-phone mr-2"></i></span>+98 902 918 7326</p>
                <p><span><i class="fa fa-envelope mr-2"></i></span>info@Diakohostels.com</p>
            </div>
            <div class="col-12 col-md-6">
                <h5>Follow Us</h5>
                <ul>
                    <!--<li class="tripadvisor">
                        <a href="#">
                            <i class="fa fa-tripadvisor" aria-hidden="true"></i>
                        </a>
                    </li>-->
                    <li class="facebook">
                        <a href="http://facebook.com/diako.hostels.3">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="youtube">
                        <a href="#">
                            <i class="fa fa-youtube-square" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="whatsapp">
                        <a href="https://api.whatsapp.com/send?phone=989029187326">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="instagram">
                        <a href="http://instagram.com/diakohostels">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 text-center mt-4">
                <p>Copyright @2019 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>by <a class="brand" href="#">MG</a></p>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=base_url('')?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url('')?>assets/js/popper.js"></script>
<script src="<?=base_url('')?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url('')?>assets/js/stellar.js"></script>
<script src="<?=base_url('')?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?=base_url('')?>assets/vendors/isotope/isotope-min.js"></script>
<script src="<?=base_url('')?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?=base_url('')?>assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?=base_url('')?>assets/js/mail-script.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="<?=base_url('')?>assets/js/gmaps.min.js"></script>
<script src="<?=base_url('')?>assets/js/theme.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/map-script.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/scrollIt.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?=base_url('')?>assets/js/scrollIt.js" type="text/javascript"></script>
<script src="<?=base_url('')?>assets/js/validation-signup.js"></script>
<script src="<?=base_url('')?>assets/js/according-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.waitforimages/2.2.0/jquery.waitforimages.min.js"></script>
<!-- Sweet-Alert  -->
<script src="<?=base_url('')?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url('')?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

$(document).ready(function() {
    $("#book").click(function(){
                let timerInterval
        Swal.fire({
        title: 'Please wait!',
        html: 'We are preparing your request in <b></b> milliseconds.',
        timer: 60000,
        timerProgressBar: true,
        onBeforeOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
            Swal.getContent().querySelector('b')
                .textContent = Swal.getTimerLeft()
            }, 100)
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
        }).then((result) => {
        if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.timer
        ) {
            console.log('I was closed by the timer') // eslint-disable-line
        }
        })

    }); 
});
</script>

<script type="text/javascript">
    $(function(){
        $('.attraction-content').slimscroll({
            color: '#ae104d',
            height: '385 px'
        });
    });
</script>
<script>
    $(function(){
        $.scrollIt();
    });

    (function(){
        $('.flex-container').waitForImages(function() {
            $('.spinner').fadeOut();
        }, $.noop, true);

        $(".flex-slide").each(function(){
            $(this).hover(function(){
                $(this).find('.flex-title').css({
                    transform: 'rotate(0deg)',
                    top: '10%'
                });
                $(this).find('.flex-about').css({
                    opacity: '1'
                });
            }, function(){
                $(this).find('.flex-title').css({
                    transform: 'rotate(90deg)',
                    top: '15%'
                });
                $(this).find('.flex-about').css({
                    opacity: '0'
                });
            })
        });
    })();
</script>

<script type="text/javascript">
    $(function(){
        $('.attraction-content1').slimscroll({
            color: '#ae104d',
            height: '85%'
        });

        $('.review-text').slimscroll({
            color: '#ae104d',
            height: '100%'
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });
</script>

<script type="text/javascript">
    let $inp_rows = $('#inp_rows') ;
    let params = window.location.search.substring(1).split('&') ;
    for(let key in params) {
        let tmp = params[key].split('=') ;
        params[tmp[0]] = tmp[1] ;
    }
    const perPage = params.rows ? parseInt(params.rows) : 5 ;
    $inp_rows.val(perPage) ;

    $(".pagination-block").smpPagination(perPage) ;

    $('#btn_render').click(function(){
        let rows = !!$inp_rows.val() ? $inp_rows.val() : 5 ;
        window.location.search = '?rows=' + rows ;
    }) ;
</script>
<script>
    var slider = document.getElementById("security-input");
    var output = document.getElementById("securityValue");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
        document.getElementById("security-input").setAttribute('value',this.value);

    }

    var slider1 = document.getElementById("location-input");
    var output1 = document.getElementById("locationValue");
    output1.innerHTML = slider1.value;

    slider1.oninput = function() {
        output1.innerHTML = this.value;
        document.getElementById("location-input").setAttribute('value',this.value);

    }
    var slider2 = document.getElementById("staff-input");
    var output2 = document.getElementById("staffValue");
    output2.innerHTML = slider2.value;

    slider2.oninput = function() {
        output2.innerHTML = this.value;
        document.getElementById("staff-input").setAttribute('value',this.value);
    }
    var slider3 = document.getElementById("atmosphere-input");
    var output3 = document.getElementById("atmosphereValue");
    output3.innerHTML = slider3.value;

    slider3.oninput = function() {
        output3.innerHTML = this.value;
        document.getElementById("atmosphere-input").setAttribute('value',this.value);
    }
    var slider4 = document.getElementById("cleanliness-input");
    var output4 = document.getElementById("cleanlinessValue");
    output4.innerHTML = slider4.value;

    slider4.oninput = function() {
        output4.innerHTML = this.value;
        document.getElementById("cleanliness-input").setAttribute('value',this.value);
    }
    var slider5 = document.getElementById("valueformoney-input");
    var output5 = document.getElementById("valueformoneyValue");
    output5.innerHTML = slider5.value;

    slider5.oninput = function() {
        output5.innerHTML = this.value;
        document.getElementById("valueformoney-input").setAttribute('value',this.value);
    }
    var slider6 = document.getElementById("facilities-input");
    var output6 = document.getElementById("facilitiesValue");
    output6.innerHTML = slider6.value;

    slider6.oninput = function() {
        output6.innerHTML = this.value;
        document.getElementById("facilities-input").setAttribute('value',this.value);
    }
</script>
</body>

</html>