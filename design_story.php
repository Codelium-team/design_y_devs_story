<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadatos esenciales -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia del Desarrollo UX/UI</title>
    
    <!-- GSAP para animaciones -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
    
        header {
            text-align: center;
            padding: 20px;
            background-color: #2a2d34;
            color: #fff;
        }
    
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            position: relative;
        }
    
        /* Estilos para cada fase */
        .step,
        .end {
            background: #ffffff;
            padding: 20px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0; /* Inicia invisible */
            transform: translateY(30px); /* Desplazamiento inicial */
            text-align: center; /* Centra el texto horizontalmente */
            box-sizing: border-box; /* Asegura que el padding no aumente el tamaño */
        }
    
        /* Estilos de encabezados */
        h1 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 10px;
            text-align: center; /* Centra el encabezado */
        }
    
        /* Estilos de párrafos */
        p {
            font-size: 16px;
            color: #ffffff; /* Color ajustado para mejor visibilidad */
            margin: 0 auto; /* Centra el texto si se define un ancho */
            max-width: 800px; /* Limita el ancho del párrafo */
            line-height: 1.6; /* Mejora el espaciado entre líneas */
            text-align: center; /* Centra el texto horizontalmente */
        }

        /* Estilos de párrafos */
        .p1 {
            font-size: 16px;
            color: #555555; /* Color ajustado para mejor visibilidad */
            margin: 0 auto; /* Centra el texto si se define un ancho */
            max-width: 800px; /* Limita el ancho del párrafo */
            line-height: 1.6; /* Mejora el espaciado entre líneas */
            text-align: center; /* Centra el texto horizontalmente */
        }
    
        /* Botón inicial */
        #start {
            background: #28a745;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
    
        #start:hover {
            background: #218838;
        }
    </style>
    

</head>

<body>
    <header>
        <h2>Historia Diseño UX - UI</h2>
        <p>Visualiza cada etapa del proceso con una línea de tiempo interactiva.</p>
    </header>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Botón para iniciar la animación -->
        <div style="text-align: center;">
            <button id="start">Iniciar Historia UX - UI</button>
        </div>

        <!-- Fase 1 -->
        <div class="step" id="step1">
            <h1>Fase 1: Empatizar (Investigación y Definición)</h1>
        </div>
        <!-- Actividades Fase 1 -->
        <div class="step" id="step2">
            <h2>Objetivo</h2>
            <p1>Comprender al usuario, su contexto y necesidades para identificar problemas clave.</p1>
        </div>
        <div class="step" id="step3">
            <h2>A. Research UX: </h2>
            <p1>Entrevistas, observaciones y encuestas para recolectar datos sobre el usuario y su entorno.</p1>
        </div>
        <div class="step" id="step5">
            <h2>B. Levantamiento de funcionalidades y requerimientos: </h2>
            <p1>Análisis de lo que el sistema o producto debe ofrecer según las necesidades identificadas y el alcance que tendrá el proyecto.</p1>
        </div>
        
        <!-- Fase 2 -->
        <div class="step" id="step4">
            <h1>Fase 2: Ideación y Propuesta</h1>
        </div>
        <!-- Actividades Fase 2 -->
        <div class="step" id="step5">
            <h2>Objetivo</h2>
            <p1>Sintetizar la información recolectada en problemas claros y estructurados para resolver.</p1>
        </div>
        <div class="step" id="step6">
            <h2>A. Arquitectura del sitio:</h2>
            <p1>Diseño de mapas del sitio y definición de la estructura general del producto.</p1>
        </div>
        
        <div class="step" id="step7">
            <h2>B. User Persona, Customer Journey y Blueprint (Design Service):</h2>
            <p1>Creación de arquetipos de usuarios y mapeo de su interacción con el sistema o servicio.</p1>
        </div>
        <div class="step" id="step8">
            <h2>C. Wireframes y Flujos de Usuario:</h2>
            <p1>Diseño de baja fidelidad que explora los casos de uso y las historias de usuario.</p1>
        </div>
        <div class="step" id="step9">
            <h2>D. Iteración con stakeholders y desarrolladores:</h2>
            <p1>Validación y ajustes de las propuestas iniciales.</p1>
        </div>
        
        <!-- Fase 3 -->
        <div class="step" id="step20">
            <h1>Fase 3: Idear (Diseño de Experiencia - UX)</h1>
        </div>

        <!-- Actividades Fase 3 -->
        <div class="step" id="step21">
            <h2>Objetivo</h2>
            <p1>Explorar soluciones creativas y diseñar cómo los usuarios interactuarán con el producto.</p1>
        </div>
        <div class="step" id="step22">
            <h2>A. Prototipos de baja resolución:</h2>
            <p1>Creación de prototipos rápidos para iterar sobre ideas.</p1>
        </div>
        <div class="step" id="step22">
            <h2>B. Iteración con stakeholders y desarrolladores:</h2>
            <p1>Feedback temprano para refinar ideas antes de avanzar.</p1>
        </div>

        <!-- Fase 4 -->
        <div class="step" id="step23">
            <h1>Fase 4: Prototipar (Diseño de Interfaz - UI)</h1>
        </div>

        <!-- Actividades Fase 4 -->
        <div class="step" id="step24">
            <h2>Objetivo</h2>
            <p1>Materializar las ideas en diseños de alta fidelidad que puedan ser probados y evaluados.</p1>
        </div>
        <div class="step" id="step25">
            <h2>A. Prototipos de alta fidelidad:</h2>
            <p1>Diseños detallados para los dispositivos requeridos.</p1>
        </div>
        <div class="step" id="step26">
            <h2>B. Iteración con usuarios finales, stakeholders y desarrolladores:</h2>
            <p1>Validación del look and feel del producto con todos los involucrados.</p1>
        </div>
        <div class="step" id="step27">
            <h2>C. Design System y Atomic Design:</h2>
            <p1>Estandarización del diseño mediante guías y componentes para el desarrollo.</p1>
        </div>

        <!-- Fase 5 -->
        <div class="step" id="step28">
            <h1>Fase 5: Prototipar (Diseño de Interfaz - UI)</h1>
        </div>

        <!-- Actividades Fase 5 -->
        <div class="step" id="step29">
            <h2>Objetivo</h2>
            <p1>Evaluar el prototipo final con usuarios reales y preparar la entrega al equipo de desarrollo.</p1>
        </div>
        <div class="step" id="step30">
            <h2>A. Prototipo interactivo:</h2>
            <p1>Enfoque en acciones específicas o historias de usuario clave.</p1>
        </div>
        <div class="step" id="step31">
            <h2>B. Testeo con usuarios reales:</h2>
            <p1>Validación de usabilidad y experiencia.</p1>
        </div>
        <div class="step" id="step32">
            <h2>C. Hand-off a desarrolladores:</h2>
            <p1>Entrega final del prototipo con toda la documentación necesaria para implementarlo.</p1>
        </div>

        <!-- Entrega final -->
        <div class="end">
            <h1>¡Prototipo Listo para Desarrollo!</h1>
            <p1>Hemos completado todas nuestras tareas, ahora es el turno para escribir codigo.</p1>
        </div>

        <!-- Botón para iniciar la animación -->
        <div style="text-align: center;">
            <a href="fullstack_dev_story.html" style="text-decoration: none;">
            <button id="start">Comenzar a Codear</button>
            </a>
        </div>
    </div>

    <!-- Script de animación -->
    <script src="assets/js/script.js"></script>
</body>
</html>
