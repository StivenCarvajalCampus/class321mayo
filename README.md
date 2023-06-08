<h1>Calculadora php</h1>

<p>El código proporcionado es una calculadora simple escrita en PHP que permite realizar operaciones matemáticas básicas utilizando dos operandos y un operador. A continuación, se presenta un README que describe el código:</p>

<h2>Descripción</h2>

<p>El archivo contiene un script en PHP que implementa una calculadora básica. Toma tres parámetros de entrada a través de la URL (mediante el método GET): `operador1`, `operador2` y `operador`. Luego, realiza la operación matemática correspondiente según el valor del operador y muestra la solución en pantalla.</p>

<h2> Instrucciones de uso</h2>

<p>1. abre xampp en tu pc
    2. dale start a los modulos apache y MySql
    3. abre tu navegador web favorito
    4.en la barra de buscador escribeslocalhost/carpeta donde hubieras puesto el proyecto/class321mayo/calculadora/indexcalculadora.html
    5.ingresa daros numericos en los campos disponibles
    6. selecciona un operador 
    7.damos click al boton enviar 
    operador1: El primer operando numérico.
	operador2: El segundo operando numérico.
	operador: El operador matemático que se desea utilizar (+, -, * o /).

</p>

<h1> Funcionamiento</h1>

<p>

1. El código recupera los valores de los parámetros `operador1`, `operador2` y `operador` de la URL mediante el uso de `$_GET`.
2. Luego, verifica el valor del operador utilizando una estructura `if-else if-else` para determinar qué operación matemática realizar.
3. Si el operador es `+`, se suma `operador1` y `operador2` y se almacena el resultado en la variable `$solucion`.
4. Si el operador es `-`, se resta `operador2` de `operador1` y se almacena el resultado en la variable `$solucion`.
5. Si el operador es `*`, se multiplica `operador1` por `operador2` y se almacena el resultado en la variable `$solucion`.
6. Si el operador es `/`, se verifica si `operador2` es igual a cero. En caso afirmativo, se asigna el mensaje "no se puede dividir por cero" a la variable `$solucion`. De lo contrario, se divide `operador1` por `operador2` y se almacena el resultado en `$solucion`.
7. Finalmente, se muestra la solución en pantalla utilizando el comando `echo`.

</p>



