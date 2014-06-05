<?php

/* ::base.html.twig */
class __TwigTemplate_a7b35d9ee1dc983810102a4d135ab837c6de289126670d8801dbd15d0eef9f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
       ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo " 
        <nav>
            ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Rubrique:menu", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"))));
        echo "
        </nav>
        <div>     
            
            ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                <a href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "'>Profile</a>
                <a href='";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "'>Deconnexion</a>
 
            ";
        } else {
            // line 21
            echo "                <a href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "'>Inscription</a>
                <a href='";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'>Connexion</a>
            ";
        }
        // line 24
        echo "        </div>  
 
        ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "        
        <aside>
            ";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Agenda:liste", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"))));
        echo "
            ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Liens:listePartenaires", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"))));
        echo "
        </aside>
        ";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  122 => 26,  111 => 29,  107 => 27,  105 => 26,  91 => 21,  85 => 18,  71 => 12,  65 => 10,  60 => 6,  54 => 5,  45 => 33,  43 => 10,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  170 => 54,  163 => 51,  160 => 50,  154 => 48,  151 => 47,  146 => 45,  141 => 44,  138 => 43,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  115 => 30,  109 => 33,  106 => 32,  101 => 24,  96 => 22,  93 => 28,  88 => 26,  83 => 25,  80 => 17,  78 => 16,  68 => 17,  63 => 15,  58 => 14,  53 => 12,  48 => 34,  46 => 10,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
