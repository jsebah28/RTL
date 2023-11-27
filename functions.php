<?php
add_action( 'wp_head', 'childtheme_favicon'); 
add_action( 'wp_footer', 'childtheme_analytics');

function childtheme_favicon() {
        $shortname =  get_option('of_shortname'); 
        if (get_option($shortname . '_custom_favicon') != '') {
            echo '<link rel="shortcut icon" href="'.  get_option($shortname .'_custom_favicon')  .'"/>'."\n";
        }
}

function childtheme_analytics(){
    $shortname =  get_option('of_shortname');
    $output = get_option($shortname . '_google_analytics');
    if ( $output <> "" ) 
        echo stripslashes($output) . "\n";
}  
add_action( 'phpmailer_init', function ( $phpmailer ) {
    //*****************settings*********************//
    $Outgoing_Server = '190.8.176.14';
    $Port = '587';
    $email = 'pqrs@losmoviles.com.co';
    $password = '-eiwJRfr3m[T';
    $site_name = 'Moviles';
    //*****************settings*********************//
    $phpmailer->isSMTP();
    $phpmailer->Host       = $Outgoing_Server;
    $phpmailer->Port       = $Port;
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Username   = $email;
    $phpmailer->Password   = $password;
    $phpmailer->From       = $email;
    $phpmailer->FromName   = $site_name;
    $phpmailer->addReplyTo($email, $site_name);
    $phpmailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ));
    } );
    
    add_action('wp_mail_failed', function ( $wp_error ){
        $timee = date("Y-m-d");	
        $emaill = array(
        "email_to" => $args["to"],
        "email_subject" => $args["subject"],
        "email_message" => $args["message"]
        );
        $fn = ABSPATH . '/mail.log'; // say you've got a mail.log file in your server root
        $fp = fopen($fn, 'a');
        fputs($fp, "Mailer Error: " . serialize($wp_error).  " email: " . $emaill[1] . "  time -> " . $timee . "\n");	
        fclose($fp);
    }, 10, 1);


add_action('init', 'sendmail');

function sendmail(){
    if(isset($_POST['insert'])){
        $name = sanitize_text_field( $_POST['name'] );
        $email = sanitize_email( $_POST['email'] );
        $message = esc_textarea( $_POST['message'] );
        $phone_number = sanitize_text_field( $_POST['phone_number'] );
        $report_to = sanitize_text_field( $_POST['switch-one'] );
        $to = 'servicioalcliente@losmoviles.com.co';
        $subject = 'PQR';
        $body="<div>
        <p>Nombre completo: $name</p>
        <p>Celular: $phone_number</p>
        <p>Correo: $email</p>
        <p>What are you going to report?: $report_to</p>
        <p>Cuentanos lo sucedido: $message</p>
        </div>";
        $headers = array('Content-Type: text/html; charset=UTF-8');
        if (wp_mail($to, $subject, $body, $headers)) {
            wp_redirect( home_url() );
            exit;
          } else {
            echo 'Email not sent. Please check your server settings.';
          }
    }
}
?>