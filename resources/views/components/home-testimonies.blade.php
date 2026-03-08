<div>

    <!-- Section: Testimonios -->
    <section class="py-16 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white text-center mb-12 transition-colors">
                Lo que dicen nuestros clientes
            </h2>
            
            @php
                $testimonials = [
                    [
                        'name' => 'Maria Perez',
                        'location' => 'Arequipa, Perú',
                        'initials' => 'MP',
                        'text' => 'Excelentes precios en zapatillas. Encontré modelos que no veía en otras tiendas. El envío fue rápido.',
                        'stars' => 5
                    ],
                    [
                        'name' => 'Juan Lopez',
                        'location' => 'Lima, Perú',
                        'initials' => 'JL',
                        'text' => 'La atención al cliente es de primera. Me ayudaron a elegir el perfume perfecto para regalo.',
                        'stars' => 5
                    ],
                    [
                        'name' => 'Carlos Ruiz',
                        'location' => 'Trujillo, Perú',
                        'initials' => 'CR',
                        'text' => 'Compré un iPhone y llegó sellado y con garantía. Muy confiable, volveré a comprar.',
                        'stars' => 4
                    ]
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl shadow-sm transition-colors duration-300">
                    <div class="flex text-yellow-400 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < $testimonial['stars'])
                                <i class="fas fa-star"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 italic">"{{ $testimonial['text'] }}"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-300 dark:bg-gray-600 rounded-full flex items-center justify-center text-gray-600 dark:text-gray-200 font-bold mr-3">
                            {{ $testimonial['initials'] }}
                        </div>
                        <div>
                            <h5 class="font-bold text-gray-800 dark:text-white text-sm">{{ $testimonial['name'] }}</h5>
                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $testimonial['location'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
