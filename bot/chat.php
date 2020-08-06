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
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is AcumedicBoot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
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
