## ***GLOSARIO DE PHP***

- ***Camel case:***

  La notación **Camel Case** combina las palabras directamente, sin **usar** ningún símbolo, estableciendo que la primera letra de cada palabra esté en mayúscula a excepción de la primera palabra, estando el resto de letras en minúsculas. camelCase se asemejan a las jorobas de un ***camello***. El nombre camelCase se podría traducir como *Mayúsculas/Minúsculas Camello*.

  Existen dos tipos de camelCase:

  - ***UpperCamelCase***, cuando la primera letra de cada una de las palabras es mayúscula. Ejemplo: ***EjemploDeUpperCamelCase***.

  - ***lowerCamelCase*** (o simplemente camelCase), igual que la anterior con la excepción de que la primera letra es minúscula. Ejemplo: ***ejemploDeLowerCamelCase***.

    

- ***Estructura básica de los lenguajes de programación:***

  *La estructura básica de un lenguaje de programación es la **secuencial**. Esto quiere decir que **las instrucciones se ejecutan una tras otra**, **siguiendo el orden en que se han escrito***. El ordenador lee la primera linea que encuentra y la ejecuta. Cada línea de código es una instrucción, una orden que debe cumplir. Despues lee la siguiente línea y la ejecuta. Así sucesivamente hasta que llega a la ultima linea (la de abajo), donde el programa se detiene.

  

- ***Pseudo lenguaje de programación:***

  El ***pseudocódigo*** es una forma de expresar los distintos pasos que va a realizar un programa, de la forma más parecida a un lenguaje de programación. Se realiza en lenguaje natural

  

- ***Lenguaje de programación:***

  Un **lenguaje de programación** es un **lenguaje** de computadora que los programadores utilizan para comunicarse y para desarrollar programas de software, aplicaciones, páginas webs, scripts u otros conjuntos de instrucciones para que sean ejecutadas **por** los ordenadores.

  En **informática**, se conoce como lenguaje de programación a un programa destinado a la construcción de otros programas informáticos. Su nombre se debe a que comprende un **lenguaje formal**que está diseñado para organizar **algoritmos** y procesos lógicos que serán luego llevados a cabo por un ordenador o sistema informático, permitiendo controlar así su comportamiento físico, lógico y su **comunicación **con el usuario humano.

  Dicho lenguaje **está compuesto por símbolos y reglas sintácticas y semánticas**, expresadas en forma de instrucciones y relaciones lógicas, mediante las cuales se construye el **código fuente** de una aplicación o pieza de software determinado. Así, puede llamarse también lenguaje de programación al resultado final de estos **procesos** creativos.

  La implementación de lenguajes de programación **permite el trabajo conjunto y coordinado**, a través de un conjunto afín y finito de instrucciones posibles, de diversos programadores o arquitectos de **software**, para lo cual estos lenguajes imitan, al menos formalmente, la lógica de los **lenguajes humanos** o naturales.

​	

- ***Código Limpio:***

  Es un **código** que es fácil de entender para otros programadores.

  * Es simple y directo. No debe esconder intenciones.

  * Es específico y no especulativo.

  * Contiene pruebas.

  * Está redactado de forma legible.



- ***Código Sucio:***

  Es un código que es difícil entender, que al final genera problemas porque se va a estar mucho tiempo leyendo líneas de código e intentando entenderlas. Además, cualquier modificación que se quiera realizar el día de mañana, va a ser más compleja y probablemente se acabe cometiendo errores.



- ***Variables***:

  Una ***variable*** es un espacio en memoria, donde se almacenan y se recuperan los datos de un programa. Así de simple. En ***programación***, la utilizamos para guardar datos y estados, asignar ciertos valores de ***variables*** a otras, representar valores de expresiones matemáticas y mostrar valores por pantallas.

  

- ***Variables en PHP:***

  En PHP las variables ***se representan con un signo de dólar seguido por el nombre de la variable***. El nombre de la variable es sensible a minúsculas y mayúsculas.

  Ejemplo: $var = 'Roberto';

  

- ***Los siete tipos de datos primitivos en PHP:***

  PHP admite diez tipos primitivos.

  Cuatro tipos escalares:

  - ***boolean:*** (true o false) (Verdadero o falso)
  - ***integer:*** (Números enteros)
  - ***float*** (número de punto flotante, también conocido como double)
  - ***string*** (Cadena de caracteres)

  Cuatro tipos compuestos:

  - ***array:*** (mapa ordenado de valores)(clave, valor)
  - ***object:*** (clase instanciada)

  Y finalmente dos tipos especiales:

  - ***Resource:***  es una variable especial, que contiene una referencia a un recurso externo. Los recursos son creados y usados por funciones especiales. 
  - ***NULL:*** variable sin valor.



