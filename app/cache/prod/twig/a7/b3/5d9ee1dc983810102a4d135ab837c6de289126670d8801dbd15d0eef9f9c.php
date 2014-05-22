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
        <nav>
            ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Rubrique:menu", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"))));
        echo "
        </nav>
        
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "        
        <aside>
            ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Agenda:liste", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"))));
        echo "
        </aside>
    </body>
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

    // line 14
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
        return array (  74 => 14,  69 => 6,  63 => 5,  50 => 15,  48 => 14,  42 => 11,  34 => 7,  32 => 6,  22 => 1,  116 => 37,  109 => 35,  106 => 34,  100 => 32,  97 => 31,  90 => 28,  87 => 27,  81 => 25,  78 => 24,  76 => 23,  68 => 18,  64 => 17,  59 => 14,  54 => 17,  49 => 11,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 5,);
    }
}
