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
  <div id=\"main\">
    <div id=\"header\">
    
      <div id=\"menubar\">
        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href=";
        // line 35
        echo $this->env->getExtension('routing')->getPath("cciudades_homepage");
        echo ">Home</a></li>
          <li><a href= ";
        // line 36
        echo $this->env->getExtension('routing')->getPath("cciudades_countries");
        echo " >Countries</a></li>         
          <li><a href= ";
        // line 37
        echo $this->env->getExtension('routing')->getPath("cciudades_buscar");
        echo " >Search</a></li>  
          <li><a href=\"contact.html\">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id=\"site_content\">
      <div class=\"sidebar\">
        <!-- insert your sidebar items here -->
      
       
        ";
        // line 56
        echo "        <h3>Search</h3>
        <form method=\"post\" action=\"#\" id=\"search_form\">
          <p>
            <input class=\"search\" type=\"text\" name=\"search_field\" value=\"Enter city name.....\" />
            <input name=\"search\" type=\"image\" style=\"border: 0; margin: 0 0 -9px 5px;\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cciudades/css/search.png"), "html", null, true);
        echo "\" alt=\"Search\" title=\"Search\" />
          </p>
        </form>
      </div>
        
        ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "    </div>
    <div id=\"content_footer\"></div>
    <div id=\"footer\">
     
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

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "     <!-- <div id=\"content\">-->
        <!-- insert the page content here -->
        <h1>Cities of the world</h1>
        <p>\t\t
\t\t
            
            
               <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("cciudades_city", array("id" => 1));
        // line 78
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
        return array (  137 => 78,  135 => 73,  126 => 66,  123 => 65,  112 => 10,  109 => 9,  103 => 5,  91 => 83,  89 => 65,  81 => 60,  75 => 56,  62 => 37,  58 => 36,  54 => 35,  40 => 25,  37 => 18,  35 => 9,  30 => 6,  28 => 5,  22 => 1,);
    }
}
