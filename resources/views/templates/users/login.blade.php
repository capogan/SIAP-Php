@extends('templates.layouts.app')
@section('content')
<div class="container-fluid" style="height: 100vh; display: block;">
    <div class="row no-gutter  h-100">
        <div class="col-md-7 bg-login">

        </div>
        <div class="col-md-5 bg-light">
            <div class="login d-flex align-items-center py-5">
                <div class="container">

                    <div class="row pt-5">

                        <div class="col-lg-10  mx-auto pt-3">
                            <div class="text-center mb-3">
                                <h3 class="display-5 title">MASUK</h3> <br>
                                <p>Silakan masuk menggunakan akun Anda</p>
                            </div>
                            <form>
                                <div class="form-group mb-3"><input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control">
                                </div>
                                <div class="form-group mb-3"> <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control"><br> </div>


                                <div class="mb-3" style="text-align: right;">
                                    <label>Lupa kata sandi ?</label>
                                </div>



                                <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Masuk</button>
                                <p class="divider-text">
                                    <span class="bg-light">Atau</span>
                                </p>
                                <div class="text-center d-flex justify-content-between mt-3">
                                    <p> <a href="register.html" class="font-italic text-muted"> <u>Belum Punya
                                                Akun?</u></a></p>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <a href="/register">

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <img src="images/user.svg" class="users" alt="prof" />
                                                        </div>

                                                        <div class="col" style="font-size: x-small;">
                                                            <span>Daftar Sebagai</span>
                                                            <span>Lender</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="/register">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <img src="images/user.svg" class="users" alt="prof" />
                                                        </div>
                                                        <div class="col" style="font-size: x-small;">
                                                            <span>Daftar Sebagai</span>
                                                            <span>Borrower</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
