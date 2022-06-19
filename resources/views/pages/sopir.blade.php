@extends('main')
@section('content')
    <div class="modal fade" tabindex="-1" id="addSopirModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Sopir</h5>
                </div>
                <form method="post" action="{{ route('sopir.store') }}" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Nama Sopir</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nama Sopir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="n">Tidak berkenan menyebutkan</option>
                                            <option value="l">Laki-laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            placeholder="Alamat" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="foto">Pilih Foto</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto"
                                                required>
                                            <label class="custom-file-label" for="foto">Pilih</label>
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
                <h3 class="nk-block-title page-title">Sopir Lists</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total {{ count($sopirs) }} sopir.</p>
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
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="modal"
                                        data-target="#addSopirModal"><em class="icon ni ni-plus"></em></a>

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
                                        <option value="suspend">Suspend User</option>
                                        <option value="delete">Delete User</option>
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
                                                                <span class="sub-title dropdown-title">Filter Users</span>
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
                            <div class="nk-tb-col"><span class="sub-text">Nama</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Jenis Kelamin</span></div>
                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Alamat</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Nomor Angkot</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Trayek</span></div>
                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
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
                                                    <input type="checkbox" class="custom-control-input" checked=""
                                                        id="ph">
                                                    <label class="custom-control-label" for="ph">Phone</label>
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
                        @foreach ($sopirs as $sopir)
                            {{-- DELETE MODAL --}}
                            <div class="modal fade" id="deleteSopirModal{{ $sopir->id_sopir }}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-dismiss="modal"><em
                                                class="icon ni ni-cross"></em></a>
                                        <form action="{{ route('sopir.destroy', $sopir) }}" method="POST">
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
                            <div class="modal fade" tabindex="-1" id="updateSopirModal{{ $sopir->id_sopir }}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                            <em class="icon ni ni-cross"></em>
                                        </a>
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Sopir</h5>
                                        </div>
                                        <form method="post" action="{{ route('sopir.update', $sopir) }}"
                                            enctype="multipart/form-data" class="mt-2"
                                            id="form_update_for{{ $sopir->id_sopir }}">
                                            @method('PUT')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="card-inner-group">
                                                    {{-- <div class="card-inner"> --}}
                                                    <div class="user-card user-card-s2">
                                                        @if ($sopir->foto == null)
                                                            <div class="user-avatar xl bg-primary">
                                                                <span>{{ substr(preg_replace('/\b(\w)|./', '$1', $sopir->nama), 0, 2) }}</span>
                                                            </div>
                                                        @else
                                                            <div class="user-avatar xl bg-primary">
                                                                <img src="{{ asset('storage/' . $sopir->foto) }}"
                                                                    alt="">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="card-inner">
                                                        <div class="row g-gs">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name_update">Nama
                                                                        Sopir</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="name_update" value="{{ $sopir->nama }}"
                                                                            name="name_update" placeholder="Nama Sopir"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="jenis_kelamin_update{{ $sopir->id_sopir }}">Jenis
                                                                        Kelamin</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select"
                                                                            id="jenis_kelamin_update{{ $sopir->id_sopir }}"
                                                                            form="form_update_for{{ $sopir->id_sopir }}"
                                                                            name="jenis_kelamin_update{{ $sopir->id_sopir }}">
                                                                            <option value="n"
                                                                                {{ $sopir->jenis_kelamin == 'n' ? 'selected' : '' }}>
                                                                                Tidak berkenan menyebutkan
                                                                            </option>
                                                                            <option value="l"
                                                                                {{ $sopir->jenis_kelamin == 'l' ? 'selected' : '' }}>
                                                                                Laki-laki</option>
                                                                            <option value="p"
                                                                                {{ $sopir->jenis_kelamin == 'p' ? 'selected' : '' }}>
                                                                                Perempuan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="alamat_update">Alamat</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="alamat_update"
                                                                            value="{{ $sopir->alamat }}"
                                                                            name="alamat_update" placeholder="Alamat"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="status_update{{ $sopir->id_sopir }}">Status</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select"
                                                                            id="status_update{{ $sopir->id_sopir }}"
                                                                            form="form_update_for{{ $sopir->id_sopir }}"
                                                                            name="status_update{{ $sopir->id_sopir }}">
                                                                            <option value="active"
                                                                                {{ $sopir->status == 'active' ? 'selected' : '' }}>
                                                                                Active
                                                                            </option>
                                                                            <option value="inactive"
                                                                                {{ $sopir->status == 'inactive' ? 'selected' : '' }}>
                                                                                Inactive</option>
                                                                            <option value="rest"
                                                                                {{ $sopir->status == 'rest' ? 'selected' : '' }}>
                                                                                Rest</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="foto_update">Pilih
                                                                        Foto</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="file"
                                                                                class="custom-file-input" id="foto_update"
                                                                                name="foto_update">
                                                                            <label class="custom-file-label"
                                                                                for="foto_update">Pilih</label>
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
                                        {{-- <div class="user-avatar xs bg-primary">
                                            <span>AB</span>
                                        </div> --}}
                                        <div class="user-name">
                                            <span class="tb-lead">{{ $sopir->nama }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span>
                                        @if ($sopir->jenis_kelamin == 'l')
                                            Laki-laki
                                        @elseif($sopir->jenis_kelamin == 'p')
                                            Perempuan
                                        @else
                                            Tidak berkenan menyebut
                                        @endif
                                    </span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span>{{ $sopir->alamat }}</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    @if (is_null($sopir->angkot->no_angkot))
                                        <span>-</span>
                                    @else
                                        <div class="user-avatar xs bg-primary">
                                            <span>{{ $sopir->angkot->no_angkot }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    @if (is_null($sopir->angkot->trayek->nama_trayek))
                                        <span>-</span>
                                    @else
                                        <span>{{ $sopir->angkot->trayek->nama_trayek }}</span>
                                    @endif
                                </div>
                                <div class="nk-tb-col">
                                    @switch($sopir->status)
                                        @case('active')
                                            <span class="tb-status text-success">Active</span>
                                        @break

                                        @case('inactive')
                                            <span class="tb-status text-danger">Inactive</span>
                                        @break

                                        @case('rest')
                                            <span class="tb-status text-warning">Rest</span>
                                        @break

                                        @default
                                    @endswitch
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-2">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle"
                                                    data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="{{ route('sopir.show', $sopir->id_sopir) }}"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                        <li><a href="#" data-toggle="modal"
                                                                data-target="#updateSopirModal{{ $sopir->id_sopir }}"><em
                                                                    class="icon ni ni-repeat"></em><span>Update</span></a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#" data-toggle="modal"
                                                                data-target="#deleteSopirModal{{ $sopir->id_sopir }}"><em
                                                                    class="icon ni ni-na"></em><span>Delete
                                                                    Sopir</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-tb-item -->
                        @endforeach


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
