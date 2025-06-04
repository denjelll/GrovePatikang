@extends('layouts.app')

@section('content')
<style>
    body, html {
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }

    .location-contact-section {
        width: 100%;
        background-image: url('{{ asset('assets/images/image1.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: 1;
        padding: 60px 0;
    }

    .location-contact-section::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: -1;
    }

    .element {
        background-color: rgba(252, 252, 228, 0.95);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .element h2 {
        color: #5F6F52;
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }

    .capsule {
        background-color: #fff;
        border-radius: 30px;
        border: 1px solid #ccc;
        padding: 15px 20px;
        margin: 10px 0;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .capsule i {
        font-size: 24px;
        color: #5F6F52;
    }

    .capsule p {
        margin: 0;
        font-size: 16px;
        font-weight: 400;
        color: #333;
    }

    .btn-whatsapp {
        background-color: #f4a261;
        color: white;
        padding: 10px 25px;
        border-radius: 6px;
        text-decoration: none;
        display: inline-block;
        margin-top: 15px;
        font-size: 16px;
        font-weight: 600;
    }

    .btn-whatsapp:hover {
        background-color: #e76f51;
        color: #fff;
    }

    iframe {
        width: 100%;
        height: 350px;
        border: none;
        border-radius: 12px;
    }

    @media (max-width: 768px) {
        .element h2 {
            font-size: 28px;
        }

        .capsule {
            flex-direction: column;
            align-items: flex-start;
        }

        .capsule i {
            margin-bottom: 5px;
        }

        iframe {
            height: 300px;
        }
    }
</style>

<section class="location-contact-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Contact Info -->
            <div class="col-lg-6 mb-4">
                <div class="element">
                    <h2>Location & Our Contact</h2>
                    <div class="capsule">
                        <i class="fa fa-home"></i>
                        <p>Kp Patikang, Desa Citereup, Panimbang, Pandeglang - Banten, Indonesia</p>
                    </div>
                    <div class="capsule">
                        <i class="fa fa-envelope"></i>
                        <p>Deden<br>+62 817-849-463<br>Mon – Fri, 8:00-22:00</p>
                    </div>
                    <a href="https://wa.me/62817849463" class="btn btn-whatsapp" target="_blank">
                        <i class="fa fa-whatsapp" style="margin-right: 5px;"></i> Chat via WhatsApp
                    </a>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="col-lg-6 mb-4">
                <div class="element">
                    <h2>Our Google Maps</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.904620435911!2d105.71353577475342!3d-6.533729093459018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e43b5efb1af5be5%3A0x572d51f010950f7c!2sLembur%20Mangrove%20Patikang!5e0!3m2!1sen!2sid!4v1748793577033!5m2!1sen!2sid"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
