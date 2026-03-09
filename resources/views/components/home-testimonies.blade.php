<div>
    <!--
  NOTA: Para que este carrusel funcione, necesitas incluir Swiper.js en tu proyecto.
  Puedes hacerlo de dos maneras:

  1. A través de un CDN (más fácil para probar):
     Agrega esto en tu layout principal (ej. resources/views/layouts/app.blade.php) antes de cerrar la etiqueta </body>:
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  2. Usando NPM/Yarn (recomendado para producción):
     npm install swiper
     // Y luego en tu archivo app.js (o similar) lo importas y lo inicializas.
-->

    <section class="bg-gray-50 py-12 sm:py-16 lg:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Lo que dicen nuestros clientes
                </h2>
                <p class="mt-4 text-lg leading-8 text-gray-600">
                    Testimonios de personas y empresas que han confiado en nosotros.
                </p>
            </div>

            <!-- Contenedor de Swiper -->
            {{-- Para que el carrusel funcione, necesitarás pasar una variable $testimonials desde tu controlador
             con los datos. He incluido datos de ejemplo para que veas la estructura. --}}
            <div class="swiper mt-12 overflow-hidden">
                <div class="swiper-wrapper">
                    @php
                        // Datos de ejemplo. En un caso real, esto vendría de un controlador.
                        // Por ejemplo: $testimonials = Testimonial::latest()->take(8)->get();
                        $testimonials = [
                            [
                                'name' => 'Ana García',
                                'role' => 'Directora de Marketing, TechSolutions',
                                'avatar' => 'https://randomuser.me/api/portraits/women/44.jpg',
                                'quote' =>
                                    'El equipo superó nuestras expectativas. Su profesionalismo y atención al detalle fueron clave para el éxito de nuestro proyecto. ¡Totalmente recomendados!',
                            ],
                            [
                                'name' => 'Carlos Rodríguez',
                                'role' => 'CEO, Innovate Co.',
                                'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg',
                                'quote' =>
                                    'Trabajar con ellos ha sido una experiencia transformadora. Entendieron nuestra visión desde el primer día y la ejecutaron a la perfección.',
                            ],
                            [
                                'name' => 'Laura Martínez',
                                'role' => 'Gerente de Producto, AppFactory',
                                'avatar' => 'https://randomuser.me/api/portraits/women/65.jpg',
                                'quote' =>
                                    'La calidad del software que desarrollaron para nosotros es excepcional. Robustez, escalabilidad y una interfaz de usuario intuitiva. Excelente trabajo.',
                            ],
                            [
                                'name' => 'Javier Fernández',
                                'role' => 'Emprendedor',
                                'avatar' => 'https://randomuser.me/api/portraits/men/85.jpg',
                                'quote' =>
                                    'Como startup, necesitábamos un socio tecnológico confiable. No solo cumplieron, sino que nos guiaron en cada paso del camino. Un socio invaluable.',
                            ],
                            [
                                'name' => 'Sofía López',
                                'role' => 'Consultora Independiente',
                                'avatar' => 'https://randomuser.me/api/portraits/women/33.jpg',
                                'quote' =>
                                    'Su capacidad para resolver problemas complejos de forma creativa es impresionante. Siempre aportan soluciones innovadoras y eficientes.',
                            ],
                            [
                                'name' => 'David Sánchez',
                                'role' => 'CTO, DataCorp',
                                'avatar' => 'https://randomuser.me/api/portraits/men/46.jpg',
                                'quote' =>
                                    'La migración de nuestra infraestructura a la nube fue impecable gracias a su experiencia. Cero tiempo de inactividad y un rendimiento mejorado.',
                            ],
                            [
                                'name' => 'Elena Gómez',
                                'role' => 'Diseñadora UX/UI',
                                'avatar' => 'https://randomuser.me/api/portraits/women/12.jpg',
                                'quote' =>
                                    'Colaborar con su equipo de desarrollo fue un placer. Tienen un profundo respeto por el diseño y la experiencia de usuario, lo que se refleja en el producto final.',
                            ],
                            [
                                'name' => 'Miguel Torres',
                                'role' => 'Director de Operaciones, LogiTrack',
                                'avatar' => 'https://randomuser.me/api/portraits/men/22.jpg',
                                'quote' =>
                                    'El sistema de gestión que implementaron ha optimizado nuestros procesos en un 40%. Un impacto directo y medible en nuestro negocio.',
                            ],
                        ];
                    @endphp

                    @forelse ($testimonials as $testimonial)
                        <div class="swiper-slide p-4">
                            <figure class="flex h-full flex-col rounded-2xl bg-white p-8 shadow-lg">
                                <blockquote class="flex-grow text-gray-700">
                                    <p>“{{ $testimonial['quote'] }}”</p>
                                </blockquote>
                                <figcaption class="mt-8 flex items-center gap-x-4 border-t border-gray-900/10 pt-6">
                                    <img class="h-12 w-12 rounded-full bg-gray-50" src="{{ $testimonial['avatar'] }}"
                                        alt="Avatar de {{ $testimonial['name'] }}">
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ $testimonial['name'] }}</div>
                                        <div class="text-gray-600">{{ $testimonial['role'] }}</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    @empty
                        <div class="swiper-slide p-4">
                            <p class="text-center text-gray-500">No hay testimonios para mostrar.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Paginación -->
                <div class="swiper-pagination !relative !bottom-0 mt-8"></div>
            </div>
        </div>
    </section>


    @push('scripts')
        <script>
            // Asegúrate de que este script se ejecute después de que Swiper.js se haya cargado.
            document.addEventListener('DOMContentLoaded', function() {
                // --- Carrusel Original ---
                const swiper = new Swiper('.swiper', {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 40
                        },
                    }
                });

                // --- Carrusel Moderno ---
                const swiperModern = new Swiper('.swiper-modern', {
                    loop: true,
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    spaceBetween: 30,
                    autoplay: {
                        delay: 4500,
                        disableOnInteraction: false,
                    },
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 80,
                        depth: 200,
                        modifier: 1,
                        slideShadows: false,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            });
        </script>
    @endpush
</div>
