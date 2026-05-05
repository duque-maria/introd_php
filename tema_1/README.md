# PHP 
## Comentarios, variables, constantes, arrays, arrays asociativos

## Comentarios
Son notas dentro del código que el servidor ignora por completo; sirven para explicar, documentar o aclarar qué hace el programa.

Una sola línea: Se usan dos barras // o una almohadilla #.

Varias líneas: Se encierran entre /* y */.

## Variables y Constantes
Ambas sirven para guardar información, pero funcionan de forma distinta:

Variables: Son "contenedores" para datos que pueden cambiar durante la ejecución.

Siempre empiezan con el signo de peso ($)seguidodelnombre(ejemplo:‘edad = 25;`).

## Constantes
Son valores fijos que NO pueden modificarse ni eliminarse una vez definidos. 
Se crean usando la función define() o la palabra clave const, y a diferencia de las variables, no llevan el signo $ antes de su nombre.

## Arrays y Arrays Asociativos
Un array permite almacenar múltiples valores en una sola variable, funcionando como una lista potente.

Arrays (Indexados): Los datos se organizan por posiciones numéricas (índices), que automáticamente empiezan desde el 0.
Por ejemplo, en una lista de frutas, la primera sería la posición 0, la segunda la 1, y así sucesivamente.

Arrays Asociativos: En lugar de usar números, utilizas nombres o "claves" personalizadas para guardar y encontrar los datos.

Se escriben en formato clave → valor (ejemplo: "nombre" => "Ana"). 

Son ideales cuando quieres asociar etiquetas con significado a los valores, como los detalles de un usuario.

## Operadores

### 1. Operadores Aritméticos
Se usan con valores numéricos para realizar operaciones matemáticas comunes.

### 2. Operadores de Asignación
El más básico es =, que asigna el valor de la derecha a la variable de la izquierda. 

### 3. Operadores de Comparación
Se utilizan para comparar dos valores y devuelven un resultado booleano (verdadero o falso).

### 4. Operadores Lógicos
Permiten combinar varias condiciones en una sola instrucción.

### 5. Operadores de Incremento y Decremento
Se usan mucho en bucles para cambiar el valor de una variable de uno en uno:
Incremento (++): Suma 1 al valor actual.
Decremento (--): Resta 1 al valor actual.

![Explicación](img/explicacion.png "Explicación")
