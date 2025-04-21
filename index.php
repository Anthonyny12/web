
<?php
// CONEXIÓN
$conexion = new mysqli("localhost", "root", "", "prueba");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// GUARDAR DATOS DEL FORMULARIO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $curso = $_POST["Curso"];
    $edad = $_POST["Edad"];

    $sql = "INSERT INTO rer (Nombre, Curso, Edad) VALUES ('$nombre', '$curso', '$edad')";
    if ($conexion->query($sql) === TRUE) {
        echo "<p class='mensaje exito'>¡Registro guardado exitosamente!</p>";
    } else {
        echo "<p class='mensaje error'>Error al guardar: " . $conexion->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Feria Tecnológica Informativa</title>
    <style>
                 body {
                font-family: Arial, sans-serif;
    background-image: url('https://i.pinimg.com/474x/c4/18/5b/c4185be9987e1b97257fa43e0798b35a.jpg'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    margin: 0;
    padding: 0;
            }
            .header-primary {
                background-color: #37818e;
                color: rgb(0, 0, 0);
                text-align: center;
                padding: 35px;
                box-shadow: 0 4px 8px rgba(5, 14, 81, 0.999);
                font-family: 'perpetua titling MT', sans-serif;
                
        
                
            }
            .header-secondary {
                background-color: #37818e;
                color: rgb(0, 0, 0);
                text-align: left;
                padding: 35px;
                box-shadow: 0 4px 8px rgba(5, 14, 81, 0.999);
                font-family: 'Times New Roman', Times, serif;
                
            }
            form {
                background-color: rgb(255, 255, 255);
                max-width: 550px;
                margin: 50px auto;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            form h2 {
                text-align: center;
                color: #030303;
            }
                @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
            
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
                color: #000000;
            }
            input[type="text"], input[type="number"], select {
                width: 97%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #350ed0;
                border-radius: 4px;
                font-size: 14px;
            }
            button {
                width: 100%;
                padding: 10px;
                background-color: #4CAF50;
                color: rgb(255, 255, 255);
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
            }
            .header-secondary .text-container {
                display: flex; 
                justify-content: space-around; 
                gap: 50px; 

            }
            
            button:hover {
                background-color: #17736e;
            }
            nav {
                background-color: #ffffff;
                padding: 10px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                
            }

            nav ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            nav ul li {
                position: relative;
                margin: 0 15px;
            }

            nav ul li a {
                text-decoration: none;
                color: rgb(0, 0, 0);
                font-size: 16px;
                padding: 8px 15px;
                border-radius: 4px;
                transition: background-color 0.3s;
            }

            nav ul li a:hover {
                background-color: #08b978;
            }

            /* Estilo del menú desplegable */
            nav ul li ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                background-color: #444;
                padding: 10px 0;
                list-style: none;
                border-radius: 4px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                width: 360px;
            }

            nav ul li ul li a {
                padding: 10px 15px;
                display: block;
                color: white;
                text-decoration: none;
                width: 100%; /* Ocupa todo el ancho del contenedor */
                text-align: left; /* Alinea el texto a la izquierda */
                box-sizing: border-box; /* Incluye el padding en el ancho total */
            }

            nav ul li ul li a:hover {
                background-color: #282626;
            }

            /* Mostrar el menú desplegable al pasar el mouse */
            nav ul li:hover ul {
                display: block;
            }
            .mensaje {
            text-align: center;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
        }

        .exito {
            color: green;
        }

        .error {
            color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #444;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #0a4a57;
            color: white;
        }

        td {
            background-color: #f8fdfd;
        }

        @media screen and (max-width: 600px) {
            .form-container {
                width: 95%;
                padding: 15px;
            }

            input, select, button {
                font-size: 14px;
            }
        }

    </style>
</head>
<body>
<header class="header-primary">
            <h1>Feria Tecnológica Informativa</h1>
            <p>¡Regístrate para participar!</p>
        </header>
       <header class="header-secondary"> <div class="text-container"> 
           
            <nav>
                <ul>
                    <li>
                        <a href="#">Visión</a>
                        <ul>
                            <li><a href="#vision1">Nuestra vision es ser una feria </a></li>
                         
                        </ul>
                    </li>
                    <li>
                        <a href="#mision">Misión</a>
                        <ul>
                            <li><a href="#mision1">Meta 1</a></li>
                            <li><a href="#mision2">Meta 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Valores</a>
                        <ul>
                            <li><a href="#respeto">Respeto</a></li>
                            <li><a href="#inclusion">Inclusión</a></li>
                            <li><a href="#creatividad">Creatividad</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            </div>
    <div class="form-container">
        <h2>Regístrate y Diviertete</h2>
        <form method="POST" action="">
            <label for="name">Nombre:</label>
            <input type="text" name="Nombre" required>

            <label for="course">Curso:</label>
            <select name="Curso" required>
                <option value="">Selecciona tu curso</option>
                <option value="Primero">Primero de Secundaria</option>
                <option value="Segundo">Segundo de Secundaria</option>
                <option value="Tercero">Tercero de Secundaria</option>
                <option value="Cuarto">Cuarto de Tributaria</option>
                <option value="Quinto">Quinto de Comercio y Mercadeo</option>
                <option value="Sexto">Sexto de Secundaria</option>
            </select>

            <label for="age">Edad:</label>
            <input type="number" name="Edad" min="1" max="100" required>

            <button type="submit">Registrarse</button>
        </form>
    </div>
 </table>
 </div>
</body>
</html>