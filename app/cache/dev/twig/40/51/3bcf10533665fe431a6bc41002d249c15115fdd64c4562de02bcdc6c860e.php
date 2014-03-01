<?php

/* cciudadesBundle:Default:base.html.twig */
class __TwigTemplate_40513bcf10533665fe431a6bc41002d249c15115fdd64c4562de02bcdc6c860e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>

  <title>Cities of the world</title>

  <meta name=\"description\" content=\"website description\" />
  <meta name=\"keywords\" content=\"Cities, City, Cities of the world\" />
  <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />
  <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"style/style.css\" title=\"style\" />-->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cciudades/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
</head>

<body>
  <div id=\"main\">
    <div id=\"header\">
      <div id=\"logo\">
        <div id=\"logo_text\">
          <!-- class=\"logo_colour\", allows you to change the colour of the text -->
        <!--  <h1><a href=\"index.html\">colour<span class=\"logo_colour\">red</span></a></h1> -->
          <h2> Cities of the world</h2>
        </div>
      </div>
      <div id=\"menubar\">
        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href=\"index.html\">Home</a></li>
          <li><a href=\"Countries.html\">Countries</a></li>
          <li><a href=\"page.html\">A Page</a></li>
          <li><a href=\"another_page.html\">Another Page</a></li>
          <li><a href=\"contact.html\">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id=\"site_content\">
      <div class=\"sidebar\">
        <!-- insert your sidebar items here -->
      
        <h4>Links</h4>
        
        <ul>
          <li><a href=\"#\">link 1</a></li>
          <li><a href=\"#\">link 2</a></li>
          <li><a href=\"#\">link 3</a></li>
          <li><a href=\"#\">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method=\"post\" action=\"#\" id=\"search_form\">
          <p>
            <input class=\"search\" type=\"text\" name=\"search_field\" value=\"Enter keywords.....\" />
            <input name=\"search\" type=\"image\" style=\"border: 0; margin: 0 0 -9px 5px;\" src=\"style/search.png\" alt=\"Search\" title=\"Search\" />
          </p>
        </form>
      </div>
        
        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "    </div>
    <div id=\"content_footer\"></div>
    <div id=\"footer\">
     
    </div>
  </div>
</body>
</html>
";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "     <!-- <div id=\"content\">-->
        <!-- insert the page content here -->
        <h1>Cities of the world</h1>
        <p>\t\t
\t\t
      <!-- </div> -->
        ";
    }

    public function getTemplateName()
    {
        return "cciudadesBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 58,  95 => 57,  83 => 65,  81 => 57,  33 => 12,  20 => 1,);
    }
}
