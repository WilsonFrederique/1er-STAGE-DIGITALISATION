@extends('base')

@section('title', "ACCUEIL")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>POINTAGE ET CONGE DES PERSONNES</h1>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download' ></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <!-- *********************************************** -->

            <div class="img">
                <img src="{{ asset('assets/images/home1.png') }}" alt="">
            </div>
        </main>
    </section>

@endsection
