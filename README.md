# Proyecto de Reservas de Mesa de Restaurante

Este proyecto es una aplicación web de reservas de mesa para un restaurante, desarrollada utilizando el framework Laravel y Bootstrap para el diseño de las vistas. Cada integrante del equipo trabajó en una rama distinta del repositorio, y todas las ramas fueron fusionadas en la rama principal `main`.

## Tabla de Contenidos
- [Integrantes del Grupo](#integrantes-del-grupo)
- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Uso](#uso)
- [Modelo Relacional](#modelo-relacional)


## Integrantes del Grupo

- **Dylan Brito**
- **Andrea Del Pino**
- **Alejandro Lascano**

## Características

- Sistema de reservas de mesas para un restaurante.
- Navegación sencilla entre las diferentes páginas del sistema (index, mesas, reservas, clientes, etc.).
- Implementación de un sistema básico de inicio de sesión.
- Uso de Bootstrap para un diseño responsivo y moderno.
- Modelo relacional que refleja la estructura de las tablas necesarias para el sistema.
  
## Requisitos

- PHP
- Composer
- Laravel
- MySQL o cualquier sistema de base de datos compatible con Laravel


## Instalación

Sigue estos pasos para clonar y ejecutar el proyecto localmente:

1. Clonar el repositorio:
    ```bash
    git clone https://github.com/dabrito/proyecto-laravel-reservas
    ```
2. Navegar al directorio del proyecto:
    ```bash
    cd proyecto-laravel-reservas
    ```
3. Configurar la base de datos en el archivo `.env`.

4. Migrar las tablas a la base de datos:
    ```bash
    php artisan migrate
    ```

5. Iniciar el servidor de desarrollo de Laravel:
    ```bash
    php artisan serve
    ```

6. Abrir el navegador y acceder a `http://localhost:8000`.

## Uso

El sistema permite:

- Crear, editar y eliminar reservas de mesa.
- Gestionar las mesas del restaurante 
- Administrar clientes registrados y reservas asociadas.
- Sistema básico de login para acceso a funciones administrativas y por parte del usuario para visualizar sus reservas.

## Modelo Relacional

El sistema está basado en un modelo relacional que incluye las siguientes entidades principales:

## Modelo Relacional

El sistema de reservas de mesas de restaurante está basado en el siguiente modelo relacional, que incluye las entidades y relaciones clave:

### Usuarios
- `id`: Identificador único del usuario.
- `Nombre`: Nombre del usuario.
- `Email`: Correo electrónico del usuario.
- `contraseña`: Contraseña para el inicio de sesión.
- `created_at`: Fecha y hora de creación del registro.
- `updated_at`: Fecha y hora de la última actualización del registro.

### Mesas
- `id`: Identificador único de la mesa.
- `numero_mesa`: Número asignado a la mesa.
- `capacidad`: Capacidad de personas que puede recibir la mesa.
- `tipo`: Relación con la tabla **Tipo de Mesas**, indicando el tipo de mesa.
- `disponible`: Indica si la mesa está disponible (`sí` o `no`).
- `created_at`: Fecha y hora de creación del registro.
- `updated_at`: Fecha y hora de la última actualización del registro.

### Tipo de Mesas
- `id`: Identificador único del tipo de mesa.
- `nombre_tipo`: Nombre del tipo de mesa (ej. terraza, VIP, etc.).
- `descripcion`: Descripción del tipo de mesa.
- `created_at`: Fecha y hora de creación del registro.
- `updated_at`: Fecha y hora de la última actualización del registro.

### Reservas
- `id`: Identificador único de la reserva.
- `usuario_id`: Relación con la tabla **Usuarios**, indicando quién hizo la reserva.
- `mesa_id`: Relación con la tabla **Mesas**, indicando la mesa reservada.
- `fecha_reserva`: Fecha de la reserva.
- `hora_reserva`: Hora de la reserva.
- `numero_personas`: Cantidad de personas en la reserva.
- `estado_reserva`: Estado de la reserva (pendiente, confirmada, cancelada).
- `created_at`: Fecha y hora de creación del registro.
- `updated_at`: Fecha y hora de la última actualización del registro.

### Horarios Disponibles
- `id`: Identificador único del horario disponible.
- `mesa_id`: Relación con la tabla **Mesas**, indicando a qué mesa pertenece el horario.
- `fecha`: Fecha en la que la mesa está disponible.
- `hora_inicio`: Hora de inicio de la disponibilidad.
- `hora_fin`: Hora de fin de la disponibilidad.
- `disponible`: Indica si el horario está disponible (`sí` o `no`).
- `created_at`: Fecha y hora de creación del registro.
- `updated_at`: Fecha y hora de la última actualización del registro.

El modelo relacional asegura que las entidades están adecuadamente relacionadas para gestionar las reservas, mesas, usuarios y horarios disponibles de manera eficiente en el sistema de reservas de restaurante.

  
Puedes visualizar el modelo relacional completo [aquí](./ModeloRelacionalProyecto1Laravel.drawio.pdf).



[Archivo PDF con el modelo relacional de las tablas empleadas en este proyecto](./ModeloRelacionalProyecto1Laravel.drawio.pdf)
