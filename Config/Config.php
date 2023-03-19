<?php


const BASE_URL = "http://localhost:8000/";
//const BASE_URL = "http://localhost/Luva";



if(!isset($_SESSION)){session_start();}

date_default_timezone_set('America/Lima');

const DB_HOST = "localhost";
const DB_NAME = "Luva";
const DB_USER = "root";
const DB_PASSWORD = "";
define("DB_ENCODE","utf8");
/* const DB_HOST = "localhost";
const DB_NAME = "kenneth2_Luvadb";
const DB_USER = "kenneth2_Luvaus";
const DB_PASSWORD = "t.zY8;Su89v@"; */

define('WP_DEBUG', false);

const P_PROCESO = 1;
const P_FINALIZADO = 2;
const P_ANULADO = 3;
const P_NOPEDIDO = 4;

const DB_CHARSET = "utf8";

const SPD = ".";
const SPM = ",";

const MONEY = "S/ ";

	//Datos envio de correo
	const EMAIL = "info@Luvaexpedition.com";
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@Luvaexpedition.com";
	const NOMBRE_EMPRESA = "Luva Escuela";
	const WEB_EMPRESA = "www.Luvaexpedition.com";
/* 	+1 (954) 630-5627 */

	const EMAIL_RECIBE = "oswaldoelflori@gmail.com";

	const CODIGO = "51";
	const CELULAR1 = "988552844";
	const CELULAR2 = "983 533 384";
	const PAIS = "+51";

	//SEO

	const T_SEO = "Luva Escuela tours por el Perú ";
	const D_SEO = "Luva Paquetes Turisticos en Perú, viajes a todo el Perú, Tour en Lima";


    



/*  ****************************************/
/*  ************** Navegation ************** */
/*  ****************************************/

const NAV_HOME_ES = "Inicio";
const NAV_ABOUT_ES = "Nosotros";
const NAV_SERVICE1_ES = "Plataforma";
const NAV_SERVICE2_ES = "Actividades";
const NAV_SERVICE3_ES = "Tarifas";
const NAV_CONTACT_ES = "Contacto";

const NAV_HOME_EN = "Home";
const NAV_ABOUT_EN = "About-us";
const NAV_SERVICE1_EN = "Cruise";
const NAV_SERVICE2_EN = "Activities";
const NAV_SERVICE3_EN = "Rates";
const NAV_CONTACT_EN = "Contact";


const MONTHS_OF_THE_YEAR_SELECTION_ES = 
'<option value="1">ENERO</option>
<option value="2">FEBRERO</option>
<option value="3">MARZO</option>
<option value="4">ABRIL</option>
<option value="5">MAYO</option>
<option value="6">JUNIO</option>
<option value="7">JULIO</option>
<option value="8">AGOSTO</option>
<option value="9">SETIEMBRE</option>
<option value="10">OCTUBRE</option>
<option value="11">NOVIEMBRE</option>
<option value="12">DICIEMBRE</option>';

const MONTHS_OF_THE_YEAR_SELECTION_EN = 
'<option value="1">JANUARY</option>
<option value="2">FEBRUARY</option>
<option value="3">MARCH</option>
<option value="4">APRIL</option>
<option value="5">MAY</option>
<option value="6">JUNE</option>
<option value="7">JULY</option>
<option value="8">AUGUST</option>
<option value="9">SEPTEMBER</option>
<option value="10">OCTOBER</option>
<option value="11">NOVEMBER</option>
<option value="12">DECEMBER</option>';


/*  ****************************************/
/*  ************** Front-Page ************** */
/*  ****************************************/

const PORT_TIT_EN = "EMBARK IN A UNIQUE ADVENTURE IN A LIFETIME ALONG THE AMAZON RIVER";
const PORT_TIT_ES = "Aprende a conducir con seguridad y confianza con Luva";

/*  ****************************************/
/*  ************** Buttons  ************** */
/*  ****************************************/
const BTN_MONTH_EN = "Month";
const BTN_MONTH_ES = "Mes";
const BTN_YEAR_EN = "Year";
const BTN_YEAR_ES = "Año";

