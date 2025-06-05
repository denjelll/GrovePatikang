@extends('layouts.app')

@section('content')
<style>
  body, html {
    margin: 0;
    padding: 0;
    min-height: 100%;
    display: flex;
    flex-direction: column;
    background-image: none;
  }

  .page-wrapper {
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .main-header {
    width: 100%;
    top: 0;
    background-color: #fcfce6;
    border-bottom: 1px solid #ddd;
  }

  .logo {
    height: 100px;
    width: auto;
  }

  .about-banner {
    background: url('{{ URL::to('/assets/images/About-Us.jpg') }}') no-repeat center center/cover;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin-top: -47px;
  }

  .banner-content h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .banner-content p {
    font-size: 1.2rem;
  }

  .about-content {
    background-color: white;
    color: black;
    padding: 40px 20px;
  }

  .about-content h1, .about-content h2 {
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
  }

  .about-content h1 {
    font-size: 2.5rem;
  }

  .about-content h2 {
    font-size: 1.8rem;
  }

  .about-content p {
    margin-bottom: 15px;
    line-height: 1.8;
    font-size: 1.1rem;
    color: #333;
    text-align: justify;
  }

  .info-box {
    background-color: #4b634e;
    color: #fefae0;
    padding: 50px 25px;
    border-radius: 8px;
    height: 100%;
    box-sizing: border-box
  }

  .info-box h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #fefae0;
    font-weight: bold;
  }

  .info-box ul {
    list-style: disc;
    padding-left: 20px;
    margin: 0;
  }

  .info-box li {
    margin-bottom: 10px;
    font-size: 1rem;
  }

  @media (min-width: 992px) {
    .info-box {
      padding: 60px 60px;
    }

    .info-box h3 {
      font-size: 2rem;
    }

    .info-box li {
      font-size: 1.5rem;
    }
  }

  .img-fluid {
    max-width: 100%;
    height: auto;
  }

  .shadow {
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
  }

  .rounded {
    border-radius: 8px;
  }

  .vision-journey-section {
    background-color: #d97735;
    color: white;
    padding: 60px 20px;
  }

  .vision-journey-section h2 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 15px;
  }

  .vision-journey-section p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 15px;
    text-align: justify;
  }

  .offer-section {
    background-color: #a9b388;
    padding: 60px 20px;
    color: #333;
    margin-bottom: -30px;
  }

  .offer-card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: transform 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: justify;
  }

  .offer-card:hover {
    transform: translateY(-10px);
  }

  .offer-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
  }

  .offer-card h3 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #a65325;
    margin-bottom: 10px;
  }

  .offer-card h3 a {
    color: inherit;
    text-decoration: none;
  }

  .offer-card h3 a:hover {
    text-decoration: underline;
  }

  .offer-card p {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
    flex-grow: 1;
  }
</style>

{{-- Banner Section --}}
<section class="about-banner">
  <div class="banner-content text-center">
    <h1>About Us</h1>
    <p>Tentang Kami - Lembur Mangrove Patikang</p>
  </div>
</section>

{{-- About Section --}}
<section class="about-content container">
  <div class="row mt-5">
    <div class="col-lg-6 mt-5">
      <h1>Selamat Datang di Lembur Mangrove</h1>
      <p>
        Selamat datang di Lembur Mangrove, sebuah desa wisata yang terletak di Kampung Patikang, Desa Citeureup,
        Panimbang, Pandeglang, Banten.
      </p>
      <p>
        Dikelilingi oleh hutan mangrove yang asri dan pesona alam pantai, kami komunitas yang menggabungkan pelestarian
        lingkungan dengan kearifan lokal.
      </p>
    </div>
    <div class="col-lg-6 d-flex align-items-center">
      <div class="info-box w-100">
        <h3>Jam Operasional</h3>
        <ul>
          <li><strong>Senin – Kamis:</strong> 08.00 – 17.00</li>
          <li><strong>Sabtu – Minggu:</strong> 08.00 – 17.00</li>
          <li><strong>Jumat:</strong> Tutup</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row mt-5 align-items-center">
    <div class="col-lg-6">
      <img src="{{ URL::to('/assets/images/Mangrove-Activity.jpg') }}" alt="Mangrove Activity" class="img-fluid rounded shadow">
    </div>
    <div class="col-lg-6 mt-5">
      <h1>Who Are We?</h1>
      <p>
        Kami adalah komunitas petani, nelayan, dan pengrajin yang berdedikasi untuk melestarikan ekosistem mangrove
        sekaligus mengenalkan Lembur Mangrove pada dunia.
      </p>
      <p>
        Melalui dukungan inisiatif dari Pokdarwis Putri Gundul, kami mengembangkan kawasan mangrove ini menjadi
        destinasi edukasi dan wisata alam yang unik.
      </p>
    </div>
  </div>
</section>

{{-- Vision and Journey Section --}}
<section class="vision-journey-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Our Vision</h2>
        <p>
          Menginspirasi kepedulian terhadap lingkungan dan pariwisata berkelanjutan melalui pelestarian mangrove yang
          dipadukan dengan pengalaman budaya yang autentik.
          Kami bercita-cita menjadi desa wisata unggulan yang menghubungkan manusia dengan keindahan dan pentingnya
          mangrove.
        </p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-12">
        <h2>Our Journey</h2>
        <p>
          Berawal dari sebuah kawasan rawa yang menjadi tempat tinggal masyarakat lokal, Lembur Mangrove kini telah
          berkembang menjadi desa wisata yang memadukan konservasi dengan pemberdayaan ekonomi.
          Sejak 2017, berkat inisiatif Pokdarwis Putri Gundul, kami mengubah potensi sumber daya alam kami menjadi
          pengalaman wisata yang mengedukasi dan menghibur.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- What We Offer Section --}}
<section class="offer-section">
  <div class="container text-center">
    <h1><strong>What We Offer?</strong></h1>
    <div class="row mt-4">
      @foreach ($post as $item)
        @if ($item->category_id == 2)
          <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <div class="offer-card">
              <img src="{{ URL::to('/assets/images/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid rounded">
              <h3>
                <a href="/post/{{ $item->id }}">{{ $item->title }}</a>
              </h3>
              <p>
                {{ \Illuminate\Support\Str::limit($item->description, 100) }}
                @if (strlen($item->description) > 100)
                  <a href="/post/{{ $item->id }}" class="text-decoration-none"> Baca selengkapnya</a>
                @endif
              </p>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
@endsection
