# Indice

<!--ts-->
   * [Prefacio](#prefacio)
   * [Como clonar este repositorio](#como-clonar-este-repositorio)
   * [Seguimiento de este repositorio en](#seguimiento-de-este-repositorio-en)
   * [Manejo de la metodologia en el proyecto](#manejo-de-la-metodologia-en-el-proyecto)
   * [Como acceder a la base de datos](#como-acceder-a-la-base-de-datos)
   * [Como descargar este repositorio](#como-descargar-este-repositorio)
<!--te-->

Prefacio
=====

Este sistema está realizado con MYSQL y Composer. no Contiene pruebas unitarias (PHPUnit) 

No Utiliza algun ORM, tampoco contiene un sistema de permisología, nivel básico. 

Adelante hay instrucciones de como construir a partir del codigo fuente la aplicacion web.

Se trata simplemente de un juego (tres en raya), que basicamente es un sistema experto o inteligencia artificial el cual evalua todas las posibilidades... el segmento de codigo que hace vida a la inteligencia artificial NO ES PERFECTO... esto quiere decir que si hay posibilidad de ganar.

El demo se puede ingresar al sitio seguro... https://christian130.000webhostapp.com

Como clonar este repositorio
=====

Para clonar este repositorio, puede hacerlo de la manera clasica, pero TENGA EN CUENTA QUE GRAN PARTE DEL CODIGO FUENTE AQUI PRESENTADO, NO LE FUNCIONARA A MENOS HAGA LO SIGUIENTE: 
 * enviar correo a christian130@gmail.com para acceder al repositorio privado en bitbucket, cual si contiene todo el codigo fuente necesario para hacer correr la aplicacion...
    
    EL CODIGO FUENTE AQUI PRESENTADO NO FUNCIONARA! ESTO ES SOLO EL ESQUELETO...

Para Windows se necesita el siguiente paquete https://git-scm.com/download/win


```
#!bash
git clone https://github.com/christian130/tresenraya.git

```


Seguimiento de este repositorio en
=====
Para ver en pleno funcionamiento en version mas reciente por favor vaya a: https://christian130.000webhostapp.com

Favor se agradece reportar, sugerir o comentar cualquier detalle relacionados exclusivamente a este proyecto, directamente a sistemasphpvenezuela@gmail.com


Manejo de la metodologia en el proyecto
=====

metodologia AGILE tipo SCRUM.


Como acceder a la base de datos
=====


En el directorio se encuentra un archivo en la raíz del sistema de archivos de la aplicación llamado "datos.sql" favor ingresar este mediante localhost/phpmyadmin o algún otro gestor de base de datos para mysql exclusivamente...
o tambien ingresar por comando
```
#!bash
mysql -u [usuario] -h [host] -p[pass] BASEDEDATOS < datos.sql

```

Como descargar este repositorio
=====

Para descargar completamente este proyecto desde la rama master, favor pedir permisos e ingresar por medio del siguiente link, pegando este mismo en el navegador en la parte superior:



```
#!bash
https://github.com/christian130/tresenraya.git

```
