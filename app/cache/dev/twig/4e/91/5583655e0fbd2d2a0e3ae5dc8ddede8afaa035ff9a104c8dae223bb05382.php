<?php

/* VaeMultiSiteBundle:Site:index.html.twig */
class __TwigTemplate_4e915583655e0fbd2d2a0e3ae5dc8ddede8afaa035ff9a104c8dae223bb05382 extends Twig_Template
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
  
    
    <title>Avec le Soleil</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/favicon.ico"), "html", null, true);
        echo "\" />
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
   
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/chapeau.css"), "html", null, true);
        echo "\">
     
      <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,400italic,700italic,500italic' rel='stylesheet' type='text/css'>

      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,600,700,800' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href=\"navbar-fixed-top.css\" rel=\"stylesheet\">


</head>
<body>
    <section id=\"page\" class=\"container-fluid\">

   <!--###### HEADER ######-->
      <header id=\"header\">
        <!--######## NAV BARRE #########-->
       
        
    <div>
        <div class=\"fb-like col-md-2\" data-href=\"https://www.facebook.com/soleil.avec\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
           <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("vae_multi_site_accueil", array("_locale" => "fr"));
        echo "\">Français</a>
           <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("vae_multi_site_accueil", array("_locale" => "en"));
        echo "\">Anglais</a>
       
</div>
            
          
   
</header><!-- end header-->
    <section id=\"sous-header\">
      <!-- ########## CENTER ZONE ########## -->  
      <section id=\"content\" class=\"row container-fluid\">
        <section class=\"col-md-10 container\" id=\"content-center\">
          <h1 class=\"col-md-4 col-md-offset-4\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo-soleil-grand.png"), "html", null, true);
        echo "\"></h1>
      
            <header class=\"row\">
            

</header>
            <aside class=\"row\">
               
        ";
        // line 57
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 58
            echo "        <h1><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "Céramique", "slugRubrique" => "accueil")), "html", null, true);
            echo " ' class=\"col-md-4\"><p>Céramique</p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/chapCera.jpg"), "html", null, true);
            echo "\"></a></h1>
        <h1><a href='";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "EFT", "slugRubrique" => "accueil")), "html", null, true);
            echo "' class=\"col-md-4\"><p>E.F.T</p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/chapEft.jpg"), "html", null, true);
            echo "\"></a></h1>
        <h1><a href='";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "Alphabétisation", "slugRubrique" => "accueil")), "html", null, true);
            echo "' class=\"col-md-4\"><p>Alphabétisation</p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/chapAlpha.jpg"), "html", null, true);
            echo "\"></a></h1>
        ";
        } else {
            // line 62
            echo "        <h1><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "Céramique", "slugRubrique" => "home")), "html", null, true);
            echo "' class=\"col-md-4\"><p>Céramique</p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/chapCera.jpg"), "html", null, true);
            echo "\"></a></h1>
        <h1><a href='";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "EFT", "slugRubrique" => "home")), "html", null, true);
            echo "' class=\"col-md-4\"><p>E.F.T</p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/chapEft.jpg"), "html", null, true);
            echo "\"></a></h1>
        <h1><a href='";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "Alphabétisation", "slugRubrique" => "home")), "html", null, true);
            echo "' class=\"col-md-4\"><p>Alphabétisation</p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/chapAlpha.jpg"), "html", null, true);
            echo "\"></a></h1>
        ";
        }
        // line 65
        echo "    
   
              
            </aside>
     <article>
                 ";
        // line 70
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 71
            echo "                <h1>Une jeune association;<br> 3 activités différentes mais complémentaires, visant à l'autonomie et au bien être.</h1>
                <p>Notre association à pour but d'aider et de divertir les plus démunis, c'est pour cela que certaines de nos formation ne sont pas payantes. Néan moins, cela à un coup...
                  Pour que l'on puisse continuer à aider ceux qui en on le plus besoin, chaque don est le bien venu.
                  Si vous voulez nous aider à les aider, vous pouvez verser un dons via Paypal</p>
                ";
        } else {
            // line 76
            echo "                <h1>A young association <br> 3 different but complementary activities aimed at autonomy and well-being </h1>. 
                 <p> Our association aims to help and entertain the poor, this is why some of our training are not paid. Nothing less, that a coup ... 
                   So that we can continue to help those who need it most, every donation is welcome. 
                   If you want to help us to help, you can donate via Paypal </p>        

                ";
        }
        // line 81
        echo " 
                  <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"GADXW639KXMTQ\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/fr_FR/BE/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - la solution de                       paiement en ligne la plus simple et la plus sécurisée !\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                      </form>
     </article>
        </section>
     </section><!--end content-->  
<!-- ########## FOOTER ########## --> 
<footer id=\"footer\" class=\"row container-fluid\">


   


    <section id=\"footer2\" class=\"row\">
       <section class=\"col-md-10 footer-center\" id='footer-center'>
          <section class=\"row\">
          <article class=\"col-md-3\"><a href=\"aveclesoleil.be\" id=\"footer-soleil\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo-soleil-footer.png"), "html", null, true);
        echo "\"><p>Avec Le Soleil - asbl</p></a></article>
          <article class=\"col-md-3 col-md-offset-6\"><a href=\"#\" id=\"logo-vae\">Web site create by <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo-vae.png"), "html", null, true);
        echo "\"></a></article>
          </section>  
        </section>
    </section>
 
</footer><!--end footer-->
</section><!--end sous-header -->
 </section><!--end page--> 
  <!-- jQuery -->
  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
 

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include insectionidual files as needed -->
    <script src=\"dist/js/bootstrap.min.js\"></script>
</body>
</html>


";
        // line 127
        echo "


";
        // line 150
        echo "
";
    }

    public function getTemplateName()
    {
        return "VaeMultiSiteBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 150,  209 => 127,  187 => 102,  183 => 101,  161 => 81,  153 => 76,  146 => 71,  144 => 70,  137 => 65,  130 => 64,  124 => 63,  117 => 62,  110 => 60,  104 => 59,  97 => 58,  95 => 57,  84 => 49,  70 => 38,  66 => 37,  41 => 15,  36 => 13,  28 => 8,  19 => 1,);
    }
}
