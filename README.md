<p align="center">
    <img src="https://github.com/GeeksHubsAcademy/2020-geekshubs-media/blob/master/image/logo.png" >	
</p>


    Considere el siguiente problema:

    Escriba un programa corto que permita pasar de un formato de tiempo establecido en 3 parámetros (horas, minutos, segundos) a un número entero en milisegundos.
    
    Los inputs de entrada se restringen de la siguiente manera :

	0 <= h <= 23
	0 <= m <= 59
	0 <= s <= 59
	
	En caso de romperse estas cláusualas, el retorno debe de ser -1.

	
    Ejemplo:

	toMilliseconds(0,1,1) = 61000
    
	toMilliseconds(1,1,1) = 3661000

	toMilliseconds(24,10,10) = -1


    En la carpeta 'src/Tiempo.php' se encuentra el fichero con la definición de nuestro método vacío.
    En la carpeta 'test/TiempoTest.php' se encuentra el fichero con la suite de test.
    
    El modus operandi de trabajo es el siguiente:
    
    Debes 'forkear' el proyecto a tu cuenta.
    Puedes hacer PR's ilimitadas e ir validando poco a poco la solución contra nuestro respositorio con CI.
    Puedes trabajar en local y subir la solución haciendo un PR a nuestro repositorio.
    Cuando se envíe la PR final, debes indicar el tiempo de dedicación y los intentos que has hecho.
    También puedes añadir un comentario para dar cualquier tipo de feedback.
    
    En caso de duda, revisa en el apartado de 'Referencias'.

    Runtime:       PHP 7.2
    Configuration: ./108-tj-php/phpunit.xml

    Time: 00:03.555, Memory: 6.25 MB

    ....................                                                      20 / 20 (100%)
   
    OK (20 tests, 20 assertions)
    Process finished with exit code 0



## Referencias

* [Tutorial - Testing Automatizado](https://github.com/GeeksHubsAcademy/2020-js-vanilla-testing-FFFF/blob/master/README.md)
