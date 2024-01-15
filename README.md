OOPTIMO Job Application tests — PHP
------------

Se trata de clonar este repositorio, instalar las dependencias y ejecutar la aplicación (instrucciones más abajo). 

Al abrir la aplicación en el navegador, aparecerán las instrucciones para llevar a cabo los ejercicios.

En caso de dudas o problemas, contactar con [asunyer@ooptimo.com](mailto:asunyer@ooptimo.com).

*Nota: Este es un proyecto basado en el template básico de [Yii 2](https://www.yiiframework.com/).*

INSTALACIÓN
------------

```shell
git clone git@gitlab.com:ooptimo/job-application-tests-php.git
cd job-application-tests-php
composer install
```

DESARROLLO
------------
```shell
php yii serve
```
abrir navegador en `http://localhost:8080/`.

REQUERIMIENTOS
------------

The minimum requirement by this project template that your Web server supports PHP 7.4.

ESTRUCTURA DE DIRECTORIOS
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources
