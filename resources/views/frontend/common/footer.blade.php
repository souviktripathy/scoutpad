 <footer style="background: #197df5;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-holder mb-5">
                        <img src="{{ URL::asset('public/theme/images/logo.png') }}" alt="">
                        <div class="mt-3">
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. </p>
                        </div>

                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-holder mb-5 before-border">
                        <h4>Quick Link</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Trems & Condition</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-holder mb-5 before-border">
                        <h4>Connect Us</h4>
                        <ul>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-holder mb-5 before-border">
                        <h4>Social Links</h4>
                        <a href="#"><i class="fa fa-facebook-square social-icon" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter-square social-icon" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram social-icon" aria-hidden="true"></i></a>
                    </div>
                </div>


            </div>
        </div>
        <div class="footer-copy text-center">
            <h5>Copyright@scoutpads.com</h5>
        </div>
    </footer>

   

    <!-- js -->
    <script src="{{ URL::asset('public/theme/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::asset('public/theme/js/bootstrap.min.js') }}"></script>
    <!-- Owl js -->
    <script src="{{ URL::asset('public/theme/js/owl.carousel.js') }}"></script>
    <script src="{{ URL::asset('public/theme/js/owl.carousel.min.js') }}"></script>
    <!--Match Height -->
    <script src="{{ URL::asset('public/theme/js/jquery.matchHeight-min.js') }}"></script>
    <!--Match Height -->
    <script src="{{ URL::asset('public/theme/js/loader.min.js') }}"></script>
    <script src="{{ URL::asset('public/common/jquery.validate.min.js') }}"></script>
    <!-- custome js -->
    <script src="{{ URL::asset('public/theme/js/custome.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".menu-icon").on("click", function () {
                $("nav ul").toggleClass("showing");
            });
        });

        // Scrolling Effect

        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            }

            else {
                $('nav').removeClass('black');
            }
        })
    </script>
</body>

</html>