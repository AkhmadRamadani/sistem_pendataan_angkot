@extends('main')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Sopir / <strong class="text-primary small">{{ $sopir->nama }}</strong>
                </h3>
                <div class="nk-block-des text-soft">
                    <ul class="list-inline">
                        <li>Sopir ID: <span class="text-base">{{ $sopir->id_sopir }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('sopir.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
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
                                    class="icon ni ni-user-circle"></em><span>Personal</span></a>
                        </li>

                    </ul><!-- .nav-tabs -->
                    <div class="card-inner">
                        <div class="nk-block">
                            <div class="nk-block-head">
                                <h5 class="title">Personal Information</h5>
                                <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                            </div><!-- .nk-block-head -->
                            <div class="profile-ud-list">
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Nama</span>
                                        <span class="profile-ud-value">{{ $sopir->nama }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Jenis Kelamin</span>
                                        <span class="profile-ud-value">
                                            @if ($sopir->jenis_kelamin == 'p')
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
                                        <span class="profile-ud-value">{{ $sopir->alamat }}</span>
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
                                        <span class="profile-ud-value">{{ $sopir->created_at }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Status</span>
                                        @switch($sopir->status)
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
                                        <span class="profile-ud-value">{{ $sopir->angkot->created_at }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">No Angkot</span>
                                        <span class="profile-ud-value">{{ $sopir->angkot->no_angkot }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">No Polisi</span>
                                        <span class="profile-ud-value">{{ $sopir->angkot->no_pol }}</span>
                                    </div>
                                </div>

                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Merk</span>
                                        <span class="profile-ud-value">{{ $sopir->angkot->merk }}</span>
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
                                        <span class="profile-ud-value">{{ $sopir->angkot->trayek->created_at }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Nama Trayek</span>
                                        <span class="profile-ud-value">{{ $sopir->angkot->trayek->nama_trayek }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Jalur Trayek</span>
                                        <span class="profile-ud-value">{{ $sopir->angkot->trayek->jalur_trayek }}</span>
                                    </div>
                                </div>

                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Warna Angkot</span>
                                        <span class="profile-ud-value">{{ $sopir->angkot->trayek->warna_angkot }}</span>
                                    </div>
                                </div>

                            </div><!-- .profile-ud-list -->
                        </div><!-- .nk-block -->
                    </div><!-- .card-inner -->
                </div><!-- .card-content -->
                <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl"
                    data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                    <div class="card-inner-group" data-simplebar>
                        <div class="card-inner">
                            <div class="user-card user-card-s2">
                                <div class="user-avatar lg bg-primary">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <div class="badge badge-outline-light badge-pill ucap">Investor</div>
                                    <h5>Abu Bin Ishtiyak</h5>
                                    <span class="sub-text">info@softnio.com</span>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner card-inner-sm">
                            <ul class="btn-toolbar justify-center gx-1">
                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                            class="icon ni ni-shield-off"></em></a></li>
                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                            class="icon ni ni-mail"></em></a>
                                </li>
                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                            class="icon ni ni-download-cloud"></em></a></li>
                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                            class="icon ni ni-bookmark"></em></a></li>
                                <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em
                                            class="icon ni ni-na"></em></a></li>
                            </ul>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="overline-title-alt mb-2">In Account</div>
                            <div class="profile-balance">
                                <div class="profile-balance-group gx-4">
                                    <div class="profile-balance-sub">
                                        <div class="profile-balance-amount">
                                            <div class="number">2,500.00 <small class="currency currency-usd">USD</small>
                                            </div>
                                        </div>
                                        <div class="profile-balance-subtitle">Invested Amount</div>
                                    </div>
                                    <div class="profile-balance-sub">
                                        <span class="profile-balance-plus text-soft"><em
                                                class="icon ni ni-plus"></em></span>
                                        <div class="profile-balance-amount">
                                            <div class="number">1,643.76</div>
                                        </div>
                                        <div class="profile-balance-subtitle">Profit Earned</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="profile-stats">
                                        <span class="amount">23</span>
                                        <span class="sub-text">Total Order</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="profile-stats">
                                        <span class="amount">20</span>
                                        <span class="sub-text">Complete</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="profile-stats">
                                        <span class="amount">3</span>
                                        <span class="sub-text">Progress</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <h6 class="overline-title-alt mb-2">Additional</h6>
                            <div class="row g-3">
                                <div class="col-6">
                                    <span class="sub-text">User ID:</span>
                                    <span>UD003054</span>
                                </div>
                                <div class="col-6">
                                    <span class="sub-text">Last Login:</span>
                                    <span>15 Feb, 2019 01:02 PM</span>
                                </div>
                                <div class="col-6">
                                    <span class="sub-text">KYC Status:</span>
                                    <span class="lead-text text-success">Approved</span>
                                </div>
                                <div class="col-6">
                                    <span class="sub-text">Register At:</span>
                                    <span>Nov 24, 2019</span>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <h6 class="overline-title-alt mb-3">Groups</h6>
                            <ul class="g-1">
                                <li class="btn-group">
                                    <a class="btn btn-xs btn-light btn-dim" href="#">investor</a>
                                    <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em
                                            class="icon ni ni-cross"></em></a>
                                </li>
                                <li class="btn-group">
                                    <a class="btn btn-xs btn-light btn-dim" href="#">support</a>
                                    <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em
                                            class="icon ni ni-cross"></em></a>
                                </li>
                                <li class="btn-group">
                                    <a class="btn btn-xs btn-light btn-dim" href="#">another tag</a>
                                    <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em
                                            class="icon ni ni-cross"></em></a>
                                </li>
                            </ul>
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner -->
                </div><!-- .card-aside -->
            </div><!-- .card-aside-wrap -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
