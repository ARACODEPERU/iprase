@extends('layouts.webpage')

@section('content')


    <!-- ================= HEADER ================= -->
    <x-header />

    <!-- ================= CONTENIDO DE LA PÁGINA ================= -->
    <main class="flex-grow bg-gray-50 dark:bg-gray-800 transition-colors duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Encabezado y Breadcrumbs -->
            <div>
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                Inicio
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Catálogo</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mt-4">Nuestro Catálogo</h1>
            </div>

            <!-- Contenido principal con filtros y productos -->
            <div class="lg:grid lg:grid-cols-4 lg:gap-8 mt-8">
                <!-- Columna de Filtros (Sidebar) -->
                <aside class="hidden lg:block lg:col-span-1">
                    <div class="sticky top-20">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Filtros</h2>
                        <form class="space-y-6">
                            <!-- Filtro por Categorías -->
                            <details class="group" open>
                                <summary class="flex items-center justify-between cursor-pointer text-gray-900 dark:text-white">
                                    <span class="font-medium">Categorías</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </span>
                                </summary>
                                <div class="mt-4 space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-3 text-sm text-gray-600 dark:text-gray-300">Tecnología</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-3 text-sm text-gray-600 dark:text-gray-300">Zapatillas</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-3 text-sm text-gray-600 dark:text-gray-300">Perfumes</span>
                                    </label>
                                </div>
                            </details>

                            <!-- Filtro por Marca -->
                            <details class="group" open>
                                <summary class="flex items-center justify-between cursor-pointer text-gray-900 dark:text-white">
                                    <span class="font-medium">Marca</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </span>
                                </summary>
                                <div class="mt-4 space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-3 text-sm text-gray-600 dark:text-gray-300">Apple</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-3 text-sm text-gray-600 dark:text-gray-300">Nike</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-3 text-sm text-gray-600 dark:text-gray-300">Puma</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-3 text-sm text-gray-600 dark:text-gray-300">Dior</span>
                                    </label>
                                </div>
                            </details>

                            <!-- Filtro por Precio -->
                            <details class="group" open>
                                <summary class="flex items-center justify-between cursor-pointer text-gray-900 dark:text-white">
                                    <span class="font-medium">Precio</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </span>
                                </summary>
                                <div class="mt-4">
                                    <input type="range" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <div class="flex justify-between text-sm text-gray-600 dark:text-gray-300 mt-2">
                                        <span>S/ 0</span>
                                        <span>S/ 5000+</span>
                                    </div>
                                </div>
                            </details>

                            <!-- Botones de acción -->
                            <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Aplicar Filtros
                                </button>
                                <button type="reset" class="w-full mt-2 bg-gray-200 text-gray-800 py-2 px-4 rounded-md hover:bg-gray-300 dark:bg-gray-600 dark:text-white dark:hover:bg-gray-500">
                                    Limpiar
                                </button>
                            </div>
                        </form>
                    </div>
                </aside>

                <!-- Columna de Productos -->
                <div class="lg:col-span-3">
                    <!-- Barra de herramientas de productos -->
                    <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                        <p class="text-sm text-gray-600 dark:text-gray-300">Mostrando <span class="font-bold">12</span> de <span class="font-bold">128</span> productos</p>
                        
                        <div class="flex items-center">
                            <label for="sort" class="text-sm font-medium text-gray-700 dark:text-gray-200 mr-2">Ordenar por:</label>
                            <select id="sort" name="sort" class="form-select text-sm rounded-md border-gray-300 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                                <option>Más relevantes</option>
                                <option>Nuevos lanzamientos</option>
                                <option>Precio: de menor a mayor</option>
                                <option>Precio: de mayor a menor</option>
                            </select>
                        </div>
                    </div>

                    <!-- Cuadrícula de Productos -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                        @php
                            // Datos de ejemplo para los productos
                            $products = [
                                [
                                    'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch-naturaltitanium?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1692845702708',
                                    'name' => 'iPhone 15 Pro',
                                    'price' => '4,899.00',
                                    'tag' => 'Nuevo'
                                ],
                                [
                                    'image' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b7d9211c-26e7-431a-ac24-b0540fb3c00f/calzado-air-force-1-07-z02s35.png',
                                    'name' => 'Nike Air Force 1 \'07',
                                    'price' => '429.00',
                                    'tag' => 'Oferta'
                                ],
                                [
                                    'image' => 'https://fimgs.net/mdimg/perfume/375x500.26764.jpg',
                                    'name' => 'Sauvage de Dior',
                                    'price' => '550.00',
                                    'tag' => null
                                ],
                                [
                                    'image' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/377064/04/sv01/fnd/PER/fmt/png/Zapatillas-de-running-para-hombre-Twitch-Runner',
                                    'name' => 'Puma Twitch Runner',
                                    'price' => '279.00',
                                    'tag' => null
                                ],
                                [
                                    'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MME73?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1632861342000',
                                    'name' => 'AirPods (3.ª generación)',
                                    'price' => '899.00',
                                    'tag' => null
                                ],
                                [
                                    'image' => 'https://fimgs.net/mdimg/perfume/375x500.75413.jpg',
                                    'name' => 'Invictus Victory Elixir',
                                    'price' => '480.00',
                                    'tag' => 'Nuevo'
                                ],
                            ];
                        @endphp

                        @foreach ($products as $product)
                            <!-- Tarjeta de Producto -->
                            <div class="group relative bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden bg-gray-200 dark:bg-gray-800 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                @if($product['tag'])
                                <span class="absolute top-2 left-2 bg-red-500 text-white text-xs font-semibold px-2 py-1 rounded-md">{{ $product['tag'] }}</span>
                                @endif
                                <div class="p-4 flex flex-col flex-grow">
                                    <h3 class="text-sm text-gray-700 dark:text-gray-200">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{ $product['name'] }}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900 dark:text-white">S/ {{ $product['price'] }}</p>
                                    <div class="mt-4 flex-grow"></div>
                                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                                        Añadir al carrito
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Paginación -->
                    <nav class="flex items-center justify-between border-t border-gray-200 dark:border-gray-700 px-4 sm:px-0 mt-10">
                        <div class="-mt-px flex w-0 flex-1">
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-gray-500 dark:hover:text-gray-200">
                                <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
                                </svg>
                                Anterior
                            </a>
                        </div>
                        <div class="hidden md:-mt-px md:flex">
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-gray-500 dark:hover:text-gray-200">1</a>
                            <a href="#" class="inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-indigo-600 dark:text-indigo-400" aria-current="page">2</a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-gray-500 dark:hover:text-gray-200">3</a>
                            <span class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 dark:text-gray-400">...</span>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-gray-500 dark:hover:text-gray-200">10</a>
                        </div>
                        <div class="-mt-px flex w-0 flex-1 justify-end">
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-gray-500 dark:hover:text-gray-200">
                                Siguiente
                                <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010-1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </main>

    <!-- ================= FOOTER ================= -->
    <x-footer />
@stop