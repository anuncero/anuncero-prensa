# Anuncero Prensa

**Anuncero Prensa** es un template (tema) para WordPress desarrollado desde cero con estándares modernos de ingeniería de software (principios SOLID), diseñado específicamente para portales de noticias, medios y blogs. 

## Características

- **Diseño Moderno y Profesional:** Orientado a medios de comunicación, con una excelente jerarquía visual y tipográfica.
- **Mobile-First & Responsivo:** Adaptado completamente a dispositivos móviles, tablets y escritorios.
- **SEO Optimizado:** Estructura semántica en HTML5 (uso de `<article>`, `<main>`, `<aside>`, etc.) e inyección automática de metadatos Open Graph y Twitter Cards directamente en el `<head>`.
- **Arquitectura Limpia:** Organización modular con separación de lógicas (funciones, hooks y estilos en `/inc/` y `/assets/`), evitando un `functions.php` saturado.
- **Performance de Vanguarda:** Carga ligera, cumpliendo con buenas prácticas para Google Core Web Vitals, sin scripts bloqueantes.
- **Licencia MIT:** Código abierto y seguro para su uso.

## Estructura de Directorios

- `/assets/`: Contiene los archivos estáticos (`css`, `js`, `images`).
- `/inc/`: Módulos de lógica PHP (configuración de soporte del tema, encolado de scripts, generación de SEO, etc).
- Raíz: Archivos base del template requeridos por WordPress (`style.css`, `index.php`, `functions.php`, etc.).

## Instalación

1. Clona o descarga el repositorio dentro del directorio `wp-content/themes/` de tu instalación de WordPress:
   ```bash
   git clone <URL_DEL_REPOSITORIO> wp-content/themes/anuncero-prensa
   ```
2. Ve a la sección **Apariencia > Temas** en tu panel de administración de WordPress.
3. Encuentra "Anuncero Prensa" y haz clic en **Activar**.

## Tecnologías Utilizadas
- WordPress Theme API
- HTML5 & CSS3 Vanilla
- JavaScript Moderno (ES6)

## Autoría
Desarrollado por **Anuncero**.

## Licencia
Este proyecto está licenciado bajo la licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.
