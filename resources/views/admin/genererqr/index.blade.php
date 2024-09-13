@extends('base')

@section('title', "CODE QR")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>

            <!-- ********************** Header Main ************************ -->

            <div class="head-title">
                <div class="left">
                    <h1>CODE QR</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Code QR</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="">Page pour générer code QR</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-imprimer-ajout">
                    <a href="#" class="imprimer-tout">
                        <i class='bx bx-printer'></i>
                    </a>
                    <a href="" class="btn-download genererQR">
                        <i class='bx bx-plus-medical'></i>
                        <span class="text">Générer code QR</span>
                    </a>
                </div>
            </div>

            <!-- ********************* TBL AFFICHAGE *********************** -->

            <div class="table-date">
                <div class="todo">
                    <div class="head">
                        <h3>EMPLOYEES AVEC QR</h3>
                        <a href="#" class="icon-plus-genererQR">
                            <i class='bx bx-plus icon-tbl' ></i>
                        </a>
                        <a href="#">
                            <i class='bx bx-filter icon-tbl'></i>
                        </a>
                    </div>
                    <ul class="todo-list todo-color">
                        <li class="not-completed">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <img src="{{ asset('assets/images/imageQR.png') }}" alt="" class="imgTodoQR">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="{{ route('app_badje') }}"><i class='bx bxs-credit-card' style='color:#4954de'  ></i></a>
                                    <i class='bx bx-printer' style='color:#228e8a'  ></i>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="not-completed">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <img src="{{ asset('assets/images/imageQR.png') }}" alt="" class="imgTodoQR">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="{{ route('app_badje') }}"><i class='bx bxs-credit-card' style='color:#4954de'  ></i></a>
                                    <i class='bx bx-printer' style='color:#228e8a'  ></i>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="not-completed">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <img src="{{ asset('assets/images/imageQR.png') }}" alt="" class="imgTodoQR">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="{{ route('app_badje') }}"><i class='bx bxs-credit-card' style='color:#4954de'  ></i></a>
                                    <i class='bx bx-printer' style='color:#228e8a'  ></i>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="not-completed">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <img src="{{ asset('assets/images/imageQR.png') }}" alt="" class="imgTodoQR">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="{{ route('app_badje') }}"><i class='bx bxs-credit-card' style='color:#4954de'  ></i></a>
                                    <i class='bx bx-printer' style='color:#228e8a'  ></i>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="not-completed">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <img src="{{ asset('assets/images/imageQR.png') }}" alt="" class="imgTodoQR">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="{{ route('app_badje') }}"><i class='bx bxs-credit-card' style='color:#4954de'  ></i></a>
                                    <i class='bx bx-printer' style='color:#228e8a'  ></i>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="not-completed">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <img src="{{ asset('assets/images/imageQR.png') }}" alt="" class="imgTodoQR">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="{{ route('app_badje') }}"><i class='bx bxs-credit-card' style='color:#4954de'  ></i></a>
                                    <i class='bx bx-printer' style='color:#228e8a'  ></i>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="not-completed">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <img src="{{ asset('assets/images/imageQR.png') }}" alt="" class="imgTodoQR">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="{{ route('app_badje') }}"><i class='bx bxs-credit-card' style='color:#4954de'  ></i></a>
                                    <i class='bx bx-printer' style='color:#228e8a'  ></i>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- *********************** FORMULAIRE ************************ -->

            <!-- Overlay et Formulaire QR -->
            <div class="overlay hidden"></div>
            <div class="container-conge hidden">
                <div class="cntr-QR">
                    <form action="#">
                        <p class="p-x"><i class='bx bx-x icon-x'></i></p>
                        <p>Entrer votre Nom</p>
                        <input type="text" placeholder="Nom" id="qrTextInput">
            
                        <div id="imgBoxAffiche">
                            <img src="" id="qrImageSurLien">
                        </div>
            
                        <button onclick="gnrQR()">Generer QR</button>
                    </form> 
                </div>
            </div>

        </main>
    </section>

@endsection


{{-- ------------------- Css pour visible ei invisible du fr------------------------- --}}
<style>
    /* ------------------------ ETO MIGERER ANLE IZ HOE REHEFA MIALA LE FRM DE AZO KITIHINA TSARA LE PROGE ---------------------- */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Couleur de fond avec opacité */
        z-index: 999; /* Met l'overlay derrière le formulaire */
        display: none; /* Caché par défaut */
    }

    .overlay.hidden {
        display: none;
    }

    .container-conge.hidden {
        display: none;
    }

    .container-conge {
        top: 0%;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        height: 100vh;
        position: fixed;
        padding: 36px 24px;
        /* background: rgb(192, 39, 39); */
    }

