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
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7_Yq5ngWyM8?si=70iWvaQ60Id6ASvY" frameborder="0" allowfullscreen></iframe>
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
                        <a href="https://www.unomas3.com" target="_blank">Enlace Tres</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/F44336/FFFFFF?Text=Persona+4" alt="Persona 4">
                    <h3>Nombre 4</h3>
                    <div class="links">
                        <a href="https://www.final1.com" target="_blank">Web Final 1</a>
                        <a href="https://www.final2.com" target="_blank">Web Final 2</a>
                        <a href="https://www.final3.com" target="_blank">Web Final 3</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/F44336/FFFFFF?Text=Persona+4" alt="Persona 4">
                    <h3>Nombre 4</h3>
                    <div class="links">
                        <a href="https://www.final1.com" target="_blank">Web Final 1</a>
                        <a href="https://www.final2.com" target="_blank">Web Final 2</a>
                        <a href="https://www.final3.com" target="_blank">Web Final 3</a>
                    </div>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/100/F44336/FFFFFF?Text=Persona+4" alt="Persona 4">
                    <h3>Nombre 4</h3>
                    <div class="links">
                        <a href="https://www.final1.com" target="_blank">Web Final 1</a>
                        <a href="https://www.final2.com" target="_blank">Web Final 2</a>
                        <a href="https://www.final3.com" target="_blank">Web Final 3</a>
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
                        <a href="#">Enlace 3</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/00BCD4/FFFFFF?Text=Persona+6" alt="Persona 6">
                    <h3>Nombre 6</h3>
                    <div class="links">
                        <a href="#">Link A</a>
                        <a href="#">Link B</a>
                        <a href="#">Link C</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/607D8B/FFFFFF?Text=Persona+7" alt="Persona 7">
                    <h3>Nombre 7</h3>
                    <div class="links">
                        <a href="#">Sitio Alpha</a>
                        <a href="#">Sitio Beta</a>
                        <a href="#">Sitio Gamma</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/FF9800/FFFFFF?Text=Persona+8" alt="Persona 8">
                    <h3>Nombre 8</h3>
                    <div class="links">
                        <a href="#">First Site</a>
                        <a href="#">Second Site</a>
                        <a href="#">Third Site</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Ingenieria de Software II 6-A</h2>
            <div class="card-grid">
                <div class="card">
                    <img src="https://via.placeholder.com/100/E91E63/FFFFFF?Text=Persona+9" alt="Persona 9">
                    <h3>Nombre 9</h3>
                    <div class="links">
                        <a href="#">Web Uno</a>
                        <a href="#">Web Dos</a>
                        <a href="#">Web Tres</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/8BC34A/FFFFFF?Text=Persona+10" alt="Persona 10">
                    <h3>Nombre 10</h3>
                    <div class="links">
                        <a href="#">Link X</a>
                        <a href="#">Link Y</a>
                        <a href="#">Link Z</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/03A9F4/FFFFFF?Text=Persona+11" alt="Persona 11">
                    <h3>Nombre 11</h3>
                    <div class="links">
                        <a href="#">Página 1</a>
                        <a href="#">Página 2</a>
                        <a href="#">Página 3</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/CDDC39/FFFFFF?Text=Persona+12" alt="Persona 12">
                    <h3>Nombre 12</h3>
                    <div class="links">
                        <a href="#">Sitio #1</a>
                        <a href="#">Sitio #2</a>
                        <a href="#">Sitio #3</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Ingenieria de Software II 6-B</h2>
            <div class="card-grid">
                <div class="card">
                    <img src="https://via.placeholder.com/100/FF5722/FFFFFF?Text=Persona+13" alt="Persona 13">
                    <h3>Nombre 13</h3>
                    <div class="links">
                        <a href="#">Enlace Alfa</a>
                        <a href="#">Enlace Beta</a>
                        <a href="#">Enlace Gamma</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/795548/FFFFFF?Text=Persona+14" alt="Persona 14">
                    <h3>Nombre 14</h3>
                    <div class="links">
                        <a href="#">Web A</a>
                        <a href="#">Web B</a>
                        <a href="#">Web C</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/3F51B5/FFFFFF?Text=Persona+15" alt="Persona 15">
                    <h3>Nombre 15</h3>
                    <div class="links">
                        <a href="#">Uno Uno Uno</a>
                        <a href="#">Dos Dos Dos</a>
                        <a href="#">Tres Tres Tres</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/100/009688/FFFFFF?Text=Persona+16" alt="Persona 16">
                    <h3>Nombre 16</h3>
                    <div class="links">
                        <a href="#">Final Uno</a>
                        <a href="#">Final Dos</a>
                        <a href="#">Final Tres</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
