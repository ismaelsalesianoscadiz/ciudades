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
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 20
    public function block_sidebar($context, array $blocks = array())
    {
        // line 21
        echo "    ";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
<h1>
    CITY: <strong> <span class=\"color2\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCiudad", array(), "method"), "html", null, true);
        echo "</span>
        </strong>
        </h1>
   
    

       
       
       <h2>
            Country: 
       
           <strong>  ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCountryLong", array(), "method"), "html", null, true);
        echo " </strong>
        
     
          <br>
          </h2>
    <h2>
       Latitude:
       ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method"), "html", null, true);
        echo "
             <br>
             Longitude:
      ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method"), "html", null, true);
        echo "
           </h2>
             <br>
             ";
        // line 50
        $context["f"] = (((("http://www.openstreetmap.org/?lat=" . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method")) . "&lon=") . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method")) . "&zoom=12&layers=B000FTFTT&mlat=14.60921&mlon=121.14232");
        // line 51
        echo "
        
        <a target=\"_blank\" href=";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "html", null, true);
        echo " 
            
            >View  Map in a new tab-></a> 
        
        
        <br>
        <br>
    
";
        // line 61
        $context["a"] = (((("http://maps.googleapis.com/maps/api/staticmap?center=" . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method")) . ",") . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method")) . "&zoom=9&size=400x300&sensor=false");
        // line 62
        echo "<img src=";
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
        echo " >

     
    
 
        <br>
   
                  
                  
                  
                  
           
      ";
        // line 87
        echo "        
         
  
 
     
        
        
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
  
  
   
  
           <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cciudades_city", array("id" => ($this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCp", array(), "method") + 1))), "html", null, true);
        // line 113
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
        return array (  174 => 113,  172 => 108,  161 => 100,  156 => 97,  152 => 94,  143 => 87,  127 => 62,  125 => 61,  114 => 53,  110 => 51,  108 => 50,  102 => 47,  96 => 44,  86 => 37,  72 => 26,  68 => 24,  65 => 23,  61 => 21,  58 => 20,  52 => 19,  45 => 11,  38 => 7,  34 => 5,  31 => 4,);
    }
}
