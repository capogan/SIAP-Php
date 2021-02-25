<div class="collapse searchbar" id="searchbar">
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                        </span> </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
    </div>
</div>
<div class="top-bar">
    <!-- top-bar -->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6 col-6 d-none d-xl-block d-lg-block">
                <p class="mail-text">Selamat Datang di Website SIAP</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 d-none d-xl-block d-lg-block">
                <p class="mail-text text-center">Call us at 1-800-123-4567</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 d-none d-xl-block d-lg-block">
                <p class="mail-text text-center">Mon to fri 10:00am - 06:00pm</p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 d-none d-xl-block d-lg-block">
                <p class="mail-text text-center">EMI CALCULATOR</p>
            </div>
        </div>
    </div>
</div>
<!-- /.top-bar -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <!-- logo -->
                <div class="logo">
                    <a href="/"><img src="/images/default_logo.png" alt="Borrow - Loan Company Website Template" style="width: 160px; height: 60px;"></a>
                </div>
            </div>
            <!-- logo -->
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div id="navigation">
                    <!-- navigation start-->
                    <ul>
                        <li><a href="/market-place" class="animsition-link">Pasar</a></li>
                        <li><a href="about.html" class="animsition-link">Pendanaan</a></li>
                        <li><a href="about.html" class="animsition-link">Informasi Pinjaman</a></li>
                        <li><a href="about.html" class="animsition-link">Perusahaan</a>
                            <ul>
                                <li><a href="about.html" title="About us" class="animsition-link">Tentang Kami</a></li>
                                <li><a href="team.html" title="Team" class="animsition-link">Team</a></li>
                                <li><a href="team.html" title="Team" class="animsition-link">Acara</a></li>
                            </ul>
                        </li>
                        <li><a href="compare-loan.html" class="animsition-link">Pusat Bantuan</a></li>
                    </ul>
                </div>
                <!-- /.navigation start-->
            </div>
            <div class="col-xl-l col-lg-1 col-md-1 col-sm-1 col-12 d-none d-xl-block d-lg-block">
                <!-- search start-->
                <div class="search-nav"> <a class="search-btn" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </div>
            </div>
            <!-- /.search start-->
        </div>
    </div>
</div>

@if($data['sliders'] == 'yes')
    @include('templates.users.layouts.sliders')
@endif
