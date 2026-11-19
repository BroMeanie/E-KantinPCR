<!--

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'E-Kantin PCR') | E-Kantin PCR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="E-Kantin PCR">
    <meta name="author" content="Tim E-Kantin PCR">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets-admin/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets-admin/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    {{-- Start CSS --}}
    @include('layouts.admin.css')
    {{-- End CSS --}}

</head>

<body>
    {{-- Start Sidebar --}}
    @include('layouts.admin.sidebar')
    {{-- End Sidebar --}}

    <main class="content d-flex flex-column min-vh-100">

        {{-- Start Header --}}
        @include('layouts.admin.header')
        {{-- End Header --}}

        {{-- Pesan sukses / error --}}
        @include('layouts.admin.alert')

        {{-- Start Main content --}}
        @yield('content')
        {{-- End Main Content --}}

        {{-- Start Footer --}}
        <div class="mt-auto pt-4">
         @include('layouts.admin.footer')
        </div>
        {{-- End Footer --}}
    </main>

    {{-- Start Js --}}
    @include('layouts.admin.js')
    {{-- End Js --}}

</body>

</html>
