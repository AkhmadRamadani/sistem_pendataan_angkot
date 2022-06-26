@extends('main')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Perjalanan / <strong class="text-primary small">{{ $perjalanan->id_perjalanan }}</strong>
                </h3>
                <div class="nk-block-des text-soft">
                    <ul class="list-inline">
                        <li>Perjalanan ID: <span class="text-base">{{ $perjalanan->id_perjalanan }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('perjalanan.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
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
                                <h5 class="title">Brief Information</h5>
                                <p>Brief info, like driver name and address.</p>
                            </div><!-- .nk-block-head -->
                            <div class="profile-ud-list">
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">ID Perjalanan</span>
                                        <span class="profile-ud-value">{{ $perjalanan->id_perjalanan }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Nama - ID Sopir</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->nama ." - ". $perjalanan->sopir->id_sopir  }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">No Angkot - Trayek</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->no_angkot ." - ". $perjalanan->sopir->angkot->trayek->nama_trayek }}</span>
                                    </div>
                                </div>
                                
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">No Polisi</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->no_pol }}</span>
                                    </div>
                                </div>
                                
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Jumlah Penumpang</span>
                                        <span class="profile-ud-value">{{ $perjalanan->jumlah_penumpang }}</span>
                                    </div>
                                </div>
                                
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Tanggal dan Waktu Berangkat</span>
                                        <span class="profile-ud-value">{{ $perjalanan->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-inner">
                        <div class="nk-block">
                            <div class="nk-block-head">
                                <h5 class="title">Driver Information</h5>
                                <p>Basic info, like driver name and address.</p>
                            </div><!-- .nk-block-head -->
                            <div class="profile-ud-list">
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Nama</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->nama }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Jenis Kelamin</span>
                                        <span class="profile-ud-value">
                                            @if ($perjalanan->sopir->jenis_kelamin == 'p')
                                                Perempuan
                                            @else
                                                Laki-laki
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Alamat</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->alamat }}</span>
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
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->created_at }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Status</span>
                                        @switch($perjalanan->sopir->status)
                                            @case('active')
                                                <span class="profile-ud-value text-success">Active</span>
                                            @break

                                            @case('inactive')
                                                <span class="profile-ud-value text-danger">Inactive</span>
                                            @break

                                            @case('rest')
                                                <span class="profile-ud-value text-warning">Rest</span>
                                            @break

                                            @default
                                        @endswitch
                                    </div>
                                </div>

                            </div><!-- .profile-ud-list -->
                        </div><!-- .nk-block -->
                        <div class="nk-divider divider md"></div>
                        <div class="nk-block">
                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                <h5 class="title">Informasi Angkot</h5>
                                {{-- <a href="#" class="link link-sm">+ Add Note</a> --}}
                            </div><!-- .nk-block-head -->
                            <div class="profile-ud-list">
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Tanggal Terdaftar</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->created_at }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">No Angkot</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->no_angkot }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">No Polisi</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->no_pol }}</span>
                                    </div>
                                </div>

                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Merk</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->merk }}</span>
                                    </div>
                                </div>

                            </div><!-- .profile-ud-list -->
                        </div><!-- .nk-block -->
                        <div class="nk-divider divider md"></div>
                        <div class="nk-block">
                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                <h5 class="title">Informasi Trayek</h5>
                                {{-- <a href="#" class="link link-sm">+ Add Note</a> --}}
                            </div><!-- .nk-block-head -->
                            <div class="profile-ud-list">
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Tanggal Terdaftar</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->trayek->created_at }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Nama Trayek</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->trayek->nama_trayek }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Jalur Trayek</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->trayek->jalur_trayek }}</span>
                                    </div>
                                </div>

                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Warna Angkot</span>
                                        <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->trayek->warna_angkot }}</span>
                                    </div>
                                </div>

                            </div><!-- .profile-ud-list -->
                        </div><!-- .nk-block -->
                    </div><!-- .card-inner -->
                </div><!-- .card-content -->
              
            </div><!-- .card-aside-wrap -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
