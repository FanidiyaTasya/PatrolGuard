<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Patrol Track</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="../assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />

    <style>
        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: auto;
            }
        }

        .typing-animation {
            animation: typing 2s steps(30, end);
            white-space: nowrap;
            margin-top: 80px;
        }

        .pw {
            margin-left: 180px;
        }

        .mb-0 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .textleft {
            margin-left: 180px;
        }
    </style>
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <main class="mt-0 transition-all duration-200 ease-in-out">
        <section>
            <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
                <div class="container z-1">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                                <div class="textleft">
                                    <h4 class="font-bold">Sign In</h4>
                                </div>

                                <div class="flex-auto p-6">
                                    <div class="p-6 bg-gray-100 rounded-lg shadow-md"
                                        style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 8px 8px -1px rgba(0, 0, 0, 0.06);">
                                        <form role="form">
                                            <p class="mb-3">Enter your email and password to sign in</p>
                                            <div class="mb-4">
                                                <input type="email" placeholder="Email"
                                                    class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            </div>
                                            <div class="mb-4">
                                                <input type="password" placeholder="Password"
                                                    class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            </div>

                                            <div class="pw">
                                                <button>
                                                    <p>Forgot Password?</p>
                                                </button>
                                            </div>

                                            <div class="flex items-center pl-12 mb-0.5 text-left min-h-6">
                                                <input id="rememberMe"
                                                    class="mt-0.5 rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-zinc-700/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                    type="checkbox" />
                                                <label
                                                    class="ml-2 font-normal cursor-pointer select-none text-sm text-slate-700"
                                                    for="rememberMe">Remember me</label>
                                            </div>
                                            <div class="text-center">
                                                <button type="button"
                                                    class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">Sign
                                                    in</button>
                                            </div>
                                            <div
                                                class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
                                                <p class="mx-auto mb-6 leading-normal text-sm">Don't have an account?
                                                    <a href="/sign-up" class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">
                                                        Sign up
                                                    </a>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                            <div
                                class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden  rounded-xl ">
                                <span
                                    class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-60"></span>

                                <div class="container z-10">
                                    <div class="flex flex-wrap justify-center -mx-3">
                                        <div
                                            class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                                            <h3 class="typing-animation">Welcome to PatrolTrack !!!</h3>
                                        </div>
                                    </div>
                                </div>

                                <p class="z-20 text-white ">
                                    The more effortless the writing looks, the more effort the 
                                    writer actually put into the process.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
<script>
    // Mengambil semua elemen dengan kelas typing-animation
    const elements = document.querySelectorAll('.typing-animation');

    // Loop melalui setiap elemen
    elements.forEach(element => {
        // Mendapatkan teks dari elemen
        const text = element.innerText;
        // Menyimpan teks ke dalam data atribut
        element.setAttribute('data-text', text);
        // Menghapus teks dari elemen
        element.innerText = '';

        // Memulai animasi mengetik dengan interval 100ms
        let index = 0;
        setInterval(() => {
            // Menambahkan satu karakter pada setiap interval
            element.innerText = element.getAttribute('data-text').slice(0, index);
            index++;

            // Mengulangi teks dari awal jika sudah mencapai panjang teks
            if (index > text.length) {
                index = 0;
            }
        }, 270);
    });
</script>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</html>