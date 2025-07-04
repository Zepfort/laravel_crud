@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark">Ubah Data Penduduk</h1>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/resident/{{ $resident->id }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Baris 1: NIK dan Nama Lengkap --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" inputmode="numeric" name="nik" id="nik"
                            class="form-control @error('nik') is-invalid @enderror" required
                            value="{{ old('nik', $resident->nik) }}">
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" inputmode="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror" required
                            value="{{ old('name', $resident->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Baris 2: Gender, Tanggal Lahir, Tempat Lahir --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror">
                            @foreach ([
                                ['label' => 'Laki-laki', 'value' => 'male'],
                                ['label' => 'Perempuan', 'value' => 'female']
                            ] as $item)
                                <option value="{{ $item['value'] }}" @selected(old('gender', $resident->gender) == $item['value'])>
                                    {{ $item['label'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="birth_date" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="birth_date" id="birth_date"
                            class="form-control @error('birth_date') is-invalid @enderror"
                            value="{{ old('birth_date', $resident->birth_date) }}">
                        @error('birth_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="birth_place" class="form-label">Tempat Lahir</label>
                        <input type="text" name="birth_place" id="birth_place"
                            class="form-control @error('birth_place') is-invalid @enderror" required
                            value="{{ old('birth_place', $resident->birth_place) }}">
                        @error('birth_place')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Alamat --}}
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" id="address" rows="3" class="form-control @error('address') is-invalid @enderror">{{ old('address', $resident->address) }}</textarea>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Baris 3: Agama dan Status Pernikahan --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="religion" class="form-label">Agama</label>
                        <input type="text" inputmode="text" name="religion" id="religion" class="form-control"
                            value="{{ old('religion', $resident->religion) }}">
                        @error('religion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="marital_status" class="form-label">Status Pernikahan</label>
                        <select name="marital_status" id="marital_status"
                            class="form-select @error('marital_status') is-invalid @enderror">
                            @foreach ([
                                ['label' => 'Belum Menikah', 'value' => 'single'],
                                ['label' => 'Menikah', 'value' => 'married'],
                                ['label' => 'Bercerai', 'value' => 'divorced'],
                                ['label' => 'Duda/Janda', 'value' => 'widowed']
                            ] as $item)
                                <option value="{{ $item['value'] }}" @selected(old('marital_status', $resident->marital_status) == $item['value'])>
                                    {{ $item['label'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('marital_status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Baris 4: Pekerjaan, Telepon, Status --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label for="occupation" class="form-label">Pekerjaan</label>
                        <input type="text" name="occupation" id="occupation"
                            class="form-control @error('occupation') is-invalid @enderror"
                            value="{{ old('occupation', $resident->occupation) }}">
                        @error('occupation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="phone" class="form-label">Telepon</label>
                        <input type="text" inputmode="tel" name="phone" id="phone" class="form-control"
                            value="{{ old('phone', $resident->phone) }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="status" class="form-label">Status Penduduk</label>
                        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                            @foreach ([
                                ['label' => 'Menetap', 'value' => 'active'],
                                ['label' => 'Pindah', 'value' => 'moved'],
                                ['label' => 'Almarhum', 'value' => 'deceased']
                            ] as $item)
                                <option value="{{ $item['value'] }}" @selected(old('status', $resident->status) == $item['value'])>
                                    {{ $item['label'] }}
                                </option>
                            @endforeach
                        </select>
                         @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <hr>

                <div class="d-flex justify-content-end gap-2">
                    <a href="/resident" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                </div>

            </form>
        </div>
    </div>
@endsection
