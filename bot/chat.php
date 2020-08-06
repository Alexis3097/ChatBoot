<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //que somos
    "¿que es?" => "centro especializado en Acupuntura-naturopatia y geriatría. diplomados profesionales en salud alternativa",
    "que es?" => "centro especializado en Acupuntura-naturopatia y geriatría. diplomados profesionales en salud alternativa",
    "que son?" =>"centro especializado en Acupuntura-naturopatia y geriatría. diplomados profesionales en salud alternativa",
    "¿que son?" =>"centro especializado en Acupuntura-naturopatia y geriatría. diplomados profesionales en salud alternativa",
    "¿a que se dedican?" =>"centro especializado en Acupuntura-naturopatia y geriatría. diplomados profesionales en salud alternativa",
    "a que se dedican?" =>"centro especializado en Acupuntura-naturopatia y geriatría. diplomados profesionales en salud alternativa",
    "que hacen?" =>"centro especializado en Acupuntura-naturopatia y geriatría. diplomados profesionales en salud alternativa",
    "¿que hacen?" =>"centro especializado en Acupuntura-naturopatia y geriatría. diplomados profesionales en salud alternativa",
    //otros temas
    "como estas?" =>"muy bien, pasando un excelente dia, espero que el tuyo tambien.",
    "¿como estas?" =>"muy bien, pasando un excelente dia, espero que el tuyo tambien.",
    //redes sociales
    "como contactar?" => "Puedes marcar el numero961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "contacto?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "contactarlos?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "contactar los?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "como encontrarlos?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "contacto" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    //Horarios de atencion
    "horario de atencion"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "horario"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "horarios"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "cuando abren?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "cuando abren"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "¿cuando abren?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "que dia abren"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "que dia abren?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "¿que dia abren?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "que horas abren y cierran?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "que horas abren?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "que horas abren"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "Todo el dia esta abierto?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "¿Todo el dia esta abierto?"=>"De lunes a viernes de 10:00 - 20:00 horas",

    "¿en que horario abren?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "en que horario abren?"=>"De lunes a viernes de 10:00 - 20:00 horas",
    "en que horario abren"=>"De lunes a viernes de 10:00 - 20:00 horas",

    //donde encontrarnos
    "donde estan?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "donde estan"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "¿donde estan?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "donde encontrarlos?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "donde encontrarlos"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "¿donde encontrarlos?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "¿donde se ubican?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "donde se ubican?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "direccion"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "cual es la direccion?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "¿cual es la direccion?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "cual es la direccion"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "donde se ubican"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "ubicacion"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "ubicacion?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    "¿ubicacion?"=>"Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México",
    
    //name
    "como te llamas?" =>"Soy AcumedicBoot y estoy para servirte",
    "cual es tu nombre?" =>"Soy AcumedicBoot y estoy para servirte",
    "tienes nombre?" =>"Soy AcumedicBoot y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
    "hi" =>"un gusto de verte",

    "Buenas tardes" => "Buenas tardes, ¿En que puedo ayudarle?",
    "Buenos dias" => "Buenos dias, ¿En que puedo ayudarle?" ,
    "Buenas noches" => "Buenas noches, ¿En que puedo ayudarle?"
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is AcumedicBoot",
   
    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender(),

    //
    "¿Cual es su telefono?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su telefono?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su telefono" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",

    "¿Cual es su numero de telefono?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su numero de telefono?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su numero de telefono" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",

    "Telefono" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",

    "¿Cual es su correo?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su correo?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su correo" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",

    "¿Cual es su correo electronico?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su correo electronico?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su correo electronico" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",

    "correo" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",

    "¿Cual es su direccion?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su direccion?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su direccion" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "direccion" => "Nos ubicamos en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México", 

    "¿Cual es su facebook?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su facebook?" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "Cual es su facebook" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",
    "facebook" => "Puedes marcar el numero 961 173 4245 tambien mandarnos mensaje privado en nuestro facebook https://www.facebook.com/acumedictux o un correo a medicalternativa@hotmail.com",

    "quiero apartar una cita" => "claro, puede ir a nuestro establecimiento en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México o llamar al 961 173 4245",
    "quiero reservar una cita" => "claro, puede ir a nuestro establecimiento en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México o llamar al 961 173 4245",
    "quisiera reservar una cita" => "claro, puede ir a nuestro establecimiento en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México o llamar al 961 173 4245",
    "quisiera apartar una cita" => "claro, puede ir a nuestro establecimiento en monseni 124 fraccionamiento montserrat 29070 Tuxtla Gutiérrez, Chiapas, México o llamar al 961 173 4245",

    "no puedo reservar una cita aqui" => "Por el momento no contamos con esa funcion, disculpe",
    "no puedo apartar una cita aqui" => "Por el momento no contamos con esa funcion, disculpe",
    "aqui no puedo reservar una cita" => "Por el momento no contamos con esa funcion, disculpe",
    "aqui no se puedo reservar una cita" => "Por el momento no contamos con esa funcion, disculpe",
    "no puedo reservar una cita aqui?" => "Por el momento no contamos con esa funcion, disculpe",
    "no puedo apartar una cita aqui?" => "Por el momento no contamos con esa funcion, disculpe",
    "aqui no puedo reservar una cita?" => "Por el momento no contamos con esa funcion, disculpe",
    "aqui no se puedo reservar una cita?" => "Por el momento no contamos con esa funcion, disculpe",
    "¿no puedo reservar una cita aqui?" => "Por el momento no contamos con esa funcion, disculpe",
    "¿no puedo apartar una cita aqui?" => "Por el momento no contamos con esa funcion, disculpe",
    "¿aqui no puedo reservar una cita?" => "Por el momento no contamos con esa funcion, disculpe",
    "¿aqui no se puedo reservar una cita?" => "Por el momento no contamos con esa funcion, disculpe",

    "ok" => "¿Alguna otra pregunta?",
    "muy bien" => "¿Alguna otra pregunta?",
    "Gracias" => "¿Alguna otra pregunta?",
    "esta bien" => "¿Alguna otra pregunta?",


    "no" => "nos vemos pronto",
    "si" => "digame...",


    "disculpe los horarios para poder agendar una cita" => "De lunes a viernes de 10:00 - 20:00 horas",

    "precio" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "precios" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "¿Cuales son sus precios?" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "Cuales son sus precios?" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "Cuales son sus precios" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",

    "Que precios maneja?" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "¿Que precios maneja?" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "Que precios maneja" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",


    "costo" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "costos" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "¿Cuales son sus costos?" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "Cuales son sus costos?" =>  "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "Cuales son sus costos" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",

    "Que precios maneja?" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "¿Que precios maneja?" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",
    "Que precios maneja" => "las citas son  gratis por primera ocasión, dependiendo tu tratamiento se irá ajustando a tu presupuesto y las características del mismo",

    "puedes contar un chiste" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",
    "puedes contar un chiste?" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",
    "¿puedes contar un chiste?" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",

    "puedes contarme un chiste" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",
    "puedes contarme un chiste?" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",
    "¿puedes contarme un chiste?" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",
    "¿sabes contar un chiste?" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",
    "sabes contar un chiste?" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",
    "sabes contar un chiste" => "Actualmente solo puedeo dar información de acumedic, pero puedo intentarlo ¿Cómo saludan los mares y los océanos?",

    "¿como?" => "con un ola"
    "como?" => "con un ola"
    "como" => "con un ola"
    "?" => "con un ola"
    "¿?" => "con un ola"

    "Jajaja" => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",
    "jajajaja " => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",
    "ja ja ja ja " => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",
    "Ja ja ja" => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",
    "Jaja" => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",
    "Ja ja" => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",

    "Jejeje" => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",
    "Je je je" => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",
    "Jeje" => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",
    "Je je" => "No soy buena eso, ¿Algun otra pregunta sobre acumedic?",

    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con acumedic.");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
