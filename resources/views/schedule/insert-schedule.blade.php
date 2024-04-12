@extends('layout.main')

@section('content')
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
            navbar-main navbar-scroll="false">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <!-- breadcrumb -->
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="text-sm leading-normal">
                            <a class="text-white opacity-50" href="javascript:;">Pages</a>
                        </li>
                        <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                            aria-current="page">Schedule</li>
                    </ol>
                    <h6 class="mb-0 font-bold text-white capitalize">Schedule</h6>
                </nav>
                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                            <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" placeholder="Type here..."
                                class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow"/>
                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center">
                            <a href="#"
                                class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                                <i class="fa fa-user sm:mr-1"></i>
                                <span class="hidden sm:inline">User</span>
                            </a>
                        </li>
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand"
                                sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                </div>
                            </a>
                        </li>
                        <li class="flex items-center px-4">
                            <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
                                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                                <!-- fixed-plugin-button-nav  -->
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        {{-- end navbar --}}

        <div class="w-full px-6 py-6 mx-auto">
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
                                <label for="guard_id" class="col-md-4 col-form-label text-md-right">Guard</label>

                                <div class="col-md-6">
                                    <select id="guard_id" class="form-control @error('guard_id') is-invalid @enderror" name="guard_id" required>
                                        <option value="">Pilih Guard</option>
                                        {{-- @foreach($guards as $guard)
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
                                    <input id="shift" type="text" class="form-control @error('shift') is-invalid @enderror" name="shift" required autocomplete="shift">
                                    @error('shift')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                                <div class="col-md-6">
                                    <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" required>
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start_time" class="col-md-4 col-form-label text-md-right">Waktu Mulai</label>

                                <div class="col-md-6">
                                    <input id="start_time" type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" required>
                                    @error('start_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end_time" class="col-md-4 col-form-label text-md-right">Waktu Selesai</label>

                                <div class="col-md-6">
                                    <input id="end_time" type="time" class="form-control @error('end_time') is-invalid @enderror" name="end_time" required>
                                    @error('end_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah Jadwal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection