@include('layouts.header')


@include('layouts.navbar')
<div class="flex">
    {{-- @include('partials.sidebar') --}}
    <main class="flex-1 p-4">
        @yield('content')
    </main>
</div>

@include('layouts.footer')
