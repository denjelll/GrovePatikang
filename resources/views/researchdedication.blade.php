@extends('layouts.app')
@section('content')
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #fefae0;
}

.csr-banner {
      background: url('{{ URL::to('/assets/images/image6.jpg') }}') no-repeat center center/cover;
      height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      margin-top:-47px;
    }

/* Header Section */
.header-background {
    height: 250px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    border-radius: 10px;
    margin-bottom: 2rem;
}

.header-background h2 {
    font-size: 2.5rem;
    font-weight: bold;
}

.header-background p {
    font-size: 1.2rem;
}

/* Content Box */
.content-box {
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    margin-bottom: 3rem;
    text-align: center;
}

.content-box h3 {
    font-size: 2.2rem;
    color: #4b644a;
    margin-bottom: 20px;
}

.content-box p {
    font-size: 1.1rem;
    color: #333;
    margin-bottom: 1rem;
}

/* CTA */
.cta-section {
    background: url("{{ asset('assets/images/frame-44.png') }}") no-repeat center center/cover;
    padding: 60px 20px;
    color: white;
    text-align: center;
    border-radius: 10px;
    margin-top: 3rem;
}

.btn-contact {
    background-color: #a65325;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
}

.btn-contact:hover {
    background-color: #e76f51;
}

.contact-message {
    font-size: 1.1rem;
    margin-top: 20px;
}
.contact-message a {
    color: white;
    font-weight: bold;
}
.section-title {
  font-weight: 800;
  font-size: 3rem;
  color: #415634; /* warna hijau gelap, bisa disesuaikan */
  margin-bottom: 20px;
  font-weight: bold;
}

/* Buat agar paragraf teks rata kanan-kiri */
.col-lg-7 p {
  text-align: justify;
}

/* Sesuaikan tinggi gambar agar match dengan tinggi kolom teks */
.research-image {
  width: 73%;
  height:100%;
  object-fit: cover;
  border-radius: 20px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

</style>

<section class="csr-banner">
  <div class="container py-5">
      <div class="header-background">
          <h2>Research & Dedication</h2>
          <p>Penelitian & Pengabdian Masyarakat bagi Dunia Mangrove</p>
      </div>
</section>

<div class="container py-5">
  <div class="row align-items-center">
    <!-- Kolom kiri: teks -->
    <div class="col-lg-7">
      <h2 class="section-title">Open to All Research &<br>Dedication Initiatives!</h2>
      <p>
        Patikang Mangrove Valley in Citeureup Village is an area rich in potential for research and
        community service activities. As a conservation and empowerment-based tourism village, we open
        opportunities for collaboration with universities and academic institutions to jointly create
        positive impacts through science and real action.
      </p>
      <p>
        Lembur Mangrove believes that synergy between the academic world and local communities can be
        a strong foundation for creating sustainable change. We are committed to providing facilities
        and access that support the success of research and service programs in this area.
      </p>
      <p>
        If your university or institution is interested in working together, please contact us through
        our official contact for more information. Together, let us improve our understanding and
        contribution to environmental conservation and community welfare in Lembur Mangrove.
      </p>
    </div>

    <!-- Kolom kanan: gambar -->
    <div class="col-lg-5 text-center h-100 d-flex align-items-stretch">
      <img src="{{ asset('assets/images/research.jpg') }}" alt="Lembur Mangrove Research"
        class="img-fluid research-image">
    </div>
  </div>
</div>


<div class="cta-section">
  <a href="https://wa.me/62817849463" class="btn btn-contact mb-3">
    Chat Pak Deden di +62 817-849-463
  </a>
  <div class="contact-message">
    <p>Email kami di <a href="mailto:hello@lemburmangrove.com">hello@lemburmangrove.com</a></p>
  </div>
</div>
@endsection
