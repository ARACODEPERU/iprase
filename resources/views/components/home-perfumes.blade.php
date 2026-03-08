<div>
    


                    <!-- Section: Aromas que Enamoran (Diseño Alternativo Moderno) -->
                    <section class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
                        <!-- Grid principal -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                            <!-- Columna Izquierda: Contenido y Productos Pequeños -->
                            <div class="order-2 lg:order-1 text-center lg:text-left">
                                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-4">Aromas que
                                    Enamoran</h2>
                                <p class="text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0">Cada fragancia cuenta una historia.
                                    Descubre la tuya en nuestra colección exclusiva de perfumes árabes y de diseñador.</p>

                                <!-- Mini-grid de productos -->
                                <div class="grid grid-cols-2 gap-4 mb-8 max-w-md mx-auto lg:mx-0">
                                    <!-- Mini Card 1 -->
                                    <a href="#"
                                        class="bg-gray-50 rounded-lg p-4 text-center group hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                                        <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?q=80&w=1904&auto=format&fit=crop"
                                            alt="Perfume 1"
                                            class="h-24 mx-auto mb-3 object-contain transition-transform duration-300">
                                        <h5 class="font-semibold text-sm text-gray-700">Lattafa Khamrah</h5>
                                        <p class="text-xs text-gray-500">Unisex</p>
                                    </a>
                                    <!-- Mini Card 2 -->
                                    <a href="#"
                                        class="bg-gray-50 rounded-lg p-4 text-center group hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                                        <img src="https://images.unsplash.com/photo-1523293182086-7651a899d37f?q=80&w=2070&auto=format&fit=crop"
                                            alt="Perfume 2"
                                            class="h-24 mx-auto mb-3 object-contain transition-transform duration-300">
                                        <h5 class="font-semibold text-sm text-gray-700">Club de Nuit</h5>
                                </div>

                                <a href="#"
                                    class="bg-gray-800 text-white font-bold py-3 px-8 rounded-lg hover:bg-primary transition-colors inline-block shadow-lg">
                                    <a href="#"
                                        class="bg-gray-800 dark:bg-gray-700 text-white font-bold py-3 px-8 rounded-lg hover:bg-primary transition-colors inline-block shadow-lg">
                                    </a>
                            </div>

                            <!-- Columna Derecha: Imagen Hero -->
                            <div
                                class="order-1 lg:order-2 h-96 md:h-[500px] relative rounded-xl overflow-hidden shadow-2xl group">
                                <img src="https://images.unsplash.com/photo-1557175326-0ee2149a8c24?q=80&w=1974&auto=format&fit=crop"
                                    alt="Colección de Perfumes"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-l from-black/20 to-transparent"></div>
                                <div
                                    class="absolute top-6 right-6 bg-white/80 backdrop-blur-sm p-4 rounded-lg text-center shadow-lg">
                                    <p class="font-bold text-gray-800 dark:text-white">Fragancias</p>
                                    <p class="text-2xl font-extrabold text-primary">Exclusivas</p>
                                </div>
                            </div>

                        </div>
                    </section>


                    <!-- Section: Bloques por Categoría -->

                    <section class="py-12 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
                        <div class="container mx-auto px-4 space-y-16">
                            <!-- Bloque 3: Calzado (Diseño Moderno) -->
                            <div>
                                <div class="flex flex-col md:flex-row gap-8">
                                    <!-- Banner Vertical (Izquierda) -->
                                    <div
                                        class="md:w-1/4 relative rounded-2xl overflow-hidden group min-h-[400px] shadow-lg">
                                        <img src="https://images.unsplash.com/photo-1552346154-21d32810aba3?q=80&w=2070&auto=format&fit=crop"
                                            alt="Lifestyle Sneakers"
                                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                        <div
                                            class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-colors">
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
                                            <div
                                                class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100 relative">
                                                <div
                                                    class="bg-white dark:bg-gray-800 rounded-2xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100 dark:border-gray-700 relative">
                                                    @if ($i === 1)
                                                        <span
                                                            class="absolute top-4 left-4 bg-black text-white text-[10px] font-bold px-2 py-1 rounded uppercase z-10">Nuevo</span>
                                                    @endif

                                                    <!-- Imagen con Hover -->
                                                    <div class="h-48 rounded-xl bg-gray-50 mb-4 relative overflow-hidden">
                                                        <div
                                                            class="h-48 rounded-xl bg-gray-50 dark:bg-gray-700 mb-4 relative overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?q=80&w=2025&auto=format&fit=crop"
                                                                class="w-full h-full object-cover mix-blend-multiply transition-transform duration-500 group-hover:scale-110"
                                                                alt="Zapatilla">

                                                            <!-- Acciones Flotantes -->
                                                            <div
                                                                class="absolute bottom-3 right-3 flex space-x-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                                                <button
                                                                    class="bg-white text-gray-900 w-8 h-8 rounded-full shadow-md flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                                                                    title="Añadir al Carrito">
                                                                    <button
                                                                        class="bg-white dark:bg-gray-600 text-gray-900 dark:text-white w-8 h-8 rounded-full shadow-md flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                                                                        title="Añadir al Carrito">
                                                                        <i class="fas fa-shopping-bag text-xs"></i>
                                                                        <button
                                                                            class="bg-white text-gray-900 w-8 h-8 rounded-full shadow-md flex items-center justify-center hover:text-red-500 transition-colors"
                                                                            title="Favoritos">
                                                                            <button
                                                                                class="bg-white dark:bg-gray-600 text-gray-900 dark:text-white w-8 h-8 rounded-full shadow-md flex items-center justify-center hover:text-red-500 transition-colors"
                                                                                title="Favoritos">
                                                                                <i class="far fa-heart text-xs"></i>
                                                            </div>

                                                            <!-- Info -->
                                                            <div>
                                                                <p class="text-xs text-gray-400 mb-1">Urban</p>
                                                                <h4
                                                                    class="font-bold text-gray-800 text-lg mb-1 group-hover:text-primary transition-colors">
                                                                    Nike Air Jordan {{ $i }}</h4>
                                                                <div class="flex justify-between items-center">
                                                                    <p class="text-xl font-bold text-gray-900">S/.
                                                                        {{ 350 + $i * 50 }}.00</p>
                                                                    <p
                                                                        class="text-xl font-bold text-gray-900 dark:text-white">
                                                                        S/. {{ 350 + $i * 50 }}.00</p>
                                                                    <div class="flex text-yellow-400 text-xs">
                                                                        <i class="fas fa-star"></i><i
                                                                            class="fas fa-star"></i><i
                                                                            class="fas fa-star"></i><i
                                                                            class="fas fa-star"></i><i
                                                                            class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!-- Section: Testimonios -->
                    <section class="py-16 bg-white dark:bg-gray-900 transition-colors duration-300">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white text-center mb-12 transition-colors">
                            Lo que dicen nuestros clientes
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl shadow-sm transition-colors duration-300">
                                <div class="flex text-yellow-400 mb-4">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-6 italic">"Excelentes precios en zapatillas.
                                    Encontré modelos que no veía en otras tiendas. El envío fue rápido."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 bg-gray-300 dark:bg-gray-600 rounded-full flex items-center justify-center text-gray-600 dark:text-gray-200 font-bold mr-3">
                                        JL</div>
                                <div>
                                    <h5 class="font-bold text-gray-800 dark:text-white text-sm">Maria Perez</h5>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Arequipa, Perú</p>
                                </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl shadow-sm transition-colors duration-300">
                                <div class="flex text-yellow-400 mb-4">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-6 italic">"Excelentes precios en zapatillas.
                                    Encontré modelos que no veía en otras tiendas. El envío fue rápido."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 bg-gray-300 dark:bg-gray-600 rounded-full flex items-center justify-center text-gray-600 dark:text-gray-200 font-bold mr-3">
                                        JL</div>
                                <div>
                                    <h5 class="font-bold text-gray-800 dark:text-white text-sm">Maria Perez</h5>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Arequipa, Perú</p>
                                </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl shadow-sm transition-colors duration-300">
                                <div class="flex text-yellow-400 mb-4">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-6 italic">"Excelentes precios en zapatillas.
                                    Encontré modelos que no veía en otras tiendas. El envío fue rápido."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 bg-gray-300 dark:bg-gray-600 rounded-full flex items-center justify-center text-gray-600 dark:text-gray-200 font-bold mr-3">
                                        JL</div>
                                <div>
                                    <h5 class="font-bold text-gray-800 dark:text-white text-sm">Maria Perez</h5>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Arequipa, Perú</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section: Propuesta de Valor -->
                    <section class="py-12 border-t border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-900 transition-colors duration-300">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-100 dark:divide-gray-800">
                            <div class="py-4 md:py-0">
                                <div class="text-primary text-4xl mb-4 inline-block"><i class="fas fa-truck"></i></div>
                                <h4 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">Envíos a todo el Perú</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-sm max-w-xs mx-auto">
                                    Recibe tu pedido donde
                                    estés, rápido y seguro con nuestros partners logísticos.
                                </p>
                            </div>
                            <div class="py-4 md:py-0">
                                <div class="text-primary text-4xl mb-4 inline-block"><i class="fas fa-shield-alt"></i>
                                </div>
                                <h4 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">Compra 100% Segura</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-sm max-w-xs mx-auto">Tus pagos y datos están protegidos con
                                    encriptación SSL de grado bancario.</p>
                            </div>
                            <div class="py-4 md:py-0">
                                <div class="text-primary text-4xl mb-4 inline-block"><i class="fas fa-check-circle"></i>
                                </div>
                                <h4 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">Garantía de Originalidad
                                </h4>
                                <p class="text-gray-500 dark:text-gray-400 text-sm max-w-xs mx-auto">Todos nuestros
                                    productos son auténticos, sellados y con garantía de fábrica.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Section: Newsletter -->
                    <section class="py-16 bg-gray-900 dark:bg-black text-white relative overflow-hidden transition-colors duration-300">
                        <div class="absolute inset-0 opacity-10"
                            style="background-image: radial-gradient(#4B5563 1px, transparent 1px); background-size: 20px 20px;">
                        </div>

                        <div class="container mx-auto px-4 text-center relative z-10">
                            <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Mantente al
                                día</span>
                            <h2 class="text-3xl md:text-4xl font-bold mb-4">Únete a nuestro Club Exclusivo</h2>
                            <p class="text-gray-400 mb-8 max-w-2xl mx-auto text-lg">Suscríbete para recibir ofertas
                                exclusivas, novedades de lanzamientos y un <span class="text-white font-bold">10% de
                                    descuento</span> en tu primera compra.</p>

                            <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-3">
                                <input type="email" placeholder="Tu correo electrónico"
                                    class="flex-grow px-5 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary w-full">
                                <button type="button"
                                    class="bg-primary hover:bg-white hover:text-primary text-white font-bold px-8 py-3 rounded-lg transition-colors shadow-lg w-full sm:w-auto">
                                    Suscribirse
                                </button>
                            </form>
                            <p class="text-gray-500 text-xs mt-4">Al suscribirte aceptas nuestros términos y condiciones.
                            </p>
                        </div>
                    </section>
</div>