<?php include './includes/main.php'; ?>

<section>
    <article>
        <?php
        // Utilizando echo para imprimir una cadena de texto simple
        echo 'Hola mundo';

        // Utilizando echo con paréntesis para imprimir una cadena de texto con formato HTML
        echo '<h1>Hola mundo</h1>';

        // Utilizando print para imprimir una cadena de texto simple
        print 'Hola mundo';

        // Utilizando print con paréntesis para imprimir una cadena de texto simple
        print('Hola mundo');

        // Utilizando print_r para imprimir una cadena de texto
        // print_r se usa principalmente para imprimir arreglos y objetos, pero también puede usarse para cadenas de texto
        print_r('Hola mundo');

        // Utilizando var_dump para obtener información detallada sobre una variable
        // En este caso, nos mostrará información sobre el valor 20, incluyendo su tipo (int) y valor
        var_dump(20);

        // Ejemplos adicionales de var_dump para diferentes tipos de datos
        var_dump('Hola mundo'); // Cadena de texto
        var_dump(3.14); // Número de punto flotante (float)
        var_dump(true); // Valor booleano (true)
        var_dump(array(1, 2, 3)); // Arreglo

        // Se utiliza con más frecuencia echo para imprimir texto y var_dump para obtener información sobre variables
        ?>
    </article>
</section>

<?php include './includes/footer.php'; ?>