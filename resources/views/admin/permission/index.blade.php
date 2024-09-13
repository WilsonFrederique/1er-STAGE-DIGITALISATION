@extends('base')

@section('title', "PAGE PERMISSION")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>PERMISSION</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Permission</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="{{ route('app_permission') }}">Page Permission</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-imprimer-ajout">
                    <a href="#" class="imprimer-tout">
                        <i class='bx bx-printer'></i>
                    </a>
                    <a href="#" class="btn-download">
                        <i class='bx bx-plus-medical'></i>
                        <span class="text">Nouveau Permission</span>
                    </a>
                </div>
            </div>

            <!-- ************************************************ -->

            <div class="table-date">
                <div class="todo">
                    <div class="head">
                        <h3>EMPLOYEES AVEC QR</h3>
                        <i class='bx bx-plus icon-tbl' ></i>
                        <i class='bx bx-filter icon-tbl'></i>
                    </div>
                    <ul class="todo-list todo-color">
                        <li class="permission">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                    <p class="date-permission">03-10-2024</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="permission">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                    <p class="date-permission">03-10-2024</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="permission">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                    <p class="date-permission">03-10-2024</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="permission">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                    <p class="date-permission">03-10-2024</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="permission">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                    <p class="date-permission">03-10-2024</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="permission">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                    <p class="date-permission">03-10-2024</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="permission">
                            <div class="todo-item">
                                <img class="imgTodo" src="{{ asset('assets/images/home1.png') }}" alt="">
                                <div class="txt-left">
                                    <p id="p">8181 5656 8989 2525</p>
                                    <p>RAKOTOMANAMBINA Wilson Frederique</p>
                                    <p class="date-permission">03-10-2024</p>
                                </div>
                            </div>
                            <div class="QR-icon">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                    <a href="{{ route('app_badje') }}"><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    <a href="#"><i class='bx bx-edit' style='color:#0a6202'  ></i></a>
                                    <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </main>
    </section>

@endsection
