@extends('layout.main')

@section('content')
        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="dark:text-white">Presensi</h6>
                <div class="flex justify-end">
                    <a href="/presence/create" 
                    class="inline-block px-8 py-2 mb-4 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-tosca border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Tambah</a>
                </div>
                <div class="flex justify-end md:pr-4">
                  <div class="relative flex flex-wrap items-stretch transition-all rounded-lg ease">
                    <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                      <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                  </div>
                </div>           
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">

                <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap">Tanggal Presensi</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap">Jam Kerja</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap">Nama Satpam</th>
                      <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($attendances as $attendance)
                    <tr>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $attendance->date->translatedFormat('l, d-m-Y') }}</p>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $attendance->shift->start_time }} - {{ $attendance->shift->end_time }}</p>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $attendance->guardRelation->name }}</p>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <a href="/presence/{{ $attendance->id }}/edit" class="btn btn-secondary text-xs border-0">
                          <i class="fas fa-edit"></i>
                        </a>
                        |
                        <a href="/presence/{{ $attendance->id }}" class="btn btn-danger text-xs border-0" data-confirm-delete="true">
                          <i class="fas fa-trash-alt" aria-hidden="true"></i>
                        </a>         
                        |
                        <a href="/presence/{{ $attendance->id }}" class="btn btn-primary text-xs border-0">
                          <i class="fas fa-eye" aria-hidden="true"></i>
                        </a>
                      </td>  
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="flex justify-between px-6">
                  <div class="mt-3 text-xs text-gray-700">
                      Showing
                      {{ $attendances->firstItem() }}
                      to
                      {{ $attendances->lastItem() }}
                      of
                      {{ $attendances->total() }}
                  </div>
                  <div class="mt-1">
                      {{ $attendances->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection