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
                <a href="#" class="btn-download genererQR">
                    <i class='bx bx-plus-medical'></i>
                    <span class="text">Générer code QR</span>
                </a>
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
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    {{-- <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a> --}}
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
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    {{-- <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a> --}}
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
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    {{-- <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a> --}}
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
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    {{-- <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a> --}}
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
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    {{-- <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a> --}}
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
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    {{-- <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a> --}}
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- *********************** FORMULAIRE ************************ -->

            <div class="overlay hidden"></div>
            <div class="form-QR hidden">
                <div class="container-QR">
                    <form action="#">
                        <p class="p-x"><i class='bx bx-x icon-x'></i></p>
                        <p class="txt-header-input-qr">N° CIN D'EMPLOYE</p>
                        <input type="text" placeholder="CIN" id="qrText">

                        <div id="imgBox">
                            <img src="" id="qrImage">
                        </div>

                        <button type="button" onclick="genererQR()">GENERER QR</button>
                    </form>
                </div>
            </div>

        </main>
    </section>

@endsection

{{-- ===== Css pour générer form ====== --}}
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

    .form-QR.hidden {
        display: none;
    }

    .form-QR {
        top: 0%;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        height: 100vh;
        /* border: 2px solid red; */
        position: fixed;
        padding: 36px 24px;
        /* background: white; */
    }

    /* --------------------------------------------- ATO KOSA NO CSS ANLE FORM ------------------------------------------------ */

    /* *************************** Container ***************************  */
    .container-QR {
        width: 400px;
        padding: 25px 35px;
        position: fixed; /* Corrige de relative à fixed pour être en avant-plan */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: var(--color-bg-container-qr);
        border-radius: 10px;
    }

    /* ****** Ito no mampipoitra anle css rehefa nikitik btn ajout ****** */
    .container-QR.active-poput {
        transform: translate(-50%, -50%) scale(1);
    }

    /* **************** Css anle form amn ankampobeny ******************* */
        .txt-header-input-qr{
        color: var(--txt-header-input-qr);
    }

    /* ---- Btn x pour qr ----  */
    .icon-x{
        position: absolute;
        top: 8px;
        right: 7px;
        border: 1px solid rgb(212, 84, 84);
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
    }

    /* ----- Css dans container form qr -------- */

    *{
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }


    .container-QR p{
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 8px;
    }

    .container-QR input{
        width: 100%;
        height: 50px;
        border: 1px solid #494eea;
        outline: 0;
        padding: 10px;
        margin: 10px 0 20px;
        border-radius: 5px;
    }

    .container-QR button{
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

    #imgBox{
        width: 200px;
        border-radius: 5px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 1s;
    }

    #imgBox img{
        width: 100%;
        height: 200px;
    }

    #imgBox.show-img{
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

{{-- =========== Js cript ============= --}}

<script>
    // --------- Pour btn générer QR ---------
    document.addEventListener('DOMContentLoaded', function () {
        // Sélection des éléments nécessaires
        const overlay = document.querySelector('.overlay');
        const formQR = document.querySelector('.form-QR');
        const btnGenererQR = document.querySelector('.btn-download.genererQR');
        const btnClose = document.querySelector('.icon-x');

        if (btnGenererQR && overlay && formQR && btnClose) {
            // Fonction pour afficher le formulaire QR
            btnGenererQR.addEventListener('click', function (event) {
                event.preventDefault(); // Empêche le comportement par défaut du lien
                overlay.classList.remove('hidden');
                formQR.classList.remove('hidden');
                document.querySelector('.container-QR').classList.add('active-poput');
            });

            // Fonction pour fermer le formulaire QR
            btnClose.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.container-QR').classList.remove('active-poput');
            });
        } else {
            console.error('Un ou plusieurs éléments sont introuvables.');
        }
    });

    // ------ Pour Icon plus générer QR ------
    document.addEventListener('DOMContentLoaded', function () {
        // Sélection des éléments nécessaires
        const overlay = document.querySelector('.overlay');
        const formQR = document.querySelector('.form-QR');
        const btnGenererQrIconPlus = document.querySelector('.icon-plus-genererQR');
        const btnClose = document.querySelector('.icon-x');

        if (btnGenererQrIconPlus && overlay && formQR && btnClose) {
            // Fonction pour afficher le formulaire QR
            btnGenererQrIconPlus.addEventListener('click', function (event) {
                event.preventDefault(); // Empêche le comportement par défaut du lien
                overlay.classList.remove('hidden');
                formQR.classList.remove('hidden');
                document.querySelector('.container-QR').classList.add('active-poput');
            });

            // Fonction pour fermer le formulaire QR
            btnClose.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.container-QR').classList.remove('active-poput');
            });
        } else {
            console.error('Un ou plusieurs éléments sont introuvables.');
        }
    });
</script>



