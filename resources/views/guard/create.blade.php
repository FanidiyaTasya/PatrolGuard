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
                            aria-current="page">Data Satpam</li>
                    </ol>
                    <h6 class="mb-0 font-bold text-white capitalize">Data Satpam</h6>
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
            <!-- table 1 -->
            <div class="w-full p-6 mx-auto">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                          
                          <form action="/guard" method="POST">
                            @csrf
                            <div class="flex-auto p-6">
                                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Personal Information</p>
                                    <div class="flex flex-wrap -mx-3">
                                        {{-- <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="nik"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK</label>
                                                <input type="text" name="nik"
                                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            </div>
                                        </div> --}}
                                        
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="fullname" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama</label>
                                                <input type="text" name="fullname" id="fullname" value="{{ old('fullname') }}"
                                                    class="form-control @error('fullname') is-invalid @enderror focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                                @error('fullname')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4 flex flex-col relative">
                                                <label for="birth_date" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir</label>
                                                <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                                @error('birth_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="phone_number"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon</label>
                                                <input type="text" name="phone_number"
                                                    class="form-control @error('phone_number') is-invalid @enderror focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                                @error('phone_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="photo" 
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Foto</label>
                                                <input type="file" accept="image/*" id="photo"
                                                    class="form-control focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                            </div>
                                        </div> 

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="email"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="password"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Password</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                    </div>                      
                                {{-- <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
                                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Contact Information</p> --}}
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                        <div class="mb-4">
                                            <label for="address"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Alamat</label>
                                            <input type="text" name="address"
                                                class="form-control @error('address') is-invalid @enderror focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                            @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="city"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">RT/RW</label>
                                            <input type="text" name="city"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="country"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kel/Desa</label>
                                            <input type="text" name="country"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="postal code"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kecamatan</label>
                                            <input type="text" name="postal code"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div> --}}
                                </div>
                                <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="inline-block px-8 py-2 mb-4 mr-4 font-bold leading-normal text-center text-black align-middle transition-all ease-in bg-gray-500/30 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Cancel</button>
                                    <button type="submit"
                                        class="inline-block px-8 py-2 mb-4 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-tosca border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Save</button>
                                </div>

                              </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
