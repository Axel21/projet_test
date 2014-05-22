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
            
            ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "            
            <a href='";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "'>Deconnexion</a>
 
            ";
        } else {
            // line 20
            echo "            <a href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'>Connexion</a>
            ";
        }
        // line 22
        echo "            
            
           
            
        
        ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        
        <aside>
            ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Agenda:liste", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"))));
        echo "
        </aside>
        ";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
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
        return array (  110 => 27,  103 => 30,  99 => 28,  97 => 27,  90 => 22,  84 => 20,  78 => 17,  75 => 16,  73 => 15,  67 => 12,  61 => 10,  56 => 6,  50 => 5,  44 => 33,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
