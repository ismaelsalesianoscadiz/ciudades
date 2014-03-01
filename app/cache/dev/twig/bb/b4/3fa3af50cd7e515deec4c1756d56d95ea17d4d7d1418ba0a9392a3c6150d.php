<?php

/* cciudadesBundle:Default:city.html.twig */
class __TwigTemplate_bbb43fa3af50cd7e515deec4c1756d56d95ea17d4d7d1418ba0a9392a3c6150d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("cciudadesBundle:Default:base2.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cciudadesBundle:Default:base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        // line 5
        echo "

    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCiudad", array(), "method"), "html", null, true);
        echo ".'Coordinates'\">



    <meta name=\"keywords\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCiudad", array(), "method"), "html", null, true);
        echo ".'Coordinates'\">

";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCiudad", array(), "method"), "html", null, true);
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
 
    
<h1>
      CITY:  <strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCiudad", array(), "method"), "html", null, true);
        echo "</strong>
</h1>
       
       
       <h2>
            Country: 
           <strong>  ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCountryLong", array(), "method"), "html", null, true);
        echo " </strong>
                                 
     
          <br>
          </h2>

       Latitude:
       ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method"), "html", null, true);
        echo "
             <br>
             Longitude:
      ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method"), "html", null, true);
        echo "

          
        <br>
    
";
        // line 47
        $context["a"] = (((("http://maps.googleapis.com/maps/api/staticmap?center=" . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method")) . ",") . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method")) . "&zoom=11&size=400x300&sensor=false");
        // line 48
        echo "<img src=";
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
        echo " >

     
    
 
        <br>
   
                  
                  
                  
                  
           
      ";
        // line 73
        echo "        
         ";
        // line 74
        $context["f"] = (((("http://www.openstreetmap.org/?lat=" . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method")) . "&lon=") . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method")) . "&zoom=12&layers=B000FTFTT&mlat=14.60921&mlon=121.14232");
        // line 75
        echo "  ";
        // line 82
        echo "        
        <a target=\"_blank\" href=";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "html", null, true);
        echo " 
            
            >View  Map</a> 
        
        
        <br>
  
 
       <object type=\"text/html\" data=";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "html", null, true);
        echo " width=\"480\" height=\"300\" ></object> 
        
        
   ";
        // line 94
        $context["d"] = (((("http://ojw.dev.openstreetmap.org/StaticMap/?
   lat=" . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method")) . "&lon=") . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method")) . "&z=9&
   w=480&h=300&mode=Export&show=1");
        // line 97
        echo "       
 
        
<img src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "html", null, true);
        echo "\"     
   width=\"480\" height=\"300\" alt=\"OpenStreetMap\" />

  <br>
  ";
        // line 118
        echo "  
   
  
           <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cciudades_city", array("id" => ($this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCp", array(), "method") + 1))), "html", null, true);
        // line 126
        echo "\">
  Next city -> 
</a>


    
    
    
    
    


";
    }

    public function getTemplateName()
    {
        return "cciudadesBundle:Default:city.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 126,  165 => 121,  160 => 118,  153 => 100,  148 => 97,  144 => 94,  138 => 91,  127 => 83,  124 => 82,  122 => 75,  120 => 74,  117 => 73,  101 => 48,  99 => 47,  91 => 42,  85 => 39,  75 => 32,  66 => 26,  60 => 22,  57 => 21,  51 => 19,  44 => 11,  37 => 7,  33 => 5,  30 => 4,);
    }
}
