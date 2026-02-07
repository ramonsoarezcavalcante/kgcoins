<!-- theme preloader Start -->
@include('frontend.includes.partials.preloader')
<!-- theme preloader end -->
<!-- back to top area Start -->
@include('frontend.includes.partials.backToTop')
<!-- back to top area end -->
<!-- all plugins here -->
<!-- Jquery js -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap Bundle Js -->
<script src="{{ asset('assets/js/boostrap.bundle.min.js') }}"></script>
<!-- Bootstrap Bundle Js -->
<script src="{{ asset('assets/js/phosphor-icon.js') }}"></script>
<!-- Select 2 -->
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- count down js -->
<script src="{{ asset('assets/js/count-down.js') }}"></script>
<!-- jquery UI js -->
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- AOS Animation -->
<script src="{{ asset('assets/js/aos.js') }}"></script>
<!-- marque -->
<script src="{{ asset('assets/js/marque.min.js') }}"></script>
<!-- marque -->
<script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>
<!-- Counter -->
<script src="{{ asset('assets/js/counter.min.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Toastr js -->
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            (function($) {
                "use strict";
                toastr.warning('{{ $error }}')
            })
            (jQuery);
        </script>
    @endforeach
@endif
@if (Session::has('message'))
    <script>
        (function($) {
            "use strict";
            toastr.success('{{ Session::get('message') }}');
        })(jQuery);
    </script>
@endif
@if (session()->has('success'))
    <script>
        (function($) {
            "use strict";
            toastr.success('{{ session()->get('success') }}')
        })(jQuery);
    </script>
@endif
@if (session()->has('error'))
    <script>
        (function($) {
            "use strict";
            toastr.error('{{ session()->get('error') }}')
        })(jQuery);
    </script>
@endif
