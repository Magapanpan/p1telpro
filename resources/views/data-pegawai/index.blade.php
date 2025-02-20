@extends('welcome')

@section('title', 'Profil Pegawai')

@section('content')
<div class="profile-page bg-dark text-light vh-100 d-flex justify-content-center align-items-center">
    <div class="profile-card shadow-lg bg-white text-dark rounded overflow-hidden" style="max-width: 80vw; width: 100%; height: 90vh;">
        <div class="row h-100 g-0">
            <!-- Sisi Kiri: Foto dan Header -->
            <div class="col-lg-4 bg-gradient-primary d-flex flex-column align-items-center justify-content-center text-center p-4">
                <div class="profile-photo overflow-hidden" style="width: 20vw; height: auto;">
                <img src="{{ asset('storage/' . $dataPegawai->lamp_foto_karyawan) }}" class="img-fluid" style="object-fit: contain; background-color: #f8f9fa;">
                </div>
                <h2 class="mt-3">{{ $dataPegawai->nama_lengkap }}</h2>
                <p class="text-muted">{{ $dataPegawai->nama_posisi }}</p>
                <p class="text-muted">{{ $dataPegawai->unit_kerja }}</p>
            </div>

            <!-- Sisi Kanan: Informasi Lengkap -->
            <div class="col-lg-8 bg-light p-5" style="margin-top:5vh;">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <!-- Tab Data Pribadi -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-personal-tab" data-bs-toggle="pill" data-bs-target="#pills-personal" type="button" role="tab" aria-controls="pills-personal" aria-selected="true">Data Pribadi</button>
                    </li>
                    <!-- Tab Pekerjaan -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-job-tab" data-bs-toggle="pill" data-bs-target="#pills-job" type="button" role="tab" aria-controls="pills-job" aria-selected="false">Pekerjaan</button>
                    </li>
                    <!-- Tab Kontak -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Kontak</button>
                    </li>
                    <!-- Tab Keluarga -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-family-tab" data-bs-toggle="pill" data-bs-target="#pills-family" type="button" role="tab" aria-controls="pills-family" aria-selected="false">Keluarga</button>
                    </li>
                    <!-- Tab Dokumen -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-documents-tab" data-bs-toggle="pill" data-bs-target="#pills-documents" type="button" role="tab" aria-controls="pills-documents" aria-selected="false">Dokumen</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Tab Data Pribadi -->
                    <div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                        <p><strong>NIK:</strong> {{ $dataPegawai->nik }}</p>
                        <p><strong>Agama:</strong> {{ $dataPegawai->agama }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ $dataPegawai->sex }}</p>
                        <p><strong>Tempat Lahir:</strong> {{ $dataPegawai->tempat_lahir }}</p>
                        <p><strong>Golongan Darah:</strong> {{ $dataPegawai->gol_darah }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ $dataPegawai->tanggal_lahir }}</p>
                        <p><strong>Alamat:</strong> {{ $dataPegawai->alamat }}</p>
                        <p><strong>Status Perkawinan:</strong> {{ $dataPegawai->status_perkawinan }}</p>
                        <p><strong>Nama Ibu Kandung:</strong> {{ $dataPegawai->nama_ibu_kandung }}</p>
                        <p><strong>Nama Ayah Kandung:</strong> {{ $dataPegawai->nama_ayah_kandung }}</p>
                        <p><strong>Pendidikan Terakhir:</strong> {{ $dataPegawai->pendidikan_terakhir }}</p>
                    </div>
                    <!-- Tab Pekerjaan -->
                    <div class="tab-pane fade" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                        <p><strong>Unit Kerja:</strong> {{ $dataPegawai->unit_kerja }}</p>
                        <p><strong>Jabatan:</strong> {{ $dataPegawai->nama_posisi }}</p>
                        <p><strong>Status Pekerjaan:</strong> {{ $dataPegawai->aktif_or_pensiun }}</p>
                        <p><strong>Jabatan Sebelumnya:</strong> {{ $dataPegawai->jabatan_sebelumnya }}</p>
                        <p><strong>Lokasi Kerja:</strong> {{ $dataPegawai->lokasi_kerja }}</p>
                        <p><strong>Tanggal Mulai Kerja:</strong> {{ $dataPegawai->tanggal_mulai_kerja }}</p>
                        <p><strong>Departemen:</strong> {{ $dataPegawai->departemen }}</p>
                        <p><strong>Nomor Induk Pegawai:</strong> {{ $dataPegawai->nip }}</p>
                        <p><strong>Tanggal Penempatan:</strong> {{ $dataPegawai->tanggal_penempatan }}</p>
                        <p><strong>Jabatan Saat Ini:</strong> {{ $dataPegawai->jabatan_saat_ini }}</p>
                        <p><strong>Gaji Pokok:</strong> {{ $dataPegawai->gaji_pokok }}</p>
                        <p><strong>Gaji Lain:</strong> {{ $dataPegawai->gaji_lain }}</p>
                        <p><strong>Status Karir:</strong> {{ $dataPegawai->status_karir }}</p>
                    </div>
                    <!-- Tab Kontak -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <p><strong>Email:</strong> {{ $dataPegawai->other_email }}</p>
                        <p><strong>Email Telpro:</strong> {{ $dataPegawai->email_telpro }}</p>
                        <p><strong>No HP:</strong> {{ $dataPegawai->no_hp }}</p>
                        <p><strong>Telepon Rumah:</strong> {{ $dataPegawai->no_telepon_rumah }}</p>
                        <p><strong>Alamat Email Karyawan:</strong> {{ $dataPegawai->email_karyawan }}</p>
                        <p><strong>Alamat Email Lain:</strong> {{ $dataPegawai->email_lain }}</p>
                    </div>
                    <!-- Tab Keluarga -->
                    <div class="tab-pane fade" id="pills-family" role="tabpanel" aria-labelledby="pills-family-tab">
                        <p><strong>Nama Suami/Istri:</strong> {{ $dataPegawai->nama_suami_or_istri }}</p>
                        <p><strong>No HP Pasangan:</strong> {{ $dataPegawai->nomor_hp_pasangan }}</p>
                        <p><strong>Nama Anak 1:</strong> {{ $dataPegawai->nama_anak_1 }} {{ $dataPegawai->tgl_lahir_anak_1 }}</p>
                        <p><strong>Nama Anak 2:</strong> {{ $dataPegawai->nama_anak_2 }} {{ $dataPegawai->tgl_lahir_anak_2 }}</p>
                        <p><strong>Nama Anak 3:</strong> {{ $dataPegawai->nama_anak_3 }} {{ $dataPegawai->tgl_lahir_anak_3 }}</p>
                        <p><strong>Alamat Keluarga:</strong> {{ $dataPegawai->alamat_keluarga }}</p>
                        <p><strong>Status Keluarga:</strong> {{ $dataPegawai->status_keluarga }}</p>
                    </div>
                    <!-- Tab Dokumen -->
                    <div class="tab-pane fade" id="pills-documents" role="tabpanel" aria-labelledby="pills-documents-tab">
    <p><strong>Foto Karyawan:</strong>
        <!-- Preview kecil Foto Karyawan -->
        <a href="{{ asset('storage/' . $dataPegawai->lamp_foto_karyawan) }}" target="_blank">
            <img src="{{ asset('storage/' . $dataPegawai->lamp_foto_karyawan) }}" class="img-thumbnail" style="width: 100px; height: auto;" alt="Foto Karyawan">
        </a>
    </p>
    <p><strong>KTP:</strong>
        <!-- Preview kecil KTP -->
        <a href="{{ asset('storage/' . $dataPegawai->lamp_ktp) }}" target="_blank">
            <img src="{{ asset('storage/' . $dataPegawai->lamp_ktp) }}" class="img-thumbnail" style="width: 100px; height: auto;" alt="KTP">
        </a>
    </p>
    <p><strong>KK:</strong>
        <!-- Preview kecil KK -->
        <a href="{{ asset('storage/' . $dataPegawai->lamp_kk) }}" target="_blank">
            <img src="{{ asset('storage/' . $dataPegawai->lamp_kk) }}" class="img-thumbnail" style="width: 100px; height: auto;" alt="KK">
        </a>
    </p>
    <p><strong>Buku Nikah:</strong>
        <!-- Preview kecil Buku Nikah -->
        <a href="{{ asset('storage/' . $dataPegawai->lamp_buku_nikah) }}" target="_blank">
            <img src="{{ asset('storage/' . $dataPegawai->lamp_buku_nikah) }}" class="img-thumbnail" style="width: 100px; height: auto;" alt="Buku Nikah">
        </a>
    </p>
    <p><strong>Ijazah Terakhir:</strong>
        <!-- Preview kecil Ijazah Terakhir -->
        <a href="{{ asset('storage/' . $dataPegawai->lamp_ijazah_terakhir) }}" target="_blank">
            <img src="{{ asset('storage/' . $dataPegawai->lamp_ijazah_terakhir) }}" class="img-thumbnail" style="width: 100px; height: auto;" alt="Ijazah Terakhir">
        </a>
    </p>
    <p><strong>NPWP:</strong>
        <!-- Preview kecil NPWP -->
        <a href="{{ asset('storage/' . $dataPegawai->lamp_npwp) }}" target="_blank">
            <img src="{{ asset('storage/' . $dataPegawai->lamp_npwp) }}" class="img-thumbnail" style="width: 100px; height: auto;" alt="NPWP">
        </a>
    </p>
</div>

                </div>
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('data-pegawai.edit', ['nik' => Auth::user()->nik]) }}" class="btn btn-primary px-4 py-2">Edit Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
