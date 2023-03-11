<?php


const BASE_URL = "http://localhost:8000/";
//const BASE_URL = "http://localhost/arapaima";



if(!isset($_SESSION)){session_start();}

date_default_timezone_set('America/Lima');

const DB_HOST = "localhost";
const DB_NAME = "arapaima";
const DB_USER = "root";
const DB_PASSWORD = "";
define("DB_ENCODE","utf8");
/* const DB_HOST = "localhost";
const DB_NAME = "kenneth2_arapaimadb";
const DB_USER = "kenneth2_arapaimaus";
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
	const EMAIL = "info@arapaimaexpeditions.com";
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@arapaimaexpeditions.com";
	const NOMBRE_EMPRESA = "ARAPAIMA EXPEDITIONS";
	const WEB_EMPRESA = "www.arapaimaexpeditions.com";
/* 	+1 (954) 630-5627 */

	const EMAIL_RECIBE = "oswaldoelflori@gmail.com";

	const CODIGO = "51";
	const CELULAR1 = "988552844";
	const CELULAR2 = "983 533 384";
	const PAIS = "+51";

	//SEO

	const T_SEO = "ARAPAIMA EXPEDITIONS tours por el Perú ";
	const D_SEO = "Arapaima Paquetes Turisticos en Perú, viajes a todo el Perú, Tour en Lima";


    



/*  ****************************************/
/*  ************** Navegation ************** */
/*  ****************************************/

const NAV_HOME_ES = "Inicio";
const NAV_ABOUT_ES = "Nosotros";
const NAV_SERVICE1_ES = "Crucero";
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
const PORT_TIT_ES = "EMBÁRCATE EN UNA AVENTURA ÚNICA EN LA VIDA POR EL RIO AMAZONAS";

/*  ****************************************/
/*  ************** Buttons  ************** */
/*  ****************************************/
const BTN_MONTH_EN = "Month";
const BTN_MONTH_ES = "Mes";
const BTN_YEAR_EN = "Year";
const BTN_YEAR_ES = "Año";

const BTN_SEAR_ES = "Buscar";
const BTN_SEAR_EN = "Search";

const TIT_ES = "ARAPAIMA Expedición";
const TIT_EN = "ARAPAIMA EXPEDITIONS";

const T_TXT_ES = "Nuestro viaje es una oportunidad única de ver algunos de los paisajes más impresionantes y disfrutar de la naturaleza en todo su esplendor. Los bosques exuberantes y la vida salvaje se combinan con las interminables extensiones del río para ofrecerte una experiencia verdaderamente mágica. Navega por el río en nuestra embarcacion mientras disfrutas de la belleza salvaje sin límites.
¡Es una oportunidad única que no deberías perderte!";
const T_TXT_EN = "Our trip is a unique opportunity to see some of the most impressive landscapes and enjoy nature in all its splendor. Lush forests and wildlife combine with the endless stretches of the river to offer you a truly magical experience. Navigate the river in our boat while enjoying the wild beauty without limits.
It is a unique opportunity that you should not miss!";

const CTA_ES = "RESERVA Y BUSCA TU VIAJE YA!";
const CTA_EN = "BOOK AND FIND YOUR TRIP NOW!";

const T2_ES = "NUESTRO CRUCERO";
const T2_EN = "OUR CRUISE";


const SEARCH_BUTTON_ES = 'BUSCAR';
const SEARCH_BUTTON_EN = 'SEARCH';

const TEXT_OF_OUR_CRUISE_ES = 'Nuestra embarcación el arapaima, ofrece a los huéspedes la oportunidad de sumergirse en la belleza y la maravilla de la selva tropical mientras disfrutan de un lujo sin igual. 
Esta embarcación única les brinda la oportunidad de experimentar la naturaleza y el confort al mismo tiempo.';
const TEXT_OF_OUR_CRUISE_EN = 'Our boat, the arapaima, offers guests the opportunity to immerse themselves in the beauty and wonder of the rainforest while enjoying unparalleled luxury.
This unique boat gives you the opportunity to experience nature and comfort at the same time.';



const T3_ES = "NUESTRAS ACTIVIDADES";
const T3_EN = "OUR ACTIVITIES";



const OA_1_ES = "EXCURSION A LA <br> RECERVA COMUNAL";
const OA_1_EN = "EXCURSION TO THE <br> COMMUNAL RESERVE";

const OA_2_ES = "avistamiento <br> de flora y <br>fauna";
const OA_2_EN = "sighting <br> of flora and fauna";

const OA_3_ES = "excursión a la <br>selva de <br>los espejos";
const OA_3_EN = "Excursion to the <br>jungle of Los Espejos";

const OA_4_ES = "Pesca de <br>pirañas";
const OA_4_EN = "Fishing for <br> piranhas";

const OA_5_ES = "Visita comunidad <br>de puerto prado";
const OA_5_EN = "Visit the community <br> of Puerto Prado";

const OA_6_ES = "visita al centro de <br>rescate de los <br>manaties";
const OA_6_EN = "visit to the <br>rescue center of the <br>manatees";


/*  ****************************************/
/*  ************** Reviews  ************** */
/*  ****************************************/

const T_R_ES = "OPINIONES DE NUESTROS CLIENTES";
const T_R_EN = "REVIEWS";

