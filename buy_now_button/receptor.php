<?php
require_once("../Config/Config.php");

$baseUrl = BASE_URL;
// Para cambiar al entorno de producción usar: www.paypal.com
$paypal_hostname = PAYPAL_HOSTNAME;
$pdt_identity_token = PDT_IDENTITY_TOKEN;



$tx = $_GET['tx'];

$datos_get = $_GET;

?>

<div id="all"></div>

<?php
ob_start();
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Recibo</h4>
                </div>
                <div class="card-body">
                    <p><strong>Amount:            </strong> <?php print($datos_get['amount']) ;?> </p>
                    <p><strong>Status:            </strong> <?php print($datos_get['payment_status']) ;?> </p>
                    <p><strong>Transaction ID:    </strong> <?php print($datos_get['tx']) ;?> </p>
                    <p><strong>Currency:          </strong> <?php print($datos_get['mc_currency']) ;?> </p>
                    <p><strong>Payment Date:      </strong> <?php print($datos_get['payment_date']) ;?> </p>
                    <p><strong>Item Name:         </strong> <?php print($datos_get['item_name']) ;?> </p>
                    <p><strong>Payment Gross:     </strong> <?php print($datos_get['payment_gross']) ;?> </p>
                    <p><strong>Payer Email:       </strong> <?php print($datos_get['payer_email']) ;?> </p>
                    <p><strong>First Name:        </strong> <?php print($datos_get['first_name']) ;?> </p>
                    <p><strong>Last Name:         </strong> <?php print($datos_get['last_name']) ;?> </p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="<?php print(BASE_URL);?>" class="btn btn-primary">Regresar a inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$receipt_string = ob_get_clean();
?>

<script>
    const receipt_string    = `<?php print($receipt_string);?>`;
    const get               = <?php print(json_encode($_GET));?>;
    const post              = <?php print(json_encode($_POST));?>;
    // console.log(get);
</script>

<script src="../js/general.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>

<script>
    const base_url = <?php print("'".$baseUrl."'");?>;
</script>

<script src="../js/receptor.js"></script>

<?php





/* 
$query = "cmd=_notify-synch&tx=$tx&at=$pdt_identity_token";

$request = curl_init();
// Establecemos las opciones necesarias para realizar la solicitud a paypal
curl_setopt($request, CURLOPT_URL, "https://$paypal_hostname/cgi-bin/webscr");
curl_setopt($request, CURLOPT_POST, TRUE);
curl_setopt($request, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($request, CURLOPT_POSTFIELDS, $query);

// Opciones recomendadas especialmente en entornos de producción
curl_setopt($request, CURLOPT_SSL_VERIFYPEER, TRUE);
// Si tu servidor no incluye los certificados verisign predeterminados debes establecer
// la ruta del certificado verisign cacert.pem, lo puedes descargar en: https://curl.se/docs/caextract.html
//curl_setopt($request, CURLOPT_CAINFO, __DIR__ . '\cacert.pem');
curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($request, CURLOPT_HTTPHEADER, array("Host: $paypal_hostname"));

// Ejecutamos la solicitud
$response = curl_exec($request);
curl_close($request);

if (!$response) {
    //HTTP ERROR
    // echo "Error";
    return;
}

// Dividimos $response por líneas
$lines = explode("\n", trim($response));
$keyarray = array();

// Validamos la respuesta
if (strcmp($lines[0], "SUCCESS") == 0) {
    for ($i = 1; $i < count($lines); $i++) {
        $temp = explode("=", $lines[$i], 2);
        $keyarray[urldecode($temp[0])] = urldecode($temp[1]);
    }

    // Verificamos que el estado de pago esté Completado
    // Comprobamos que txn_id no ha sido procesado previamente
    // Verificamos que el importe de pago y la moneda de pago sean correctos

    // En el siguiente enlace puedes encontrar una lista completa de Variables IPN y PDT.
    // https://developer.paypal.com/docs/api-basics/notifications/ipn/IPNandPDTVariables/

    $mc_gross = $keyarray['mc_gross'];
    $payment_status = $keyarray['payment_status'];
    $quantity = $keyarray['quantity'];
    $item_name = $keyarray['item_name'];

    echo "<h1>¡Hemos procesado tu pago exitosamente!</h1> 
    Recibimos $mc_gross Euros en concepto de: $quantity $item_name.<hr>
    Vuelve a comprar dando clic <a href='$baseUrl/formulario.php'>aquí</a>";
    return;
} else if (strcmp($lines[0], "FAIL") == 0) {
    // Registramos datos para realizar una investigación
    echo "FAIL";
    return;
}
 */