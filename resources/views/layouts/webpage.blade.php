<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda en Línea</title>

    <!-- Tailwind CSS (CDN para no usar Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Configuración de Tailwind para usar tus colores personalizados -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',   // Azul principal
                        secondary: '#1e40af', // Azul oscuro
                        accent: '#facc15',    // Amarillo ofertas
                    }
                }
            }
        }
    </script>

    <!-- Script para inicializar el modo oscuro/claro -->
    <script>
        // Este script se ejecuta de inmediato en el <head> para evitar el "destello" (FOUC).
        // Si la preferencia 'dark' está guardada en localStorage, aplica la clase 'dark' al <html>.
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            // De lo contrario (si es 'light' o no hay nada guardado), nos aseguramos de que la clase 'dark' no esté.
            // Esto establece el MODO CLARO como predeterminado en la primera visita.
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body class="bg-gray-50 font-sans text-gray-800 flex flex-col min-h-screen">
    @yield('content')


</body>

</html>
