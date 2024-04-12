@extends('layout.main')

@section('content')
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="text-sm leading-normal">
                <a class="text-white opacity-50" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Report</li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize">Report</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">

            <div class="flex items-center md:ml-auto md:pr-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
              </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <li class="flex items-center">
                <a href="#" class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                  <i class="fa fa-user sm:mr-1"></i>
                  <span class="hidden sm:inline">User</span>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
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

      <div class="w-full px-6 py-6 mx-auto">
        <!-- content -->

        <div class="flex flex-wrap -mx-3">
          
          <div class="w-full max-w-full px-3 md:w-7/12 md:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <h6 class="mb-0 dark:text-white">Billing Information</h6>
              </div>
              <div class="flex-auto p-4 pt-6">
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                  <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                    <div class="flex flex-col">
                      <h6 class="mb-4 text-sm leading-normal dark:text-white">Oliver Liam</h6>
                      <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Viking Burrito</span></span>
                      <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">oliver@burrito.com</span></span>
                      <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block dark:text-white px-4 py-2.5 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 hover:-translate-y-px active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                  <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-xl bg-gray-50 dark:bg-slate-850">
                    <div class="flex flex-col">
                      <h6 class="mb-4 text-sm leading-normal dark:text-white">Lucas Harper</h6>
                      <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Stone Tech Zone</span></span>
                      <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">lucas@stone-tech.com</span></span>
                      <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block dark:text-white px-4 py-2.5 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 hover:-translate-y-px active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                  <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                    <div class="flex flex-col">
                      <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                      <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Fiber Notion</span></span>
                      <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">ethan@fiber.com</span></span>
                      <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block dark:text-white px-4 py-2.5 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 hover:-translate-y-px active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="w-full max-w-full px-3 lg:w-1/3 lg:flex-none">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex flex-wrap -mx-3">
                  <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                    <h6 class="mb-0 dark:text-white">Invoices</h6>
                  </div>
                  <div class="flex-none w-1/2 max-w-full px-3 text-right">
                    <button class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">View All</button>
                  </div>
                </div>
              </div>
              <div class="flex-auto p-4 pb-0">
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                  <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                    <div class="flex flex-col">
                      <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">March, 01, 2020</h6>
                      <span class="text-xs leading-tight dark:text-white dark:opacity-80">#MS-415646</span>
                    </div>
                    <div class="flex items-center text-sm leading-normal dark:text-white/80">
                      $180
                      <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                    </div>
                  </li>
                  <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                    <div class="flex flex-col">
                      <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">February, 10, 2021</h6>
                      <span class="text-xs leading-tight dark:text-white dark:opacity-80">#RV-126749</span>
                    </div>
                    <div class="flex items-center text-sm leading-normal dark:text-white/80">
                      $250
                      <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                    </div>
                  </li>
                  <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                    <div class="flex flex-col">
                      <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">April, 05, 2020</h6>
                      <span class="text-xs leading-tight dark:text-white dark:opacity-80">#FB-212562</span>
                    </div>
                    <div class="flex items-center text-sm leading-normal dark:text-white/80">
                      $560
                      <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                    </div>
                  </li>
                  <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                    <div class="flex flex-col">
                      <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">June, 25, 2019</h6>
                      <span class="text-xs leading-tight dark:text-white dark:opacity-80">#QW-103578</span>
                    </div>
                    <div class="flex items-center text-sm leading-normal dark:text-white/80">
                      $120
                      <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                    </div>
                  </li>
                  <li class="relative flex justify-between px-4 py-2 pl-0 border-0 rounded-b-inherit rounded-xl text-inherit">
                    <div class="flex flex-col">
                      <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">March, 01, 2019</h6>
                      <span class="text-xs leading-tight dark:text-white dark:opacity-80">#AR-803481</span>
                    </div>
                    <div class="flex items-center text-sm leading-normal dark:text-white/80">
                      $300
                      <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endsection