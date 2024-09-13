@extends('base')

@section('title', "AJOUT EMPLOYE")

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
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Ajout Employe</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('app_employe') }}" class="annuler">
                    <i class='bx bx-x icon-annuler' ></i>
                    <span class="text">ANNULER</span>
                </a>
            </div>

            <div class="table-date">
                <div class="todo">
                    <ul class="todo-list todo-color">
                        <div class="login">
                            <form action="" class="login__form">
                                <div class="form-header">
                                    <h1 class="login__title">AJOUT EMPLOYE <img class="img-form" src="{{ asset('assets/images/admin.jpg') }}" alt=""></h1>
                                </div>

                                <div class="login__content">

                                    <div class="div1">
                                        <div class="login__box">
                                            <i class="ri-id-card-line"></i>

                                            <div class="login__box-input">
                                                <input type="text" required class="login__input" placeholder=" ">
                                                <label for="" class="login__label">N° CIN</label>
                                            </div>
                                        </div>
                                        <div class="login__box">
                                            <i class="ri-user-line"></i>

                                            <div class="login__box-input">
                                                <input type="text" required class="login__input" id="login-pass" placeholder=" ">
                                                <label for="" class="login__label">Nom</label>
                                            </div>
                                        </div>
                                        <div class="login__box">
                                            <i class="ri-user-3-line"></i>

                                            <div class="login__box-input">
                                                <input type="text" required class="login__input" id="login-pass" placeholder=" ">
                                                <label for="" class="login__label">Prenom</label>
                                            </div>
                                        </div>
                                        <div class="login__box">
                                            <i class="ri-women-line"></i>

                                            <div class="login__box-input">
                                                <input type="text" required class="login__input" id="login-pass" placeholder=" ">
                                                <label for="" class="login__label">Sexe</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="div1">
                                        <div class="login__box">
                                            <i class="ri-map-pin-user-line"></i>

                                            <div class="login__box-input">
                                                <input type="text" required class="login__input" placeholder=" ">
                                                <label for="" class="login__label">Adresse</label>
                                            </div>
                                        </div>
                                        <div class="login__box">
                                            <i class="ri-phone-line"></i>

                                            <div class="login__box-input">
                                                <input type="text" required class="login__input" id="login-pass" placeholder=" ">
                                                <label for="" class="login__label">Numéro</label>
                                            </div>
                                        </div>
                                        <div class="login__box">
                                            <i class="ri-mail-line"></i>

                                            <div class="login__box-input">
                                                <input type="email" required class="login__input" id="login-pass" placeholder=" ">
                                                <label for="" class="login__label">Email</label>
                                            </div>
                                        </div>
                                        <div class="login__box">
                                            <i class="ri-briefcase-2-line"></i>

                                            <div class="login__box-input">
                                                <input type="text" required class="login__input" id="login-pass" placeholder=" ">
                                                <label for="" class="login__label">Poste</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="div1">
                                        <div class="login__box">
                                            <i class="ri-calendar-event-line"></i>

                                            <div class="login__box-input">
                                                <input type="date" required class="login__input" placeholder=" ">
                                                <label for="" class="login__label">Date de naissance</label>
                                            </div>
                                        </div>
                                        <div class="login__box">
                                            <i class="ri-calendar-todo-line"></i>

                                            <div class="login__box-input">
                                                <input type="date" required class="login__input" id="login-pass" placeholder=" ">
                                                <label for="" class="login__label">Date d'entrée</label>
                                            </div>
                                        </div>
                                        <div class="login__box login__box2">
                                            <i class="ri-image-2-line"></i>

                                            <div class="login__box-input">
                                                <input type="file" required class="login__input" id="login-pass" placeholder=" ">
                                                <label for="" class="login__label">Profil</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <button class="login__button"> <i class="ri-add-line"></i> ENREGISTRER</button>
                            </form>
                        </div>
                    </ul>
                </div>
            </div>

        </main>
    </section>

@endsection