const BTN_SEAR_ES = "Buscar";
const BTN_SEAR_EN = "Search";

const TIT_ES = "Luva Escuela";
const TIT_EN = "Luva Escuela";

const T_TXT_ES = "Luva es una escuela de conductores en Lima, Perú, comprometida en ofrecer una experiencia de aprendizaje personalizada y de calidad. Ofrecemos una flota de modelos de automóviles para practicar y estamos en proceso de digitalización para matricularte y pagar en línea. ¡Aprender a conducir nunca había sido tan emocionante!";
const T_TXT_EN = "Our trip is a unique opportunity to see some of the most impressive landscapes and enjoy nature in all its splendor. Lush forests and wildlife combine with the endless stretches of the river to offer you a truly magical experience. Navigate the river in our boat while enjoying the wild beauty without limits.
It is a unique opportunity that you should not miss!";

const CTA_ES = "RESERVA ELIGE A TU PROFESOR YA!";
const CTA_EN = "BOOK AND FIND YOUR TRIP NOW!";

const T2_ES = "NUESTRO AUTOS";
const T2_EN = "OUR CRUISE";


const SEARCH_BUTTON_ES = 'BUSCAR';
const SEARCH_BUTTON_EN = 'SEARCH';

const TEXT_OF_OUR_CRUISE_ES = 'Nuestra embarcación el Luva, ofrece a los huéspedes la oportunidad de sumergirse en la belleza y la maravilla de la selva tropical mientras disfrutan de un lujo sin igual. 
Esta embarcación única les brinda la oportunidad de experimentar la naturaleza y el confort al mismo tiempo.';
const TEXT_OF_OUR_CRUISE_EN = 'Our boat, the Luva, offers guests the opportunity to immerse themselves in the beauty and wonder of the rainforest while enjoying unparalleled luxury.
This unique boat gives you the opportunity to experience nature and comfort at the same time.';



const T3_ES = "NUESTRAS ACTIVIDADES";
const T3_EN = "OUR ACTIVITIES";



const OA_1_ES = "Estás dando un paso</br>más hacia la libertad";
const OA_1_EN = "EXCURSION TO THE <br> COMMUNAL RESERVE";

const OA_2_ES = "Aprender a manejar<br>es uno de los logros<br>más emocionantes";
const OA_2_EN = "sighting <br> of flora and fauna";

const OA_3_ES = "Tienes el poder de<br>tomar decisiones<br>inteligentes";
const OA_3_EN = "Excursion to the <br>jungle of Los Espejos";

const OA_4_ES = "¡No te detengas!";
const OA_4_EN = "Fishing for <br> piranhas";

const OA_5_ES = "Cada práctica es<br>una oportunidad<br>para mejorar";
const OA_5_EN = "Visit the community <br> of Puerto Prado";

const OA_6_ES = "Puedes superarlo con<br>paciencia, práctica";
const OA_6_EN = "visit to the <br>rescue center of the <br>manatees";


/*  ****************************************/
/*  ************** Reviews  ************** */
/*  ****************************************/

const T_R_ES = "OPINIONES DE NUESTROS CLIENTES";
const T_R_EN = "REVIEWS";

const R1_ES = "Estoy muy agradecido con Luva por enseñarme a conducir de manera segura y responsable. Mi profesor fue muy paciente y experimentado, y me dio la confianza que necesitaba para tomar el control del vehículo. Aprendí mucho en las clases teóricas y prácticas, y siento que ahora estoy preparado para conducir en cualquier situación. Recomendaría Luva a cualquier persona que quiera aprender a conducir con una escuela de calidad y con un enfoque en la seguridad vial";
const R1_EN = "My trip through the Amazon River with the company Luva Escuela was an unforgettable experience. I had the opportunity to see the incredible fauna and flora of the Amazon and visit some of the local indigenous communities. The company was very respectful of the environment and the indigenous communities, and they always made sure that everything was in order to guarantee our safety and comfort. I would definitely recommend this trip to anyone interested in exploring the Peruvian Amazon.";

