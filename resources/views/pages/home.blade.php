@extends('layouts.webpage')

@section('content')

    <!-- ================= HEADER ================= -->
    <x-header />

    <!-- ================= CONTENIDO DE LA PÁGINA ================= -->
    <main class="flex-grow bg-white dark:bg-gray-900 transition-colors duration-300">

        <x-home-slider />

        <!-- Section: Categorías Principales -->
        <x-home-categories-main />

        <!-- Section: Nuestros Destacados -->
        <x-home-products-featured />

        <!-- Section: Ofertas que Vuelan -->
        <x-home-offers />

        <!-- Section: Lo Último de Apple (Diseño Alternativo Moderno) -->
        <x-home-apple-latest />

        <!-- Section: Aromas que Enamoran (Diseño Alternativo Moderno) -->
        <x-home-perfumes />
        
        <!-- Section: Bloques por Categoría -->
        <x-home-footwear />

        <!-- Section: Testimonios -->
        <x-home-testimonies />

        <!-- Section: Propuesta de Valor -->
        <x-home-proposition-value />

        <!-- Section: Newsletter -->
        <x-home-news-letter />

    </main>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-gray-800 dark:bg-black text-gray-400 py-10 mt-auto transition-colors duration-300">
        <div class="container mx-auto px-4 text-center">
            &copy; {{ date('Y') }} Mi Tienda. Todos los derechos reservados.
        </div>
    </footer>

@stop
