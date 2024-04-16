<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/LogoPatrol.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/LogoPatrol.png') }}" />
    <title>Patrol Track</title>
    {{-- Bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    @notifyCss
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('../assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('../assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{ asset('../assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
    {{-- Alert --}}
    <link rel="stylesheet" href="{{ asset('../assets/css/alert.css') }}">
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    
    @yield('content')

</body>
<x-notify::notify />
        @notifyJs
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
<script src="{{ asset('../assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- main script file  -->
<script src="{{ asset('../assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>

</html>