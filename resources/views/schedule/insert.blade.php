@extends('layout.main')

@section('content')
    <!-- form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Jadwal</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf

                            <div class="form-group row">
                                <label for="guard_id" class="col-md-4 col-form-label text-md-right">Satpam</label>

                                <div class="col-md-6">
                                    <select id="guard_id" class="form-control @error('guard_id') is-invalid @enderror"
                                        name="guard_id" required>
                                        <option value="">Pilih Nama</option>
                                        {{-- @foreach ($guards as $guard)
                                            <option value="{{ $guard->id }}">{{ $guard->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('guard_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="shift" class="col-md-4 col-form-label text-md-right">Shift</label>

                                <div class="col-md-6">
                                    <select id="shift" class="form-control @error('shift') is-invalid @enderror" name="shift" required autocomplete="shift">
                                        <option value="">Pilih Shift</option>
                                        <option value="1">Shift 1</option>
                                        <option value="2">Shift 2</option>
                                        <option value="3">Shift 3</option>
                                    </select>
                                    @error('shift')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hari" class="col-md-4 col-form-label text-md-right">Hari</label>

                                <div class="col-md-6">
                                    <select id="hari" class="form-control @error('hari') is-invalid @enderror" name="hari" required>
                                        <option value="">Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                    @error('hari')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary">
                                        Tambah Jadwal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection