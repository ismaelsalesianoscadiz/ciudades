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
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method"), "html", null, true);
        echo "
             <br>
             Longitude:
      ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method"), "html", null, true);
        echo "
    
          
        <br>
   
        <br>
   
                  
                  
                  
                  
           
      
 
        
        ";
        // line 56
        $context["c"] = (((("http://ojw.dev.openstreetmap.org/StaticMap/?
   lat=" . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method")) . "&lon=") . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method")) . "&z=6&
   w=480&h=300&mode=Export&show=1");
        // line 59
        echo "       

        
<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
        echo "\"     
   width=\"480\" height=\"300\" alt=\"OpenStreetMap\" />
     
     
   ";
        // line 66
        $context["d"] = (((("http://ojw.dev.openstreetmap.org/StaticMap/?
   lat=" . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method")) . "&lon=") . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method")) . "&z=9&
   w=480&h=300&mode=Export&show=1");
        // line 69
        echo "       
 
        
<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "html", null, true);
        echo "\"     
   width=\"480\" height=\"300\" alt=\"OpenStreetMap\" />

  <br>
  
  ";
        // line 77
        $context["e"] = (((("http://ojw.dev.openstreetmap.org/StaticMap/?
   lat=" . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLatitude", array(), "method")) . "&lon=") . $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getLongitude", array(), "method")) . "&z=12&
   w=480&h=300&mode=Export&show=1");
        // line 80
        echo "       

        
<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "html", null, true);
        echo "\"     
   width=\"480\" height=\"300\" alt=\"OpenStreetMap\" />

  
  
           <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cciudades_city", array("id" => ($this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "getCp", array(), "method") + 1))), "html", null, true);
        // line 93
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
        return array (  160 => 93,  158 => 88,  150 => 83,  145 => 80,  141 => 77,  133 => 72,  128 => 69,  124 => 66,  117 => 62,  112 => 59,  108 => 56,  90 => 41,  84 => 38,  75 => 32,  66 => 26,  60 => 22,  57 => 21,  51 => 19,  44 => 11,  37 => 7,  33 => 5,  30 => 4,);
    }
}
