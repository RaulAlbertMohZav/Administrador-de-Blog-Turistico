@extends('layouts.admin.app')

@section('title', 'Home | Admin')

@section('content')
    <div class="page-wrapper">
        <div class="page-header">
            <div class="page-block">
                <section class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5>Home</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Analytics Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="container">
                    <div class="d-flex justify-content-center">
                        <p class="font-weight-bold h5">Welcome to the administrative part of the VivaAndaz website</p>
                    </div>
                    <div class="">
                        <p class="font-weight-bold h5 my-2">
                            It is important to bear in mind that the modifications that are made will completely influence
                            the website, you can manage users and everything related to each section of the Viva Andaz Blog.
                        </p>
                        <p class="font-weight-bold h5 my-2">

                            Please follow the instructions to the letter and respect each of the validations for each
                            modification.
                        </p>
                        <p class="font-weight-bold h5 my-2">

                            Keep in mind that in the system we have roles and permissions:
                            We currently have 2 roles:
                        </p>
                        <p class="font-weight-bold h5 my-2">
                            - Common User
                        </p>
                        <p class="font-weight-bold h5 my-2">
                            - Administrator
                        </p>
                        <p class="font-weight-bold h5 my-2">
                            If you do not have access to any view, you will be redirected to another view with a 403 status
                            code, which means forbidden, therefore you will have to go back to another web page.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
