<?

add_action( 'wp_ajax_nopriv_send_email', 'send_email' );
add_action( 'wp_ajax_send_email', 'send_email' );

function send_email(){

    // Verify nonce
    if( !isset( $_POST['arch_nonce'] ) || !wp_verify_nonce( $_POST['arch_nonce'], 'arch_nonce' ) )
        die('Permission denied');

    $data = array();
    parse_str($_POST['data'], $data);

    $name = sanitize_text_field( $data['fname'] );
    $tel = sanitize_text_field( $data['fphone'] );
    $email = sanitize_email( $data['femail'] ) ;

    $to = 'contact@buroarchdesign.com';
    $subject = 'Заявка с сайта BuroArchDesign';
    $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
    $message = "\r\nЗаявка отправленна с сайта ".$_SERVER['HTTP_REFERER']."\r\nEmail: ".$email."\r\nИмя: ".$name."\r\nТелефон: ".$tel."\r\n";
    $headers = 'Content-type: text/plain; charset="utf-8"';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: ". date('D, d M Y h(idea)(worry) O') ."\r\n";
    mail($to, $subject, $message, $headers);
    ?>

    <div class="success-msg-wrapper">
        <div class="success-msg-container">
            <div class="success-msg-content popup-content">
                <div class="msg">
                    <p>Спасибо, ваш запрос отправлен!</p>
                </div>
            </div>
        </div>
    </div>


    <?php
    exit();

}