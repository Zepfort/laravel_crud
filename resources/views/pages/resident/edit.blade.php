@extends('layouts.app')

@section('content')
     <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Penduduk</h1>
    </div>

    {{-- @if ($errors->any())
        @dd($errors->all())
    @endif --}}

    <div class="row">
        <div class="col">
            <form action="/resident/{{ $resident->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nik">NIK</label>
                                <input type="number" inputmode="numeric" name="nik" id="nik" class="form-control
                                @error('nik') is-invalid @enderror" required value="{{ old('nik', $resident->nik)}}">
                                @error('nik')
                                    <span class="invalid-feedback">
                                        {{ $message}}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" inputmode="text" name="name" id="name" class="form-control
                                @error('name') is-invalid @enderror" required value="{{ old('name', $resident->name)}}">
                                @error('name')
                                    <span class="invalid-feedback">
                                        {{ $message}}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col ">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="form-control
                                @error('gender') is-invalid @enderror">
                                    @foreach ([
                                        (object) [
                                            "label" => "Laki-laki",
                                            "value" => "male"
                                        ],
                                        (object)[
                                            "label" => "Perempuan",
                                            "value" => "female"
                                        ]
                                    ] as $item )
                                        <option value="{{$item->value}}" @selected(old('gender', $resident->gender) == $item->value)  >{{$item->label}}</option>
                                        @endforeach

                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="birth_date">Tanggal Lahir</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control
                                @error('birth_date') is-invalid @enderror" value="{{ old('birth_date', $resident->birth_date)}}">
                                @error('birth_date')
                                    <span class="invalid-feedback">
                                        {{ $message}}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="birth_place">Tempat Lahir</label>
                                <input type="text" name="birth_place" id="birth_place" class="form-control
                                @error('birth_place') is-invalid @enderror" required value="{{ old('birth_place', $resident->birth_place)}}">
                                @error('birth_place')
                                    <span class="invalid-feedback">
                                        {{ $message}}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">Alamat</label>
                            <textarea  name="address" id="address" cols="30" rows="10" class="form-control
                            @error('address') is-invalid @enderror" >{{old('address', $resident->address)}} </textarea>
                            @error('address')
                                    <span class="invalid-feedback">
                                        {{ $message}}
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="religion">Agama</label>
                            <input type="text" inputmode="text" name="religion" id="religion" class="form-control" value="{{ old('religion', $resident->religion)}}">
                            @error('religion')
                                    <span class="invalid-feedback">
                                        {{ $message}}
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="marital_status">Status Pernikahan</label>
                                <select name="marital_status" id="marital_status" class="form-control
                                @error('marital_status') is-invalid
                                @enderror">
                                    @foreach ([
                                        (object)[
                                            'label' => 'Belum menikah',
                                            'value' => 'single'
                                        ],
                                        (object)[
                                            'label' => 'Menikah',
                                            'value' => 'married'
                                        ],
                                        (object)[
                                            'label' => 'Bercerai',
                                            'value' => 'divorced'
                                        ],
                                        (object)[
                                            'label' => 'Duda/Janda',
                                            'value' => 'widowed'
                                        ]
                                    ] as $item)

                                    <option value="{{$item->value}}" @selected(old('marital_status', $resident->marital_status) == $item->value)  >{{$item->label}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col ">
                                <label for="occupation">Pekerjaan</label>
                                <input type="text" name="occupation" id="occupation" class="form-control "
                                @error('occupation') is-invalid @enderror value="{{ old('occupation', $resident->occupation)}}">
                                @error('occupation')
                                    <span class="invalid-feedback">
                                        {{ $message}}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="phone">Telepon</label>
                                <input type="text" inputmode="number" name="phone" id="phone" class="form-control"
                                @error('phone') is-invalid @enderror required value="{{ old('phone', $resident->phone)}}">
                                @error('phone')
                                    <span class="invalid-feedback">
                                        {{ $message}}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control
                                @error('status') is-invalid @enderror" required>
                                    @foreach ([
                                        (object)[
                                            'label' => 'Menetap',
                                            'value' => 'active'
                                        ],
                                        (object)[
                                            'label' => 'Pindah',
                                            'value' => 'moved'
                                        ],
                                        (object)[
                                            'label' => 'Almarhum',
                                            'value' => 'deceased'
                                        ]
                                    ] as $item )
                                    <option value="{{ $item->value}}" @selected(old('status', $resident->status) == $item->value) >{{$item->label}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end" style="gap:10px">
                            <a href="/resident" class="btn btn-outline-secondary" >
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-warning">
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
