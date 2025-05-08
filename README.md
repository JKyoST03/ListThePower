<a id="readme-top"></a>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/JKyoST03/ListThePower">
    <img src="https://raw.githubusercontent.com/tetoterritory10/icons/refs/heads/main/IconsNotMine/ListTheRoxas.png" alt="Logo">
  </a>

  <h2 align="center">List the Power</h2>

  <h4 align="center">
    ¡Categorizalos a todos!
  </h4>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Tabla de contenidos</summary>
  <ol>
    <li><a href="#sobre-el-proyecto">Sobre el proyecto</a></li>
    <li><a href="#tecnologias-empleadas">Tecnologias empleadas</a></li>
    <li><a href="#proceso-de-instalación">Proceso de instalación</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## Sobre el proyecto

[![Product Name Screen Shot][product-screenshot]](https://example.com)

La idea de este proyecto es a través de una cosa tan amplia como es, que personaje es más fuerte que otro, dentro del mundo de la ficción, se busca crear un foro en el que la gente pueda debatir si un personaje puede ganar a uno u otro.

¿Porqué?:
* Incentivar al debate y pensamiento de las aptitudes de cada personaje entre personas 🧠
* Por crear especializado en este ámbito y en el que poder añadir personajes con comodidad ☺️
* Poder formar comunidades de personas dentro de la web para, lo susodicho ya, incentivar al debate sano entre personas 👥

<p align="right">(<a href="#readme-top">Volver a la parte superior</a>)</p>



### Tecnologias empleadas
La aplicación web ha sido construida con las siguientes tecnologías

* [![Laravel][Laravel.com]][Laravel-url]
* [![Livewire][Livewire.com]][Livewire-url]
* [![JQuery][JQuery.com]][JQuery-url]

<p align="right">(<a href="#readme-top">Volver a la parte superior</a>)</p>

<!-- INSTALLATION -->
## Proceso de instalación

En este proyecto viene todo ya preparado para ejecutarse con docker y compose.

    cp .env.example .env
    sudo chown -R www-data:www-data storage
    npm install && composer install
    php artisan key:generate

Ahora haremos el despliegue de los contenedores con el siguiente comando.

    docker compose up --build
   
*Recomendación*: Modifica el docker-compose.yml a tu gusto para darle el nombre que gustes a cada contenedor, darle un nombre propio a la base de datos, etc y que no haya conflictos de ningún tipo.

También hay que generar una clave, si esta instalado php 8.2 en el ordenador se puede generar sin problema, en caso de que no, aquí dejaré un comando para acceder al contenedor de php que se hace en el despliegue de default si no se toca el docker.compose.yml

    docker exec -it NOMBRE_CONTENDOR_PHP bash

Una vez hecho esto quedaría modificar el archivo .env y meterle de donde viene la base de datos, modificala y dejala tal que así:
    
    DB_CONNECTION=mariadb
    DB_HOST=NOMBRE_DE_LA_TABLA
    DB_PORT=3306
    DB_DATABASE=NOMBRE_CONTAINER_DB
    DB_USERNAME=root
    DB_PASSWORD=secret

Y no olvidarse poner de MAIL_HOST el contendor que sirve para hacer pruebas de correos.
(Aquí dejo el nombre de default del contendor)

    MAIL_HOST=mailhog

Y ya para acabar, con todo hecho, lanza la migración de la base de datos, y debería funcionar correctamente

    php artisan migrate

<p align="right">(<a href="#readme-top">Volver a la parte superior</a>)</p>

<!-- CONTACT -->
## Contacto

JKST - josalbarr@alb.edu.gva.es

Enlace del proyecto: [https://github.com/JKyoST03/ListThePower](https://github.com/JKyoST03/ListThePower)


<p align="right">(<a href="#readme-top">Volver a la parte superior</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
[Livewire.com]: https://img.shields.io/badge/Livewire-3C3C3C?style=for-the-badge&logo=laravel&logoColor=white
[Livewire-url]: https://livewire.laravel.com
