<?php
// How to declare a new function into helper 
// function nameFunction(arguments) {
//     return 0;
// } // end name function

// function mensaje($texto="", $titulo="", $tipo = 0) {
//     session();
//     $mensaje = array();
//     $mensaje['texto'] = $texto;
//     $mensaje['titulo'] = $titulo;
//     $mensaje['tipo'] = $tipo;
//     session()->set('mensaje', $mensaje);
// } // mensaje

function mensaje($texto = "", $titulo = "", $tipo = 0) {
    session(); // Initializes session
    $mensaje = array(); // Initializes an array to hold the message
    $mensaje['texto'] = $texto; // Assigns the provided text to the 'texto' key in the $mensaje array
    $mensaje['titulo'] = $titulo; // Assigns the provided title to the 'titulo' key in the $mensaje array
    $mensaje['tipo'] = $tipo; // Assigns the provided type to the 'tipo' key in the $mensaje array
    session()->set('mensaje', $mensaje); // Sets the 'mensaje' session variable to the $mensaje array
} // mensaje


function mostrar_mensaje() {
    $html = ''; // Initializes an empty string to hold the HTML message
    $session = session(); // Gets the session instance
    $mensaje = $session->get('mensaje'); // Retrieves the message from the session

    // Checks if no message is found
    if ($mensaje == null) {
        return ""; // Returns an empty string if there is no message
    }

    // Switch statement to handle different message types
    switch ($mensaje["tipo"]) {
        case 1:
            $tipo_mensaje = "success";
            // Add code here to handle message type 1
            break;
        case 2:
            $tipo_mensaje = "warning";
            // Add code here to handle message type 2
            break;
        case 3: // Corrected the duplicated case number and updated the comment
            $tipo_mensaje = "error";
            // Add code here to handle message type 3
            break;
        default:
            $tipo_mensaje = "info";
            break;
    }
    // Generate HTML code for displaying the message
    // $html = "<div class='alert alert-$tipo_mensaje' role='alert'>";
    // $html .= "<strong>{$mensaje['titulo']}</strong> {$mensaje['texto']}";
    // $html .= "</div>";
    // Returns the generated HTML code
    $html.='toastr.'.$tipo_mensaje.'("'.$mensaje["texto"].' "," '.$mensaje["titulo"].'");';
    //Liberamos la sesión temporal
    $session->set("mensaje",null);
    return $html;
}
