<?php

/* cciudadesBundle:Default:paises.html.twig */
class __TwigTemplate_2aca8e05f365c9be98818e6099bbd7a6a8a697cc3927f68da407905e82ee0b51 extends Twig_Template
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

    <meta name=\"description\" content=\"countries,cities, city, world\">

    <meta name=\"keywords\" content=\"countries,cities, city, world\">

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


";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paises"]) ? $context["paises"] : $this->getContext($context, "paises")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo " 

    
    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cciudades_pais", array("co" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "inicial" => "A")), "html", null, true);
            // line 25
            echo "\"> <br>
  ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo " 
</a>
    
     
    
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " 
    
    ";
        // line 40
        echo "    
    <br>
      <br>
           <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("cciudades_city", array("id" => 1));
        // line 49
        echo "\">
  First city -> 
</a>


";
    }

    public function getTemplateName()
    {
        return "cciudadesBundle:Default:paises.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 49,  92 => 43,  87 => 40,  83 => 32,  70 => 26,  67 => 25,  65 => 22,  57 => 19,  52 => 16,  49 => 15,  43 => 14,  33 => 5,  30 => 4,);
    }
}
