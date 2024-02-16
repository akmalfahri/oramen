<x-guest-layout>

    <!-- ------------------------ Splide Hero Section ------------------------ -->
<!-- Main Hero Content -->
     <section class="top">
        <div class="container-fluid">
            <ul class="row">
                <li class="center-content">
                    <a href="{{ url('/menus') }}">
                        <img src="{{ url('images/splide/landing-page/banner.png') }}" class="d-block w-100"
                            style="border-radius:14px;">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Main Hero Content -->
    <!-- ------------------------ Menu Card Section ------------------------ -->
    <section class="scrollport">
        <div class="container">
            <div class="row mt-5 text-center">
                <small class="text-primary text-uppercase fw-bold">Menu Spesial buat Kamu dan Orang Spesial</small>
                <h1 class="fw-bold">Coba menu spesial kami hari ini!</h1>
                <p>Jangan lupa buat reservasi dulu di website kami ya, kalau masih kepo sama menu bisa liat liat
                    dulu kok</p>
            </div>
            <div class="row mt-4">
                <div class="container">
                    <div class="swiper menu-swiper">
                        <div class="swiper-wrapper">
                            @forelse ($menus as $menu)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="{{ asset('menunya/'. $menu->image) }}"
                                            class="card-img-top card-img-top-landing-page" />
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold"> {{ $menu->name }}</h5>
                                            <div class="category-card-description-wrapper">
                                                <p class="card-text category-card-description" style="font-size: 13px;">
                                                    {{ $menu->description }}
                                                </p>
                                            </div>
                                            <hr>
                                            <h5 class="fw-semibold">Rp.{{ $menu->price }}.000,00</h5>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>gak ada menu euy</p>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <a href="{{ url('/menus') }}"
                            class="btn btn-primary text-white px-4 mx-auto text-center col-10 col-md-3 my-3 fw-bold">Lihat
                            Semua
                            &nbsp; <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ #1 Feature Section ------------------------ -->
   <section class="my-100" id="tentang-kami">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="text-center mb-5">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
        class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
      > -->
                        <h3 class="text-xl">TENTANG KAMI
                        </h3>
                        
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo incidunt
                            praesentium, ipsum
                            culpa minus eveniet, id nesciunt excepturi sit voluptate repudiandae. Explicabo, incidunt
                            quia.
                            Repellendus mollitia quaerat est voluptas!
                        </p>
                <div class="w-full md:w-1/2">
                    <div class="w-half h-auto overflow-hidden rounded-md shadow-xl sm:rounded-l">
                        <img src="{{ URL::asset('images/landing-page/oramen.jpg') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Category Cards Section ------------------------ -->
    <section class="my-100">
        <div class="container">
            <div class="text-center mb-5">
                <small class="text-primary fw-bold text-uppercase">Kategori Makanan Yang Tersedia di
                    ORAMEN</small>
                <h1 class="fw-bold">Kategori Menu </h1>
                <p>Mau cari minuman,Ramen Camilam ada kategorinya nih</p>
            </div>
            <div class="row g-3">
                @forelse ($categories as $cat)
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-primary text-white text-center">
                            <img class="card-img-top card-img-top-category-landing-page"
                                src="{{ asset('categori/'. $cat->image) }}" alt="" srcset="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-1">{{ $cat->name }}</h5>
                                <div class="category-card-description-wrapper">
                                    <p class="card-text category-card-description" style="font-size: 14px;">
                                        {{ $cat->description }}
                                    </p>
                                </div>
                                <a href="{{ route('categories.show', $cat->id) }}"
                                    class="btn btn-outline-light fs-12">Lihat Semua &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>gak ada kategori euy</p>
                @endforelse
            </div>
        </div>
    </section>
    <!-- ------------------------ Gallery Pictures Section ------------------------ -->
    <section class="my-100" id="galeri-outlet">
        <div class="container">
            <div class="text-center mb-5">
                <small class="text-primary fw-bold text-uppercase">Foto dan Dokumentasi di outlet kami</small>
                <h1 class="fw-bold">Galeri & Dokumentasi di Outlet</h1>
                <p>Buat kalian yang penasaran sama tempatnya kayak gimana tapi tempatnya nyaman kok hehe</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="{{ url('images/gallery/G1.png') }}"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                    <img src="{{ url('images/gallery/G2.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="{{ url('images/gallery/G3.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                    <img src="{{ url('images/gallery/G4.png') }}"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="{{ url('images/gallery/G5.png') }}"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                    <img src="{{ url('images/gallery/G6.png') }}"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Testimonials Section ------------------------ -->
    <section class="my-100">
        <div class="container">
            <div class="text-center mb-5">
                <small class="text-warning fw-bold text-uppercase">Apa kata mereka tentang kami?</small>
                <h1 class="fw-bold">Testimoni dari Para Pelanggan</h1>
                <p>Biar kalian makin yakin buat ke tempat kami karena kata orang orang bagus dan kece dong</p>
            </div>
            <div class="row">
                <div class="container">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card card-in-home bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                        <h5 class="card-title lh-lg fw-bold">
                                            Tempat nyaman dan aman
                                        </h5>
                                        <p class="card-text mb-4">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum a eveniet
                                            consectetur ipsum accusantium alias dignissimos
                                        </p>
                                        <hr />
                                        <div class="row">
                                            <div class="col-2 col-md-2 my-auto">
                                                <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png"
                                                    class="img-fluid rounded" />
                                            </div>
                                            <div class="col-10 col-md-10 my-auto">
                                                <p class="mb-0 fw-bold">
                                                    Wong gagah
                                                </p>
                                                <small>Tukang tidur, 18 tahun</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-in-home bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                        <h5 class="card-title lh-lg fw-bold">
                                            Makanan Enak Banget Banget!
                                        </h5>
                                        <p class="card-text mb-4">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum a eveniet
                                            consectetur ipsum accusantium alias dignissimos
                                        </p>
                                        <hr />
                                        <div class="row">
                                            <div class="col-2 col-md-2 my-auto">
                                                <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png"
                                                    class="img-fluid rounded" />
                                            </div>
                                            <div class="col-10 col-md-10 my-auto">
                                                <p class="mb-0 fw-bold">
                                                    Conrad Aditya Veranda
                                                </p>
                                                <small>Tukang genshin, 18 tahun</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-in-home bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                        <h5 class="card-title lh-lg fw-bold">
                                            Pegawai nya cantik dan ganteng
                                        </h5>
                                        <p class="card-text mb-4">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum a eveniet
                                            consectetur ipsum accusantium alias dignissimos
                                        </p>
                                        <hr />
                                        <div class="row">
                                            <div class="col-2 col-md-2 my-auto">
                                                <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png"
                                                    class="img-fluid rounded" />
                                            </div>
                                            <div class="col-10 col-md-10 my-auto">
                                                <p class="mb-0 fw-bold">
                                                    Andhika Febriansyah
                                                </p>
                                                <small>Tukang bucin, 18 tahun</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ CTA Social Media Section ------------------------ -->
    <section>
        <div class="container mb-5">
            <div class="row rounded mx-auto " style="background-color: #2984fc">
                <div class="col-md-7 my-auto text-white px-5 py-5">
                    <h2 class="fw-bold text-white">Jangan lewatkan promo dari kami</h2>
                    <p>
                        Pastikan kalian follow instagram kami untuk informasi terkait promo, event, menu
                        baru atau giveaway!
                    </p>
                    <a href='https://www.instagram.com/kedai_oramen/' target="_blank" class="btn btn-outline-light mt-2 px-4 py-2"
                        style="font-weight:500;">Follow Instagram
                        ⇾</a>
                </div>
                <div class="col-md-4 background-cta ms-auto">
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
