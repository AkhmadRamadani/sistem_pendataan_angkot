@extends('main')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Angkot / <strong
                        class="text-primary small">{{ $angkot->no_pol }}</strong>
                </h3>
                <div class="nk-block-des text-soft">
                    <ul class="list-inline">
                        <li>Angkot ID: <span class="text-base">{{ $angkot->id_angkot }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('angkot.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                <a href="html/user-list-regular.html"
                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                        class="icon ni ni-arrow-left"></em></a>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-aside-wrap">
                <div class="card-content">
                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><em
                                    class="icon ni ni-info"></em><span>Information</span></a>
                        </li>

                    </ul><!-- .nav-tabs -->
                    <div class="card-inner">
                        <div class="nk-block">
                            <div class="nk-block-head">
                                <h5 class="title">General Information</h5>
                                <p>Basic info, like the police number, angkot number, merk and angkot's trayek name.</p>
                            </div><!-- .nk-block-head -->
                            <div class="profile-ud-list">
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">No Polisi</span>
                                        <span class="profile-ud-value">{{ $angkot->no_pol }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">No Angkot</span>
                                        <span class="profile-ud-value">{{ $angkot->no_angkot }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Merk</span>
                                        <span class="profile-ud-value">{{ $angkot->merk }}</span>
                                    </div>
                                </div>

                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Nama Trayek</span>
                                        <span class="profile-ud-value">{{ $angkot->trayek->nama_trayek }}</span>
                                    </div>
                                </div>

                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Nama Pemilik</span>
                                        <span class="profile-ud-value">{{ $angkot->sopir->nama }}</span>
                                    </div>
                                </div>
                            </div><!-- .profile-ud-list -->
                        </div><!-- .nk-block -->
                        <div class="nk-block">
                            <div class="nk-block-head nk-block-head-line">
                                <h6 class="title overline-title text-base">Informasi Tambahan</h6>
                            </div><!-- .nk-block-head -->
                            <div class="profile-ud-list">
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Tanggal Terdaftar</span>
                                        <span class="profile-ud-value">{{ $angkot->created_at }}</span>
                                    </div>
                                </div>


                            </div><!-- .profile-ud-list -->
                        </div><!-- .nk-block -->
                        <div class="nk-divider divider md"></div>
                        <div class="nk-block">
                            <div class="nk-block-head">
                                <h5 class="title">Surat-surat</h5>
                                <p>Surat-surat dari angkot, seperti BPKB, STNK.</p>
                                <div class="profile-ud-list">
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">STNK</span>
                                            <span class="profile-ud-value">
                                                @if ($angkot->foto_stnk == null)
                                                Foto STNK belum diisi
                                                @else
                                                    <div class="gallery card card-bordered">
                                                        <a class="gallery-image popup-image"
                                                            href="{{ asset('storage/' . $angkot->foto_stnk) }}">
                                                            <img class="w-100 rounded-top"
                                                                src="{{ asset('storage/' . $angkot->foto_stnk) }}"
                                                                alt="">
                                                        </a>

                                                    </div>
                                                @endif

                                            </span>
                                        </div>
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">BPKB</span>
                                            <span class="profile-ud-value">
                                                @if ($angkot->foto_bpkb == null)
                                                Foto BPKB belum diisi
                                                @else
                                                    <div class="gallery card card-bordered">
                                                        <a class="gallery-image popup-image"
                                                            href="{{ asset('storage/' . $angkot->foto_bpkb) }}">
                                                            <img class="w-100 rounded-top"
                                                                src="{{ asset('storage/' . $angkot->foto_bpkb) }}"
                                                                alt="">
                                                        </a>

                                                    </div>
                                                @endif

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                </div><!-- .card-content -->

            </div><!-- .card-aside-wrap -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
