<?php

/* cciudadesBundle:Default:buscar.html.twig */
class __TwigTemplate_a6067db69cc11ee6982ee091811be063207b3197c29e52cca2e1cb1ed4905e98 extends Twig_Template
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

    <meta name=\"description\" content=\"'Coordinates'\">



    <meta name=\"keywords\" content=\"'Coordinates'\">

";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "search city coordinates";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
 
  <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("cciudades_countries");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<input type=\"submit\" />
\t\t\t</form>
        
  
        


    
    
    
    
    


";
    }

    public function getTemplateName()
    {
        return "cciudadesBundle:Default:buscar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  58 => 24,  54 => 22,  51 => 21,  45 => 19,  33 => 5,  30 => 4,);
    }
}
