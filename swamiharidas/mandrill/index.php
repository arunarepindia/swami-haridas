<?php
    require_once 'mandrill-api-php/src/Mandrill.php';
    $output = array();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $name = mysql_escape_string($name);
    $email = mysql_escape_string($email);
    $mobile = mysql_escape_string($mobile);

    $dayOne = $_POST['dayOne'];
    $day1 = $_POST['day1'];
    $dayTwo = $_POST['dayTwo'];
    $day2 = $_POST['day2'];
    $dayThree = $_POST['dayThree'];
    $day3 = $_POST['day3'];
    $dayFour = $_POST['dayFour'];
    $day4 = $_POST['day4'];

    $dayOne = "Null";
    $day1 = "Null";
    $dayTwo = "Null";
    $day2 = "Null";
    $dayThree = "Null";
    $day3 = "Null";
    $dayFour = "Null";
    $day4 = "Null";
?>
<?php
    $mail = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <meta name='viewport' content='width=device-width'/>
        <title>Swami Haridas Tansen Sangeet Nritya Mahotsava Invite</title>
        <style>
            body{
                height:100% !important;
                margin:0;
                padding:0;
                width:100% !important;
                color: #000000;
                background-color:#DDDDDD;
            }
            table{
                border-collapse: collapse;
                text-align: center;
                border-color: #ffffff;
                background-color:#FFFFFF;
            }
            table tr {
                border: 1px solid #000000;
            }
            table td {
                border: none;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <center>
            <table border='0' cellpadding='0' cellspacing='0' width='600'>
                <tr>
                    <td align='center' valign='top'>
                        <table border='1' cellpadding='0' cellspacing='0' width='100%' id='emailBody' style='background-color:#FFF;'>
                            <!-- First -->
                            <tr>
                                <td colspan='3'>
                                    <img src='http://swamiharidastansen.org/images/headerImage.png' alt='Swami Haridas Tansen Sangeet Nritya Mahotsava'>
                                </td>
                            </tr>
                            <!-- Second -->
                            <tr>
                                <td align='center' valign='top' colspan='3' style='text-align:justify;font-size:16px;padding:10px;color: #000000;'>
                                    <div>Dear ".$name.",<br><br>Thank you for choosing to attend the Swami Haridas Sangeet Nritya Mahotsava.<br></div>
                                    <div style='margin-top:20px;'><img src='http://swamiharidastansen.org/images/invite.png' alt='Swami Haridas Sangeet Nritya Mahotsava'></div>
                                    <div>
                                        Important:
                                        <ul>
                                            <li>Please remember to take a print of this email confirmation to be verified at the venue.</li>
                                            <li>This invite admits two.</li>
                                            <li>Seating is on first come first serve basis.</li>
                                            <li>Please be at the auditorium 30 minutes before performance.</li>
                                            <li>Keep your mobile phone switched off or on silent mode inside the venue.</li>
                                            <li>Photography and videography is prohibited inside the venue.</li>
                                        </ul>
                                        Sincerely,<br>
                                        Uma Sharma
                                    </div>
                                </td>
                            </tr>
                            <!-- Fourth -->
                            <tr>
                                <td valign='top' align='center' style='color:#000000;font-size:10px;' colspan='3'>
                                    <a href='https://www.facebook.com/SwamiHaridasTansenSangeetNrityaMahotsav' style='text-decoration:none;color:#000000;'><img src='http://sangeetnrityamahotsava.drizzlin.org//images/facebookLogo.png' style='vertical-align:middle;'/>&nbsp;Like on Facebook</a>&nbsp;&nbsp;&nbsp;
                                    <a href='https://www.youtube.com/channel/UCS5cLE8VF29s-UzVaQeA6NQ' style='text-decoration:none;color:#000000;'><img src='http://sangeetnrityamahotsava.drizzlin.org/images/youtubeLogo.png' style='vertical-align:middle;'/>&nbsp;Subscribe on Youtube</a>
                                    <div>Bharatiya Sangeet Sadan: 011 2643 2998, +91 98105 02186</div>
                                    <div>Shri Ram Centre for Performing Arts: 011 2371 4307, 98105 02186</div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>";
?>
<?php
try {
    $mandrill = new Mandrill('n_oruE_9dCMo8AgsXK0DTw');
    $message = array(
        'html' => $mail,
        'subject' => 'Swami Haridas Sangeet Nritya Mahotsava Invite Confirmation',
        'from_email' => 'no-reply@swamiharidastansen.in',
        'from_name' => 'No-Reply',
        'to' => array(
            array(
                'email' => $email,
                'name' => $name,
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => 'no-reply@swamiharidastansen.in'),
        'important' => false,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'merge_language' => 'mailchimp',
    );
    $connection = mysqli_connect('localhost','epagemak_shari','#@R!_d0s',"epagemak_sharidas");
    $query = "INSERT INTO `invites` (`name`,`email`,`mobile`,`dayOne`,`day1`,`dayTwo`,`day2`,`dayThree`,`day3`,`dayFour`,`day4`) VALUES ('$name','$email','$mobile','$dayOne','$day1','$dayTwo','$day2','$dayThree','$day3','$dayFour','$day4')";
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        mysqli_query($connection,$query);
    }
    mysqli_close($connection);
    //TO ADMIN
    // $message1 = array(
    //     'html' => "Name: ".$name."<br>Email: ".$email."<br>Mobile: ".$mobile,
    //     'text' => '',
    //     'subject' => 'Invite Confirmation',
    //     'from_email' => 'no-reply@swamiharidastansen.in',
    //     'from_name' => 'No Reply',
    //     'to' => array(
    //         array(
    //             'email' => 'me@mohityagi.com',
    //             'name' => 'Mohit',
    //             'type' => 'to'
    //         )
    //     ),
    //     'headers' => array('Reply-To' => 'no-reply@swamiharidastansen.in'),
    //     'important' => false,
    //     'track_opens' => null,
    //     'track_clicks' => null,
    //     'auto_text' => null,
    //     'auto_html' => null,
    //     'inline_css' => null,
    //     'url_strip_qs' => null,
    //     'preserve_recipients' => null,
    //     'view_content_link' => null,
    //     'tracking_domain' => null,
    //     'signing_domain' => null,
    //     'return_path_domain' => null,
    //     'merge' => true,
    //     'merge_language' => 'mailchimp',
    // );
    $async = false;
    $ip_pool = 'Main Pool';
    $send_at = '';
    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
    // $result = $mandrill->messages->send($message1, $async, $ip_pool, $send_at);
    $output = array();
    $output['status'] = "Success";
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    // echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
    $output['status'] = "Failure";
    throw $e;
}
    echo json_encode($output);
?>