<style>
    :root{
        --white-color: hsl(0, 0%, 100%);
        --black-color: hsl(0, 0%, 0%);
        --body-font: "Poppins", sans-serif;
        --h1-font-size: 1.75rem;
        --normal-font-size: 1rem;
        --small-font-size: .813rem;
        --font-medium: 500;
        --color-bg-place-form: #d2d3d4c5;
        --color-border-bottom-input: #0e1921ce;
        --color-txt-input: #0e1921;
        --color-bg-btn-enregistre: #6493c2;
        --admin-nom: #181718;
        --color-txt-btn-annuler-hover: hsl(0, 0%, 100%);
    }
    .dark-theme-variables{
        --color-bg-place-form: #24282c;
        --color-border-bottom-input: rgba(255, 255, 255, .5);
        --color-txt-input: #fff;
        --color-bg-btn-enregistre: #4e6479;
        --admin-nom: #bdb9b9;
        --color-txt-btn-annuler-hover: #181718;
    }

    #content main .head-title .annuler{
    height: 36px;
    padding: 0 16px;
    border-radius: 36px;
    background: var(--admin-grad);
    color: var(--color-txt-btn-annuler);
    border: 1px solid var(--admin-nom);
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    grid-gap: 10px;
    font-weight: 500;
    }

    #content main .head-title .annuler:hover{
        height: 36px;
        padding: 0 16px;
        border-radius: 36px;
        border: 2px solid var(--color-txt-btn-annuler-hover);
        color: var(--color-txt-btn-annuler-hover);
        background: var(--red);
        display: flex;
        align-items: center;
        justify-content: center;
        grid-gap: 10px;
        font-weight: 500;
    }

    .icon-annuler{
        color: var(--color-txt-btn-annuler);
        font-size: 25px;
    }

    .icon-annuler:hover{
        color: var(--color-txt-btn-annuler-hover);
    }

        .div1{
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        body,
        input,
        button {
            font-size: var(--normal-font-size);
            font-family: var(--body-font);
        }

        input,
        button{
            border: none;
            outline: none;
        }

        a{
            text-decoration: none;
        }

        img{
            max-width: 100%;
            height: auto;
        }

        .login__img{
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .login__form{
            position: relative;
            background-color: var(--color-bg-place-form);
            margin-inline: 1.5rem;
            padding: 2.5rem 1.5rem;
            border-radius: 1rem;
        }

        .login__title{
            text-align: left;
            font-size: var(--h1-font-size);
            font-weight: var(--font-medium);
            margin-bottom: 1rem;
            margin-top: -20px;
        }

        .login__content,
        .login__box{
            display: grid;
        }

        .login__content{
            row-gap: 1.75rem;
            margin-bottom: 1.5rem;
        }

        .login__box{
            grid-template-columns: max-content 1fr;
            align-items: center;
            column-gap: .75rem;
            border-bottom: 2px solid var(--color-border-bottom-input);
        }

        .login__icon,
        .login__eye{
            font-size: 1.25rem;
        }

        .login__input{
            width: 100%;
            padding-block: .5rem;
            background: none;
            color: var(--color-txt-input);
            position: relative;
            z-index: 1;
        }

        .login__box-input{
            position: relative;
        }

        .login__label{
            position: absolute;
            left: 0;
            top: 8px;
            transition: top .3s, font-size .3s;
        }

        .login__eye{
            position: absolute;
            right: 0;
            top: 18px;
            z-index: 10;
            cursor: pointer;
        }

        .login__box:nth-child(2) input{
            padding-right: 1.8rem;
        }

        .login__check,
        .login__check-group{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .login__check{
            margin-bottom: 1.5rem;
        }

        .login__check-label,
        .login__forgot,
        .login__register{
            font-size: var(--small-font-size);
        }

        .login__check-group{
            column-gap: .5rem;
        }

        .login__check-input{
            width: 16px;
            height: 16px;
        }

        .login__forgot{
            color: var(--white-color);
        }

        .login__forgot:hover{
            text-decoration: underline;
        }

        .login__button{
            width: 100%;
            padding: 0.4rem;
            color: var(--admin-nom);
            border-radius: .5rem;
            background-color: var(--color-bg-btn-enregistre);
            font-weight: var(--font-medium);
            font-size: 25px;
            cursor: pointer;
            position: relative;
            bottom: -25px;
        }

        .login__register{
            text-align: center;
        }

        .login__register a{
            color: var(--white-color);
            font-weight: var(--font-medium);
        }

        .login__register a:hover{
            text-decoration: underline;
        }

        /* =============== INPUT FOCUS MOVE UP LABEL ================== */
        .login__input:focus + .login__label{
            top: -12px;
            font-size: var(--small-font-size);
        }

        /* ================= INPUT FOCUS STICKY TOP LABEL ==================== */
        .login__input:not(:placeholder-shown).login__input:not(:focus) + .login__label{
            top: -12px;
            font-size: var(--small-font-size);
        }

        .img-form{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            box-shadow: 0 0 7px var(--admin-grad);
        }

        .form-header h1{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

</style>

