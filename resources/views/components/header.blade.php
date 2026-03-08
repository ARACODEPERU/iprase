<div>
    <header class="w-full bg-white dark:bg-gray-900 shadow-sm transition-colors duration-300">

        <!-- 1. BARRA SUPERIOR (Top Bar) -->
        <div class="bg-gray-900 dark:bg-black text-gray-300 text-xs py-2 transition-colors duration-300">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <!-- Izquierda: Contacto / Mensaje -->
                <div class="flex items-center space-x-4">
                    <span class="hidden sm:inline hover:text-white cursor-pointer">
                        <i class="fas fa-phone-alt mr-1"></i> +51 999 999 999
                    </span>
                    <span class="hidden sm:inline text-gray-600">|</span>
                    <span class="hover:text-white cursor-pointer">
                        <i class="fas fa-truck mr-1"></i> Envío gratis en pedidos > S/. 200
                    </span>
                </div>
                <!-- Derecha: Moneda / Redes -->
                <div class="flex items-center space-x-4">
                    <div class="cursor-pointer hover:text-white flex items-center">
                        <span>S/. PEN</span> <i class="fas fa-chevron-down ml-1 text-[10px]"></i>
                    </div>
                    <div class="w-px h-3 bg-gray-700 hidden sm:block"></div>
                    <div class="flex space-x-3">
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. CONTENEDOR PRINCIPAL (Main Header) -->
        <div class="container mx-auto px-4 py-4 flex justify-between items-center gap-4">

            <!-- Logo -->
            <a href="/" class="flex-shrink-0 text-2xl font-bold text-primary tracking-tight">
                <i class="fas fa-shopping-bag mr-2"></i>
                MI TIENDA
            </a>

            <!-- Barra de Búsqueda -->
            <div class="hidden md:flex flex-grow max-w-2xl mx-auto relative">
                <input type="text"
                    class="w-full pl-4 pr-24 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                    placeholder="¿Qué estás buscando hoy?">
                <button
                    class="absolute right-1 top-1 bottom-1 bg-primary text-white px-6 rounded-md hover:bg-secondary transition-colors font-medium">
                    Buscar
                </button>
            </div>

            <!-- Iconos de Acción -->
            <div class="flex items-center space-x-6">
                <a href="#" class="text-gray-600 hover:text-primary">
                    <i class="far fa-user text-2xl"></i>
                </a>
                <a href="#"
                    class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary relative transition-colors">
                    <i class="far fa-heart text-2xl"></i>
                    <span
                        class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold h-4 w-4 flex items-center justify-center rounded-full">0</span>
                </a>
                <a href="#" class="text-gray-600 hover:text-primary relative">
                    <i class="fas fa-shopping-cart text-2xl"></i>
                    <span
                        class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold h-5 w-5 flex items-center justify-center rounded-full border-2 border-white">2</span>
                </a>
            </div>
        </div>

        <!-- 3. BARRA DE NAVEGACIÓN (Nav Bar) -->
        <nav class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <div class="container mx-auto px-4 flex justify-between items-center h-12">
                <div class="flex items-center">
                    <div class="relative group z-50">
                        <button class="bg-primary text-white px-5 h-12 flex items-center font-bold text-sm uppercase">
                            <i class="fas fa-bars mr-3"></i> Todas las Categorías
                        </button>

                        <div
                            class="absolute top-full left-0 w-64 bg-white dark:bg-gray-800 text-gray-800 dark:text-white shadow-xl rounded-b-lg hidden group-hover:block border dark:border-gray-700">
                            <a href="#"
                                class="block px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">Tecnología</a>
                            <a href="#"
                                class="block px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">Moda</a>
                            <a href="#"
                                class="block px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">Hogar</a>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center space-x-6 ml-6">
                        <a href="#"
                            class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary font-medium transition-colors">Novedades</a>
                        <a href="#"
                            class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary font-medium transition-colors">Contacto</a>
                    </div>
                </div>
                <a href="#" class="text-red-500 font-bold text-sm hover:text-red-700 animate-pulse">
                    <i class="fas fa-fire-alt mr-2"></i> OFERTAS
                </a>
            </div>
        </nav>
    </header>

    <!-- Botón Flotante para Modo Oscuro (Mejora de UX) -->
    <button onclick="toggleDarkMode()" 
        class="fixed bottom-8 right-8 z-50 w-14 h-14 bg-gray-800 dark:bg-yellow-400 text-white dark:text-gray-900 rounded-full shadow-lg flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-xl focus:outline-none"
        aria-label="Cambiar modo oscuro/claro">
        <i class="fas fa-moon text-2xl dark:hidden"></i>
        <i class="fas fa-sun text-2xl hidden dark:inline"></i>
    </button>

    <script>
        // Función para alternar entre el modo claro y oscuro.
        function toggleDarkMode() {
            if (localStorage.getItem('theme') === 'dark') {
                // Si está oscuro, cambiar a claro.
                localStorage.setItem('theme', 'light');
                document.documentElement.classList.remove('dark');
            } else {
                // Si está claro (o no está definido), cambiar a oscuro.
                localStorage.setItem('theme', 'dark');
                document.documentElement.classList.add('dark');
            }
        }

        // La lógica para establecer el tema inicial se ha movido a `layouts/webpage.blade.php`
        // para evitar el "destello" de contenido al cargar la página.
    </script>
</div>
