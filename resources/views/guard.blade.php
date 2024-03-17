@extends('layout.main')

@section('content')
   <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

    <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
      <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="/dashboard" target="_blank">
          <img src="assets/img/logo-ct-dark.png" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" />
          <img src="assets/img/logo-ct.png" class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8" alt="main_logo" />
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Patrol Track</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">

          <li class="mt-0.5 w-full">
            <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/dashboard">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class=" py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="/guard">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-single-copy-04"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Satpam</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/schedule">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Jadwal</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/report">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-collection"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Laporan</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/profile">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
            </a>
          </li>

        </ul>
      </div>
    </aside>

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
              <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Data Satpam</li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize">Data Satpam</h6>
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
              <!-- online builder btn  -->
              <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-blue-500 active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
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
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="dark:text-white">Authors table</h6>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Author</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Function</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Employed</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal dark:text-white">John Michael</h6>
                              <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">john@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">Manager</p>
                          <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">Organization</p>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">23/04/18</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <a href="javascript:;" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"> Edit </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="assets/img/team-3.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user2" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal dark:text-white">Alexa Liras</h6>
                              <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">alexa@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">Programator</p>
                          <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">Developer</p>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Offline</span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">11/01/19</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <a href="javascript:;" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"> Edit </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="assets/img/team-4.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user3" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal dark:text-white">Laurent Perrier</h6>
                              <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">laurent@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">Executive</p>
                          <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">Projects</p>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">19/09/17</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <a href="javascript:;" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"> Edit </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="assets/img/team-3.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user4" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal dark:text-white">Michael Levi</h6>
                              <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">michael@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">Programator</p>
                          <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">Developer</p>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">24/12/08</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <a href="javascript:;" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"> Edit </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user5" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal dark:text-white">Richard Gran</h6>
                              <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">richard@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">Manager</p>
                          <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">Executive</p>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Offline</span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">04/10/21</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <a href="javascript:;" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"> Edit </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="assets/img/team-4.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user6" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal dark:text-white">Miriam Eric</h6>
                              <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">miriam@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">Programtor</p>
                          <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">Developer</p>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Offline</span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                          <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">14/09/20</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                          <a href="javascript:;" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"> Edit </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
