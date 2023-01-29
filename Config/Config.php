<?php

const BASE_URL = "http://localhost/arapaima";

session_start();
date_default_timezone_set('America/Lima');

const DB_HOST = "localhost";
const DB_NAME = "arapaima";
const DB_USER = "root";
const DB_PASSWORD = "";
 
/* const DB_HOST = "localhost";
const DB_NAME = "kenneth2_arapaimadb";
const DB_USER = "kenneth2_arapaimaus";
const DB_PASSWORD = "t.zY8;Su89v@"; */

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


/*  ****************************************/
/*  ************** Front-Page ************** */
/*  ****************************************/

const PORT_TIT_EN = "EMBARK IN A UNIQUE ADVENTURE IN A LIFETIME ALONG THE AMAZON RIVER";
const PORT_TIT_ES = "EMBARGATE EN UNA AVENTURA ÚNICA EN LA VIDA POR EL RIO AMAZONAS";

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

const R2_ES = "Los recomiendo!. Arapaima fue una experiencia inolvidable, los mejores";
const R2_EN = "I recommend them! Arapaima was an unforgettable experience, the best";



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



//Retorla la url del proyecto
function base_url()
{
	return BASE_URL;
}

?>