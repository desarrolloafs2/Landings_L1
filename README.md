# 📚 Plataforma de Convocatorias de Cursos L1

Este proyecto es una **web informativa** sobre las convocatorias de cursos L1.  
Su objetivo es facilitar a los usuarios la búsqueda de cursos, la consulta de fechas de inicio, modalidades y horarios, así como el envío de solicitudes mediante un formulario de contacto.

---

## ✨ Características principales

✅ **Página principal con información general** sobre la formación L1.  
✅ **Listado de cursos** con tarjetas que muestran:  
- Imagen representativa  
- Nombre del curso  
- Horario y modalidad  
- Fecha de inicio  
- Duración en horas  

✅ **Formulario de contacto** para que los usuarios puedan solicitar información o inscribirse.  
✅ **Diseño responsive**: totalmente adaptable a móviles, tablets y escritorio.  
✅ **Secciones con fondos personalizados** e imágenes oficiales de los organismos colaboradores.  

---

## 🖼️ Estructura de la Web

La web está compuesta por las siguientes secciones:

1. **Hero Section**  
   - Imagen de portada  
   - Título y subtítulo  
   - Logo de la institución que subvenciona la formación  
   - Llamado a la acción (CTA)

2. **Sección de Ventajas**  
   - Lista de beneficios de los cursos en tarjetas con diseño minimalista.  

3. **Listado de Cursos**  
   - Tarjetas individuales por curso.  
   - Cada tarjeta incluye imagen, horario, modalidad, inicio y duración.  
   - Contenido organizado en dos columnas:  
     - **Izquierda:** Horario y modalidad  
     - **Derecha:** Inicio y duración  

4. **Formulario de Contacto**  
   - Campos de nombre, apellidos, email, teléfono, estudios previos y situación actual.  
   - Casilla de aceptación de condiciones legales.  
   - Botón de envío con diseño en gradiente y texto centrado.  

---

## 🛠️ Tecnologías utilizadas

- **HTML5** y **CSS3** → Maquetación y estilos.  
- **Bootstrap 5** → Sistema de grid y componentes responsive.  
- **Blade (Laravel)** → Plantillas dinámicas y helpers (`asset()`, `url()`).  
- **PHP** → Gestión del formulario y envío de datos.  

---

## 🚀 Instalación y Uso

Sigue estos pasos para instalar y ejecutar el proyecto en tu entorno local con Laragon:

- Clonar el repositorio en el visual Studio Code usando: git@github.com:desarrolloafs2/Landings_L1.git
- Añadir la carpeta del repositorio en C:\laragon\www
- En Laragon nos aparecerá en el apartado de root
- Abrir el terminal de Laragon y ejecutar el comando: php artisan serve
- La ruta en el navegador debe ser algo como: http://landings_l1.test/bootcamp-en-marketing-digital

