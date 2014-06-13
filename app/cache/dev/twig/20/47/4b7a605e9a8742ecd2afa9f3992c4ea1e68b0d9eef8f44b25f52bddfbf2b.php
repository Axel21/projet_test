<?php

/* VaeBaseBundle:Erreurs:404.html.twig */
class __TwigTemplate_20474b7a605e9a8742ecd2afa9f3992c4ea1e68b0d9eef8f44b25f52bddfbf2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>  
    <title>Avec le Soleil - 404 not found</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/favicon.ico"), "html", null, true);
        echo "\" />
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
   
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/chapeau.css"), "html", null, true);
        echo "\">
     
      <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,400italic,700italic,500italic' rel='stylesheet' type='text/css'>

      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,600,700,800' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href=\"navbar-fixed-top.css\" rel=\"stylesheet\">
</head>
<body>
    <section id=\"page\" class=\"container-fluid\">


    <section id=\"sous-header\">
      <!-- ########## CENTER ZONE ########## -->  
      <section id=\"content\" class=\"row container-fluid\">
        <section class=\"col-md-10 container\" id=\"content-center\">
          <h1 class=\"col-md-4 col-md-offset-4\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo-soleil-grand.png"), "html", null, true);
        echo "\"></h1>
        </section>
     <article id='messageError'>
                ";
        // line 33
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 34
            echo "                    <h1>Erreur 404 : Page non trouvée !</h1>
                    <h2>Cette page n'existe pas !</h2>
                ";
        } else {
            // line 37
            echo "                    <h1> Error 404: Page not found !</h1>
                    <h2> This page does not exist !</h2>        
                ";
        }
        // line 39
        echo " 
                 
     </article>
       
     </section><!--end content-->  
</section><!--end sous-header -->
 </section><!--end page--> 
  <!-- jQuery -->
  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
 

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include insectionidual files as needed -->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Erreurs:404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 52,  77 => 39,  72 => 37,  67 => 34,  65 => 33,  59 => 30,  38 => 12,  33 => 10,  25 => 5,  19 => 1,);
    }
}
