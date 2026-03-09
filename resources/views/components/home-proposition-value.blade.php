@php
    $propositions = [
        [
            'icon' => 'fas fa-truck',
            'title' => 'Envíos a todo el Perú',
            'description' => 'Recibe tu pedido donde estés, rápido y seguro con nuestros partners logísticos.',
        ],
        [
            'icon' => 'fas fa-shield-alt',
            'title' => 'Compra 100% Segura',
            'description' => 'Tus pagos y datos están protegidos con encriptación SSL de grado bancario.',
        ],
        [
            'icon' => 'fas fa-check-circle',
            'title' => 'Garantía de Originalidad',
            'description' => 'Todos nuestros productos son auténticos, sellados y con garantía de fábrica.',
        ],
    ];
@endphp

<div>
    <!-- Section: Propuesta de Valor -->
    <section
        class="py-12 border-t border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-100 dark:divide-gray-800">
                @foreach ($propositions as $proposition)
                    <div class="py-4 md:py-0">
                        <div class="text-primary text-4xl mb-4 inline-block"><i class="{{ $proposition['icon'] }}"></i></div>
                        <h4 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">{{ $proposition['title'] }}</h4>
                        <p class="text-gray-500 dark:text-gray-400 text-sm max-w-xs mx-auto">{{ $proposition['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
