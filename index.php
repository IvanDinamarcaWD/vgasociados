<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VG ASOCIADOS - Servicios Contables, Tributarios, Laborales y Legales</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="imagenes/logo-pestania.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1cb5d2ca1c.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="nav" id="inicio">
        <div class="items">
            <a href="#"class="item item-text">
                INICIO
            </a>
            <a href="#servicios" class="item item-text">
                SERVICIOS
            </a>
            <a href="#tipsydatos"class="item item-text" >
                TIPS Y DATOS
            </a>
            <a href="#" class="item">
                <img class="logo-letra" src="imagenes/logo-letra.png">
            </a>
            <a href="#nuestroequipo" class="item item-text">
                NUESTRO EQUIPO
            </a>
            <a href="#contacto" class="item item-text">
                CONTACTO
            </a>
            <a class="item item-text">
                <div onclick="abrirSidebar()">
                    PORTAL DEL CLIENTE
                </div>
            </a>
        </div>
        <div class="menu">
            <div class="icono-menu-abierto" id="icono-menu-abierto" onclick="aparecerMainMenu()">
                <div class="barra-menu-abierto" id="barra-abierto-1"></div>
                <div class="barra-menu-abierto" id="barra-abierto-2"></div>
                <div class="barra-menu-abierto" id="barra-abierto-3"></div>
            </div>
            <div class="icono-menu-cerrado" id="icono-menu-cerrado" onclick="desaparecerMainMenu()">
                <div class="barra-menu-cerrado" id="barra-cerrado-1"></div>
                <div class="barra-menu-cerrado" id="barra-cerrado-2"></div>
                <div class="barra-menu-cerrado" id="barra-cerrado-3"></div>
            </div>
            <div class="main-content" id="main-content">
                <div class="main-menu" id="main-menu" onclick="desaparecerMainMenu()">
                    <a href="#" class="item-text-responsive">
                        INICIO
                    </a>
                    <a href="#servicios" class="item-text-responsive">
                        SERVICIOS
                    </a>
                    <a href="#tipsydatos" class="item-text-responsive">
                        TIPS Y DATOS
                    </a>
                    <a href="#nuestroequipo" class="item-text-responsive">
                        NUESTRO EQUIPO
                    </a>
                    <a href="#contacto" class="item-text-responsive">
                        CONTACTO
                    </a>
                    <a class="item-text-responsive" onclick="abrirSidebar()">
                            PORTAL DEL CLIENTE
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="sidebarportaldelcliente" id="sidebarportaldelcliente">
        <div class="divbotoncerrar" onclick="cerrarSidebar()">
            <i class="fas fa-times"></i>
        </div>
        <div class="imgsidebarportaldelcliente">
            <img class="imagenlogoblanco" src="imagenes/logo-blanco.png" alt="">
        </div>
        <div class="formsloginportaldelcliente">
            <input type="text" >
            <input type="password">
        </div>
        <div class="divbotonlogin">
            <div class="botonentrar-login">
                ENTRAR
            </div>
        </div>
    </div> 
    <div class="section">
        <p class="subtitulosection">
            Estamos para ayudar a tu empresa
        </p>
        <div class="lista">
            <ul>
                <li class="listasection">Contabilidad y Servicios</li>
                <li class="listasection">Asesorías Profesionales</li>
            </ul>
        </div>
    </div>
    <div class="servicios" id="servicios">
        <div class="content-tituloservicios">
            <div class="titulos">
                <h3>Nuestros Servicios</h3>
            </div>
        </div>
        <div class="content-servicios">
            <div class="servicios">
                <div class="divimagenservicios">
                    <img class="imagenservicios" src="imagenes/asesoria-contable-1.jpg" alt="">
                </div>
                <div class="tiposervicio">
                    <strong>
                        Asesoría Contable
                    </strong>
                </div>
                <div class="caracteristicaservicio">
                    <ul>
                        <li>Emprendedores</li>
                        <li>PyMEs</li>
                        <li>Grandes Empresas</li>
                    </ul>
                </div>
            </div>
            <div class="servicios">
                <div class="divimagenservicios">
                    <img class="imagenservicios" src="imagenes/asesoria-tributaria-1.jpg" alt="">
                </div>
                <div class="tiposervicio">
                    <strong>
                        Asesoría Tributaria
                    </strong>
                </div>
                <div class="caracteristicaservicio">
                    <ul>
                        <li>Regularización años anteriores</li>
                        <li>Cierres Tributarios (Balance General,
                             Declaraciones Juradas, Declaración de Renta)</li>
                        <li>Término de Giro</li>
                    </ul>
                </div>
            </div>
            <div class="servicios">
                <div class="divimagenservicios">
                    <img class="imagenservicios" src="imagenes/asesoria-laboral-1.jpg" alt="">
                </div>
                <div class="tiposervicio">
                    <strong>
                        Asesoría Laboral
                    </strong>
                </div>
                <div class="caracteristicaservicio">
                    <ul>
                        <li>Outsourcing</li>
                        <li>Remuneraciones</li>
                        <li>Contratos</li>
                        <li>Finiquitos</li>
                        <li>F30 / F30-1</li>
                    </ul>
                </div>
            </div>
            <div class="servicios">
                <div class="divimagenservicios">
                    <img class="imagenservicios" src="imagenes/asesoria-legal-1.jpg" alt="">
                </div>
                <div class="tiposervicio">
                    <strong>
                        Asesoría Legal
                    </strong>
                </div>
                <div class="caracteristicaservicio">
                    <ul>
                    <li>Constitución (EIRL, Ltda, S.A, SPA)</li>
                        <li>Modificaciones</li>
                        <li>Representación a Extranjeros</li>
                        <li>Juicios Laborales</li>
                        <li>Derecho de Marca</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="serviciodireccion">
        <div class="content-tituloserviciodireccion">
            <div class="titulos">
                <h3>Oficina Virtual</h3>
            </div>
        </div>
        <div class="content-serviciodireccion">
            <div class="divserviciosdireccion">
                <div class="serviciosdireccion">
                    <div class="letraservicio">
                        Servicio Trimestral
                    </div>
                    <div class="letradescripcion">
                        Descripción
                    </div>
                    <div class="valorantes">
                        $60.000 CLP + IVA
                    </div>
                    <div class="valoroferta">
                        <strong>
                            $50.000 CLP + IVA
                        </strong>
                    </div>
                    <div class="flex-botoncontratar">
                        <div class="boton-contratar">
                            CONTRATAR
                        </div>
                    </div>
                </div>
            </div>
            <div class="divserviciosdireccion">
                <div class="serviciosdireccion">
                    <div class="letraservicio">
                        Servicio Semestral
                    </div>
                    <div class="letradescripcion">
                        Descripción
                    </div>
                    <div class="valorantes">
                        $70.000 CLP+ IVA
                    </div>
                    <div class="valoroferta">
                        <strong>
                            $60.000 CLP + IVA
                        </strong>
                    </div>
                    <div class="flex-botoncontratar">
                        <div class="boton-contratar">
                            CONTRATAR
                        </div>
                    </div>
                </div>
            </div>
            <div class="divserviciosdireccion">
                <div class="serviciosdireccion">
                    <div class="letraservicio">
                        Servicio Anual
                    </div>
                    <div class="letradescripcion">
                        Descripción
                    </div>
                    <div class="valorantes">
                        $80.000 CLP + IVA
                    </div>
                    <div class="valoroferta">
                        <strong>
                            $70.000 CLP + IVA
                        </strong>
                    </div>
                    <div class="flex-botoncontratar">
                        <div class="boton-contratar">
                            CONTRATAR
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="separadorservicios">
        <img class="imgseparadorservicios" src="imagenes/separacionservicios.png" alt="">
    </div>
    <div class="obligaciones">
        <div class="marcofotoobligaciones">
            <img class="fotoobligaciones" src="imagenes/imagenobligaciones.jpg" alt="">
        </div>
        <div class="acordeonobligaciones">
            <div class="acordeon_item">
                <input type="radio" checked="checked" name="acordeon" id="acordeon_item1">
                <label for="acordeon_item1">
                    <div class="logobotonmas">
                        +
                    </div>
                    <div class="logobotonmenos">
                        -
                    </div>
                    <div class="tituloacordeon">
                        Obligaciones como contribuyente
                    </div>
                </label>
                <div class="pregunta-acordeon">
                    <strong>
                        ¿Qué obligaciones debo cumplir
                        mensualmente como contribuyente?
                    </strong>
                </div>
                <div class="lista-acordeon">
                    <ul>
                        <li>
                        Declarar y pagar Formulario
                         29 en base a las ventas, compras,
                          remuneraciones con Impuesto Único
                           y retención de impuestos por
                            honorarios.
                        </li>
                        <li>
                            Confeccionar y enviar
                             mensualmente el Libro
                              Electrónico de Ventas.
                        </li>
                        <li>
                            Confeccionar y enviar mensualmente
                            el Libro Electrónico de Compras.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="acordeon_item">
                <input type="radio" name="acordeon" id="acordeon_item2">
                <label for="acordeon_item2">
                    <div class="icono-botonmas">
                        <div class="logobotonmas">
                            +
                        </div>
                        <div class="logobotonmenos">
                            -
                        </div>
                        <div class="tituloacordeon">
                            Antecedentes para la contabilidad
                        </div>
                    </div>
                </label>
                <div class="pregunta-acordeon">
                    <strong>
                        ¿Qué antecedentes debo proporcionar
                        para la Contabilidad?
                    </strong>
                </div>
                <div class="lista-acordeon">
                    <ul>
                        <li>
                            Acceso mediante certificado
                             digital o autorización para
                              ingresar en representación
                               de la empresa al SII.
                        </li>
                        <li>
                            Clave de la empresa en el SII.
                        </li>
                        <li>
                        Documentación de compras y ventas
                         no electrónicas realizadas el mes
                          anterior (digitalizados).
                        </li>
                        <li>
                        Documentación de respaldo de gastos
                         realizados por la empresa, de manera
                          mensual, idealmente los 7 primeros
                           días del mes siguiente
                            (digitalizados).
                        </li>
                        <li>
                            Ficha laboral de los nuevos
                         trabajadores incorporados a la empresa.
                        </li>
                        <li>
                            Contratos firmados (digitalizados).
                        </li>
                    </ul>
                </div>
            </div>
            <div class="acordeon_item">
                <input type="radio" name="acordeon" id="acordeon_item3">
                <label for="acordeon_item3">
                    <div class="icono-botonmas">
                        <div class="logobotonmas">
                            +
                        </div>
                        <div class="logobotonmenos">
                            -
                        </div>
                        <div class="tituloacordeon">
                            Obligaciones como contribuyente
                        </div>
                    </div>
                </label>
                <div class="pregunta-acordeon">
                    <strong>
                        ¿Qué obligaciones debo cumplir
                        mensualmente como contribuyente?
                    </strong>
                </div>
                <div class="lista-acordeon">
                    <ul>
                        <li>
                            Contáctenos vía formulario
                             de contacto, email o teléfono,
                              para coordinar una reunión o
                               llamada telefónica con uno
                                de nuestros Contadores, con
                                 el fin de recabar antecedentes
                                  sobre su requerimiento y
                                   presentarle un presupuesto
                                    por los servicios contables,
                                     donde se establece los
                                      alcances y valor mensual
                                       de acuerdo a la carga
                                        laboral asociada.
                        </li>
                        <li>
                            Una vez aceptada la oferta,
                             se suscribe contrato por los
                              servicios de contabilidad.
                               El servicio se factura los
                                últimos días de cada mes
                                 con fecha de pago hasta
                                  el día 5 del mes siguiente.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tipsydatos" id="tipsydatos">
        <img class="imagentipsydatos" src="imagenes/tipsydatos.jpg" alt="">
        <div class="content-titulotipsydatos">
            <div class="titulos">
                <h3>Tips y Datos</h3>
            </div>
        </div>
        <div class="tips">
            <div class="tip">
                <div class="imgtip">
                    <img class="bordeimgtip" src="imagenes/TIP1.jpg" alt="">
                </div>
                <div class="cuadropreguntatip">
                    <span class="preguntatip">
                        ¿Qué obligaciones debo cumplir mensualmente como
                        contribuyente?
                    </span>
                </div>
                <div class="botonestips">
                    <input type="checkbox" id="check-tips1">
                    <label for="check-tips1">
                        <div class="icono-boton">
                            VER TIPS
                        </div>
                        <div class="main-contenttips">
                            <div class="main-tip">
                                <div>
                                    <strong>
                                        ¿Qué obligaciones debo cumplir mensualmente como contribuyente?
                                    </strong>
                                    <ul>
                                        <li>
                                            Declarar y pagar Formulario 29 en base a las ventas,
                                            compras, remuneraciones con Impuesto Único y retención
                                            de impuestos por honorarios.
                                        </li>
                                        <li>
                                            Confeccionar y enviar mensualmente el Libro Electrónico
                                            de Ventas.
                                        </li>
                                        <li>
                                            Confeccionar y enviar mensualmente el Libro Electrónico
                                            de Compras.
                                        </li>
                                    </ul>
                                    <div>
                                        <div class="icono-botoncerrar">
                                            CERRAR
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="tip">
                <div class="imgtip">
                    <img class="bordeimgtip" src="imagenes/TIP2.jpg" alt="">
                </div>
                <div class="cuadropreguntatip">
                    <span class="preguntatip">
                        ¿Qué antecedentes debo proporcionar para la
                        Contabilidad?
                    </span>
                </div>
                <div class="botonestips">
                    <input type="checkbox" id="check-tips2">
                    <label for="check-tips2">
                        <div class="icono-boton">
                            VER TIPS
                        </div>
                        <div class="main-contenttips">
                            <div class="main-tip">
                                <div>
                                    <strong>
                                        ¿Qué antecedentes debo proporcionar para la Contabilidad?
                                    </strong>
                                    <ul>
                                        <li>
                                            Acceso mediante certificado digital o autorización para
                                            ingresar en representación de la empresa al SII.
                                        </li>
                                        <li>
                                            Clave de la empresa en el SII.
                                        </li>
                                        <li>
                                            Documentación de compras y ventas no electrónicas realizadas
                                            el mes anterior (digitalizados).
                                        </li>
                                        <li>
                                            Documentación de respaldo de gastos realizados por la empresa,
                                            de manera mensual, idealmente los 7 primeros días del mes siguiente
                                             (digitalizados).
                                        </li>
                                        <li>
                                            Ficha laboral de los nuevos trabajadores incorporados a la empresa.
                                        </li>
                                        <li>
                                            Contratos firmados (digitalizados).
                                        </li>
                                    </ul>
                                    <div>
                                        <div class="icono-botoncerrar">
                                            CERRAR
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="tip">
                <div class="imgtip">
                    <img class="bordeimgtip" src="imagenes/TIP3.jpg" alt="">
                </div>
                <div class="cuadropreguntatip">
                    <span class="preguntatip">
                        ¿Cómo tomar el Servicio de Contabilidad?
                    </span>
                </div>
                <div class="botonestips">
                    <input type="checkbox" id="check-tips3">
                    <label for="check-tips3">
                        <div class="icono-boton">
                                VER TIPS
                        </div>
                        <div class="main-contenttips">
                            <div class="main-tip">
                                <div>
                                    <strong>
                                        ¿Cómo tomar el Servicio de Contabilidad?
                                    </strong>
                                    <ul>
                                        <li>
                                            Contáctenos vía formulario de contacto, email o teléfono, para
                                            coordinar una reunión o llamada telefónica con uno de nuestros
                                            Contadores, con el fin de recabar antecedentes sobre su
                                            requerimiento y presentarle un presupuesto por los servicios contables,
                                            donde se establece los alcances y valor mensual de acuerdo a la carga
                                             laboral asociada.
                                        </li>
                                        <li>
                                            Una vez aceptada la oferta, se suscribe contrato por los servicios de
                                            contabilidad. El servicio se factura los últimos días de cada mes con fecha
                                            de pago hasta el día 5 del mes siguiente.
                                        </li>
                                    </ul>
                                    <div>
                                        <div class="icono-botoncerrar">
                                            CERRAR
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="nuestroequipo" id="nuestroequipo">
        <img class="imagennuestroequipo" src="imagenes/nuestroequipo.jpg" alt="">
        <div class="content-titulonuestroequipo">
            <div class="titulos titulonuestroequipo"> 
                <h3>VG & Asociados Consultoría Ltda.</h3>
            </div>
        </div>
        <div class="content-descripcionnuestroequipo"> 
            <div class="parrafonuestroequipo">
                <p>
                    Empresa creada para brindar servicios Contables, Tributarios, Laborales
                    y Legales.
                </p>
            </div>
        </div>
        <div class="content-separacionnuestroequipo">
            <div class="separacionnuestroequipo">
            </div>
        </div>
        <div class="content-nuestroobjetivo">
            <div class="titulonuestroobjetivo">
                Nuestro Objetivo
            </div>
        </div>
        <div class="content-parrafosnuestroobjetivo">
            <div class="content-gridparrafosnuestroobjetivo">
                <div class="parrafosnuestroobjetivo">
                    <p class="primerparrafonuestroobjetivo">
                        Apoyar Profesional y técnicamente a nuestros clientes brindando
                        servicios de soluciones integrales sobre temas empresariales en
                        general.
                    </p>
                    <p>
                        Un principio permanente de nuestra empresa es ir mejorando y
                        perfeccionándonos en temas de gestión, ayudando a las empresas
                        a ser proactivas, a crecer económicamente y a tener el éxito
                        asegurado.
                    </p>
                </div>
                <div class="parrafosnuestroobjetivo">
                    <p>
                        Gestionamos el cumplimiento tributario de su empresa de acuerdo
                        a la legislación vigente forma externa con un alto nivel de confianza
                        y eficiencia para que usted concentre sus esfuerzos en las
                        actividades centrales de su negocio. Brindamos asesoría contable,
                        laboral, Legal y tributaria en todas las etapas de vida de su
                        empresa, desde la constitución de la empresa hasta su cierre
                        y liquidación.
                    </p>
                </div>
            </div>
        </div>
        <div class="content-tituloprofesionales">
            <div class="titulos tituloprofesionales">
                <h3>Profesionales</h3>
            </div>
        </div>
        <div class="content-descripcionnuestroequipo">
            <div class="parrafonuestroequipo">
                <p>
                    Ponemos a disposición, profesionales con una sólida formación académica.
                </p>
            </div>
        </div>
        <div class="content-separacionnuestroequipo">
            <div class="separacionnuestroequipo">
            </div>
        </div>
        <div class="content-parrafoprofesionales parrafojustify">
            <div class="parrafoprofesionales">
                <p>
                    Entrenados de acuerdo a nuestros estándares internos,
                    tanto en materia técnica, como la capacidad de interactuar
                    con un equipo humano de gestión y ejecución. Nuestros
                    expertos en Contabilidad cuentan con un importante soporte
                    técnico, conformado por un equipo multidisciplinario en
                    Contabilidad, RRHH y Tributaria.
                </p>
            </div>
        </div>
    </div>
    <div class="nuestrospartners">
        <div class="textonuestrospartners">
            Nuestros Partners
        </div>
        <div class="partners">
            <div class="partnersmargin">
                <div class="centrarcontenidopartners">
                    <img src="imagenes/empresa-escritorio.jpg" alt="">
                </div>
                <div class="centrarcontenidopartners">
                    <div class="textoplomonuestrospartners">
                        Estudio jurídico dedicado a la 
                        <span class="textoamarillonuestrospartners">
                            Asesoría a Empresas
                        </span>  
                    </div>
                </div>
                <div class="centrarcontenidopartners">
                    <a target="_blank" href="https://empresaescritorio.cl/">
                        <div class="icono-boton">
                            VER WEB
                        </div>
                    </a>
                </div>
            </div>
            <div class="partnersmargin">
                <div class="centrarcontenidopartners ">
                        <img src="imagenes/erpyme-logo.png" alt="">
                </div>
                <div class="centrarcontenidopartners">
                    <div class="textoplomonuestrospartners">
                        Sistema software gratuito de 
                        <span class="textoamarillonuestrospartners">
                            Gestion y Facturación
                        </span>
                    </div>
                </div>
                <div class="centrarcontenidopartners">
                    <a target="_blank" href="https://www.erpyme.cl/">
                        <div class="icono-boton">
                            VER WEB
                        </div>
                    </a>
                </div> 
            </div>
        </div>
    </div>
    <div class="maps" id="contacto">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.3990893189084!2d-70.58025248537813!3d-33.41283820296778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf1f640e0b3d%3A0x1ffcb03bce23edee!2sPuerta%20del%20Sol%2080%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1611975081196!5m2!1ses!2scl" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
