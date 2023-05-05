@extends('layouts.app') @section('header')
<div class="container-fluid">
    <h1 class="text-black-50" style="text-align: center">PROFIL SEKOLAH</h1>
</div>
@endsection @section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img
                                class="profile-user-img img-fluid img-circle"
                                src="../../dist/img/user4-128x128.jpg"
                                alt="User profile picture"
                                style="
                                    width: 100px;
                                    height: 100px;
                                    display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                "
                            />
                        </div>
                        <h3 class="profile-username text-center">
                            TK TUNAS KARYA
                        </h3>
                        <p class="text-muted text-center">Kecamatan Kumai</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NPSN</b>
                                <a class="float-right">30204774</a>
                            </li>
                            <li class="list-group-item">
                                <b>TP</b>
                                <a class="float-right">2014-01-01</a>
                            </li>
                            <li class="list-group-item">
                                <b>IO</b>
                                <a class="float-right">10 TAHUN 2016</a>
                            </li>
                        </ul>
                        <a href="/" class="btn btn-primary btn-block" target="_blank" rel="noopener noreferrer"
                            ><b>Lihat</b></a
                        >
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Profil</h3>
                    </div>

                    <div class="card-body">
                        <strong>
                            <i class="fas fa-book mr-1"></i>Identitas
                        </strong>
                        <p class="text-muted">
                            Status : Swasta <br />
                            Bentuk Pendidikan : TK <br />
                            Status Kepemilikan : Yayasan
                        </p>
                        <hr />

                        <strong>
                            <i class="fas fa-map-marker-alt mr-1"></i>Alamat
                        </strong>
                        <p class="text-muted">
                            Jalan Madrasah <br />
                            No. 402 <br />
                            RT 7 <br />
                            RW 2 <br />
                            Kelurahan Candi <br />
                            Kecamatan Kumai
                        </p>
                        <hr />

                        <strong>
                            <i class="fas fa-envelope mr-1"></i>Email
                        </strong>
                        <p class="text-muted">tktunaskaryakumai@gmail.com</p>
                        <hr />

                        <strong>
                            <i class="fas fa-phone fa-flip-horizontal mr-1"></i
                            >Kontak
                        </strong>
                        <p class="text-muted">
                            082250819383 <br />
                            08979712322
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">

                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="#visi-misi"
                                    data-toggle="tab"
                                    >Visi & Misi
                                </a>
                            </li>

                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="#peraturan-sekolah"
                                    data-toggle="tab"
                                    >Peraturan Sekolah
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    href="#galeri"
                                    data-toggle="tab"
                                    >Galeri
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane" id="visi-misi">
                                <div class="post">
                                    <p>
                                        Lorem ipsum represents a long-held
                                        tradition for designers, typographers
                                        and the like. Some people hate it and
                                        argue for its demise, but others ignore
                                        the hate as they create awesome tools to
                                        help create filler text for everyone
                                        from bacon lovers to Charlie Sheen fans.
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane" id="peraturan-sekolah">
                                <h3 class="peraturan-sekolah-header">
                                    <a href="#">Support Team</a>
                                    sent you an email
                                </h3>
                                <div class="peraturan-sekolah-body">
                                    Etsy doostang zoodles disqus groupon greplin
                                    oooj voxy zoodles, weebly ning heekya
                                    handango imeem plugg dopplr jibjab, movity
                                    jajah plickers sifteo edmodo ifttt zimbra.
                                    Babblely odeo kaboodle quora plaxo ideeli
                                    hulu weebly balihoo...
                                </div>
                                <div class="peraturan-sekolah-footer">
                                    <a href="#" class="btn btn-primary btn-sm"
                                        >Read more</a
                                    >
                                    <a href="#" class="btn btn-danger btn-sm"
                                        >Delete</a
                                    >
                                </div>
                            </div>

                            <div class="active tab-pane" id="galeri">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label
                                            for="inputName"
                                            class="col-sm-2 col-form-label"
                                            >Name</label
                                        >
                                        <div class="col-sm-10">
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="inputName"
                                                placeholder="Name"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            for="inputEmail"
                                            class="col-sm-2 col-form-label"
                                            >Email</label
                                        >
                                        <div class="col-sm-10">
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="inputEmail"
                                                placeholder="Email"
                                            />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection