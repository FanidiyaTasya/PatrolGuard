@extends('layout.main')

@section('content')
    
  <!-- row 1 -->
  <div class="flex flex-wrap -mx-3">
    <!-- card1 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Jumlah Izin Satpam</p>
                <h5 class="mb-2 font-bold dark:text-white">1</h5>
                <p class="mb-0 dark:text-white dark:opacity-60">
                  <span class="text-sm font-bold leading-normal text-emerald-500"></span>
                  Hari ini
                </p>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                <i class="ni leading-none ni-user-run text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card2 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Total Kehadiran</p>
                <h5 class="mb-2 font-bold dark:text-white">300</h5>
                <p class="mb-0 dark:text-white dark:opacity-60">
                  <span class="text-sm font-bold leading-normal text-emerald-500">90%</span>
                  bulan ini
                </p>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card3 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Total Laporan</p>
                <h5 class="mb-2 font-bold dark:text-white">36</h5>
                <p class="mb-0 dark:text-white dark:opacity-60">
                  <span class="text-sm font-bold leading-normal text-red-600">9%</span>
                  bulan ini
                </p>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card4 -->
    <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Total Izin</p>
                <h5 class="mb-2 font-bold dark:text-white">8</h5>
                <p class="mb-0 dark:text-white dark:opacity-60">
                  <span class="text-sm font-bold leading-normal text-emerald-500">5%</span>
                  bulan ini
                </p>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- cards row 1 -->
  <div class="flex flex-wrap mt-6 -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-8/12 lg:flex-none">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 rounded-t-4">
          <div class="flex justify-between">
            <h6 class="mb-2 dark:text-white">Data Izin</h6>
          </div>
        </div>
        <div class="overflow-x-auto">
          <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
            <thead class="align-bottom">
              <tr>
                <th class="mb-0 text-center text-xs font-semibold leading-tight dark:text-white dark:opacity-60 p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">No</th>
                <th class="mb-0 text-center text-xs font-semibold leading-tight dark:text-white dark:opacity-60 p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">Nama Satpam</th>
                <th class="mb-0 text-center text-xs font-semibold leading-tight dark:text-white dark:opacity-60 p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">Tanggal Izin</th>
                <th class="mb-0 text-center text-xs font-semibold leading-tight dark:text-white dark:opacity-60 p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">Alasan</th>
                {{-- <th class="mb-0 text-center text-xs font-semibold leading-tight dark:text-white dark:opacity-60 p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">Status</th> --}}
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                    <h6 class="mb-0 text-center text-sm leading-normal dark:text-white">1</h6>
                </td>
                <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                    <h6 class="mb-0 text-center text-sm leading-normal dark:text-white">Marzuki</h6>
                </td>
                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                    <h6 class="mb-0 text-center text-sm leading-normal dark:text-white">1 Februari 2024</h6>
                </td>
                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                    <h6 class="mb-0 text-center text-sm leading-normal dark:text-white">Sakit</h6>
                </td>
                {{-- <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                  <div class="flex-1 text-center">
                    <a href="#" class="btn btn-warning text-xs border-0">
                      <h6 class="mb-0 text-sm leading-normal dark:text-white">Pending</h6>
                    </a>
                  </div>
                </td> --}}
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- end cards -->
</div>
</main>
@endsection