@extends('main_master')
@section('title', 'Shop - Levre')
@section('main')
<section class="contact__hero">
    <div class="cat_hero__text">
        <h1 class="large-heading shop__mainHeading">Contact</h1>
        <p class="large-paragraph shop__mainParagraph">We would love hearing from you and moreover meeting you in person. Below you can find all contact details. See you soon!</p>
    </div>
</section>
<section class="contact__wrapper">
    <div class="contact__col1">
        <img src="{{ asset('frontend/img/Contact.jpg') }}">
    </div>
    <div class="contact__col2">
        <h1 class="large-heading">Get in touch</h1>
        <p class="medium-paragraph">Send us a note anytime — we welcome feedback and requests.</p>
        <h4>Give us a call</h4>
        <span>Mon – Fri, 9am – 7pm EST:<br />+44 583 837390</span>
        <h4>Write us an email</h4>
        <span>hello@example.com</span>
    </div>
</section>
@endsection