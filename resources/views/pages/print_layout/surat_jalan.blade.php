<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Surat Jalan</title>
</head>

<body>
    
    {{-- <table>

    </table> --}}
    <div class="card card-bordered">
        <div class="card-aside-wrap">

            <div class="card-content">
                <div class="card-inner">
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <h3 class="title">Informasi Perjalanan</h3>
                        </div><!-- .nk-block-head -->
                        <div class="profile-ud-list">
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">ID Perjalanan: &nbsp;</span>
                                    <span class="profile-ud-value">{{ $perjalanan->id_perjalanan }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Nama - ID Sopir: &nbsp;</span>
                                    <span
                                        class="profile-ud-value">{{ $perjalanan->sopir->nama . ' - ' . $perjalanan->sopir->id_sopir }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">No Angkot - Trayek: &nbsp;</span>
                                    <span
                                        class="profile-ud-value">{{ $perjalanan->sopir->angkot->no_angkot . ' - ' . $perjalanan->sopir->angkot->trayek->nama_trayek }}</span>
                                </div>
                            </div>

                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">No Polisi: &nbsp;</span>
                                    <span class="profile-ud-value">{{ $perjalanan->sopir->angkot->no_pol }}</span>
                                </div>
                            </div>

                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Jumlah Penumpang: &nbsp;</span>
                                    <span class="profile-ud-value">{{ $perjalanan->jumlah_penumpang }}</span>
                                </div>
                            </div>

                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Tanggal dan Waktu Berangkat: &nbsp;</span>
                                    <span class="profile-ud-value">{{ $perjalanan->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
