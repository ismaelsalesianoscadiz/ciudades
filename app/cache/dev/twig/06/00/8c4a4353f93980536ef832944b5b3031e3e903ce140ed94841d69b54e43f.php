<?php

/* cciudadesBundle:Default:base2.html.twig */
class __TwigTemplate_06008c4a4353f93980536ef832944b5b3031e3e903ce140ed94841d69b54e43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo " <!-- <title>Cities of the world</title> -->

 
 ";
        // line 9
        $this->displayBlock('meta', $context, $blocks);
        // line 18
        echo " 
 ";
        // line 25
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cciudades/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
</head>

<body>
    <!--
    <script src=\"http://j.maxmind.com/app/geoip.js\"></script>
<div id=\"barritaloca\" style=\"display:none;position:fixed;left:0px;right:0px;bottom:0px;width:100%;min-height:40px;background: #333333;color:#dddddd;z-index: 99999;\">
<div style=\"width:100%;position:absolute;padding-left:5px;font-family:verdana;font-size:12px;top:30%;\">
 Usamos cookies propias y de terceros para mostrar publicidad personalizada seg&uacute;n su navegaci&oacute;n. Si continua navegando consideramos que acepta el uso de cookies.
 <a href=\"javascript:void(0);\" style=\"padding:4px;background:#4682B4;text-decoration:none;color:#fff;\" onclick=\"PonerCookie();\"><b>OK</b></a>
 <a href=\"http://www.google.com.ar/intl/es-419/policies/technologies/types/\" target=\"_blank\" style=\"padding-left:5px;text-decoration:none;color:#ffffff;\">M&aacute;s informaci&oacute;n</a>
    -->
</div>
</div>
    
    
 <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://assets.cookieconsent.silktide.com/current/style.min.css\"/>
