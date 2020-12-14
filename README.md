
## Herramientas necesarias

Installar Docker

## Uso con Docker

Instale todas las dependencias y abra el proyecto con Docker ejecutando: 
```
make build
```

Luego ir a `http://localhost:8037/health-check` para comprobar que todo está bien

## Ejecución de pruebas
Instale las dependencias si no lo ha hecho anteriormente:

```
make deps
```

Ejecutar todas las pruebas PHPUnit 

```
make test
```


Ejecutar todas las pruebas PHPUnit para el ejercicio nro 1: 

```
make exercise-first-test
```
ejecuta el comando vendor\bin\phpunit --filter ExerciseOneTest

Ejecutar todas las pruebas PHPUnit para el ejercicio nro 2: 

```
make exercise-two-test
```

ejecuta el comando vendor\bin\phpunit --filter ExerciseTwoTest

Ejecutar todas las pruebas PHPUnit para el ejercicio nro 3: 

```
make exercise-three-test
```

ejecuta el comando vendor\bin\phpunit --filter ExerciseThreeTest


Ejecutar todas las pruebas PHPUnit para el ejercicio nro 4: 

```
make exercise-four-test
```

ejecuta el comando vendor\bin\phpunit --filter ExerciseFourTest


Dando de baja a los contenedores: 

```
make destroy
```

Actualizando dependencias composer: 

```
make composer-update
```