const R1_ES = "Mi viaje por el río Amazonas con la empresa Arapaima Expeditions fue una experiencia inolvidable. Tuve la oportunidad de ver la increíble fauna y flora del Amazonas y visitar algunas de las comunidades indígenas locales. La empresa fue muy respetuosa con el medio ambiente y las comunidades indígenas, y siempre se aseguraron de que todo estuviera en orden para garantizar nuestra seguridad y comodidad. Sin duda recomendaría este viaje a cualquiera interesado en explorar el Amazonas Peruano.";
const R1_EN = "My trip through the Amazon River with the company Arapaima Expeditions was an unforgettable experience. I had the opportunity to see the incredible fauna and flora of the Amazon and visit some of the local indigenous communities. The company was very respectful of the environment and the indigenous communities, and they always made sure that everything was in order to guarantee our safety and comfort. I would definitely recommend this trip to anyone interested in exploring the Peruvian Amazon.";

const R2_ES = "Recomiendo encarecidamente los servicios de Arapaima Expeditions. Hice un viaje de crucero con ellos a la selva de Iquitos, Perú y fue la mejor experiencia de mi vida. El equipo de Arapaima fue muy profesional y amable, siempre estuvieron dispuestos a ayudarnos. Las actividades fueron emocionantes y nos permitieron ver de cerca la selva. También nos ofrecieron una variedad de alojamientos y servicios de calidad. Estoy muy satisfecho con mi viaje con Arapaima Expeditions y lo recomiendo sin dudarlo.";
const R2_EN = "I am Luis and I highly recommend the services of Arapaima Expeditions. I took a cruise trip with them to the jungle of Iquitos, Peru and it was the best experience of my life. The Arapaima team was very professional and friendly, always willing to help us. The activities were exciting and allowed us to see the jungle up close. They also offered us a variety of quality accommodations and services. I am very satisfied with my trip with Arapaima Expeditions and recommend it without hesitation.";



const F_ES = "Explore y surque las aguas <br> del rio Amazonas a bordo del <br> Crucero Arapaima Expeditions. <br> Vive la experiencia!";
const F_EN = "Explore and navigate the <br> waters of the Amazon River aboard the <br>Arapaima Expeditions Cruise. <br> Live the experience!";

const F_2_ES = "Contacto";
const F_2_EN = "Contact";

const F_ADR_ES = "Calle Alfonso Ugarte N°547 Iquitos Perú";
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


const MISSION_ES =  'Arapaima Expeditions se dedica a brindar experiencias únicas de viaje en crucero a la selva amazónica de Iquitos, Perú. Nuestra meta es proporcionar a nuestros clientes una experiencia de viaje inolvidable, mientras se mantienen seguros y saludables. Trabajamos de cerca con la comunidad local para promover la educación, el cuidado medioambiental y la sostenibilidad, para mantener la belleza y la diversidad de la selva para las generaciones futuras.';
const MISSION_EN =  'Arapaima Expeditions is dedicated to providing unique cruise travel experiences in the Amazon jungle of Iquitos, Peru. Our goal is to provide our customers with an unforgettable travel experience while keeping them safe and healthy. We work closely with the local community to promote education, environmental care, and sustainability to maintain the beauty and diversity of the jungle for future generations.';

const VISION_TITLE_ES = 'Nuestra Visión';
const VISION_TITLE_EN = 'Our vision';

const VISION_ES =  'Nuestra visión es ser la empresa de cruceros de primera clase en la selva amazónica de Iquitos, Perú, haciendo que los viajes sean seguros y divertidos, educativos y respetuosos con el medio ambiente. Queremos ser la primera elección para aquellos que desean explorar la selva de una manera única y memorable. Estamos comprometidos a la sostenibilidad ambiental, así como a la promoción de la educación y el cuidado de la vida silvestre.';
const VISION_EN =  'Our vision is to be the premier cruise company in the Amazon jungle of Iquitos, Peru, making travel safe and fun, educational and environmentally respectful. We want to be the first choice for those who want to explore the jungle in a unique and memorable way. We are committed to environmental sustainability as well as promoting education and wildlife conservation.';

const US_TITLE_ES = 'Nosotros';
const US_TITLE_EN = 'Us';

const US_ES =  'Arapaima Expeditions es una empresa líder en turismo para viajes en cruceros a Iquitos, Perú. Estamos comprometidos a ofrecer a nuestros viajeros una experiencia única y memorable. Ofrecemos una variedad de experiencias de viaje en cruceros únicas, desde el hospital de los delfines de Iquitos hasta la selva amazónica y el río Amazonas. Nuestros cruceros incluyen alojamiento de lujo, comidas gourmet, actividades emocionantes y un equipo de guías profesionales. Estamos comprometidos a ofrecer a nuestros viajeros la mejor experiencia de viaje. Estamos comprometidos a respetar el medio ambiente y a contribuir a la preservación de la selva amazónica y sus paisajes. Nuestras operaciones son sostenibles y respetamos las prácticas';
const US_EN =  'Arapaima Expeditions is a leading tourism company offering cruise trips to Iquitos, Peru. We are committed to providing our travelers with a unique and memorable experience. We offer a variety of unique cruise travel experiences, from the dolphin hospital in Iquitos to the Amazon rainforest and the Amazon River. Our cruises include luxury accommodation, gourmet meals, exciting activities, and a team of professional guides. We are committed to providing our travelers with the best travel experience. We are committed to respecting the environment and contributing to the preservation of the Amazon rainforest and its landscapes. Our operations are sustainable, and we respect environmental practices.';




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

