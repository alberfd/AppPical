<?php

/* base.html.twig */
class __TwigTemplate_f3386387945846767a5ffadd3c76f2ec14299f30084901ef4fe9efaec4701179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35edb080f560d8d39ed72fbec056e651eba3f79bb74860f7f5f7bdccb4536263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35edb080f560d8d39ed72fbec056e651eba3f79bb74860f7f5f7bdccb4536263->enter($__internal_35edb080f560d8d39ed72fbec056e651eba3f79bb74860f7f5f7bdccb4536263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_35edb080f560d8d39ed72fbec056e651eba3f79bb74860f7f5f7bdccb4536263->leave($__internal_35edb080f560d8d39ed72fbec056e651eba3f79bb74860f7f5f7bdccb4536263_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6192c0527ba62237f3da14e4b3d5226bd7e7ffa91b6d5ad0344426c323899427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6192c0527ba62237f3da14e4b3d5226bd7e7ffa91b6d5ad0344426c323899427->enter($__internal_6192c0527ba62237f3da14e4b3d5226bd7e7ffa91b6d5ad0344426c323899427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6192c0527ba62237f3da14e4b3d5226bd7e7ffa91b6d5ad0344426c323899427->leave($__internal_6192c0527ba62237f3da14e4b3d5226bd7e7ffa91b6d5ad0344426c323899427_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fc28fe12e3e34deb15b933e3aa6a2ab14ff0e47f62c1e780549c226d6be3d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc28fe12e3e34deb15b933e3aa6a2ab14ff0e47f62c1e780549c226d6be3d7c->enter($__internal_6fc28fe12e3e34deb15b933e3aa6a2ab14ff0e47f62c1e780549c226d6be3d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6fc28fe12e3e34deb15b933e3aa6a2ab14ff0e47f62c1e780549c226d6be3d7c->leave($__internal_6fc28fe12e3e34deb15b933e3aa6a2ab14ff0e47f62c1e780549c226d6be3d7c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7529d9b657447e8fcbe3addd52d7dbcac6fa10fbe5307207feb49dab8144c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7529d9b657447e8fcbe3addd52d7dbcac6fa10fbe5307207feb49dab8144c38->enter($__internal_c7529d9b657447e8fcbe3addd52d7dbcac6fa10fbe5307207feb49dab8144c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7529d9b657447e8fcbe3addd52d7dbcac6fa10fbe5307207feb49dab8144c38->leave($__internal_c7529d9b657447e8fcbe3addd52d7dbcac6fa10fbe5307207feb49dab8144c38_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a344c8e6c49c77ac26c04523599e93572b50d330a019cee119ddd9648610ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a344c8e6c49c77ac26c04523599e93572b50d330a019cee119ddd9648610ed0->enter($__internal_9a344c8e6c49c77ac26c04523599e93572b50d330a019cee119ddd9648610ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9a344c8e6c49c77ac26c04523599e93572b50d330a019cee119ddd9648610ed0->leave($__internal_9a344c8e6c49c77ac26c04523599e93572b50d330a019cee119ddd9648610ed0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