</style>


{{-- ----------------------------- Css pour la formulaire --------------------------- --}}
<style>
    *{
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }

    body{
        background: #262a2f;
    }

    .cntr-QR{
        width: 400px;
        padding: 25px 35px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: var(--color-bg-container-qr);
        border-radius: 10px;
    }

    .icon-x{
        position: absolute;
        top: 8px;
        right: 7px;
        border: 1px solid var(--color-border-btn-x);
        height: 23px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px;
        color: rgb(223, 75, 75);
    }
    .icon-x:hover{
        background: rgb(185, 42, 42);
        color: #fff;
        border-radius: 50%;
        height: 23px;
        border: 1px solid var(--color-border-btn-x-hover);
    }

    .cntr-QR p{
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 8px;
        color: var(--txt-header-input-qr);
    }

    .cntr-QR input{
        width: 100%;
        height: 50px;
        border: 1px solid #494eea;
        outline: 0;
        padding: 10px;
        margin: 10px 0 20px;
        border-radius: 5px;
    }

    .cntr-QR button{
        width: 100%;
        height: 50px;
        background: #494eea;
        color: #fff;
        border: 0;
        outline: 0;
        border-radius: 5px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        margin: 20px 0;
        font-weight: 500;
    }

    #imgBoxAffiche{
        width: 200px;
        border-radius: 5px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 1s;
    }

    #imgBoxAffiche img{
        width: 100%;
        height: 200px;
    }

    #imgBoxAffiche.show-img{
        max-height: 300px;
        margin: 10px auto;
        border: 1px solid #d1d1d1;
    }

    .error{
        animation: shake 0.1s linear 10;
    }

    @keyframes shake{
        0%{
            transform: translateX(0);
        }
        25%{
            transform: translateX(-2px);
        }
        50%{
            transform: translateX(0);
        }
        75%{
            transform: translateX(2px);
        }
        100%{
            transform: translateX(0);
        }
    }
</style>

{{-- ---------------------- Scrip pour visible ou invisible -------------------------- --}}
<script>

    // ================= Pour la btn Ajout =================
    document.addEventListener('DOMContentLoaded', function () {

        const overlay = document.querySelector('.overlay');
        const formQR = document.querySelector('.container-conge');
        const btnGenererQR = document.querySelector('.btn-download.genererQR');
        const btnClose = document.querySelector('.icon-x');

        if (btnGenererQR && overlay && formQR && btnClose) {
            btnGenererQR.addEventListener('click', function (event) {
                event.preventDefault();
                overlay.classList.remove('hidden');
                formQR.classList.remove('hidden');
                document.querySelector('.cntr-QR').classList.add('active-poput');
            });

            overlay.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.cntr-QR').classList.remove('active-poput');
            });

            // Fonction pour fermer le formulaire QR
            btnClose.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.container-conge').classList.remove('active-poput');
            });

        } else {
            console.error('Un ou plusieurs éléments sont introuvables.');
        }
    });

    // ================= Pour la btn Modif =================
    // document.addEventListener('DOMContentLoaded', function () {

    //     const overlay = document.querySelector('.overlay');
    //     const formQR = document.querySelector('.container-conge');
    //     const btnGenererQR = document.querySelector('.icon-modf-conge');
    //     const btnClose = document.querySelector('.icon-x');

    //     if (btnGenererQR && overlay && formQR && btnClose) {
    //         btnGenererQR.addEventListener('click', function (event) {
    //             event.preventDefault();
    //             overlay.classList.remove('hidden');
    //             formQR.classList.remove('hidden');
    //             document.querySelector('.cntr-QR').classList.add('active-poput');
    //         });

    //         overlay.addEventListener('click', function () {
    //             overlay.classList.add('hidden');
    //             formQR.classList.add('hidden');
    //             document.querySelector('.cntr-QR').classList.remove('active-poput');
    //         });

    //         // Fonction pour fermer le formulaire QR
    //         btnClose.addEventListener('click', function () {
    //             overlay.classList.add('hidden');
    //             formQR.classList.add('hidden');
    //             document.querySelector('.container-conge').classList.remove('active-poput');
    //         });

    //     } else {
    //         console.error('Un ou plusieurs éléments sont introuvables.');
    //     }
    // });

</script>