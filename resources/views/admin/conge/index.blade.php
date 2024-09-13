@extends('base')

@section('title', "PAGE CONGES")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>CONGES</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Conge</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Page Conge</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bx-plus-medical'></i>
                    <span class="text">Nouveau Conge</span>
                </a>
            </div>

            <!-- *********************************************** -->

            <div class="table-date">
                <div class="orber">
                    <div class="head">
                        <h3>Liste des conges en <span class="span-jours-conge">30</span> jours de limite</h3>
                        <form class="tbl-tete-droit" action="#">
                            <div class="inputDate">
                                <input class="input-rech-date-point" type="date">
                            </div>
                        </form>
                        <i class='bx bx-search icon-tbl' ></i>
                        <i class='bx bx-filter icon-tbl'></i>
                    </div>
                    <table>
                        <thead class="thead">
                            <tr>
                                <th>Profil</th>
                                <th>Poste</th>
                                <th>Date</th>
                                <th>Jours de conge</th>
                                <th>Total conge</th>
                                <th>Reste de conge</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>SG</td>
                                <td>03-10-2024</td>
                                <td><span class="status jours">10</span></td>
                                <td><span class="status total">10</span></td>
                                <td><span class="status reste">10</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-detail icon-mod-del-pointag' style='color:#1f2dad'  ></i></a>
                                        <a href="#"><i class='bx bx-edit icon-mod-del-pointag' style='color:#0a6202'  ></i></a>
                                        <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>

@endsection
