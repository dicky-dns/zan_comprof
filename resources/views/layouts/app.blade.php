<!DOCTYPE html>
<html lang="en">

<head>
    @if (app()->isProduction())
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y55GMFMH96"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'G-Y55GMFMH96');
        </script> 
    @endif

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a584191b57.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Hanken+Grotesk&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/splide-default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css' . '?v=' . time()) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/img/page_logo.png') }}">
    <title>{{ env('APP_NAME') }}</title>
    @yield('extrahead')
</head>

<body>
    @include('components.navbar')

    <div class="content-page">
        @yield('content')
    </div>
    @include('components.footer')

    <div class="rounded-circle1 d-flex no-select">
        <a class="m-auto position-relative" href="https://api.whatsapp.com/send?phone=6282134957409" target="_blank">
            <span>1</span>
            <img width="100%" src="{{ asset('assets/img/wa.png') }}" alt="" />
        </a>
    </div>

    <div class="rounded-circle2 d-flex shadow no-select">
        <a class="m-auto" href="javascript:;">
            <img class="modal-contact-icon-message" width="100%" src="{{ asset('assets/img/message.png') }}"
                alt="" />
            <img class="modal-contact-icon-close" width="100%" src="{{ asset('assets/img/close-message.png') }}"
                style="display: none" alt="" />
        </a>
    </div>
    <div class="bg-modal-contact"></div>
    <div class="modal-contact" id="modalContact">
        <div class="modal-contact-header">
            <h6 class="kontak-title">Hubungi Kami</h6>
            <h6 class="kontak-subtitle">Tersedia 24/7</h6>
            <div class="modal-contact-close" id="closeModalContact">
                ✖
            </div>
        </div>
        <div class="modal-contact-body">
            <form id="modalContactForm">
                @csrf
                <div class="form-group mb-2">
                    <input required type="text" class="form-control" name="name" id="cname"
                        placeholder="Nama">
                </div>
                <div class="form-group mb-2">
                    <input required type="email" class="form-control" name="email" id="cname"
                        placeholder="E-mail">
                </div>
                <div class="form-group mb-3">
                    <textarea required name="message" id="cmessage" cols="30" rows="6" class="form-control" placeholder="Pesan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block w-lg">Kirim</button>
                <p id="successMessage2" class="mb-0 mt-2" style="display: none"> </p>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/splide.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>
