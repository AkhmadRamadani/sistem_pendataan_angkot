@extends('main')
@section('content')
    <div class="modal fade" tabindex="-1" id="addPerjalananModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Perjalanan</h5>
                </div>
                <form method="post" action="{{ route('perjalanan.store') }}" enctype="multipart/form-data"
                    class="mt-2">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="jumlah_penumpang">Jumlah Penumpang</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="jumlah_penumpang"
                                            name="jumlah_penumpang" placeholder="Jumlah Penumpang" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="nama_sopir">Sopir</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="nama_sopir" name="nama_sopir">
                                            @foreach ($sopirs as $sopir)
                                                <option value="{{ $sopir->id_sopir }}">
                                                    {{ $sopir->nama . ' - ' . $sopir->id_sopir }}</option>
                                            @endforeach

                                        </select>
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
                <h3 class="nk-block-title page-title">Perjalanan Lists</h3>
                <div class="nk-block-des text-soft">
                    {{-- <p>You have total {{ count($sopirs) }} sopir.</p> --}}
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                            class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            
                            <li class="nk-block-tools-opt">
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="modal"
                                        data-target="#addPerjalananModal"><em class="icon ni ni-plus"></em></a>

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
                    
                </div><!-- .card-inner -->
                <div class="card-inner p-0">
                    <div class="nk-tb-list nk-tb-ulist is-compact">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col"><span class="sub-text">Nama Sopir</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">No Angkot</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Nama Trayek</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Jumlah Penumpang</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Tanggal</span></div>
                            <div class="nk-tb-col nk-tb-col-tools text-right">
                                <div class="dropdown">
                                    <a  class="btn btn-xs btn-outline-light btn-icon dropdown-toggle"
                                        data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                    
                                </div>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($perjalanans as $perjalanan)
                            {{-- DELETE MODAL --}}
                            <div class="modal fade" id="deletePerjalananModal{{ $perjalanan->id_perjalanan }}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-dismiss="modal"><em
                                                class="icon ni ni-cross"></em></a>
                                        <form action="{{ route('perjalanan.destroy', $perjalanan) }}" method="POST">
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
                            <div class="modal fade" tabindex="-1"
                                id="updatePerjalananModal{{ $perjalanan->id_perjalanan }}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                            <em class="icon ni ni-cross"></em>
                                        </a>
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Perjalanan</h5>
                                        </div>
                                        <form method="post" action="{{ route('perjalanan.update', $perjalanan) }}"
                                            enctype="multipart/form-data" class="mt-2"
                                            id="form_update_for{{ $perjalanan->id_perjalanan }}">
                                            @method('PUT')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row g-gs">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="jumlah_penumpang_update">Jumlah
                                                                Penumpang
                                                            </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="jumlah_penumpang_update"
                                                                    value="{{ $perjalanan->jumlah_penumpang }}"
                                                                    name="jumlah_penumpang_update"
                                                                    placeholder="Jumlah Penumpang" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="nama_sopir{{ $perjalanan->id_perjalanan }}">Sopir</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select"
                                                                    id="nama_sopir{{ $perjalanan->id_perjalanan }}"
                                                                    form="form_update_for{{ $perjalanan->id_perjalanan }}"
                                                                    name="nama_sopir{{ $perjalanan->id_perjalanan }}">
                                                                    @foreach ($sopirs as $sopir)
                                                                        <option value="{{ $sopir->id_sopir }}"
                                                                            {{ $sopir->id_sopir == $perjalanan->id_sopir ? 'selected' : '' }}>
                                                                            {{ $sopir->nama . ' - ' . $sopir->id_sopir }}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- </div> --}}
                                                </div>

                                            </div>
                                            <div class="modal-footer bg-light">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-item">
                                
                                <div class="nk-tb-col">
                                    <div class="user-card">
                                        {{-- <div class="user-avatar xs bg-primary">
                                            <span>AB</span>
                                        </div> --}}
                                        <div class="user-name">
                                            <span class="tb-lead">{{ $perjalanan->sopir->nama }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <div class="user-card">
                                        <div class="user-avatar xs bg-primary">
                                            <span>{{ $perjalanan->sopir->angkot->no_angkot }}</span>
                                        </div>
                                        <!---<div class="user-name">
                                                                <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                            </div>--->
                                    </div>
                                </div>

                                <div class="nk-tb-col tb-col-md">
                                    <span>{{ $perjalanan->sopir->angkot->trayek->nama_trayek }}</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span>{{ $perjalanan->jumlah_penumpang }}</span>
                                </div>

                                <div class="nk-tb-col tb-col-md">
                                    <span>{{ $perjalanan->created_at }}</span>
                                </div>

                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-2">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle"
                                                    data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a
                                                                href="{{ route('perjalanan.print_surat_jalan', $perjalanan->id_perjalanan) }}"><em
                                                                    class="icon ni ni-file-download"></em><span>Print Surat Jalan</span></a></li>
                                                        <li><a
                                                                href="{{ route('perjalanan.show', $perjalanan->id_perjalanan) }}"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                        <li><a href="#" data-toggle="modal"
                                                                data-target="#updatePerjalananModal{{ $perjalanan->id_perjalanan }}"><em
                                                                    class="icon ni ni-repeat"></em><span>Update</span></a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#" data-toggle="modal"
                                                                data-target="#deletePerjalananModal{{ $perjalanan->id_perjalanan }}"><em
                                                                    class="icon ni ni-na"></em><span>Delete
                                                                    Perjalanan</span></a></li>
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
                    
                {{ $perjalanans->links('pagination::bootstrap-4') }}
                </div><!-- .card-inner -->
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
