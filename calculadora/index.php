<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<!-- <body> 
 <div class="container mt-3">
        <h2>Calculadora Básica</h2>
        <form action="" method="post">
            <label for="valor1" class="mb-3">Ingrese los valores</label>
            <input type="number" class="form-control" id="valor1" placeholder="Valor 1" name="valor1">
            <br>
            <input type="number" class="form-control" id="valor2" placeholder="Valor 2" name="valor2">
            <br>
            <input type="number" class="form-control" id="valor3" placeholder="Valor 3" name="valor3">
            <br>
            <label for="operacion" class="mb-3">Seleccione una operación:</label>
            <select class="form-control" name="operacion" id="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary" name="enviar">Calcular</button>
        </form>
    </div> -->

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Calculadora Básica</h2>
                <form action="" method="post">
                    <h4 for="valor1" class="mt-5 mb-3">Ingrese los valores:</h4>
                    <div class="form-group">
                        <label for="valor1">Valor 1</label>
                        <input type="number" class="form-control" id="valor1" name="valor1">
                    </div>
                    <div class="form-group mt-2">
                        <label for="valor2">Valor 2</label>
                        <input type="number" class="form-control" id="valor2" name="valor2">
                    </div>

                    <div class="form-group mt-2">
                        <label for="valor2">Valor 3</label>
                        <input type="number" class="form-control" id="valor3" name="valor3">
                    </div>
                    <div class="form-group mt-2">
                        <h4 for="operacion" class="mb-3">Seleccione una operación:</h4>
                        <select class="form-control" name="operacion" id="operacion">
                            <option value="suma">Suma</option>
                            <option value="resta">Resta</option>
                            <option value="multiplicacion">Multiplicación</option>
                            <option value="division">División</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3" name="enviar">Calcular</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $operacion = $_POST['operacion'];

                    if (
                        isset($_POST['valor1']) && !empty($_POST['valor1']) &&
                        isset($_POST['valor2']) && !empty($_POST['valor2']) &&
                        isset($_POST['valor3']) && !empty($_POST['valor3'])
                    ) {

                        $valor1 = $_POST['valor1'];
                        $valor2 = $_POST['valor2'];
                        $valor3 = $_POST['valor3'];

                        switch ($_POST['operacion']) {
                            case 'suma':
                                $result = $valor1 + $valor2 + $valor3;
                                echo "<h4>La suma de los valores ($valor1, $valor2 y $valor3) es: " . $result . "</h4>";
                                break;
                            case 'resta':
                                $result = $valor1 - $valor2 - $valor3;
                                echo "<h4>La resta de los valores ($valor1, $valor2 y $valor3) es: " . $result . "</h4>";
                                break;
                            case 'multiplicacion':
                                $result = $valor1 * $valor2 * $valor3;
                                echo "<h4>El producto de los valores ($valor1, $valor2 y $valor3) es: " . $result . "</h4>";
                                break;
                            case 'division':
                                if ($valor2 == 0 || $valor3 == 0) {
                                    echo "<h4>No se puede dividir entre cero, por favor ingrese un valor diferente.</h4>";
                                } else {
                                    $result = $valor1 / $valor2 / $valor3;;
                                    echo "<h4>El cociente de los valores ($valor1, $valor2 y $valor3) es: " . $result . "</h4>";
                                }
                                break;
                            default:
                                echo "No se puede realizar la operación";
                                break;
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>