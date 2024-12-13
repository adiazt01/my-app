<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Prueba tecnica
Objetivo
Desarrollar un dashboard interactivo que permite configurar los datos claves de un doctor.

Entidades
Se tiene las siguientes entidades disponibles

Doctor (ID, Nombre completo, Teléfono, Ubicación, Especialidad, Servicios)
Ubicación (ID, Titulo) (Ejemplo: Ciudad Guayana, San Felix, etc)
Especialidad (ID, Titulo) (Ejemplo: Cardiologia, Dermatologia, etc)
Servicios (ID, ID Especialidad, Título)(Ejemplo: Citología,Eco doppler, Eco pélvico)
Pacientes (ID, Nombre completo, Teléfono)
Citas (ID, Titulo, Fecha Cita, Hora Cita, Doctor, Paciente)


Relaciones
Se posee las siguientes relaciones:

Un doctor posee una sola ubicación
Una ubicación puede estar en varios doctores
Un doctor posee una sola especialidad
Una especialidad puede estar en múltiples doctores
Una especialidad puede tener múltiples servicios
Un servicio pertenece a una única especialidad
Un doctor puede tener asociado múltiples servicios, con su precio único
Una cita posee un solo doctor
Una cita posee un solo paciente
Un doctor puede tener una a muchas citas asociadas
Un paciente puede tener una a muchas citas asociadas


Descripcion del sistema
Cuando un paciente realice una reserva de una cita esta queda pendiente por aprobar, el doctor es el encargado de aprobar o reagendar la cita.
Los Doctores configuran en su perfil su ubicación, especialidad y servicios una vez que se registran, queda pendiente por verificar su perfil, el administrador es encargado de aprobar el perfil.

Requisitos

Funcionalidades

Visualizar el listado de citas dentro del dashboard.
Poder aprobar o reagendar las citas dentro del listado, o en los detalles de la cita.
Configurar la ubicación, las especialidades y los servicios, con su precio personalizado.
Incluir una función de exportación de datos en formato CSV para las citas.
Diseñar una interfaz responsiva que se adapte a dispositivos móviles y de escritorio.


Técnicos

Utilizar PHP para el Backend, opcionalmente se permite el uso de Frameworks.
Se permite cualquier framework de Frontend opcionalmente.
Se permite el uso de plantillas para el desarrollo del dashboard
Desarrollar  una API REST con JSON para los datos Backend.


Extras (opcionales no obligatorias)

Implementar autenticación de usuario (login y registro)
Añadir la capacidad de personalizar el dashboard (arrastrar y soltar widgets).
Integrar notificaciones en tiempo real.


Entregables

Código fuente en un repositorio Git (GitHub, GitLab, etc.).
README con instrucciones de instalación y ejecución.
Documentación breve sobre la arquitectura y decisiones de diseño.


Criterios de Evaluación

Calidad y limpieza del código.
Buen diseño de interfaz y experiencia de usuario.
Rendimiento y optimización.
Manejo de errores y edge cases.


Dia de entrega
Lo que tenga hecho hasta el 04/12/2024 ANTES de las 11:00 AM
¡Buena suerte!