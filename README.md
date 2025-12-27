# Despliegue de Aplicaciones Web con Docker

Este repositorio contiene un proyecto de ejemplo desarrollado como parte del módulo **Despliegue de Aplicaciones Web** del ciclo formativo **Técnico Superior en Desarrollo de Aplicaciones Web (DAW)**.

El objetivo del proyecto es mostrar la configuración y despliegue de una aplicación web básica utilizando **Docker**, integrando los servicios necesarios para un entorno web completo: **PHP, Nginx y MySQL**.

---

## Objetivo del proyecto

El propósito principal de este proyecto es **didáctico**. Se ha creado para:

- Comprender el uso de Docker como herramienta de despliegue.
- Analizar el funcionamiento de un `Dockerfile`.
- Orquestar múltiples servicios mediante `docker-compose`.
- Gestionar variables sensibles mediante archivos de entorno.
- Implementar persistencia de datos usando volúmenes Docker.
- Simular un entorno de despliegue similar al utilizado en contextos profesionales.

No se trata de una aplicación en producción, sino de un **entorno de pruebas y demostración**.

---

## Arquitectura del proyecto

La aplicación está compuesta por los siguientes servicios:

- **PHP (PHP-FPM)**: ejecuta la lógica de la aplicación.
- **Nginx**: actúa como servidor web y proxy inverso.
- **MySQL**: base de datos relacional utilizada por la aplicación.

Todos los servicios se ejecutan en contenedores Docker y se comunican a través de una red bridge interna.

---

## Sobre el archivo `.env`

El archivo `.env` **se incluye intencionadamente en el repositorio** por los siguientes motivos:

- Este proyecto **no se utiliza en un entorno de producción real**.
- Las credenciales incluidas son **de ejemplo** y no corresponden a ningún servicio sensible.
- Su inclusión facilita la **ejecución inmediata del proyecto** sin necesidad de configuración adicional.
- Permite demostrar el uso de variables de entorno en Docker, tal y como se solicita en el trabajo académico.

En un entorno profesional o de producción, este archivo **no debería publicarse** y se gestionaría mediante otros mecanismos de seguridad.

---

## Persistencia de datos

La persistencia de la base de datos MySQL se gestiona mediante un **volumen Docker**, lo que garantiza que los datos no se pierdan al reiniciar o eliminar los contenedores.

---

## Puesta en marcha

Para desplegar el proyecto es necesario tener instalado Docker y Docker Compose.

```bash
docker compose up -d

