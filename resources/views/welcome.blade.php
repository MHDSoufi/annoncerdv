@extends('layouts.app')

@section('styles')

    <style>
        .h1-marque {
            font-size: 70px;
            color: gold;
            padding-bottom: 30px;
        }

        .h2-marque {
            font-size: 28px;
            color: gold;
        }

        .h3-marque {
            font-size: 20px;
            color: gold;
        }

        .btn-home.focus, .btn-home:focus, .btn-home:hover {
            color: gold;
            background-color: #f7f5f5;
            border-color: gold;
        }

        .btn-home {
            color: #212529;
            background-color: #ffffff;
            border-color: #ababab !important;
            border: 1px solid;
            font-size: 23px;
            color: gold;
            border-radius: 25px;
            padding: .375rem 1.75rem
        }

        .nav-link-font {
            font-size: 1rem;
        }

        .h2-style {
            font-size: 30px;
            color: gold;
        }

        @media only screen and (max-width: 767px) {
            nav.md-only {
                display: none;
            !important;
            }
        }


    </style>

@endsection


@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <h1 class="h1-marque">MARQUE</h1>
            </div></br></br>
            <div class="row justify-content-center pt-5">
                <h2 class="h2-marque">LOGO</h2>
            </div>
            </br></br></br></br>
            <div class="row justify-content-center pt-5">
                <button class="btn btn-home">ESSAI GRATUIT 2 MOIS SANS ENGAGEMENT</button>
            </div>
            <div class="row justify-content-center pt-2 pb-5">
                <h3 class="h3-marque text-center">SERVICE SANS ENGAGEMENT</h3>
            </div>
        </div></br></br>
        
        <div class="container ">
            <div class="row pt-3 d-block ">
                <div class="col-md-6 py-5">
                    <h2 class="h2-style">À propos</h2>
                    <div class="card">
                        <div class="card-body">
                            text et image
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6 py-5">
                    <h2 class="h2-style">Services</h2>
                    <div class="card">
                        <div class="card-body">
                            text et image
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="h2-style text-center pt-5 pb-3">Contact</h2>
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group">
                            <input type="text" placeholder="Nom" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="E-mail" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Message" name="message" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 offset-md-4 pb-5">
                    <button class="btn btn-gold form-control" type="submit" name="submit">Envoyer votre message</button>
                </div>
            </div>
        </div>
    </div>

@endsection