<<<<<<< HEAD
    <footer>
        <?php

            include("footer.php");

        ?>
    </footer>
    <?php

        include("llamadaywhatsapp.php");

    ?>

    <script src="js/index.js"></script>
=======
    <div class="contacto">
        <div class="divcontacto">
            Contacto
        </div>
        <div class="separador divcontacto">
        </div>
        <div class="divcontacto">
            Asesoría contable y tributaria: +569 5662 7943
        </div>
        <div class="divcontacto">
            Oficina virtual: +569 5814 7928
        </div>
        <div class="divcontacto">
            Puerta del sol #80 of 108, Las Condes – Santiago
        </div>
        <div class="iconos">
            <div class="redessociales">
                <a class="aiconos" href="https://www.facebook.com/vigo.asesorias" target="_blank">
                    <i class="fab fa-facebook-square icono"></i>
                </a>
                
            </div>
            <div class="redessociales">
                <a class="aiconos"  href="https://www.instagram.com/vigoasesorias/" target="_blank">
                    <i class="fab fa-instagram-square icono"></i>
                </a>
            </div>
            <div class="redessociales">
                <a class="aiconos" href="https://www.linkedin.com/company/vgasociados/" target="_blank">
                    <i class="fab fa-linkedin icono"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="separadorcopyright divcontacto">
        </div>
        <div class="divcopyright">
                <div class="contenidocopyright">
                © COPYRIGHT 2021   |   TODOS LOS DERECHOS RESERVADOS   |
                   Desarrollado por IvanDinamarcaWD
                </div>
        </div>
    </div>
    <div class="botonwhatsapp">
        <a href="https://api.whatsapp.com/send?phone=56956627943" target="_blank">
            <i class="fab fa-whatsapp iconowhatsapp"></i>
        </a>
    </div>
    <div class="botontelefono">
        <a href="tel:+56956627943" target="_blank">
            <i class="fas fa-phone-square-alt iconotelefono"></i>
        </a>
    </div>
    <div>
        hola
    </div>
    <script src="js/main.js"></script>
>>>>>>> refs/remotes/origin/master

</body>
</html>