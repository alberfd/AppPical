<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab577641d5959462773957c02d096e44556fd52bb7af60e153195f3d120405bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daa05c2db3db0e70f0c4c7f4ab8c288effda87439e003cc63e0994f6d14a11a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa05c2db3db0e70f0c4c7f4ab8c288effda87439e003cc63e0994f6d14a11a3->enter($__internal_daa05c2db3db0e70f0c4c7f4ab8c288effda87439e003cc63e0994f6d14a11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daa05c2db3db0e70f0c4c7f4ab8c288effda87439e003cc63e0994f6d14a11a3->leave($__internal_daa05c2db3db0e70f0c4c7f4ab8c288effda87439e003cc63e0994f6d14a11a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e95e1ccda61a41692f7948c6e02ac507817af539a045d1dd617260f44e96356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e95e1ccda61a41692f7948c6e02ac507817af539a045d1dd617260f44e96356->enter($__internal_9e95e1ccda61a41692f7948c6e02ac507817af539a045d1dd617260f44e96356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e95e1ccda61a41692f7948c6e02ac507817af539a045d1dd617260f44e96356->leave($__internal_9e95e1ccda61a41692f7948c6e02ac507817af539a045d1dd617260f44e96356_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e5536d6897474f82fac34d0af76f19520d818fb34b48fc35e3381ff1f450532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5536d6897474f82fac34d0af76f19520d818fb34b48fc35e3381ff1f450532->enter($__internal_6e5536d6897474f82fac34d0af76f19520d818fb34b48fc35e3381ff1f450532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e5536d6897474f82fac34d0af76f19520d818fb34b48fc35e3381ff1f450532->leave($__internal_6e5536d6897474f82fac34d0af76f19520d818fb34b48fc35e3381ff1f450532_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e34beb26a5e9edab2681ee6a04f756abac3488d9f1af00fbf5f37437d6be5579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34beb26a5e9edab2681ee6a04f756abac3488d9f1af00fbf5f37437d6be5579->enter($__internal_e34beb26a5e9edab2681ee6a04f756abac3488d9f1af00fbf5f37437d6be5579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e34beb26a5e9edab2681ee6a04f756abac3488d9f1af00fbf5f37437d6be5579->leave($__internal_e34beb26a5e9edab2681ee6a04f756abac3488d9f1af00fbf5f37437d6be5579_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
