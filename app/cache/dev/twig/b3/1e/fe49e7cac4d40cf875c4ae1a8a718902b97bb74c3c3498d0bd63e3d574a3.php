<?php

/* cciudadesBundle:Default:pais.html.twig */
class __TwigTemplate_b31efe49e7cac4d40cf875c4ae1a8a718902b97bb74c3c3498d0bd63e3d574a3 extends Twig_Template
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

    <meta name=\"description\" content=\"countries,cities, city, world,Coordinates\">

    <meta name=\"keywords\" content=\"countries,cities, city, world, Coordinates\">

";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Countries";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "  
    <h3> ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["pais"]) ? $context["pais"] : $this->getContext($context, "pais")), "html", null, true);
        echo " </h3><br>
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range("A", "Z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 19
            echo "    
    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cciudades_pais", array("co" => (isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "inicial" => (isset($context["letter"]) ? $context["letter"] : $this->getContext($context, "letter")))), "html", null, true);
            // line 23
            echo "\">   

 ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["letter"]) ? $context["letter"] : $this->getContext($context, "letter")), "html", null, true);
            echo "   
   </a> -
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "   <br>
      <br>
    <br>  
    
    
 ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciudades"]) ? $context["ciudades"] : $this->getContext($context, "ciudades")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 36
            echo "    
    
     <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cciudades_city", array("id" => $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "getCp", array(), "method"))), "html", null, true);
            // line 43
            echo "\">
  ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "getCiudad", array(), "method"), "html", null, true);
            echo "
</a> -
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    
    ";
        // line 54
        echo "    
    <br>
      <br>
           <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("cciudades_city", array("id" => 1));
        // line 62
        echo "\">
  First city -> 
</a>


";
    }

    public function getTemplateName()
    {
        return "cciudadesBundle:Default:pais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 62,  120 => 57,  115 => 54,  112 => 47,  103 => 44,  100 => 43,  98 => 38,  94 => 36,  90 => 35,  83 => 30,  72 => 25,  68 => 23,  66 => 20,  63 => 19,  59 => 18,  55 => 17,  52 => 16,  49 => 15,  43 => 14,  33 => 5,  30 => 4,);
    }
}