<script type=\"text/javascript\" src=\"http://assets.cookieconsent.silktide.com/current/plugin.min.js\"></script>
<script type=\"text/javascript\">
// <![CDATA[
cc.initialise({
\tcookies: {
\t\tsocial: {},
\t\tanalytics: {},
\t\tadvertising: {},
\t\tnecessary: {}
\t},
\tsettings: {
\t\tconsenttype: \"implicit\",
\t\tbannerPosition: \"bottom\"
\t}
});
// ]]>
</script>
<!-- End Cookie Consent plugin -->



    <!--if(geoip_country_code()==\"ES\" -->
    
    
    
    
  <div id=\"main\">
    <div id=\"header\">
    
      <div id=\"menubar\">
        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href=";
        // line 75
        echo $this->env->getExtension('routing')->getPath("cciudades_homepage");
        echo ">Home</a></li>
          <li><a href= ";
        // line 76
        echo $this->env->getExtension('routing')->getPath("cciudades_countries");
        echo " >Countries</a></li>         
          <li><a href= ";
        // line 77
        echo $this->env->getExtension('routing')->getPath("cciudades_search");
        echo " >Search</a></li>  
        <!--
        <li><a href=\"contact.html\">Contact Us</a></li>
        -->
        </ul>
      </div>
    </div>
  <div id=\"site_content\">

    <div class=\"sidebar\">
        ";
        // line 87
        $this->displayBlock('sidebar', $context, $blocks);
        // line 120
        echo "     </div> 
        ";
        // line 121
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "    
    
    
    </div>
      
      
    <div id=\"content_footer\"> </div>
    <div id=\"footer\">
    Develop by Ismael Abad
    </div>
  </div>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Cities of the world , latitude, Longitude";
    }

    // line 9
    public function block_meta($context, array $blocks = array())
    {
        // line 10
        echo "
    <meta name=\"description\" content=\"\">



    <meta name=\"keywords\" content=\"\">

";
    }

    // line 87
    public function block_sidebar($context, array $blocks = array())
    {
        // line 88
        echo "      
         <br>
            <br>
           <br>
            <br>
           <h5> SEARCH </h5>
    <form action=\"http://localhost/ciudades/web/app_dev.php/show\" method=\"post\">
\t\t\t<div id=\"form\"><div><label for=\"form_City\" class=\"required\">CITY/TOWN/PLACE:</label><input type=\"text\" id=\"form_City\" name=\"form[City]\" required=\"required\"></div><div>
                                <label for=\"form_Country\" class=\"required\">COUNTRY:</label><select id=\"form_Country\" name=\"form[Country]\"><option value=\"AF\">Afghanistan</option><option value=\"AX\">Åland Islands</option><option value=\"AL\">Albania</option><option value=\"DZ\">Algeria</option><option value=\"AS\">American Samoa</option><option value=\"AD\">Andorra</option><option value=\"AO\">Angola</option><option value=\"AI\">Anguilla</option><option value=\"AQ\">Antarctica</option><option value=\"AG\">Antigua And Barbuda</option><option value=\"AR\">Argentina</option><option value=\"AM\">Armenia</option><option value=\"AW\">Aruba</option><option value=\"AU\">Australia</option><option value=\"AT\">Austria</option><option value=\"AZ\">Azerbaijan</option><option value=\"BS\">Bahamas</option><option value=\"BH\">Bahrain</option><option value=\"BD\">Bangladesh</option><option value=\"BB\">Barbados</option><option value=\"BY\">Belarus</option><option value=\"BE\">Belgium</option><option value=\"BZ\">Belize</option><option value=\"BJ\">Benin</option><option value=\"BM\">Bermuda</option><option value=\"BT\">Bhutan</option><option value=\"BO\">Bolivia, Plurinational State Of</option><option value=\"BQ\">Bonaire, Sint Eustatius And Saba</option><option value=\"BA\">Bosnia And Herzegovina</option><option value=\"BW\">Botswana</option><option value=\"BV\">Bouvet Island</option><option value=\"BR\">Brazil</option><option value=\"IO\">British Indian Ocean Territory</option><option value=\"BN\">Brunei Darussalam</option><option value=\"BG\">Bulgaria</option><option value=\"BF\">Burkina Faso</option><option value=\"BI\">Burundi</option><option value=\"KH\">Cambodia</option><option value=\"CM\">Cameroon</option><option value=\"CA\">Canada</option><option value=\"CV\">Cape Verde</option><option value=\"KY\">Cayman Islands</option><option value=\"CF\">Central African Republic</option><option value=\"TD\">Chad</option><option value=\"CL\">Chile</option><option value=\"CN\">China</option><option value=\"CX\">Christmas Island</option><option value=\"CC\">Cocos (keeling) Islands</option><option value=\"CO\">Colombia</option><option value=\"KM\">Comoros</option><option value=\"CG\">Congo</option><option value=\"CD\">Congo, The Democratic Republic Of The</option><option value=\"CK\">Cook Islands</option><option value=\"CR\">Costa Rica</option><option value=\"CI\">Côte D'ivoire</option><option value=\"HR\">Croatia</option><option value=\"CU\">Cuba</option><option value=\"CW\">Curaçao</option><option value=\"CY\">Cyprus</option><option value=\"CZ\">Czech Republic</option><option value=\"DK\">Denmark</option><option value=\"DJ\">Djibouti</option><option value=\"DM\">Dominica</option><option value=\"DO\">Dominican Republic</option><option value=\"EC\">Ecuador</option><option value=\"EG\">Egypt</option><option value=\"SV\">El Salvador</option><option value=\"GQ\">Equatorial Guinea</option><option value=\"ER\">Eritrea</option><option value=\"EE\">Estonia</option><option value=\"ET\">Ethiopia</option><option value=\"FK\">Falkland Islands (malvinas)</option><option value=\"FO\">Faroe Islands</option><option value=\"FJ\">Fiji</option><option value=\"FI\">Finland</option><option value=\"FR\">France</option><option value=\"GF\">French Guiana</option><option value=\"PF\">French Polynesia</option><option value=\"TF\">French Southern Territories</option><option value=\"GA\">Gabon</option><option value=\"GM\">Gambia</option><option value=\"GE\">Georgia</option><option value=\"DE\">Germany</option><option value=\"GH\">Ghana</option><option value=\"GI\">Gibraltar</option><option value=\"GR\">Greece</option><option value=\"GL\">Greenland</option><option value=\"GD\">Grenada</option><option value=\"GP\">Guadeloupe</option><option value=\"GU\">Guam</option><option value=\"GT\">Guatemala</option><option value=\"GG\">Guernsey</option><option value=\"GN\">Guinea</option><option value=\"GW\">Guinea-bissau</option><option value=\"GY\">Guyana</option><option value=\"HT\">Haiti</option><option value=\"HM\">Heard Island And Mcdonald Islands</option><option value=\"VA\">Holy See (vatican City State)</option><option value=\"HN\">Honduras</option><option value=\"HK\">Hong Kong</option><option value=\"HU\">Hungary</option><option value=\"IS\">Iceland</option><option value=\"IN\">India</option><option value=\"ID\">Indonesia</option><option value=\"IR\">Iran, Islamic Republic Of</option><option value=\"IQ\">Iraq</option><option value=\"IE\">Ireland</option><option value=\"IM\">Isle Of Man</option><option value=\"IL\">Israel</option><option value=\"IT\">Italy</option><option value=\"JM\">Jamaica</option><option value=\"JP\">Japan</option><option value=\"JE\">Jersey</option><option value=\"JO\">Jordan</option><option value=\"KZ\">Kazakhstan</option><option value=\"KE\">Kenya</option><option value=\"KI\">Kiribati</option><option value=\"KP\">Korea, Democratic People's Republic Of</option><option value=\"KR\">Korea, Republic Of</option><option value=\"KW\">Kuwait</option><option value=\"KG\">Kyrgyzstan</option><option value=\"LA\">Lao People's Democratic Republic</option><option value=\"LV\">Latvia</option><option value=\"LB\">Lebanon</option><option value=\"LS\">Lesotho</option><option value=\"LR\">Liberia</option><option value=\"LY\">Libya</option><option value=\"LI\">Liechtenstein</option><option value=\"LT\">Lithuania</option><option value=\"LU\">Luxembourg</option><option value=\"MO\">Macao</option><option value=\"MK\">Macedonia, The Former Yugoslav Republic Of</option><option value=\"MG\">Madagascar</option><option value=\"MW\">Malawi</option><option value=\"MY\">Malaysia</option><option value=\"MV\">Maldives</option><option value=\"ML\">Mali</option><option value=\"MT\">Malta</option><option value=\"MH\">Marshall Islands</option><option value=\"MQ\">Martinique</option><option value=\"MR\">Mauritania</option><option value=\"MU\">Mauritius</option><option value=\"YT\">Mayotte</option><option value=\"MX\">Mexico</option><option value=\"FM\">Micronesia, Federated States Of</option><option value=\"MD\">Moldova, Republic Of</option><option value=\"MC\">Monaco</option><option value=\"MN\">Mongolia</option><option value=\"ME\">Montenegro</option><option value=\"MS\">Montserrat</option><option value=\"MA\">Morocco</option><option value=\"MZ\">Mozambique</option><option value=\"MM\">Myanmar</option><option value=\"NA\">Namibia</option><option value=\"NR\">Nauru</option><option value=\"NP\">Nepal</option><option value=\"NL\">Netherlands</option><option value=\"NC\">New Caledonia</option><option value=\"NZ\">New Zealand</option><option value=\"NI\">Nicaragua</option><option value=\"NE\">Niger</option><option value=\"NG\">Nigeria</option><option value=\"NU\">Niue</option><option value=\"NF\">Norfolk Island</option><option value=\"MP\">Northern Mariana Islands</option><option value=\"NO\">Norway</option><option value=\"OM\">Oman</option><option value=\"PK\">Pakistan</option><option value=\"PW\">Palau</option><option value=\"PS\">Palestinian Territory, Occupied</option><option value=\"PA\">Panama</option><option value=\"PG\">Papua New Guinea</option><option value=\"PY\">Paraguay</option><option value=\"PE\">Peru</option><option value=\"PH\">Philippines</option><option value=\"PN\">Pitcairn</option><option value=\"PL\">Poland</option><option value=\"PT\">Portugal</option><option value=\"PR\">Puerto Rico</option><option value=\"QA\">Qatar</option><option value=\"RE\">Réunion</option><option value=\"RO\">Romania</option><option value=\"RU\">Russian Federation</option><option value=\"RW\">Rwanda</option><option value=\"BL\">Saint Barthélemy</option><option value=\"SH\">Saint Helena, Ascension And Tristan Da Cunha</option><option value=\"KN\">Saint Kitts And Nevis</option><option value=\"LC\">Saint Lucia</option><option value=\"MF\">Saint Martin (french Part)</option><option value=\"PM\">Saint Pierre And Miquelon</option><option value=\"VC\">Saint Vincent And The Grenadines</option><option value=\"WS\">Samoa</option><option value=\"SM\">San Marino</option><option value=\"ST\">Sao Tome And Principe</option><option value=\"SA\">Saudi Arabia</option><option value=\"SN\">Senegal</option><option value=\"RS\">Serbia</option><option value=\"SC\">Seychelles</option><option value=\"SL\">Sierra Leone</option><option value=\"SG\">Singapore</option><option value=\"SX\">Sint Maarten (dutch Part)</option><option value=\"SK\">Slovakia</option><option value=\"SI\">Slovenia</option><option value=\"SB\">Solomon Islands</option><option value=\"SO\">Somalia</option><option value=\"ZA\">South Africa</option><option value=\"GS\">South Georgia And The South Sandwich Islands</option><option value=\"SS\">South Sudan</option><option value=\"ES\">Spain</option><option value=\"LK\">Sri Lanka</option><option value=\"SD\">Sudan</option><option value=\"SR\">Suriname</option><option value=\"SJ\">Svalbard And Jan Mayen</option><option value=\"SZ\">Swaziland</option><option value=\"SE\">Sweden</option><option value=\"CH\">Switzerland</option><option value=\"SY\">Syrian Arab Republic</option><option value=\"TW\">Taiwan, Province Of China</option><option value=\"TJ\">Tajikistan</option><option value=\"TZ\">Tanzania, United Republic Of</option><option value=\"TH\">Thailand</option><option value=\"TL\">Timor-leste</option><option value=\"TG\">Togo</option><option value=\"TK\">Tokelau</option><option value=\"TO\">Tonga</option><option value=\"TT\">Trinidad And Tobago</option><option value=\"TN\">Tunisia</option><option value=\"TR\">Turkey</option><option value=\"TM\">Turkmenistan</option><option value=\"TC\">Turks And Caicos Islands</option><option value=\"TV\">Tuvalu</option><option value=\"UG\">Uganda</option><option value=\"UA\">Ukraine</option><option value=\"AE\">United Arab Emirates</option><option value=\"GB\">United Kingdom</option><option value=\"US\">United States</option><option value=\"UM\">United States Minor Outlying Islands</option><option value=\"UY\">Uruguay</option><option value=\"UZ\">Uzbekistan</option><option value=\"VU\">Vanuatu</option><option value=\"VE\">Venezuela, Bolivarian Republic Of</option><option value=\"VN\">Viet Nam</option><option value=\"VG\">Virgin Islands, British</option><option value=\"VI\">Virgin Islands, U.s.</option><option value=\"WF\">Wallis And Futuna</option><option value=\"EH\">Western Sahara</option><option value=\"YE\">Yemen</option><option value=\"ZM\">Zambia</option><option value=\"ZW\">Zimbabwe</option></select></div><input type=\"hidden\" id=\"form__token\" name=\"form[_token]\" value=\"baf795a827bfe8e9fbd0ba26c6f470e288fd9269\"></div>
\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t</form>
        <!-- insert your sidebar items here -->
      ";
        // line 118
        echo "    
        ";
    }

    // line 121
    public function block_content($context, array $blocks = array())
    {
        // line 122
        echo "     <!-- <div id=\"content\">-->
        <!-- insert the page content here -->
        <h1>Global <span class=\"color2\"> Coordinates</span></h1> 
        

        Get coordinates of  cities or towns 
        
        <p>\t\t
\t\t
            
            
               <a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("cciudades_city", array("id" => 1));
        // line 138
        echo "\">
  First city -> 
</a>
      <!-- </div> -->
        ";
    }

    public function getTemplateName()
    {
        return "cciudadesBundle:Default:base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 138,  198 => 133,  185 => 122,  182 => 121,  177 => 118,  163 => 88,  160 => 87,  149 => 10,  146 => 9,  140 => 5,  123 => 143,  121 => 121,  118 => 120,  116 => 87,  103 => 77,  99 => 76,  95 => 75,  41 => 25,  38 => 18,  36 => 9,  31 => 6,  29 => 5,  23 => 1,);
    }
}
