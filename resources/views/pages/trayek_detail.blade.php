@extends('main')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Trayek / <strong
                        class="text-primary small">{{ $trayek->jalur_trayek }}</strong>
                </h3>
                <div class="nk-block-des text-soft">
                    <ul class="list-inline">
                        <li>Trayek ID: <span class="text-base">{{ $trayek->id_trayek }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('trayek.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
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
                                <p>Informasi dasar dari trayek</p>
                            </div><!-- .nk-block-head -->
                            <div class="profile-ud-list">
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Nama Trayek</span>
                                        <span class="profile-ud-value">{{ $trayek->nama_trayek }}</span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Jalur Trayek</span>
                                        <span class="profile-ud-value">
                                            {{ $trayek->jalur_trayek }}
                                        </span>
                                    </div>
                                </div>
                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Alamat</span>
                                        <span class="profile-ud-value">{{ $trayek->warna_angkot }}</span>
                                    </div>
                                </div>

                                <div class="profile-ud-item">
                                    <div class="profile-ud wider">
                                        <span class="profile-ud-label">Jumlah Angkot</span>
                                        <span class="profile-ud-value">{{ count($trayek->angkot) }}</span>
                                    </div>
                                </div>
                            </div><!-- .profile-ud-list -->
                        </div><!-- .nk-block -->
                        <div class="nk-divider divider md"></div>
                        <div class="nk-block">
                            <div class="nk-block-head">
                                <h5 class="title">List Angkot</h5>
                            </div>
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist is-compact">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span class="sub-text">No Angkot</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Merk</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Plat Nomor</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Nama Trayek</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-xs btn-outline-light btn-icon dropdown-toggle"
                                                    data-toggle="dropdown" data-offset="0,5"><em
                                                        class="icon ni ni-plus"></em></a>

                                            </div>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    @foreach ($trayek->angkot as $angkot)
                                        {{-- DELETE MODAL --}}
                                        <div class="modal fade" id="deleteAngkotModal{{ $angkot->id_angkot }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal"><em
                                                            class="icon ni ni-cross"></em></a>
                                                    <form action="{{ route('angkot.destroy', $angkot) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-body modal-body-sm text-center">
                                                            <div class="nk-modal py-4">
                                                                <em
                                                                    class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                                                                <h4 class="nk-modal-title">Are You Sure ?</h4>
                                                                <div class="nk-modal-text mt-n2">
                                                                    <p class="text-soft">This data will be removed
                                                                        permanently.</p>
                                                                </div>
                                                                <ul class="d-flex justify-content-center gx-4 mt-4">
                                                                    <li>
                                                                        <button id="deleteWH" type="submit"
                                                                            class="btn btn-success">Yes, Delete
                                                                            it</button>
                                                                    </li>
                                                                    <li>
                                                                        <button data-dismiss="modal" data-toggle="modal"
                                                                            data-target="#editEventPopup"
                                                                            class="btn btn-danger btn-dim">Cancel</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- END OF DELETE MODAL --}}

                                        {{-- UPDATE MODAL --}}
                                        <div class="modal fade" tabindex="-1"
                                            id="updateAngkotModal{{ $angkot->id_angkot }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Angkot</h5>
                                                    </div>
                                                    <form method="post" action="{{ route('angkot.update', $angkot) }}"
                                                        enctype="multipart/form-data" class="mt-2">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="card-inner-group">
                                                                {{-- <div class="card-inner"> --}}
                                                                <div class="user-card user-card-s2">
                                                                    <div class="user-avatar xl bg-primary">
                                                                        <span>{{ $angkot->no_angkot }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="card-inner">
                                                                    <div class="row g-gs">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                    for="name_update">No
                                                                                    Polisi</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="no_pol_update"
                                                                                        value="{{ $angkot->no_pol }}"
                                                                                        name="no_pol_update"
                                                                                        placeholder="No Polisi" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="text" class="form-control"
                                                                            id="nama_trayek_update{{ $angkot->id_angkot }}"
                                                                            value="{{ $angkot->id_trayek }}"
                                                                            name="nama_trayek_update{{ $angkot->id_angkot }}"
                                                                            hidden>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                    for="nama_pemilik_update{{ $angkot->id_angkot }}">Nama
                                                                                    Pemilik</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select"
                                                                                        id="nama_pemilik_update{{ $angkot->id_angkot }}"
                                                                                        name="nama_pemilik_update{{ $angkot->id_angkot }}">
                                                                                        @foreach ($sopirAll as $sopir)
                                                                                            <option
                                                                                                value="{{ $sopir->id_sopir }}"
                                                                                                {{ $sopir->id_sopir == $angkot->id_sopir ? 'selected' : '' }}>
                                                                                                {{ $sopir->nama }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                    for="merk_update">Merk</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="merk_update"
                                                                                        value="{{ $angkot->merk }}"
                                                                                        name="merk_update"
                                                                                        placeholder="merk" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                    for="foto_stnk">Pilih Foto
                                                                                    STNK</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="custom-file">
                                                                                        <input type="file"
                                                                                            class="custom-file-input"
                                                                                            id="foto_stnk"
                                                                                            name="foto_stnk">
                                                                                        <label class="custom-file-label"
                                                                                            for="foto_stnk">Pilih</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                    for="foto_bpkb">Pilih Foto
                                                                                    BPKB</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="custom-file">
                                                                                        <input type="file"
                                                                                            class="custom-file-input"
                                                                                            id="foto_bpkb"
                                                                                            name="foto_bpkb">
                                                                                        <label class="custom-file-label"
                                                                                            for="foto_bpkb">Pilih</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{-- </div> --}}
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar xs bg-primary">
                                                        <span>{{ $angkot->no_angkot }}</span>
                                                    </div>
                                                    <!---<div class="user-name">
                                                                                            <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                                                        </div>--->
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{ $angkot->merk }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{ $angkot->no_pol }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{ $angkot->trayek->nama_trayek }}</span>
                                            </div>

                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-2">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-trigger dropdown-toggle"
                                                                data-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a
                                                                            href="{{ route('angkot.show', $angkot->id_angkot) }}"><em
                                                                                class="icon ni ni-eye"></em><span>View
                                                                                Details</span></a></li>
                                                                    <li><a href="#" data-toggle="modal"
                                                                            data-target="#updateAngkotModal{{ $angkot->id_angkot }}"><em
                                                                                class="icon ni ni-repeat"></em><span>Update</span></a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#" data-toggle="modal"
                                                                            data-target="#deleteAngkotModal{{ $angkot->id_angkot }}"><em
                                                                                class="icon ni ni-na"></em><span>Delete
                                                                                Sopir</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div><!-- .nk-tb-item -->
                            </div><!-- .nk-tb-list -->
                        </div><!-- .nk-block-head -->
                    </div>

                </div><!-- .card-inner -->
            </div><!-- .card-content -->

        </div><!-- .card-aside-wrap -->
    </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
