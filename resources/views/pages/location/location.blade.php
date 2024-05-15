@extends('layout.main')

@section('content')
<!-- table 1 -->
<div class="flex flex-wrap -mx-3">
  <div class="flex-none w-full max-w-full px-3">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
      <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
        <h6 class="dark:text-white">Data Lokasi</h6>
        <div class="flex justify-end">
            <button data-bs-toggle="modal" data-bs-target="#locModal"
              class="inline-block px-8 py-2 mb-4 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-tosca border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Tambah</button>
            @include('pages.location.create')
        </div>            
    </div>
      <div class="flex-auto px-0 pt-0 pb-2">
        <div class="p-0 overflow-x-auto">

          <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
            <thead class="align-bottom">
              <tr>
                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap">No</th>
                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap">Nama Lokasi</th>
                <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($locations as $index => $location)
              <tr>
                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $index + 1 }}</p>
                </td>
                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $location->location_name }}</p>
                </td>
                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  {!! QrCode::size(100)->generate($location->location_name); !!}
                </td>
                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                  <a href="#" class="btn btn-secondary text-xs border-0">
                    <i class="fas fa-edit"></i>
                  </a>
                  |
                  <a href="/location/{{ $location->id }}" class="btn btn-danger text-xs border-0" data-confirm-delete="true">
                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
                  </a>         
                  |
                  <a href="/location/{{ $location->id }}" class="btn btn-primary text-xs border-0">
                    <i class="fas fa-eye" aria-hidden="true"></i>
                  </a>
                </td>                       
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection