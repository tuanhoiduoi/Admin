<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="billing"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <!-- End Navbar -->
      @yield('content-question')
      @yield('content-linhvuc')
      @yield('content-users')

    </main>
    <x-plugins></x-plugins>

</x-layout>
