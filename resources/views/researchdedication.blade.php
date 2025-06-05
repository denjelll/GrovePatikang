@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #fefae0;
  }

  .csr-banner {
    background: url('{{ URL::to('/assets/images/image6.jpg') }}') no-repeat center -270px/cover;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: -34px;
    color: white;
  }

  @media (max-width: 768px) {
    .csr-banner {
      background-position: center center;
    }
  }

  .header-background h2 {
    font-size: 2.5rem;
    font-weight: bold;
  }

  .header-background p {
    font-size: 1.2rem;
  }

  .section-title {
    font-weight: 800;
    font-size: 3rem;
    color: #415634;
    margin-bottom: 20px;
    text-align: center;
  }

  .content-box {
    background: #fff;
    padding: 18px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    text-align: justify;
  }

  .content-box p {
    font-size: 1.1rem;
    color: #333;
  }

  .research-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  }

  .cta-section {
    background: url("{{ asset('assets/images/frame-44.jpg') }}") no-repeat center center/cover;
    padding: 60px 20px;
    color: white;
    text-align: center;
    text-align: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
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
    text-decoration: underline;
  }
</style>

<!-- Banner -->
<section class="csr-banner">
  <div class="header-background">
    <h2>Research & Dedication</h2>
    <p>Penelitian & Pengabdian Masyarakat bagi Dunia Mangrove</p>
  </div>
</section>

<!-- Main Content -->
<div class="container py-5 d-flex justify-content-center">
  <div class="row w-100 align-items-center">
    <!-- Teks -->
    <div class="col-lg-7 mb-4">
      <div class="content-box">
        <h2 class="section-title">Open to All Research & Dedication Initiatives!</h2>
        <p>
          Patikang Mangrove Valley in Citeureup Village is an area rich in potential for research and community service activities. As a conservation and empowerment-based tourism village, we open opportunities for collaboration with universities and academic institutions to jointly create positive impacts through science and real action.
        </p>
        <p>
          Lembur Mangrove believes that synergy between the academic world and local communities can be a strong foundation for creating sustainable change. We are committed to providing facilities and access that support the success of research and service programs in this area.
        </p>
        <p>
          If your university or institution is interested in working together, please contact us through our official contact for more information. Together, let us improve our understanding and contribution to environmental conservation and community welfare in Lembur Mangrove.
        </p>
      </div>
    </div>

    <!-- Gambar -->
    <div class="col-lg-5 d-flex justify-content-center">
      <img src="{{ asset('assets/images/research.jpg') }}" alt="Lembur Mangrove Research" class="research-image">
    </div>
  </div>
</div>

<!-- CTA Section -->
<div class="cta-section">
  <a href="https://wa.me/62817849463" class="btn btn-contact mb-3">
    Chat Pak Deden di +62 817-849-463
  </a>
  <div class="contact-message">
    <p>Email kami di <a href="mailto:hello@lemburmangrove.com">hello@lemburmangrove.com</a></p>
  </div>
</div>
@endsection
