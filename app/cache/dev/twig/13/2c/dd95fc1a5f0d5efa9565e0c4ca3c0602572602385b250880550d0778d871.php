<?php

/* VaeAdminBundle::index.html.twig */
class __TwigTemplate_132cdd95fc1a5f0d5efa9565e0c4ca3c0602572602385b250880550d0778d871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'bread' => array($this, 'block_bread'),
            'admin_title' => array($this, 'block_admin_title'),
            'admin_table' => array($this, 'block_admin_table'),
            'form' => array($this, 'block_form'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Admin";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/css/admin.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/css/ui-darkness/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/css/ui-darkness/jquery-ui-timepicker-addon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/css/tablesorter.css"), "html", null, true);
        echo "\">
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<div id=\"top_header_wrapper\">
\t<header id=\"top_header\" class=\"content\">
\t\t<nav >
\t\t\t<h1><a href=\" ";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_rubriques_index");
        echo " \">Admin</a>:</h1>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn\">deconnexion</a></li>
\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("vae_multi_site_accueil");
        echo "\" class=\"btn\">retour au site</a></li>
\t\t\t</ul>
\t\t</nav>
\t</header>
</div>

<div id=\"main_wrapper\">
\t<div id=\"main\" class=\"content\">
\t\t<header>
\t\t\t<h2 class=\"bread\">admin / ";
        // line 28
        $this->displayBlock('bread', $context, $blocks);
        echo "</h2>
\t\t</header>
\t\t<div id=\"admin_wrapper\">
\t\t\t<div id=\"admin_menu\">
\t\t\t\t<nav>
\t\t\t\t<h2>Menu</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_rubriques_index");
        echo "\">Rubriques</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("admin_formations_index");
        echo "\">Formations</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_produits_index");
        echo "\">Produits</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_liens_index");
        echo "\">Liens</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_agendas_index");
        echo "\">Agenda</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("admin_contacts_index");
        echo "\">Contact</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_configs_index");
        echo "\">Config</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_users_index");
        echo "\">Users</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_achats_index");
        echo "\">Achats</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("admin_inscriptions_index");
        echo "\">Inscriptions</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<div id=\"admin\">
\t\t\t\t<h2>";
        // line 50
        $this->displayBlock('admin_title', $context, $blocks);
        echo "</h2>
\t\t\t\t<div id=\"admin_table\">
\t\t\t\t\t";
        // line 52
        $this->displayBlock('admin_table', $context, $blocks);
        // line 55
        echo "\t\t\t\t</div>
\t\t\t\t\t";
        // line 56
        $this->displayBlock('form', $context, $blocks);
        // line 57
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    // line 28
    public function block_bread($context, array $blocks = array())
    {
    }

    // line 50
    public function block_admin_title($context, array $blocks = array())
    {
    }

    // line 52
    public function block_admin_table($context, array $blocks = array())
    {
        // line 53
        echo "
\t\t\t\t\t";
    }

    // line 56
    public function block_form($context, array $blocks = array())
    {
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/js/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaeadmin/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "VaeAdminBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 70,  213 => 69,  209 => 68,  205 => 67,  201 => 66,  196 => 65,  193 => 64,  188 => 56,  183 => 53,  180 => 52,  175 => 50,  170 => 28,  161 => 57,  159 => 56,  156 => 55,  154 => 52,  149 => 50,  140 => 44,  136 => 43,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  94 => 28,  82 => 19,  78 => 18,  73 => 16,  68 => 13,  65 => 12,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  44 => 5,  41 => 4,  35 => 3,  52 => 7,  49 => 6,  43 => 4,  37 => 3,  31 => 2,);
    }
}