const R2_ES = "Luva fue la mejor elección que pude haber hecho para aprender a conducir. Me sentí muy cómoda desde el primer momento, ya que mi profesora fue muy amable y profesional. Las clases teóricas fueron muy informativas y me ayudaron a comprender las reglas de tráfico y las mejores prácticas de conducción. En las clases prácticas, tuve la oportunidad de conducir varios modelos de vehículos y aprender a maniobrar en diferentes situaciones. Ahora me siento segura y confiada cuando conduzco en la carretera. Si buscas una escuela de conductores de calidad, Luva es la mejor opción.";
const R2_EN = "I am Luis and I highly recommend the services of Luva Escuela. I took a cruise trip with them to the jungle of Iquitos, Peru and it was the best experience of my life. The Luva team was very professional and friendly, always willing to help us. The activities were exciting and allowed us to see the jungle up close. They also offered us a variety of quality accommodations and services. I am very satisfied with my trip with Luva Escuela and recommend it without hesitation.";



const F_ES = "Conduce con éxito gracias a Luva";
const F_EN = "Explore and navigate the <br> waters of the Amazon River aboard the <br>Luva Escuela Cruise. <br> Live the experience!";

const F_2_ES = "Contacto";
const F_2_EN = "Contact";

const F_ADR_ES = "Dirección, ciudad, distrito, jiron.";
const F_ADR_EN = "Alfonso Ugarte Street N°547 Iquitos Peru";

const F_T_ES = "Redes Sociales";
const F_T_EN = "Social Media";

const F_S_ES = "Por favor, seleccione la fecha de salida";
const F_S_EN = "Please select the departure date";

const BT_F_S_ES = "Continuar";
const BT_F_S_EN = "Continue";


/*  ****************************************/
/*  ************** Departure List  ************** */
/*  ****************************************/

const FIND_YOUR_CRUISE_ES = 'Encuentra tu crucero';
const FIND_YOUR_CRUISE_EN = 'Find your cruise';

const SELECT_THE_DATE_ES = 'Selecciona la fecha';
const SELECT_THE_DATE_EN = 'Select the date';

const SELECT_ROOM_ES = 'Seleccione habitación';
const SELECT_ROOM_EN = 'Select room';

const CONFIRMATION_ES = 'Confirmación';
const CONFIRMATION_EN = 'Confirmation';



// departure reserve

const D_1_ES = "por persona";
const D_1_EN = "per person";

const D_2_ES = "Cabañas disponibles:";
const D_2_EN = "Available cabins:";

const D_3_ES = "personas por hab.";
const D_3_EN = "people per room";

const D_4_ES = "Numero de cabañas";
const D_4_EN = "number of cabins";

const C_ES = "Contacto";
const C_EN = "Contact-us";

const N_ES = "Nosotros";
const N_EN = "About-us";


/* Confirmación */
const CHOOSE_PAYMENT_METHOD_ES = 'Elegir método de pago';
const CHOOSE_PAYMENT_METHOD_EN = 'Choose payment method';

const WIRE_TRANSFER_ES = 'Transferencia Bancaria';
const WIRE_TRANSFER_EN = 'Wire transfer';

const PAYMENT_WITH_PAYPAL_ES = 'Pago con PayPal';
const PAYMENT_WITH_PAYPAL_EN = 'Payment with paypal';


/* Transferencia */
const REGISTERED_ORDER_ES	=	'Felicidades Su pedido se ha registrado satisfactoriamente.';
const REGISTERED_ORDER_EN	=	'Congratulations! Your order has been registered successfully.';

const ACCOUNT_NUMBERS_ES	=	'Deposite a nuestros siguientes números de cuenta:';
const ACCOUNT_NUMBERS_EN	=	'Deposit to our following account numbers:';

const CUSTOMER_ES	=	'Cliente';
const CUSTOMER_EN	=	'Customer';

const ORDER_DATE_ES	=	'Fecha del pedido';
const ORDER_DATE_EN	=	'Order date';

const PRICE_ES	=	'Precio';
const PRICE_EN	=	'Price';




/* Form */

const FRM_N_ES = "Nombre";
const FRM_N_EN = "Name";

