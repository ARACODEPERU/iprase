<div>
    <section class="py-12 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-4 space-y-16">
            <!-- Bloque 3: Calzado (Diseño Moderno) -->
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Banner Vertical (Izquierda) -->
                <div class="md:w-1/4 relative rounded-2xl overflow-hidden group min-h-[400px] shadow-lg">
                    <img src="https://images.unsplash.com/photo-1552346154-21d32810aba3?q=80&w=2070&auto=format&fit=crop"
                        alt="Lifestyle Sneakers"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-colors">
                    </div>
                    <div class="absolute bottom-0 left-0 p-6 w-full">
                        <h3 class="text-3xl font-extrabold text-white mb-2 italic">STREET<br>STYLE</h3>
                        <p class="text-gray-200 text-sm mb-6 line-clamp-2">Domina las calles con
                            nuestra nueva colección de zapatillas urbanas.</p>
                        <a href="#"
                            class="inline-flex items-center justify-center w-full bg-white text-black font-bold py-3 rounded-lg hover:bg-primary hover:text-white transition-colors">
                            Ver Todo <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Grid de Productos (Derecha) -->
                <div class="md:w-3/4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100 dark:border-gray-700 relative">
                            @if ($i === 1)
                                <span class="absolute top-4 left-4 bg-black text-white text-[10px] font-bold px-2 py-1 rounded uppercase z-10">Nuevo</span>
                            @endif

                            <!-- Imagen con Hover -->
                            <div class="h-48 rounded-xl bg-gray-50 dark:bg-gray-700 mb-4 relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?q=80&w=2025&auto=format&fit=crop"
                                    class="w-full h-full object-cover mix-blend-multiply dark:mix-blend-normal transition-transform duration-500 group-hover:scale-110"
                                    alt="Zapatilla">

                                <!-- Acciones Flotantes -->
                                <div class="absolute bottom-3 right-3 flex space-x-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                    <button class="bg-white dark:bg-gray-600 text-gray-900 dark:text-white w-8 h-8 rounded-full shadow-md flex items-center justify-center hover:bg-primary hover:text-white transition-colors" title="Añadir al Carrito">
                                        <i class="fas fa-shopping-bag text-xs"></i>
                                    </button>
                                    <button class="bg-white dark:bg-gray-600 text-gray-900 dark:text-white w-8 h-8 rounded-full shadow-md flex items-center justify-center hover:text-red-500 transition-colors" title="Favoritos">
                                        <i class="far fa-heart text-xs"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Info -->
                            <div>
                                <p class="text-xs text-gray-400 mb-1">Urban</p>
                                <h4 class="font-bold text-gray-800 dark:text-white text-lg mb-1 group-hover:text-primary transition-colors">
                                    Nike Air Jordan {{ $i }}
                                </h4>
                                <div class="flex justify-between items-center">
                                    <p class="text-xl font-bold text-gray-900 dark:text-white">
                                        S/. {{ 350 + $i * 50 }}.00
                                    </p>
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

        </div>
    </section>
</div>
