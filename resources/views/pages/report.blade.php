@extends('layout.main')

@section('content')
        <div class="flex flex-wrap -mx-3">
          <div class="w-full max-w-full px-3  md:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-5 pt-7">
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                  @foreach ($reports as $report)
                  <li class="relative flex p-6 mb-3 border-0 rounded-t-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                    <div class="flex flex-col">
                      <h6 class="mb-4 text-md leading-normal dark:text-white">{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('d F Y') }} - {{ $report->created_at->format('H:m:s') }}</h6>
                      <span class="mb-2 text-sm leading-tight dark:text-white/80">Nama: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $report->guardRelation->name }}</span></span>
                      <span class="mb-2 text-sm leading-tight dark:text-white/80">Lokasi: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $report->location->location_name }}</span></span>
                      <span class="text-sm leading-tight dark:text-white/80">Status: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $report->status }}</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      {{-- <a href="javascript:;"
                        class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text">
                        <i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Delete
                      </a> --}}
                      <a href="javascript:;"
                        class="inline-block dark:text-white px-4 py-2.5 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 hover:-translate-y-px active:opacity-85 bg-x-25 text-slate-700">
                        <i class="mr-2 fas fa-eye text-slate-700" aria-hidden="true"></i>Lihat Detail
                      </a>
                    </div>
                  </li>
                  @endforeach
                </ul>
                <div class="flex justify-between px-6">
                  <div class="mt-3 text-xs text-gray-700">
                      Showing
                      {{ $reports->firstItem() }}
                      to
                      {{ $reports->lastItem() }}
                      of
                      {{ $reports->total() }}
                  </div>
                  <div class="mt-1">
                      {{ $reports->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection