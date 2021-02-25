@extends('templates.users.layouts.app')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Profile</li>
                    </ol>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                            <h1 class="page-title">Profile</h1>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <div class="mt-2">
                                    <img src="/images/profile.jpg" class="profile" alt="prof" />
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p>Nomor Identitas</p>

                            </div>
                            <div>
                                <h6>818787298732873</h6>
                            </div>
                            <div>
                                <p>Sapaan</p>
                            </div>
                            <div>
                                <h6>Siapa Aja</h6>
                            </div>
                            <div>
                                <p>Kewarganegaraan</p>
                            </div>
                            <div>
                                <h6>Indonesia</h6>
                            </div>
                            <div>
                                <p>Alamat Email</p>
                            </div>
                            <div>
                                <h6>Siapa@gmail.com</h6>
                            </div>
                            <div>
                                <p>Jabatan dalam Perusahaan</p>
                            </div>
                            <div>
                                <h6>Apa aja</h6>
                            </div>

                        </div>
                        <div class="col">

                            <div>
                                <p>Nama Pengguna</p>
                            </div>
                            <div>
                                <h6>Siapa aja deh</h6>
                            </div>
                            <div>
                                <p>Nama Lengkap</p>
                            </div>
                            <div>
                                <h6>Siapa aja deh pokoknya</h6>
                            </div>
                            <div>
                                <p>Nomor Handphone</p>
                            </div>
                            <div>
                                <h6>+622637267</h6>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <!-- content start -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-3">
                <div class="list-group" id="myList" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">
                        <h6>Informasi Pribadi</h6>
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#bussiness" role="tab">
                        <h6>Informasi Bisnis</h6>
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#legal" role="tab">
                        <h6>Informasi Legalitas</h6>
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#bank" role="tab">
                        <h6>Informasi Bank</h6>
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#finance" role="tab">
                        <h6>Informasi Keuangan</h6>
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#invest" role="tab">
                        <h6>Informasi Pemegang Saham</h6>
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#preference" role="tab">
                        <h6>Buka Akun RDL <span class="badge">New</span></h6>
                    </a>

                </div>

            </div>
            <div class="col">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        @include('templates.users.information_layout.profile_information')
                    </div>
                    <div class="tab-pane" id="bussiness" role="tabpanel">
                        @include('templates.users.information_layout.bussiness_information')
                    </div>
                    <div class="tab-pane" id="legal" role="tabpanel">
                        @include('templates.users.information_layout.legal_information')
                    </div>
                    <div class="tab-pane" id="bank" role="tabpanel">
                        @include('templates.users.information_layout.bank_information')
                    </div>
                    <div class="tab-pane" id="finance" role="tabpanel">
                        @include('templates.users.information_layout.finance_information')
                    </div>
                    <div class="tab-pane" id="invest" role="tabpanel">
                        @include('templates.users.information_layout.invest_information')
                    </div>
                    <div class="tab-pane" id="preference" role="tabpanel">
                        @include('templates.users.information_layout.new_account')
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.content end -->
</div>


@endsection