const FRM_E_ES = "Email";
const FRM_E_EN = "Email ";

const FRM_C_ES = "Celular";
const FRM_C_EN = "Phone ";

const FRM_M_ES = "Mensaje";
const FRM_M_EN = "Message ";


const FRM_BT_ES = "Enviar Mensaje";
const FRM_BT_EN = "Send Message ";
 


/**
 * Pagina nosotros
 */

const MISSION_TITLE_ES = 'Nuestra Misión';
const MISSION_TITLE_EN = 'Our Mission';


const MISSION_ES =  'La misión de Luva es brindar una enseñanza de conducción personalizada, de calidad y segura a sus alumnos, para que puedan conducir de manera confiable y responsable.';
const MISSION_EN =  'Luva Escuela is dedicated to providing unique cruise travel experiences in the Amazon jungle of Iquitos, Peru. Our goal is to provide our customers with an unforgettable travel experience while keeping them safe and healthy. We work closely with the local community to promote education, environmental care, and sustainability to maintain the beauty and diversity of the jungle for future generations.';

const VISION_TITLE_ES = 'Nuestra Visión';
const VISION_TITLE_EN = 'Our vision';

const VISION_ES =  'La visión de Luva es convertirse en la escuela de conducción líder en Lima, ofreciendo servicios innovadores y digitales para satisfacer las necesidades de sus alumnos.';
const VISION_EN =  'Our vision is to be the premier cruise company in the Amazon jungle of Iquitos, Peru, making travel safe and fun, educational and environmentally respectful. We want to be the first choice for those who want to explore the jungle in a unique and memorable way. We are committed to environmental sustainability as well as promoting education and wildlife conservation.';

const US_TITLE_ES = 'Nosotros';
const US_TITLE_EN = 'Us';

const US_ES =  'En Luva, nos enfocamos en brindar una enseñanza personalizada y de calidad, para que nuestros alumnos aprendan a conducir de manera segura y confiable. Contamos con un equipo de profesores altamente capacitados y diversos modelos de automóviles para que nuestros alumnos puedan practicar. Además, nos encontramos en constante evolución y actualización, por lo que la digitalización de nuestros servicios nos permitirá una mayor comodidad para nuestros alumnos.

Nos hemos dado a conocer principalmente a través de los años y la recomendación de nuestros clientes satisfechos. Sin embargo, estamos expandiendo nuestros canales de comunicación a través de la digitalización de nuestros servicios, lo que nos permitirá llegar a una audiencia más amplia. Ahora estamos activos en las redes sociales y otros medios digitales para mantenernos en contacto con nuestros alumnos y futuros clientes. En Luva, nos apasiona enseñar a conducir y queremos compartir nuestra pasión con todos aquellos que deseen aprender.';
const US_EN =  'Luva Escuela is a leading tourism company offering cruise trips to Iquitos, Peru. We are committed to providing our travelers with a unique and memorable experience. We offer a variety of unique cruise travel experiences, from the dolphin hospital in Iquitos to the Amazon rainforest and the Amazon River. Our cruises include luxury accommodation, gourmet meals, exciting activities, and a team of professional guides. We are committed to providing our travelers with the best travel experience. We are committed to respecting the environment and contributing to the preservation of the Amazon rainforest and its landscapes. Our operations are sustainable, and we respect environmental practices.';

/**
 * Receptor: 
 */

// Para cambiar al entorno de producción usar: www.paypal.com
const PAYPAL_HOSTNAME		= 'www.sandbox.paypal.com';

// El token lo obtenemos en las opciones de nuestra cuenta Paypal cuando activamos PDT
// $pdt_identity_token = 'tu_token_de_identidad';
const PDT_IDENTITY_TOKEN	= '9DFeN5QARGEBO0BHRp5JiKP9WTbz8iHDnsrWCMt_Vl1KZQGUGNhiG0iRSE8';





//Retorla la url del proyecto
function base_url()
{
	return BASE_URL;
}

function limpiarCadena($str){
	global $conexion;
	$str = mysqli_real_escape_string($conexion,trim($str));
	return htmlspecialchars($str);
}

