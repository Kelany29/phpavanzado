# 💻 Laboratorio de Programación II - Tercer Parcial

Proyecto final de la Unidad 3 (PHP y MySQL Avanzado) correspondiente a la Tecnicatura Superior en Desarrollo de Software.

## ⚙️ Requisitos y Configuración
Para probar este proyecto en un entorno local (XAMPP/WAMP):
1. Clonar este repositorio en la carpeta `htdocs` (o `www`).
2. Activar la extensión `gd` en el archivo `php.ini` del servidor para habilitar el procesamiento de imágenes (Unidades 4 y 5).
3. Importar el archivo `phpavanzado.sql` en phpMyAdmin para generar la base de datos y sus tablas (`clases`, `consultas`, `productos`, `registro`).

## 📂 Estructura de Unidades Integradas
- **Unidad 1:** ABM de clases y conexión centralizada.
- **Unidad 2:** Cálculo dinámico de fechas mediante .
- **Unidad 3:** Sistema de comentarios persistentes en `.txt`.
- **Unidad 4:** GD Library (Marca de agua dinámica y Thumbnails).
- **Unidad 5:** Formulario seguro con validación de Captcha propio.
- **Unidad 6:** POO - Encapsulamiento y cálculo de edad privado.
- **Unidad 7:** POO - Administrador CRUD completo de productos.
- **Unidad 8:** POO - Registro y Login con contraseñas encriptadas.

## 🛡️ Seguridad Implementada
- Conexión a la base de datos centralizada.
- Implementación estricta de Sentencias Preparadas (Prepared Statements) en los CRUDs.
- Contraseñas almacenadas mediante algoritmos de hashing modernos.
- Prevención de acceso directo a propiedades de clase mediante visibilidad .