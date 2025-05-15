El servidor gestiona la ruta que entrega el menú de la siguiente manera:

1.  **Solicitud HTTP del Navegador**:
    *   Cuando haces clic en un enlace del menú, por ejemplo, `index.php?ruta=usuarios`, tu navegador envía una solicitud HTTP GET al servidor web donde está alojada tu aplicación.
    *   Esta solicitud le dice al servidor: "Quiero el recurso `index.php` y, además, te paso un parámetro llamado `ruta` con el valor `usuarios`".

2.  **Procesamiento por el Servidor Web (Ej: Apache, Nginx)**:
    *   El servidor web recibe esta solicitud.
    *   Está configurado para que, al recibir una solicitud para un archivo `.php` (como `index.php`), lo pase al intérprete de PHP para su procesamiento.

3.  **Ejecución del Script PHP (`index.php`)**:
    *   El intérprete de PHP comienza a ejecutar el script `index.php`.
    *   Dentro de PHP, los parámetros pasados en la URL a través del método GET están disponibles en una variable superglobal llamada `$_GET`. `$_GET` es un array asociativo.
    *   En tu caso, `$_GET` contendrá algo como: `array("ruta" => "usuarios")`.

4.  **Inclusión de la Plantilla (`vistas/plantilla.php`)**:
    *   Tu archivo `index.php` (implícita o explícitamente) incluye el archivo `vistas/plantilla.php`.
    *   Como `plantilla.php` se incluye dentro del ámbito de `index.php`, también tiene acceso a la variable `$_GET`.

5.  **Lógica de Enrutamiento en `plantilla.php`**:
    *   Dentro de `plantilla.php`, el siguiente bloque de código es crucial:

        ```php
        // filepath: c:\Users\garut\OneDrive\Documentos\Coding-Dojo\Baterias\inventario-php\vistas\plantilla.php
        // ...existing code...
        /*=============================================
        CONTENIDO
        =============================================*/

        if (isset($_GET["ruta"])) { // Verifica si el parámetro "ruta" fue enviado
          if (
            $_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" || // Compara el valor de $_GET["ruta"]
            // ... más comparaciones ...
          ) {
            // Si hay una coincidencia, construye la ruta al archivo del módulo
            include "modulos/" . $_GET["ruta"] . ".php"; // E incluye ese archivo
          } else {
            // Si "ruta" tiene un valor no reconocido
            include "modulos/404.php";
          }
        } else {
          // Si no se envió ningún parámetro "ruta"
          include "modulos/inicio.php";
        }
        // ...existing code...
        ```
    *   **`isset($_GET["ruta"])`**: Primero, comprueba si el parámetro `ruta` existe en la URL.
    *   **`$_GET["ruta"] == "usuarios"`**: Luego, compara el valor de `$_GET["ruta"]` con las rutas válidas definidas.
    *   **`include "modulos/" . $_GET["ruta"] . ".php";`**: Si se encuentra una ruta válida (por ejemplo, "usuarios"), PHP concatena "modulos/", el valor de la ruta ("usuarios"), y ".php" para formar la ruta completa al archivo del módulo (`modulos/usuarios.php`). La función `include` entonces ejecuta e inserta el contenido de ese archivo en el lugar donde se llama.

6.  **Envío de la Respuesta al Navegador**:
    *   Una vez que PHP ha procesado todo el script (`index.php` y todos los archivos incluidos como `plantilla.php` y `modulos/usuarios.php`), genera una página HTML completa.
    *   El servidor web envía esta página HTML de vuelta al navegador del usuario, que la renderiza para que la veas.

En esencia, el servidor no "gestiona" la ruta de forma activa como lo haría un framework con un sistema de enrutamiento complejo. Simplemente ejecuta el script PHP (`index.php`), y es este script el que, basándose en los parámetros de la URL (`$_GET["ruta"]`), decide qué fragmentos de código (módulos) incluir para construir la página final.