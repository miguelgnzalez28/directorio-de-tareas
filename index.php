<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas de Miguel Gonzalez</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: 36px;
            color: #007acc;
            text-align: center;
            margin-top: 40px;
        }

        h2 {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            color: #009688;
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            font-family: 'Courier New', Courier, monospace;
            background-color: #55a03e;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 10px;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #44972b;
        }

        .text-center {
            text-align: center;
        }

        hr {
            border-color: #009688;
            margin-top: 20px;
        }
    </style>
</head>
<body>
   <h1>Tareas de Miguel Gonzalez</h1>

   <h2>Seleccione una actividad</h2>
   <br><br><br><br><br>

   <div class="text-center">
    <a class="btn" href="tarea1/index.php">Actividad 1</a> <hr>
    <a class="btn" href="tarea2/index.php">Actividad 2</a>
   </div>
</body>
<script>
    function agregarDecimal() {
        var num = monto.value.replace(/\./g,'');
        if(!isNaN(num)){
            num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{2})?/,'$1.');
            num = num.split('').reverse().join('').replace(/^[\.]/,'');
            monto.value = num;
        } else {
            alert('Solo números');
            monto.value = monto.value.replace(/[^\d\.]*/g,'');
        }
    }
</script>
</html>
