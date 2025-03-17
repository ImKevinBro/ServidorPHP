<?php
$productos = [];

for ($i = 1; $i <= 50; $i++) {
    $productos[] = [
        "nombre" => "Producto $i",
        "descripcion" => "Descripción breve del producto $i.",
        "imagen" => "imagenes/producto$i.jpg", // Asegúrate de tener imágenes en la carpeta 'imagenes'
        "precio" => rand(50, 1000) . " USD"
    ];
}


$productos = [
    [
        "nombre" => "Laptop Gamer",
        "descripcion" => "Potente laptop para juegos con tarjeta gráfica RTX.",
        "imagen" => "imagenes/laptop-gamer.jpg",
        "precio" => "1200 USD"
    ],
    [
        "nombre" => "Smartphone Pro",
        "descripcion" => "Teléfono con pantalla OLED y cámara de 108 MP.",
        "imagen" => "imagenes/tel.jpg",
        "precio" => "999 USD"
    ],
    [
        "nombre" => "Auriculares Bluetooth",
        "descripcion" => "Auriculares con cancelación de ruido y sonido HD.",
        "imagen" => "imagenes/auriculares.jpg",
        "precio" => "150 USD"
    ],
    [
        "nombre" => "Monitor 4K",
        "descripcion" => "Monitor de alta definición ideal para diseño y gaming.",
        "imagen" => "imagenes/monitor.jpg",
        "precio" => "400 USD"
    ],
    [
        "nombre" => "Teclado Mecánico",
        "descripcion" => "Teclado RGB con switches mecánicos para gaming.",
        "imagen" => "imagenes/teclado.jpg",
        "precio" => "120 USD"
    ],








    [
        "nombre" => "Servidor IOS",
        "descripcion" => "Servidor IOS4 listo para conectar y ejecutar.",
        "imagen" => "imagenes/ios.jpg",
        "precio" => "300 USD"
    ],
    [
        "nombre" => "Servicio de nube ",
        "descripcion" => "Sevicio de 50Teras de memoria para la nube",
        "imagen" => "imagenes/nube.jpg",
        "precio" => "1999 USD"
    ],
    [
        "nombre" => "Router Lenovo",
        "descripcion" => "Auriculares con cancelación de ruido y sonido HD.",
        "imagen" => "imagenes/router1.jpg",
        "precio" => "550 USD"
    ],
    [
        "nombre" => "Libro sistemas distribuidos",
        "descripcion" => "Libro sobre sistema distribuidos.",
        "imagen" => "imagenes/libro1.jpg",
        "precio" => "30 USD"
    ],
    [
        "nombre" => "Router de alta calidad",
        "descripcion" => "Rouer con switches mecánicos para gaming.",
        "imagen" => "imagenes/router2.jpg",
        "precio" => "120 USD"
    ],



    [
        "nombre" => "Libro sobre Sistemas distribuidos",
        "descripcion" => "Libro en ingles sobre los sitemas distribuidos",
        "imagen" => "imagenes/libro3.jpg",
        "precio" => "300 USD"
    ],
    [
        "nombre" => "Servicio de nube ",
        "descripcion" => "Sevicio de 10Teras de memoria para la nube",
        "imagen" => "imagenes/nube2.jpg",
        "precio" => "1999 USD"
    ],
    [
        "nombre" => "Servidor Automatizado",
        "descripcion" => "Servidor con refrigeracion integrada ",
        "imagen" => "imagenes/servidor3.jpg",
        "precio" => "550 USD"
    ],
    [
        "nombre" => "Libro sistemas distribuidos",
        "descripcion" => "Libro sobre sistema distribuidos.",
        "imagen" => "imagenes/libro2.jpg",
        "precio" => "30 USD"
    ],
    [
        "nombre" => "Router de alta calidad",
        "descripcion" => "Rouer con switches mecánicos util para servidores fisicos",
        "imagen" => "imagenes/images.jpg",
        "precio" => "120 USD"
    ],








    [
        "nombre" => "Laptop Gamer",
        "descripcion" => "Potente laptop para juegos con tarjeta gráfica RTX.",
        "imagen" => "imagenes/laptop-gamer.jpg",
        "precio" => "1200 USD"
    ],
    [
        "nombre" => "Smartphone Pro",
        "descripcion" => "Teléfono con pantalla OLED y cámara de 108 MP.",
        "imagen" => "imagenes/tel.jpg",
        "precio" => "999 USD"
    ],
    [
        "nombre" => "Auriculares Bluetooth",
        "descripcion" => "Auriculares con cancelación de ruido y sonido HD.",
        "imagen" => "imagenes/auriculares.jpg",
        "precio" => "150 USD"
    ],
    [
        "nombre" => "Monitor 4K",
        "descripcion" => "Monitor de alta definición ideal para diseño y gaming.",
        "imagen" => "imagenes/monitor.jpg",
        "precio" => "400 USD"
    ],
    [
        "nombre" => "Teclado Mecánico",
        "descripcion" => "Teclado RGB con switches mecánicos para gaming.",
        "imagen" => "imagenes/teclado.jpg",
        "precio" => "120 USD"
    ],








    [
        "nombre" => "Servidor IOS",
        "descripcion" => "Servidor IOS4 listo para conectar y ejecutar.",
        "imagen" => "imagenes/ios.jpg",
        "precio" => "300 USD"
    ],
    [
        "nombre" => "Servicio de nube ",
        "descripcion" => "Sevicio de 50Teras de memoria para la nube",
        "imagen" => "imagenes/nube.jpg",
        "precio" => "1999 USD"
    ],
    [
        "nombre" => "Router Lenovo",
        "descripcion" => "Auriculares con cancelación de ruido y sonido HD.",
        "imagen" => "imagenes/router1.jpg",
        "precio" => "550 USD"
    ],
    [
        "nombre" => "Libro sistemas distribuidos",
        "descripcion" => "Libro sobre sistema distribuidos.",
        "imagen" => "imagenes/libro1.jpg",
        "precio" => "30 USD"
    ],
    [
        "nombre" => "Router de alta calidad",
        "descripcion" => "Rouer con switches mecánicos para gaming.",
        "imagen" => "imagenes/router2.jpg",
        "precio" => "120 USD"
    ],



    [
        "nombre" => "Libro sobre Sistemas distribuidos",
        "descripcion" => "Libro en ingles sobre los sitemas distribuidos",
        "imagen" => "imagenes/libro3.jpg",
        "precio" => "300 USD"
    ],
    [
        "nombre" => "Servicio de nube ",
        "descripcion" => "Sevicio de 10Teras de memoria para la nube",
        "imagen" => "imagenes/nube2.jpg",
        "precio" => "1999 USD"
    ],
    [
        "nombre" => "Servidor Automatizado",
        "descripcion" => "Servidor con refrigeracion integrada ",
        "imagen" => "imagenes/servidor3.jpg",
        "precio" => "550 USD"
    ],
    [
        "nombre" => "Libro sistemas distribuidos",
        "descripcion" => "Libro sobre sistema distribuidos.",
        "imagen" => "imagenes/libro2.jpg",
        "precio" => "30 USD"
    ],
    [
        "nombre" => "Router de alta calidad",
        "descripcion" => "Rouer con switches mecánicos util para servidores fisicos",
        "imagen" => "imagenes/images.jpg",
        "precio" => "120 USD"
    ],







    [
        "nombre" => "Laptop Gamer",
        "descripcion" => "Potente laptop para juegos con tarjeta gráfica RTX.",
        "imagen" => "imagenes/laptop-gamer.jpg",
        "precio" => "1200 USD"
    ],
    [
        "nombre" => "Smartphone Pro",
        "descripcion" => "Teléfono con pantalla OLED y cámara de 108 MP.",
        "imagen" => "imagenes/tel.jpg",
        "precio" => "999 USD"
    ],
    [
        "nombre" => "Auriculares Bluetooth",
        "descripcion" => "Auriculares con cancelación de ruido y sonido HD.",
        "imagen" => "imagenes/auriculares.jpg",
        "precio" => "150 USD"
    ],
    [
        "nombre" => "Monitor 4K",
        "descripcion" => "Monitor de alta definición ideal para diseño y gaming.",
        "imagen" => "imagenes/monitor.jpg",
        "precio" => "400 USD"
    ],
    [
        "nombre" => "Teclado Mecánico",
        "descripcion" => "Teclado RGB con switches mecánicos para gaming.",
        "imagen" => "imagenes/teclado.jpg",
        "precio" => "120 USD"
    ],








    [
        "nombre" => "Servidor IOS",
        "descripcion" => "Servidor IOS4 listo para conectar y ejecutar.",
        "imagen" => "imagenes/ios.jpg",
        "precio" => "300 USD"
    ],
    [
        "nombre" => "Servicio de nube ",
        "descripcion" => "Sevicio de 50Teras de memoria para la nube",
        "imagen" => "imagenes/nube.jpg",
        "precio" => "1999 USD"
    ],
    [
        "nombre" => "Router Lenovo",
        "descripcion" => "Auriculares con cancelación de ruido y sonido HD.",
        "imagen" => "imagenes/router1.jpg",
        "precio" => "550 USD"
    ],
    [
        "nombre" => "Libro sistemas distribuidos",
        "descripcion" => "Libro sobre sistema distribuidos.",
        "imagen" => "imagenes/libro1.jpg",
        "precio" => "30 USD"
    ],
    [
        "nombre" => "Router de alta calidad",
        "descripcion" => "Rouer con switches mecánicos para gaming.",
        "imagen" => "imagenes/router2.jpg",
        "precio" => "120 USD"
    ],



    [
        "nombre" => "Libro sobre Sistemas distribuidos",
        "descripcion" => "Libro en ingles sobre los sitemas distribuidos",
        "imagen" => "imagenes/libro3.jpg",
        "precio" => "300 USD"
    ],
    [
        "nombre" => "Servicio de nube ",
        "descripcion" => "Sevicio de 10Teras de memoria para la nube",
        "imagen" => "imagenes/nube2.jpg",
        "precio" => "1999 USD"
    ],
    [
        "nombre" => "Servidor Automatizado",
        "descripcion" => "Servidor con refrigeracion integrada ",
        "imagen" => "imagenes/servidor3.jpg",
        "precio" => "550 USD"
    ],
    [
        "nombre" => "Libro sistemas distribuidos",
        "descripcion" => "Libro sobre sistema distribuidos.",
        "imagen" => "imagenes/libro2.jpg",
        "precio" => "30 USD"
    ],
    [
        "nombre" => "Router de alta calidad",
        "descripcion" => "Rouer con switches mecánicos util para servidores fisicos",
        "imagen" => "imagenes/images.jpg",
        "precio" => "120 USD"
    ],



    [
        "nombre" => "Laptop Gamer",
        "descripcion" => "Potente laptop para juegos con tarjeta gráfica RTX.",
        "imagen" => "imagenes/laptop-gamer.jpg",
        "precio" => "1200 USD"
    ],
    [
        "nombre" => "Smartphone Pro",
        "descripcion" => "Teléfono con pantalla OLED y cámara de 108 MP.",
        "imagen" => "imagenes/tel.jpg",
        "precio" => "999 USD"
    ],
    [
        "nombre" => "Auriculares Bluetooth",
        "descripcion" => "Auriculares con cancelación de ruido y sonido HD.",
        "imagen" => "imagenes/auriculares.jpg",
        "precio" => "150 USD"
    ],
    [
        "nombre" => "Monitor 4K",
        "descripcion" => "Monitor de alta definición ideal para diseño y gaming.",
        "imagen" => "imagenes/monitor.jpg",
        "precio" => "400 USD"
    ],
    [
        "nombre" => "Teclado Mecánico",
        "descripcion" => "Teclado RGB con switches mecánicos para gaming.",
        "imagen" => "imagenes/teclado.jpg",
        "precio" => "120 USD"
    ],








    [
        "nombre" => "Servidor IOS",
        "descripcion" => "Servidor IOS4 listo para conectar y ejecutar.",
        "imagen" => "imagenes/ios.jpg",
        "precio" => "300 USD"
    ],
    [
        "nombre" => "Servicio de nube ",
        "descripcion" => "Sevicio de 50Teras de memoria para la nube",
        "imagen" => "imagenes/nube.jpg",
        "precio" => "1999 USD"
    ],
    [
        "nombre" => "Router Lenovo",
        "descripcion" => "Auriculares con cancelación de ruido y sonido HD.",
        "imagen" => "imagenes/router1.jpg",
        "precio" => "550 USD"
    ],
    [
        "nombre" => "Libro sistemas distribuidos",
        "descripcion" => "Libro sobre sistema distribuidos.",
        "imagen" => "imagenes/libro1.jpg",
        "precio" => "30 USD"
    ],
    [
        "nombre" => "Router de alta calidad",
        "descripcion" => "Rouer con switches mecánicos para gaming.",
        "imagen" => "imagenes/router2.jpg",
        "precio" => "120 USD"
    ],



    [
        "nombre" => "Libro sobre Sistemas distribuidos",
        "descripcion" => "Libro en ingles sobre los sitemas distribuidos",
        "imagen" => "imagenes/libro3.jpg",
        "precio" => "300 USD"
    ],
    [
        "nombre" => "Servicio de nube ",
        "descripcion" => "Sevicio de 10Teras de memoria para la nube",
        "imagen" => "imagenes/nube2.jpg",
        "precio" => "1999 USD"
    ],
    [
        "nombre" => "Servidor Automatizado",
        "descripcion" => "Servidor con refrigeracion integrada ",
        "imagen" => "imagenes/servidor3.jpg",
        "precio" => "550 USD"
    ],
    [
        "nombre" => "Libro sistemas distribuidos",
        "descripcion" => "Libro sobre sistema distribuidos.",
        "imagen" => "imagenes/libro2.jpg",
        "precio" => "30 USD"
    ],
    [
        "nombre" => "Router de alta calidad",
        "descripcion" => "Rouer con switches mecánicos util para servidores fisicos",
        "imagen" => "imagenes/images.jpg",
        "precio" => "120 USD"
    ],


];
?>