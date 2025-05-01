<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2-1</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4; }
        .container { max-width: 1200px; margin: auto; padding: 20px; }
        .video-container { text-align: center; margin-bottom: 30px; }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ccc; /* Añade una línea debajo del título */
            font-size: 24px; /* Aumenta el tamaño de la fuente */
            font-weight: bold; /* Pone el texto en negrita */
        }

        .section { margin-bottom: 50px; } /* Aumenta el espacio entre secciones */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Ajusta el minmax para mejor responsividad */
            gap: 25px; /* Aumenta el espacio entre las tarjetas */
        }
        .card {
            background: white;
            padding: 20px; /* Aumenta el padding dentro de la tarjeta */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Sombra más suave */
            text-align: center;
        }
        .card img {
            width: 120px; /* Aumenta el tamaño de la imagen */
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .card h3 { margin: 8px 0; font-size: 18px; font-weight: bold; color: #555; } /* Estilos para los nombres */
        .card .links { margin-top: 15px; }
        .card .links a {
            display: block;
            margin-bottom: 8px;
            padding: 10px 15px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease; /* Añade una transición suave al hover */
        }
        .card .links a:hover { background-color: #0056b3; }

        /* Estilos para hacer el video responsive */
        .video-container iframe {
            width: 100%;
            max-width: 560px; /* Mantén el ancho máximo original si lo deseas */
            height: auto;
        }

        /* Media query para pantallas más pequeñas */
        @media (max-width: 768px) {
            .container { padding: 15px; }
            h1 { font-size: 28px; }
            h2 { font-size: 22px; margin-bottom: 20px; padding-bottom: 8px; }
            .card-grid { grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; }
            .card { padding: 15px; }
            .card img { width: 80px; height: 80px; margin-bottom: 10px; }
            .card h3 { font-size: 16px; }
            .card .links a { font-size: 14px; padding: 8px 12px; margin-bottom: 5px; }
        }
    </style>
</head>


<body>
    <div class="container">
        <h1 style="text-align: center;">Actividad B2-1</h1>
<textarea rows="4" cols="50" style="width: 80%; margin: 10px auto; display: block; padding: 10px; border: 1px solid #ccc; box-sizing: border-box;">
Cada miembro del grupo contribuirá al repositorio creando los archivos (modelo, vista, controlador) correspondientes a una tabla específica, asegurando así la distribución equitativa del trabajo entre los integrantes. El objetivo es que la estructura final del repositorio coincida con el repositorio modelo proporcionado.

</textarea>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7_Yq5ngWyM8?si=70iWvaQ60Id6ASvY" frameborder="0" allowfullscreen></iframe>
        </div>


<div class="section">
            <h2>Repositorio modelo</h2>
            <div class="card-grid">
                <div class="card"  style="background-color: #e0f2f7;"  >
                    <h3> Grupo Apple</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850219106.jpg" alt=" Quinde Bustos Johan Kenneth">
                    <h3> Quinde Bustos Johan Kenneth</h3>
                    <h3> Scrum master</h3>
                    <div class="links">
                        <a href="https://github.com/Jhons23/apple5a.git" target="_blank">Cuenta Github</a>
                        <a href="https://educaysoft.org/apple5a/public/" target="_blank">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=apple5a" target="_blank">git pull</a>
                    </div>
                </div>
                

            </div>
        </div>



        <div class="section">
            <h2>5-A 1</h2>
            <div class="card-grid">
                <div class="card"  style="background-color: #e0f2f7;"  >
                    <h3> Grupo Apple</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850219106.jpg" alt=" Quinde Bustos Johan Kenneth">
                    <h3> Quinde Bustos Johan Kenneth</h3>
                    <h3> Scrum master</h3>
                    <div class="links">
                        <a href="https://github.com/Jhons23/apple5a.git" target="_blank">Cuenta Github</a>
                        <a href="https://educaysoft.org/apple5a/public/" target="_blank">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=apple5a" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3> Grupo Uber</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850123597.jpg" alt="Persona 2">
                    <h3>Mera Caicedo Stefany Monserratte </h3>
                    <h3> Scrum master</h3>
                    <div class="links">
                        <a href="https://www.otro1.com" target="_blank">Sitio Web A</a>
                        <a href="https://educaysoft.org/Uber5a/public/" target="_blank">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=Uber5a" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3> Grupo Microsoft</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850718974.jpg" alt="Persona 3">
                    <h3>Bautista Caicedo Jorge Leandro.</h3>
                    <h3> Scrum master</h3>
                    <div class="links">
                        <a href="https://github.com/ysLeandro/Microsoft5a.git" target="_blank">Github</a>
                        <a href="https://educaysoft.org/Microsoft5a" target="_blank">Enlace Dos</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=Microsoft5a" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3> Grupo facebook</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0803594043.jpg" alt="Persona 4">
                    <h3>Masapanta Delgado Steven Javier.</h3>
                    <h3> Scrum master</h3>
                    <div class="links">
                        <a href="https://www.final1.com" target="_blank">Web Final 1</a>
                        <a href="https://www.final2.com" target="_blank">Web Final 2</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=facebook5a" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3> Grupo IBM</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/1315590883.jpg" alt="Persona 4">
                    <h3>Lopez Pico Paul Alexander</h3>
                    <h3> Scrum master</h3>
                    <div class="links">
                        <a href="https://www.final1.com" target="_blank">Web Final 1</a>
                        <a href="https://www.final2.com" target="_blank">Web Final 2</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=ibm5a" target="_blank">git pull</a>
                    </div>
                </div>

                <div class="card">
                    <h3> Grupo Whatsapp</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0805124336.jpg" alt="Persona 4">
                    <h3> Villota Bustos Juan Sebastian. </h3>
                    <h3> Scrum master</h3>
                    <div class="links">
                        <a href="https://www.final1.com" target="_blank">Web Final 1</a>
                        <a href="https://www.final2.com" target="_blank">Web Final 2</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=whatsapp5a" target="_blank">git pull</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="section">
            <h2>Ingenieria de Software I 5-B</h2>
            <div class="card-grid">
                <div class="card">
                    <h3>Grupo IBM</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850447459.jpg" alt="Persona 5">
                    <h3>Tenesaca Telpes Luis Felipe</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/Tenesaca/ibm5b">Github</a>
                        <a href="#">Enlace 2</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=ibm5b" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3>Grupo Microsoft</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850889916.jpg " alt="Persona 6">
                    <h3> Bastidas Miranda Eddy Alexis </h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/Eddy17945/microsoft5b-">Cuenta Github</a>
                        <a href="https://educaysoft.org/microsoft5b-">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=microsoft5b-" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3>Grupo Facebook</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850991472.jpg" alt="Persona 7">
                    <h3> Bustos Micolta Aldo Emmanuel</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/EMANUELBUSTOS/facebook5b.git">Cuenta Github</a>
                        <a href="https://educaysoft.org/facebook5b">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=facebook5b" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3>Grupo Apple</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0958401887.jpg" alt="Persona 8">
                    <h3>Coronado Sánchez Jacob Israel</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href=": https://github.com/sanchezjacob123/Apple5b.git">Cuenta Github</a>
                        <a href="https://educaysoft.org/Apple5b">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=apple5b" target="_blank">git pull</a>
                    </div>
                </div>

<div class="card">
                    <h3>Grupo Whatsapp</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850361239.jpg " alt="Persona 8">
                    <h3>Marquez Plaza Michael</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/Marquez-PMG/WhatsApp-5B.git">Cuenta Github</a>
                        <a href="https://educaysoft.org/WhatsApp-5B">Despliegue </a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=whatsapp5b" target="_blank">git pull</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="section">
            <h2>Ingenieria de Software II 6-A</h2>
            <div class="card-grid">
                <div class="card">
                    <h3>Grupo Microsoft</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0106972722.jpg" alt="Persona 9">
                    <h3>Nombre 9</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/Morales57/microsoft6a">Cuenta Github</a>
                        <a href="htpps://educaysoft.org/microsoft6a">Descpliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=whatsapp5b" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3>Grupo Apple</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850099292.jpg" alt="Persona 10">
                    <h3> Arévalo Bernal Juan Diego.</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/JuanSlaterT/apple6a">Cuenta Github</a>
                        <a href="https://educaysoft.org/apple6a">Link Y</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=apple6b" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3>Grupo facebook</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/1718999079.jpg" alt="Persona 11">
                    <h3>Peña Vargas Honorio Edgar.</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/CONINTELSA/facebook6a">Cuenta Github</a>
                        <a href="https://educaysoft.org/facebook6a">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=facebook6a" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3>Grupo IBM</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0803012145.jpg" alt="Persona 12">
                    <h3>Tenorio Espinoza Anthony josue</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/Anthony2002spd/Ibm6aphp">Cuenta Github</a>
                        <a href="https://educaysoft.org/ibm6aphp">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=ibm6aphp" target="_blank">git pull</a>
                    </div>
                </div>
<div class="card">
                    <h3>Grupo Whatsapp</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850013418.jpg" alt="Persona 12">
                    <h3>Orejuela Garcia Jeohassin Wilton.</h3>
                    <h3>Scrum Master</h3>
                    <div class="links">
                        <a href="https://github.com/OrejuelaJeohassin/whatsapp6a">Cuenta Github</a>
                        <a href="https://educaysoft.org/whatsapp6a">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=whatsapp6a" target="_blank">git pull</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="section">
            <h2>Ingenieria de Software II 6-B</h2>
            <div class="card-grid">
                <div class="card">
                    <h3> Grupo Apple.</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0802995571.jpg" alt="Persona 13">
                    <h3> Vernaza Cañola Romario Joel.</h3>
                    <h3> Scrum master.</h3>
                    <div class="links">
                        <a href="https://github.com/romario2701/apple6b.git">Cuenta Github</a>
                        <a href="https://educaysoft.org/apple6b/">Depliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=apple6b" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3> Grupo Google   .</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0804108819.jpg" alt="Persona 14">
                    <h3>Añapa Corozo Maroly Mayerli.</h3>
                    <h3> Scrum master.</h3>
                    <div class="links">
                        <a href="https://github.com/MarolyAnapa20/google6b">Cuenta github</a>
                        <a href="https://educaysoft.org/google6b">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=google6b" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3> Grupo microsoft.</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850831520.jpg" alt="Persona 15">
                    <h3>Garcia Ordoñez Britanny Dayana.</h3>
                    <h3> Scrum master.</h3>
                    <div class="links">
                        <a href="https://github.com/Dayana0328/microsoft6b.git">Cuenta Github</a>
                        <a href="https://educaysoft.org/microsoft6b">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=microsoft6b" target="_blank">git pull</a>
                    </div>
                </div>
                <div class="card">
                    <h3> Grupo Meta.</h3>
                    <img src="https://repositorioutlvte.org/Repositorio/fotos/0850434994.jpg" alt="Persona 16">
                    <h3>Angulo Cedeño Jean Pierre. </h3>
                    <h3> Scrum master.</h3>
                    <div class="links">
                        <a href="https://github.com/JeanPierreAC/meta6b.git">Cuenta github</a>
                        <a href="https://educaysoft.org/meta6b">Despliegue</a>
                        <a href="https://educaysoft.org/2024-2S-B2-1/git_pull.php?dir=meta6b" target="_blank">git pull</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
