@extends('main')
@section('content')
    <div class="modal fade" tabindex="-1" id="addAngkotModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Angkot</h5>
                </div>
                <form method="post" action="{{ route('angkot.store') }}" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="no_pol">No Polisi</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="no_pol" name="no_pol"
                                            placeholder="No Polisi" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="nama_trayek">Nama Trayek</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="nama_trayek" name="nama_trayek">
                                            @foreach ($trayeks as $trayek)
                                                <option value="{{ $trayek->id_trayek }}">{{ $trayek->nama_trayek }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="nama_pemilik">Nama Pemilik</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="nama_pemilik" name="nama_pemilik">
                                            @foreach ($sopirs as $sopir)
                                                <option value="{{ $sopir->id_sopir }}">{{ $sopir->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="merk">Merk</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="merk" name="merk"
                                            placeholder="Merk" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="foto_stnk">Pilih Foto STNK</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_stnk" name="foto_stnk"
                                                required>
                                            <label class="custom-file-label" for="foto_stnk">Pilih</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="foto_bpkb">Pilih Foto BPKB</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_bpkb" name="foto_bpkb"
                                                required>
                                            <label class="custom-file-label" for="foto_bpkb">Pilih</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Angkot Lists</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total {{ count($angkots) }} angkot.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                            class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li><a href="#" class="btn btn-white btn-outline-light"><em
                                        class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                            <li class="nk-block-tools-opt">
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                        data-toggle="modal" data-target="#addAngkotModal"><em
                                            class="icon ni ni-plus"></em></a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- .toggle-wrap -->
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">
                <div class="card-inner position-relative card-tools-toggle">
                    <div class="card-title-group">
                        <div class="card-tools">
                            <div class="form-inline flex-nowrap gx-3">
                                <div class="form-wrap w-150px">
                                    <select class="form-select" data-search="off" data-placeholder="Bulk Action">
                                        <option value="">Bulk Action</option>
                                        <option value="email">Send Email</option>
                                        <option value="group">Change Group</option>
                                        <option value="suspend">Suspend Angkot</option>
                                        <option value="delete">Delete Angkot</option>
                                    </select>
                                </div>
                                <div class="btn-wrap">
                                    <span class="d-none d-md-block"><button
                                            class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                    <span class="d-md-none"><button
                                            class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                class="icon ni ni-arrow-right"></em></button></span>
                                </div>
                            </div><!-- .form-inline -->
                        </div><!-- .card-tools -->
                        <div class="card-tools mr-n1">
                            <ul class="btn-toolbar gx-1">
                                <li>
                                    <a href="#" class="btn btn-icon search-toggle toggle-search"
                                        data-target="search"><em class="icon ni ni-search"></em></a>
                                </li><!-- li -->
                                <li class="btn-toolbar-sep"></li><!-- li -->
                                <li>
                                    <div class="toggle-wrap">
                                        <a href="#" class="btn btn-icon btn-trigger toggle"
                                            data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                        <div class="toggle-content" data-content="cardTools">
                                            <ul class="btn-toolbar gx-1">
                                                <li class="toggle-close">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle"
                                                        data-target="cardTools"><em
                                                            class="icon ni ni-arrow-left"></em></a>
                                                </li><!-- li -->
                                                <li>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            <div class="dot dot-primary"></div>
                                                            <em class="icon ni ni-filter-alt"></em>
                                                        </a>
                                                        <div
                                                            class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                            <div class="dropdown-head">
                                                                <span class="sub-title dropdown-title">Filter Angkot</span>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-sm btn-icon">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-body dropdown-body-rg">
                                                                <div class="row gx-6 gy-3">
                                                                    <div class="col-6">
                                                                        <div
                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox"
                                                                                class="custom-control-input"
                                                                                id="hasBalance">
                                                                            <label class="custom-control-label"
                                                                                for="hasBalance"> Have Balance</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div
                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox"
                                                                                class="custom-control-input"
                                                                                id="hasKYC">
                                                                            <label class="custom-control-label"
                                                                                for="hasKYC"> KYC Verified</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="overline-title overline-title-alt">Role</label>
                                                                            <select class="form-select">
                                                                                <option value="any">Any Role</option>
                                                                                <option value="investor">Investor</option>
                                                                                <option value="seller">Seller</option>
                                                                                <option value="buyer">Buyer</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="overline-title overline-title-alt">Status</label>
                                                                            <select class="form-select">
                                                                                <option value="any">Any Status</option>
                                                                                <option value="active">Active</option>
                                                                                <option value="pending">Pending</option>
                                                                                <option value="suspend">Suspend</option>
                                                                                <option value="deleted">Deleted</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <button type="button"
                                                                                class="btn btn-secondary">Filter</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-foot between">
                                                                <a class="clickable" href="#">Reset Filter</a>
                                                                <a href="#">Save Filter</a>
                                                            </div>
                                                        </div><!-- .filter-wg -->
                                                    </div><!-- .dropdown -->
                                                </li><!-- li -->
                                                <li>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            <em class="icon ni ni-setting"></em>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                            <ul class="link-check">
                                                                <li><span>Show</span></li>
                                                                <li class="active"><a href="#">10</a></li>
                                                                <li><a href="#">20</a></li>
                                                                <li><a href="#">50</a></li>
                                                            </ul>
                                                            <ul class="link-check">
                                                                <li><span>Order</span></li>
                                                                <li class="active"><a href="#">DESC</a></li>
                                                                <li><a href="#">ASC</a></li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .dropdown -->
                                                </li><!-- li -->
                                            </ul><!-- .btn-toolbar -->
                                        </div><!-- .toggle-content -->
                                    </div><!-- .toggle-wrap -->
                                </li><!-- li -->
                            </ul><!-- .btn-toolbar -->
                        </div><!-- .card-tools -->
                    </div><!-- .card-title-group -->
                    <div class="card-search search-wrap" data-search="search">
                        <div class="card-body">
                            <div class="search-content">
                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em
                                        class="icon ni ni-arrow-left"></em></a>
                                <input type="text" class="form-control border-transparent form-focus-none"
                                    placeholder="Search by user or email">
                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                            </div>
                        </div>
                    </div><!-- .card-search -->
                </div><!-- .card-inner -->
                <div class="card-inner p-0">
                    <div class="nk-tb-list nk-tb-ulist is-compact">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid">
                                    <label class="custom-control-label" for="uid"></label>
                                </div>
                            </div>
                            <div class="nk-tb-col"><span class="sub-text">No Angkot</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Merk</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Plat Nomor</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Nama Trayek</span></div>
                            <div class="nk-tb-col nk-tb-col-tools text-right">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle"
                                        data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                        <ul class="link-tidy sm no-bdr">
                                            <li>
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked=""
                                                        id="bl">
                                                    <label class="custom-control-label" for="bl">Balance</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="vri">
                                                    <label class="custom-control-label" for="vri">Verified</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="st">
                                                    <label class="custom-control-label" for="st">Status</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($angkots as $angkot)
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
                                                        <p class="text-soft">This data will be removed permanently.</p>
                                                    </div>
                                                    <ul class="d-flex justify-content-center gx-4 mt-4">
                                                        <li>
                                                            <button id="deleteWH" type="submit"
                                                                class="btn btn-success">Yes, Delete it</button>
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
                            <div class="modal fade" tabindex="-1" id="updateAngkotModal{{ $angkot->id_angkot }}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
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
                                                                    <label class="form-label" for="name_update">No
                                                                        Polisi</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="no_pol_update"
                                                                            value="{{ $angkot->no_pol }}"
                                                                            name="no_pol_update" placeholder="No Polisi"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="nama_trayek_update{{ $angkot->id_angkot }}">Nama
                                                                        Trayek</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select"
                                                                            id="nama_trayek_update{{ $angkot->id_angkot }}"
                                                                            name="nama_trayek_update{{ $angkot->id_angkot }}">
                                                                            @foreach ($trayeks as $trayek)
                                                                                <option value="{{ $trayek->id_trayek }}"
                                                                                    {{ $trayek->id_trayek == $angkot->id_trayek ? 'selected' : '' }}>
                                                                                    {{ $trayek->nama_trayek }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                                                                <option value="{{ $sopir->id_sopir }}"
                                                                                    {{ $sopir->id_sopir == $angkot->id_sopir ? 'selected' : '' }}>
                                                                                    {{ $sopir->nama }}</option>
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
                                                                        <input type="text" class="form-control"
                                                                            id="merk_update"
                                                                            value="{{ $angkot->merk }}"
                                                                            name="merk_update" placeholder="merk"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="foto_stnk">Pilih Foto
                                                                        STNK</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="file"
                                                                                class="custom-file-input" id="foto_stnk"
                                                                                name="foto_stnk">
                                                                            <label class="custom-file-label"
                                                                                for="foto_stnk">Pilih</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="foto_bpkb">Pilih Foto
                                                                        BPKB</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="file"
                                                                                class="custom-file-input" id="foto_bpkb"
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
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                        <label class="custom-control-label" for="uid1"></label>
                                    </div>
                                </div>
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
                                                <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle"
                                                    data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="{{ route('angkot.show', $angkot->id_angkot) }}"><em
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
            </div><!-- .card-inner -->
            <div class="card-inner">
                <ul class="pagination justify-content-center justify-content-md-start">
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul><!-- .pagination -->
            </div><!-- .card-inner -->
        </div><!-- .card-inner-group -->
    </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
