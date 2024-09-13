@extends('base')

@section('title', "PAGE POINTAGES")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>EMPLOYEES</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Employees</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Page Employees</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-imprimer-ajout">
                    <a href="#" class="imprimer-tout">
                        <i class='bx bx-printer'></i>
                    </a>
                    <a href="{{ route('app_form_employe') }}" class="btn-download">
                        <i class='bx bx-plus-medical'></i>
                        <span class="text">Nouveau Employe</span>
                    </a>
                </div>
            </div>

            <!-- ************************************************ -->

            <ul class="box-info">
                <li>
                    <i class='bx bxs-notification'></i>
                    <span class="text">
                        <h3 class="txt-box-top">2830</h3>
                        <p class="txt-box-bottom">Total des Employés</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-notification'></i>
                    <span class="text">
                        <h3 class="txt-box-top">1943</h3>
                        <p class="txt-box-bottom">Total Present(e)s</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-notification-off' ></i>
                    <span class="text">
                        <h3 class="txt-box-top">543</h3>
                        <p class="txt-box-bottom">Total Absent(e)s</p>
                    </span>
                </li>
            </ul>

            <!-- ********************* Table **************************** -->

            <div class="table-date">
                <div class="orber">
                    <div class="head">
                        <h3>Liste des employees</h3>
                        <select class="form-control-employe">
                            <option class="option">Tout les postes</option>
                            <option class="option">SG</option>
                            <option class="option">REC</option>
                        </select>
                        <i class='bx bx-search icon-tbl' ></i>
                        <i class='bx bx-filter icon-tbl'></i>
                    </div>
                    <table>
                        <thead class="thead">
                            <tr>
                                <th>Profil</th>
                                <th>Date d'entrée</th>
                                <th>Poste</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>03-10-2024</td>
                                <td><span class="status poste">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>03-10-2024</td>
                                <td><span class="status poste">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>03-10-2024</td>
                                <td><span class="status poste">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>03-10-2024</td>
                                <td><span class="status poste">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>03-10-2024</td>
                                <td><span class="status poste">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Action</h3>
                        <a href="{{ route('app_form_employe') }}"><i class='bx bx-plus icon-tbl' ></i></a>
                        <a href="#"><i class='bx bx-filter icon-tbl'></i></a>
                    </div>
                    <ul class="todo-list todo-color">
                        <li class="not-completed">
                            <p>Todo List</p>
                            <div class="icon-container">
                                <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                <a href="#"><i class='bx bx-edit btn-modif' style='color:#0a6202'  ></i></a>
                                <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                            </div>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <div class="icon-container">
                                <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                <a href="#"><i class='bx bx-edit btn-modif' style='color:#0a6202'  ></i></a>
                                <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                            </div>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <div class="icon-container">
                                <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                <a href="#"><i class='bx bx-edit btn-modif' style='color:#0a6202'  ></i></a>
                                <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                            </div>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <div class="icon-container">
                                <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                <a href="#"><i class='bx bx-edit btn-modif' style='color:#0a6202'  ></i></a>
                                <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                            </div>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <div class="icon-container">
                                <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                <a href="#"><i class='bx bx-edit btn-modif' style='color:#0a6202'  ></i></a>
                                <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                            </div>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <div class="icon-container">
                                <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                <a href="#"><i class='bx bx-edit btn-modif' style='color:#0a6202'  ></i></a>
                                <a href="#"><i class='bx bx-trash' style='color:#d01616'  ></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </main>
    </section>

@endsection
