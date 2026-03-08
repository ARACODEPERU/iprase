<div>
    <!-- Estilos CSS para el Slider -->
        <style>
            /* Ocultamos los inputs de radio que controlan el estado */
            .slider-radio {
                display: none;
            }

            /* Estilo base para cada slide: oculto y con transición */
            .slide {
                position: absolute;
                inset: 0;
                opacity: 0;
                transition: opacity 0.7s ease-in-out;
                z-index: 1;
            }

            /* Lógica principal: Cuando un radio está :checked, mostramos el slide correspondiente */
            #slide-1:checked~.slides .slide-1,
            #slide-2:checked~.slides .slide-2,
            #slide-3:checked~.slides .slide-3 {
                opacity: 1;
                z-index: 2;
            }

            /* Estilo para los puntos de navegación activos */
            #slide-1:checked~.slider-dots label[for="slide-1"],
            #slide-2:checked~.slider-dots label[for="slide-2"],
            #slide-3:checked~.slider-dots label[for="slide-3"] {
                background-color: #F59E0B;
                /* Color primario (primary) */
                width: 2rem;
                /* 32px */
            }
        </style>

        <!-- Hero Slider Section -->
        <section class="relative w-full h-[500px] md:h-[600px] overflow-hidden bg-gray-900 dark:bg-black">
            <input type="radio" name="slider" id="slide-1" class="slider-radio" checked>
            <input type="radio" name="slider" id="slide-2" class="slider-radio">
            <input type="radio" name="slider" id="slide-3" class="slider-radio">

            <!-- Contenedor de Slides -->
            <div class="slides">
                <!-- Slide 1 -->
                <div class="slide slide-1">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2070&auto=format&fit=crop"
                        alt="Nueva Colección 2025" class="w-full h-full object-cover opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute inset-0 flex items-center">
                        <div class="container mx-auto px-4">
                            <div class="max-w-2xl text-white space-y-6">
                                <h2 class="text-4xl md:text-6xl font-bold leading-tight">Nueva Colección 2025</h2>
                                <p class="text-lg md:text-xl text-gray-200">Descubre las últimas tendencias en moda y
                                    tecnología.</p>
                                <a href="#"
                                    class="inline-block bg-primary hover:bg-white hover:text-primary text-white font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1">
                                    Ver Más <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide slide-2">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop"
                        alt="Tecnología de Punta" class="w-full h-full object-cover opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute inset-0 flex items-center">
                        <div class="container mx-auto px-4">
                            <div class="max-w-2xl text-white space-y-6">
                                <h2 class="text-4xl md:text-6xl font-bold leading-tight">Tecnología de Punta</h2>
                                <p class="text-lg md:text-xl text-gray-200">Equipa tu hogar y oficina con los mejores
                                    gadgets.</p>
                                <a href="#"
                                    class="inline-block bg-primary hover:bg-white hover:text-primary text-white font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1">
                                    Ver Más <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide slide-3">
                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?q=80&w=2070&auto=format&fit=crop"
                        alt="Ofertas de Temporada" class="w-full h-full object-cover opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute inset-0 flex items-center">
                        <div class="container mx-auto px-4">
                            <div class="max-w-2xl text-white space-y-6">
                                <h2 class="text-4xl md:text-6xl font-bold leading-tight">Ofertas de Temporada</h2>
                                <p class="text-lg md:text-xl text-gray-200">Aprovecha hasta un 50% de descuento en
                                    seleccionados.</p>
                                <a href="#"
                                    class="inline-block bg-primary hover:bg-white hover:text-primary text-white font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1">
                                    Ver Más <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination Dots -->
            <div class="slider-dots absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10">
                <label for="slide-1"
                    class="h-3 w-3 bg-white/50 hover:bg-white rounded-full cursor-pointer transition-all duration-300"></label>
                <label for="slide-2"
                    class="h-3 w-3 bg-white/50 hover:bg-white rounded-full cursor-pointer transition-all duration-300"></label>
                <label for="slide-3"
                    class="h-3 w-3 bg-white/50 hover:bg-white rounded-full cursor-pointer transition-all duration-300"></label>
            </div>
        </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const radios = document.querySelectorAll('input[name="slider"]');
            if (radios.length === 0) return;

            let currentIndex = 0;
            let interval;

            const nextSlide = () => {
                radios[currentIndex].checked = false;
                currentIndex = (currentIndex + 1) % radios.length;
                radios[currentIndex].checked = true;
            };

            const startAutoSlide = () => {
                interval = setInterval(nextSlide, 3000); // Cambia cada 3 segundos
            };

            const stopAutoSlide = () => {
                clearInterval(interval);
            };

            // Iniciar rotación automática
            startAutoSlide();

            // Pausar si el usuario pasa el mouse por encima para mejorar la UX
            const sliderSection = radios[0].closest('section');
            sliderSection.addEventListener('mouseenter', stopAutoSlide);
            sliderSection.addEventListener('mouseleave', startAutoSlide);

            // Actualizar índice si el usuario cambia manualmente (clic en los puntos)
            radios.forEach((radio, index) => {
                radio.addEventListener('change', () => {
                    if (radio.checked) {
                        currentIndex = index;
                        stopAutoSlide();
                        startAutoSlide();
                    }
                });
            });
        });
    </script>
</div>