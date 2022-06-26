@extends('main')
@section('content')
<div class="nk-block">
    <div class="row g-gs">
        <div class="col-md-3">
            <div class="card card-bordered card-full">
                <div class="card-inner">
                    <div class="card-title-group align-start mb-0">
                        <div class="card-title">
                            <h6 class="title">Total Sopir</h6>
                        </div>
                        <div class="card-tools">
                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left"
                                title="Total Booking"></em>
                        </div>
                    </div>
                    <div class="card-amount">
                        <span class="amount"> {{count($sopirs)}} </span>
                        {{-- <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span> --}}
                    </div>
                    
                </div>
            </div><!-- .card -->
        </div><!-- .col -->
        <div class="col-md-3">
            <div class="card card-bordered card-full">
                <div class="card-inner">
                    <div class="card-title-group align-start mb-0">
                        <div class="card-title">
                            <h6 class="title">Total Angkot</h6>
                        </div>
                        <div class="card-tools">
                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left"
                                title="Total Booking"></em>
                        </div>
                    </div>
                    <div class="card-amount">
                        <span class="amount"> {{count($angkots)}} </span>
                        {{-- <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span> --}}
                    </div>
                    
                </div>
            </div><!-- .card -->
        </div><!-- .col -->
        <div class="col-md-3">
            <div class="card card-bordered card-full">
                <div class="card-inner">
                    <div class="card-title-group align-start mb-0">
                        <div class="card-title">
                            <h6 class="title">Total Trayek</h6>
                        </div>
                        <div class="card-tools">
                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left"
                                title="Total Booking"></em>
                        </div>
                    </div>
                    <div class="card-amount">
                        <span class="amount"> {{count($trayeks)}} </span>
                        {{-- <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span> --}}
                    </div>
                    
                </div>
            </div><!-- .card -->
        </div><!-- .col -->
        <div class="col-md-3">
            <div class="card card-bordered card-full">
                <div class="card-inner">
                    <div class="card-title-group align-start mb-0">
                        <div class="card-title">
                            <h6 class="title">Total Perjalanan</h6>
                        </div>
                        <div class="card-tools">
                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left"
                                title="Total Booking"></em>
                        </div>
                    </div>
                    <div class="card-amount">
                        <span class="amount"> {{count($perjalanans)}} </span>
                        {{-- <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span> --}}
                    </div>
                    
                </div>
            </div><!-- .card -->
        </div><!-- .col -->
    </div>
</div>
@endsection