<footer class="footer">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 col-xl-3 col-md-4">
                <div class="mb-4 mb-md-0">
                    <img
                        src="{{ asset(config('quetzal.logo.url')) }}"
                        class="img-fluid logo"
                        alt="{{ config('quetzal.logo.alt') }}"
                    >
                </div>
            </div>
            <div class="col-12 col-xl-3 col-md-4">
                <div class="mb-4 mb-md-0">
                    <ul class="list-group">
                        <li class="li">
                            <a class="link" href="{{ config('quetzal.social.facebook.url') }}" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="li mt-md-0">
                            <a class="link" href="{{ config('quetzal.social.whatsapp.number') }}" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="li">
                            <a class="link" href="{{ config('quetzal.social.youtube.url') }}" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-xl-3 col-md-4">
                <div class="mb-4 mb-md-0">
                    <ul class="list-group">
                        <li>
                            <a href="#">Nosotros</a>
                        </li>
                        <li>
                            <a href="#">Noticias</a>
                        </li>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mt-2 mt-md-0">
                    &copy; {{ config('quetzal.title') }}
                </div>
            </div>
        </div>
    </div>
    <div class="wave-container">
        <img src="{{ asset('assets/images/wave.svg') }}" alt="Wave">
    </div>
</footer>
