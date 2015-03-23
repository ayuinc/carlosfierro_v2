#### Notes from Wordpress Theme Development course @teamtreehouse

__Setup__
---

1. Creamos un folder dentro de __wp-content/themes/__ para el theme
2. Creamos 3 files principales: `style.css, index.php, functions.php`. 
3. El `style.css` es el archivo que contiene la meta información para que el tema se muestre en la lista de temas de nuestra instalación
4. Añadimos el `screenshot.png` que representa a nuestro tema en la lista.
5. Activamos el tema
6. Agregamos los estilos y los JS al estilo WP usando el functions.php
7. Añadimos el `footer.php y el header.php` files y los incrustamos en el index.php 
8. Completamos el header y el footer.php añadiendo funciones de referencia de WP para que sepa en donde empieza y termina el tag

__Templates__
---

1. Hay una naming convention: `page-template-name.php` para que estén ordenadas, sin embargo hay que usar un _comentario especial_ para que aparezcan en el page template dropdown.

__Navegación__
---

1. Agregar la función `add_theme_support( 'menus' );` y la configuración correspondiente en `functions.php` para activar los menús

__Custom post types__
---

1. Agregar plugin: Advanced Custom Fields y Custom Post Type UI. Con estos plugins creas Channels y Channel Fields como en expression engine. Por ejemplo: Proyectos. Después, channel fields que vinculas a proyectos. 
2. `functions.php` : `add_theme_support( 'post-thumbnails' );` es para poner 'featured images'

__Referencia__
---

- [Funciones para insertar en el `index.php` o en las páginas](http://codex.wordpress.org/Function_Reference)
- [The Wordpress Loop](http://codex.wordpress.org/The_Loop)
- [Para que el menú se active en el dashboard](http://codex.wordpress.org/Function_Reference/add_theme_support)
- [Opciones del menú incrustado en el HTML](http://codex.wordpress.org/Function_Reference/wp_nav_menu)