<?php

/* VaeAdminBundle:Produits:index_add.html.twig */
class __TwigTemplate_c44781aa01c5ae4be1d40f99d843f613ec36506910e2a80caa925d73e11c65a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VaeAdminBundle::index.html.twig");

        $this->blocks = array(
            'bread' => array($this, 'block_bread'),
            'title' => array($this, 'block_title'),
            'admin_title' => array($this, 'block_admin_title'),
            'admin_table' => array($this, 'block_admin_table'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VaeAdminBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_bread($context, array $blocks = array())
    {
        echo "Produits";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Produits Ajouter";
    }

    // line 4
    public function block_admin_title($context, array $blocks = array())
    {
        echo "Produits Ajouter";
    }

    // line 6
    public function block_admin_table($context, array $blocks = array())
    {
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeAdminBundle:Produits:limit", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))));
        echo "
";
    }

    // line 10
    public function block_form($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeAdminBundle:Produits:create"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "VaeAdminBundle:Produits:index_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  59 => 10,  53 => 7,  50 => 6,  44 => 4,  38 => 3,  32 => 2,);
    }
}
