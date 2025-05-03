## Instalacion

Para instalar laravel en nuestro equipo y poder ejecutar los primeros comandos necesitamos tener instalado Composer y PHP, para despues ejecutar el siguiente comando:

```sh
composer global require laravel/installer
```

Una vez instalado, creamos nuestro primero proyecto

```sh
laravel new example-app
```

Para poder correrlo, debemos dirigirnos a la carpeta y ejecutar los siguientes comados

```sh
cd example-app
npm install && npm run build
composer run dev
```

Debemos abrir en el navegador:

- [http://127.0.0.1:8000](http://127.0.0.1:8000)


## Problemas

### No hay una base de datos

SESSION_DRIVER=file