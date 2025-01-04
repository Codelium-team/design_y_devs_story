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
            <h2>A. Brief Inicial: </h2>
            <ol>
                <li>Reunión con el cliente para entender su visión, misión y valores.</li>
                <li>Identificación del público objetivo y sus necesidades (stakeholders primarios y secundarios).</li>
                <li>Definición de los objetivos principales de la página (informar, captar leads, mostrar productos/servicios, etc.).</li>
                <li>Entender las expectativas visuales: ¿tradicional o moderna?, ¿minimalista o detallada?</li>
              </ol>
        </div>
        <div class="step" id="step4">
            <h2>B. Análisis de la competencia: </h2>
            <ol>
                <li>Exploración de páginas web similares para entender patrones comunes, diferenciales clave y áreas de mejora.</li>
            </ol>
        </div>
        <div class="step" id="step5">
            <h2>C. Historia de usuario: </h2>
            <ol>
                <li>Casos de uso.</li>
                <li>Levantamiento de las funcionalidad (Si se da el caso).</li>
            </ol>
        </div>
        <div class="step" id="step6">
            <h2>D. Documentación y requisitos: </h2>
            <ol>
                <li>Creación de un documento de requerimientos donde se especifique.</li>
                <li>Jerarquía de contenido.</li>
                <li>Funcionalidades necesarias (formularios, blogs, secciones dinámicas).</li>
                <li>Limitaciones técnicas (hosting, presupuesto, CMS preferido).</li>
            </ol>
        </div>
        <!-- Fase 2 -->
        <div class="step" id="step7">
            <h1>Fase 2: Ideación y Propuesta</h1>
        </div>
        <!-- Actividades Fase 2 -->
        <div class="step" id="step8">
            <h2>Objetivo</h2>
            <p1>Sintetizar la información recolectada en problemas claros y estructurados para resolver.</p1>
        </div>
        <div class="step" id="step9">
                <h2>A. UX research: </h2>
                <ol>
                    <li>User personas, Customer jorney Map y Blue print (Service design) para algunos casos</li>
                    <li>Elementos de investigación, encuestas, cuestionarios, etc.</li>
                    <li>Metodos de investigación (Card sourting, tree testing, entrevistas, cuestionarios, etc). (Solo si el cliente lo requiere)</li>
                </ol>
        </div>
            
        <div class="step" id="step10">
            <h2>B. Mapa del sitio (Sitemap):</h2>
            <ol>
                <li>Diseño de la estructura jerárquica de navegación (ej.: Inicio, Nosotros, Servicios, Contacto).</li>
                <li>Priorización de contenido para una experiencia de usuario fluida.</li>
                
            </ol>
        </div>
        <div class="step" id="step11">
            <h2>C. Creación de flujos de usuario</h2>
            <ol>
                <li>Mapeo de las interacciones clave del usuario (ej.: llenar un formulario, solicitar información).</li>
                <li>Asegurarse de que los flujos sean intuitivos y rápidos.</li>
                
            </ol>
        </div>
        <div class="step" id="step12">
            <h2>D. Wireframes de baja fidelidad:</h2>
            <ol>
                <li>Creación de bocetos simples en herramientas como Figma o Adobe XD.</li>
                <li>Enfoque en la funcionalidad básica y distribución espacial.</li>
                
            </ol>
        </div>
        <div class="step" id="step13">
            <h2>E. Prototipo estatico de Alta fidelidad:</h2>
            <ol>
                <li>Pantallas estaticas, iteración.</li>
                <li>Prototipo de una acción concreta (Historia de usuario)</li>
                <li>Prototipo Interctivo en mobile  (Si se da el caso y el PY lo requiere)</li>
                
            </ol>
        </div>
        <div class="step" id="step14">
            <h2>F. Presentación al cliente:</h2>
            <ol>
                <li>Revisión colaborativa del sitemap y wireframes.</li>
                <li>Recopilación de feedback inicial antes de avanzar.</li>
                                
            </ol>
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
            <h2>G. Validaciones:</h2>
            <ol>
                <li>Validación con usuarios internos y potenciales clientes del cliente (si es posible).</li>
            </ol>
        </div>
        <div class="step" id="step23">
            <h2>H. Iteración basada en feedback:</h2>
            <ol>
                <li>Mejoras en la arquitectura de información y funcionalidad según las pruebas.</li>
            </ol>
        </div>

        <!-- Fase 4 -->
        <div class="step" id="step24">
            <h1>Fase 4: Prototipar (Diseño de Interfaz - UI)</h1>
        </div>

        <!-- Actividades Fase 4 -->
        <div class="step" id="step25">
            <h2>Objetivo</h2>
            <p1>Materializar las ideas en diseños de alta fidelidad que puedan ser probados y evaluados.</p1>
        </div>
        <div class="step" id="step26">
            <h2>I. Moodboard y exploración visual:</h2>
            <ol>
                <li>Recolección de referencias visuales.</li>
                <li>Definición de una paleta de colores, tipografías y elementos gráficos acordes con la identidad del cliente.</li>
                                
            </ol>
        </div>
        <div class="step" id="step27">
            <h2>J. Prototipo de alta fidelidad:</h2>
            <ol>
                <li>Aplicación de diseño visual detallado a los wireframes.</li>
                <li>Uso de componentes interactivos como botones, transiciones y hover states.</li>
                <li>Integración de textos reales y recursos visuales proporcionados por el cliente.</li>               
            </ol>
        </div>
        <div class="step" id="step28">
            <h2>K. Entrega para validación final:</h2>
            <ol>
                <li>Presentación de un prototipo clicable para que el cliente experimente la página como si ya estuviera funcionando.</li>
                <li>Ajustes menores basados en sus observaciones.</li>
            </ol>
        </div>

        <!-- Fase 5 -->
        <div class="step" id="step29">
            <h1>Fase 5: Preparación para Desarrollo</h1>
        </div>

        <!-- Actividades Fase 5 -->
        <div class="step" id="step29">
            <h2>Objetivo</h2>
            <p1>Evaluar el prototipo final con usuarios reales y preparar la entrega al equipo de desarrollo.</p1>
        </div>
        <div class="step" id="step30">
            <h2>L. Documentación y handoff:</h2>
            <ol>
                <li>Organización del diseño en herramientas como Figma o (Zeplin es de pago depende del presupuesto) para que el equipo de desarrollo tenga acceso a especificaciones claras.</li>
                <li>Exportación de assets gráficos optimizados (logos, íconos, imágenes).</li>
            </ol>
        </div>
        <div class="step" id="step31">
            <h2>M. Colaboración con desarrolladores:</h2>
            <ol>
                <li>Soporte en la implementación inicial, verificando que se respeten los lineamientos de diseño.</li>
                <li>Asistencia en ajustes rápidos del diseño para adaptarse a limitaciones técnicas.</li>
            </ol>
        </div>
        <div class="step" id="step32">
            <h2>N. Entrega final del prototipo:</h2>
            <ol>
                <li>Sección de agradecimiento y alineación con el equipo para la siguiente fase: desarrollo e implementación.</li>
                
            </ol>
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
