## Programación Orientada a Objetos

Cuando hablamos de **Programación Orientada a Objetos**, estamos hablando de un **paradigma de programación**, es decir una forma en la cual nosotros podemos resolver una problemática a partir de clases y objetos.

Pero, **¿qué es una clase?** **¿qué es un objeto?**, Bien vayamos paso a paso, si miras a tu alrededor podrás encontrar una gran cantidad de entidades: **un teclado**, **un mouse**, **un lápiz**, **un borrador**, etcétera, a todas
estas entidades **las conocemos como objetos**, cada uno de estos objetos tiene rasgos que los hacen diferentes a otros; por ejemplo un lápiz es diferente a un borrador por su tamaño, su color, el material del cual está hecho entre otras características. Tanto el lápiz como el borrador son objetos, ambos pueden realizar diferentes acciones; el lápiz nos sirve para escribir y el borrador para borrar, entonces a grandes rasgos...

## ¿Qué es un objeto?

Podemos definir que un objeto es una entidad que tiene características que lo hacen diferente a otros y este puede realizar diferentes acciones, en **Programación Orientada a Objetos** las características no son más que
variables las cuales llamaremos **Atributos** y a las acciones que puede realizar un objeto las llamaremos **Métodos**.

## Bien, ahora ¿qué es una clase?

Si tomamos dos lápices, uno convencional y uno de dibujo, notaremos que ambos a pesar de ser el mismo tipo de objeto lápiz tienen características diferentes: **el color**, **el peso**, **el tipo de madera**, etcétera.

Si nosotros quitamos todas estas diferencias lo que obtendremos será **un lápiz genérico**, un molde el cual podemos utilizar para crear otros lápices. Con esta idea podemos definir que una clase **es un Molde algo Abstracto** con lo cual nosotros podemos crear objetos a partir de **ciertos atributos** y **ciertos métodos**.

En programación nosotros diseñaremos nuestras clases de tal forma que representen una y solo una cosa, esto hará que necesitemos muchas clases para nuestra aplicación cuando estemos trabajando con **el paradigma de Programación Orientada a Objetos**. Es innegable que saldrán a flote temas como **Herencia**, **Polimorfismo** o **Encapsulamiento** entre otros, pero de ellos ya hablaremos en otra ocasión.

Actualmente tenemos una gran cantidad de lenguajes en los cuales podemos implementar la **Programación Orientada a Objetos**, por ejemplo **Java**, **Ruby** o **Python** entre muchos otros más, pero en el que me centraré, será el de PHP, veamos un ejemplo:

## Utilizando PHP

    <?php
    
    Class Lapiz{
    	//Atributos
    	public $color;
    	public $peso;
    	public $tipo_punta;
    	
        // Métodos
        public function escribe($mensaje)
        {
    	    return $mensaje
        }
    }
    ?>

Como observamos generamos una clase lápiz clase la cual cuenta con tres atributos y un método una clase bastante genérica a partir de esta clase podemos generar "n" cantidad de lápices.

En programación a la creación **de un nuevo objeto** lo conoceremos como **instancia**, en esta nueva línea de código nosotros estamos instanciando un nuevo objeto de tipo lápiz:

    $lapiz = new Lapiz();

Y para llamar a un método (la acción), sería así:

    $lapiz->escribe("Hola Mundo");

Ya para concluir recordemos que una clase la podemos ver **como un molde** que nos sirve para **crear objetos** y **un objeto** lo podemos visualizar como una entidad la cual contiene **atributos** y **métodos**.
