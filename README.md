# Indice

[TOC]

# Prefacio
Este sistema está realizado con MYSQL y Composer. no Contiene pruebas unitarias (PHPUnit) 

No Utiliza algun ORM, tampoco contiene un sistema de permisología, nivel básico. 

Adelante hay instrucciones de como construir a partir del codigo fuente la aplicacion web.

Se trata simplemente de un juego (tres en raya), que basicamente es un sistema experto o inteligencia artificial el cual evalua todas las posibilidades... el segmento de codigo que hace vida a la inteligencia artificial NO ES PERFECTO... esto quiere decir que si hay posibilidad de ganar

# Como clonar este repositorio

Para clonar este repositorio, por favor pida permisos a christian130@gmail.com para acceder al repositorio privado en bitbucket

Para Windows se necesita el siguiente paquete https://git-scm.com/download/win


```
#!bash
git clone https://christian130@bitbucket.org/christian130/tresenraya.git

```


# Seguimiento de este repositorio en sistemasphpvenezuela.com/tresenraya

Favor se agradece reportar, sugerir o comentar cualquier detalle relacionados exclusivamente a este proyecto en la seccion contacto de la pagina web sistemasphpvenezuela.com.

Basicamente hay tres maneras de reportar un issue o un desperfecto:

1. con el formulario de contacto de sistemasphpvenezuela.com
1. con el issue tracker de bitbucket o cualquier otro
1. o tambien se puede enviar un correo directamente a sistemasphpvenezuela@gmail.com

# Manejo de la metodologia en el proyecto

Para la metodologia se decide adoptar el principio o la forma mas basica de pruebas dentro de la plataforma que es end to end, ejemplo para probar si realmente gmail puede enviar un correo seria asi:



1.- Inicio de la página de inicio de sesión de Gmail a través de la URL.

2.- Iniciar sesión en la cuenta de Gmail mediante credenciales válidas.

3.- Acceso a la bandeja de entrada. Apertura de correos electrónicos leídos y no leídos.

4.- Redactar un nuevo correo electrónico, responder o reenviar cualquier correo electrónico.

5.- Abrir elementos enviados y verificar correos electrónicos.

6.- Comprobación de mensajes en la carpeta Spam

7.- Saliendo de la aplicación de Gmail haciendo clic en 'cerrar sesión.

Como se puede observar son simples pasos... este tipo de pruebas o este principio permite ser mas agil y es totalmente compatible con cualquier metodologia AGILE tipo SCRUM.
La diferencia basica que tiene este con respecto a otro tipo de pruebas es que NO requiere la extensa elaboracion de una prueba de concepto, lo cual en PHP es mucho pedir porque se pierde mucho tiempo haciendo este tipo de pruebas; estas mismas no son tan basicas como en Java usando Junit... en PHP no se implementa la POO full, o si se implementa se tiene que obviar algunas cosas como por ejemplo instanciar una clase dentro de una vista... (patron MVVM). PHP se creo inicialmente por motivos de productividad en relacion con Java, y de pronto crecio y crecio y todo el mundo quiso implementar este nuevo lenguaje CGI... 

# Como acceder a la base de datos


En el directorio se encuentra un archivo en la raíz del sistema de archivos de la aplicación llamado "datos.sql" favor ingresar este mediante localhost/phpmyadmin o algún otro gestor de base de datos para mysql exclusivamente...
o tambien ingresar por comando
```
#!bash
mysql -u [usuario] -h [host] -p[pass] BASEDEDATOS < datos.sql

```

# Como descargar este repositorio 

Para descargar completamente este proyecto desde la rama master, favor pedir permisos e ingresar por medio del siguiente link, pegando este mismo en el navegador en la parte superior:



```
#!bash
https://bitbucket.org/christian130/tresenraya/get/master.zip

```