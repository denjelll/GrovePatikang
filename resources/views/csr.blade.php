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
      background: url('{{ URL::to('/assets/images/research-dedication.jpg') }}') no-repeat center center/cover;
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

/* Initiatives */
.initiative-card {
    background-color: #fff;
    border-radius: 10px;
    padding: 30px 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    text-align: center;
    margin-bottom: 2rem;
    height: 100%;
}

.initiative-card i {
    font-size: 3rem;
    color: #c66828;
    margin-bottom: 15px;
}

.initiative-card h4 {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: #5e7153;
}

.initiative-card p {
    font-size: 1rem;
    color: #444;
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
</style>

<section class="csr-banner">
  <div class="container py-5">
      <div class="header-background">
          <h2>CSR (Corporate Social Responsibility)</h2>
          <p>Initiatives in Collaboration – Lembur Mangrove Patikang</p>
      </div>
</section>

    <div class="content-box">
        <h3>Open to All CSR Initiatives!</h3>
        <p>
            Di Lembur Mangrove, kami percaya bahwa pelestarian lingkungan dan pemberdayaan masyarakat adalah tanggung jawab bersama.
            Oleh karena itu, kami membuka peluang kolaborasi melalui program Corporate Social Responsibility (CSR).
        </p>
        <p>
            Melalui kemitraan CSR, perusahaan dan organisasi dapat berkontribusi dalam berbagai kegiatan, seperti:
        </p>
    </div>

    <div class="row">
        <!-- Initiative 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="initiative-card">
                <i class="bi bi-people-fill"></i>
                <h4>Pemberdayaan Masyarakat</h4>
                <p>Pelatihan keterampilan, pendanaan usaha lokal, dan pengembangan produk berbasis mangrove.</p>
            </div>
        </div>

        <!-- Initiative 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="initiative-card">
                <i class="bi bi-globe-americas"></i>
                <h4>Edukasi Lingkungan</h4>
                <p>Program edukasi untuk meningkatkan kesadaran akan pentingnya pelestarian ekosistem.</p>
            </div>
        </div>

        <!-- Initiative 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="initiative-card">
                <i class="bi bi-house-fill"></i>
                <h4>Infrastruktur Desa</h4>
                <p>Dukungan fasilitas umum untuk meningkatkan kualitas hidup masyarakat sekitar.</p>
            </div>
        </div>

        <!-- Initiative 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="initiative-card">
                <i class="bi bi-tree-fill"></i>
                <h4>Konservasi Mangrove</h4>
                <p>Penanaman mangrove untuk melindungi pesisir dan meningkatkan kualitas lingkungan.</p>
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
</div>
@endsection