- ***Punto y coma en PHP:***

  Como en C o en Perl, PHP requiere que las instrucciones terminen en punto y coma al final de cada sentencia. La etiqueta de cierre de un bloque de código de PHP automáticamente implica un punto y coma; no es necesario usar un punto y coma para cerrar la última línea de un bloque de PHP.

  

- ***Palabras reservadas del sistema:***

  En un lenguaje informático, las “palabras reservadas” son todas aquellas que tienen un significado estrictamente predefinido: están reservadas para un uso especial y no pueden utilizarse para ningún otro propósito.

  Las Palabras Reservadas en PHP son utilizadas de forma especial para definir métodos, funciones, clases, etc. en otras palabras son contructores del lenguaje, debido a que son reservadas no deben ser utilizadas como nombres de variables o funciones, aunque existen lenguajes de programación como PHP que si permiten hacerlo, esto puede llevar a confusiones en el momento de ejecución de la aplicación, es por ello que se recomienda su uso solo como el lenguaje lo estipula.

  ***Palabras reservadas de PHP***

  __halt_compiler(), abstract, and, array(), as, break, callable, case, catch, class, clone, const, continue, 	declare, default, die(), do, echo, else, elseif, empty(), enddeclare, endfor, endforeach, endif, endswitch,  endwhile, eval(), exit(),,extends, final, finally, fn, for, foreach, function, global, goto, if, implements, include, include_once, instanceof, insteadof, interface, isset(), list(), match, namespace, new, or, print,	private, protected, public, require, require_once, return, static, switch, throw, trait, try, unset(), use, var, while, xor, yield, yield, from.

  ***Constantes en tiempo de compilación***
  
  __CLASS__, __CLASS__,	__DIR__,	__FILE__,	__FUNCTION,__	__LINE,__	__METHOD,__ __NAMESPACE__,	__TRAIT__	
  
  
  
- ***Que son los operadores:***

  Los operadores ***son los símbolos que nos permiten expresar las operaciones entre los datos en PHP al crear una tienda o página web***.

  

  ***Tipos de operadores***

  ***Aritméticos***

  Son los más sencillos y proporcionan que podamos realizar operaciones numéricas con las variables.
  
  - *+* Suma
  - *–* Resta
  - *** Multiplicación
  - */* División
  - *%* Módulo (resto de la división)
  - **** Exponenciación (4 **2, elevar 4 a la a segunda)
  
  ***De asignación***
  
  Son los que traspasan valores en variables.
  
  - *=* Asignación
  
  *$valor = ‘aquí pondríamos lo que vamos a establecer en la variable’;*
  
  Incluso podríamos asignar que el valor fuese el resultado de realizar una operación.
  
  *$z = 56;*
  *$h = 4;*
  *$i = $z – $h;*
  
  Lo que tenemos a la derecha del operador se asigna a la variable que está a la izquierda. Pero PHP también dispone de una serie de operadores de asignación que permite realizar la operación en un único paso.
  
  - *+=* Suma y asignación
  - *-=* Resta y asignación
  - **=* Multiplicación y asignación
  - */=* División y asignación
  - *%=* Módulo y asignación
  - *.=* Concatenación y asignación
  
  *$x = 7;*
  *$x += 7;* 
  
  *$x* valdrá 14
  
  *$cadena = «Gritando «;*
  *$cadena .= «al mundo»;*
  
  *$cadena* ahora vale «Gritando al mundo»
  
  ***De comparación***
  
  Las utilizaremos para comparar dos variables y demostrar si cumple o no la propiedad del operador.
  
  - *==* Comprueba si son iguales
  - *!=* Comprueba si son distintos
  - *===* Comprueba si son iguales y de exactamente el mismo tipo
  - *!==* Comprueba si son distintos o de distinto tipo
  - *<>* Diferente (igual que !=)
  - *<* Menor que, comprueba si un valor es menor que otro
  - *>* Mayor que
  - *<=* Menor o igual
  - *>=* Mayor o igual
  - *<=>* Comparador de orden
  - *??* uno o el otro
  
  
  
- ***Item en las colecciones de datos PHP:***

  En las colecciones o array los item son las posiciones donde se colocan los datos.

  

- ***echo / var_dump / print_r***

  ***echo*** es un comando para la impresión de un texto en pantalla. Es utilizado en las terminales de los sistemas operativos como Unix, GNU/Linux, o MS-DOS; dentro de pequeños programas llamados scripts; y en ciertos lenguajes de programación tales como **PHP**.

  ***var_dump*** proporciona información sobre el tamaño y tipo de datos de la variable y, en el caso de arrays y objetos, de los elementos que la componen.

  ***print_r*** muestra información sobre una variable en una forma que **es** legible por humanos.

  

  
  
  
  
  
  
  