<script>
    const inputs = document.querySelectorAll('input');
    const textareas = document.querySelectorAll('textarea');

    inputs.forEach(input => {
        input.addEventListener('input', function() {
            if (input.validity.valid) {
                input.classList.remove('is-invalid');
            } else {
                input.classList.add('is-invalid');
            }
        });
    });

    textareas.forEach(textarea => {
        textarea.addEventListener('input', function() {
            if (textarea.validity.valid) {
                textarea.classList.remove('is-invalid');
            } else {
                textarea.classList.add('is-invalid');
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navTurnkeyService = document.getElementById('navTurnkeyService');
        const megaTurnkeyService = document.getElementById('megaTurnkeyService');

        let timeout;

        function showMegaTurnkeyService() {
            clearTimeout(timeout)
            megaTurnkeyService.style.transform = 'translate(0px, 0px)';
            megaTurnkeyService.style.opacity = '1';
            megaTurnkeyService.style.height = 'auto';
        }

        function hideMegaTurnkeyService() {
            megaTurnkeyService.style.transform = 'translate(0px, 64px)';
            megaTurnkeyService.style.opacity = '0';
            timeout = setTimeout(() => {
                megaTurnkeyService.style.height = '0';
                megaTurnkeyService.style.padding = '0';
            }, 300)
        }

        navTurnkeyService.addEventListener('mouseover', showMegaTurnkeyService);
        navTurnkeyService.addEventListener('mouseout', hideMegaTurnkeyService);
        megaTurnkeyService.addEventListener('mouseover', showMegaTurnkeyService);
        megaTurnkeyService.addEventListener('mouseout', hideMegaTurnkeyService);

        hideMegaTurnkeyService();
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navProductNav = document.getElementById('dropdownProducts');
        const megaProductNav = document.getElementById('productCategory');

        let timeout;

        function showMegaProductNav() {
            clearTimeout(timeout)
            megaProductNav.style.display = 'block';
            megaProductNav.style.transform = 'translate(0px, 0px)';
            megaProductNav.style.opacity = '1';
            megaProductNav.style.height = 'auto';
        }

        function hideMegaProductNav() {
            megaProductNav.style.transform = 'translate(0px, 64px)';
            megaProductNav.style.opacity = '0';
            timeout = setTimeout(() => {
                megaProductNav.style.height = '0';
                megaProductNav.style.padding = '0';
            }, 300)
        }

        navProductNav.addEventListener('mouseover', showMegaProductNav);
        navProductNav.addEventListener('mouseout', hideMegaProductNav);
        megaProductNav.addEventListener('mouseover', showMegaProductNav);
        megaProductNav.addEventListener('mouseout', hideMegaProductNav);

        hideMegaProductNav();
    });
</script>

<script>
    let navbar = document.getElementById('main_navbar')

    const navbarScrolled = () => {
        if (window.scrollY > 100) {
            navbar.classList.add('navbar-scrolled')
            navbar.classList.add('shadow')
        } else {
            navbar.classList.remove('navbar-scrolled')
            navbar.classList.remove('shadow')
        }
    }

    navbarScrolled()

    window.addEventListener('scroll', navbarScrolled)

    // change color if navbar opened
    const navContent = document.getElementById('navbarSupportedContent')

    navContent.addEventListener('show.bs.collapse', function() {
        navbar.classList.add('navbar-scrolled')
    });

    navContent.addEventListener('hide.bs.collapse', function() {
        if (window.scrollY < 100) {
            navbar.classList.remove('navbar-scrolled')
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('#modalContactForm').on('submit', function(e) {
            e.preventDefault();
            $('#modalBtnSubmitForm').attr('disabled');
            $('#modalBtnSubmitForm').html('Mengirim...');
            const ths = $(this);
            $.ajax({
                url: "{{ route('addmessage') }}",
                type: 'POST',
                data: new FormData(this),
                datatype: "json",
                processData: false,
                contentType: false,
            }).done(function(r) {
                ths[0].reset();
                $('#successMessage2').html(r).fadeIn(500)
                    .delay(2000)
                    .fadeOut(500);
            }).fail(function(e) {
                console.log(e);
            }).always(function() {
                $('#modalBtnSubmitForm').removeAttr('disabled');
                $('#modalBtnSubmitForm').html('Kirim');
            });
        });

        $('#contactform').on('submit', function(event) {
            event.preventDefault();
            $('#btnSubmitForm').attr('disabled');
            $('#btnSubmitForm').html('Mengirim...');
            const ths = $(this);
            $.ajax({
                url: "{{ route('addmessage') }}",
                type: 'POST',
                data: new FormData(this),
                datatype: "json",
                processData: false,
                contentType: false,
            }).done(function(r) {
                ths[0].reset();
                $('#successMessage').html(r).fadeIn(500)
                    .delay(2000)
                    .fadeOut(500);
            }).fail(function(e) {
                console.log(e);
            }).always(function() {
                $('#btnSubmitForm').removeAttr('disabled');
                $('#btnSubmitForm').html('Kirim');
            });
        });

        $('#toggleDropdownFactory').hover(function() {
            $("#dropdownFactory").toggle();
        });

        $('#dropdownProducts,.product-navbar').hover(function() {
            $("#productCategory").toggleClass('show');
        });

        $('.navbar-toggler,.close-menu').click(function() {
            $('.mobile-menu').toggleClass('show');
            $('html').toggleClass('no-scroll');
        });

        $(".question-wrapper").click(function() {
            var accordion = $(this).parents(".accordion");
            var answer = accordion.find(".answer-wrapper");
            var trigger = accordion.find(".fa");
            var state = accordion.find(".question-wrapper");

            answer.animate({
                height: "toggle"
            }, 100);

            if (trigger.hasClass("fa-caret-up")) {
                trigger.removeClass("fa-caret-up");
            } else {
                trigger.addClass("fa-caret-up");
            }

            if (accordion.hasClass("expanded")) {
                accordion.removeClass("expanded");
            } else {
                accordion.addClass("expanded");
            }
        });

        $('.rounded-circle2').click(function() {
            if ($(this).hasClass('rounded-circle-close')) {
                $(this).removeClass('rounded-circle-close');
                $('#modalContact').removeClass('show');
                $('.modal-contact-icon-close').hide();
                $('.modal-contact-icon-message').show();
                $('.bg-modal-contact').hide();
                $('html').removeClass('no-scroll');
            } else {
                $(this).addClass('rounded-circle-close');
                $('#modalContact').addClass('show');
                $('.modal-contact-icon-message').hide();
                $('.modal-contact-icon-close').show();
                $('.bg-modal-contact').show();
                $('html').addClass('no-scroll');
            }
        });

        $('#closeModalContact, .bg-modal-contact').click(function() {
            $('.rounded-circle2').removeClass('rounded-circle-close');
            $('#modalContact').removeClass('show');
            $('.modal-contact-icon-close').hide();
            $('.modal-contact-icon-message').show();
            $('.bg-modal-contact').hide();
            $('html').removeClass('no-scroll');
        })
    });
</script>


@yield('extrascript')
</body>

</html>
