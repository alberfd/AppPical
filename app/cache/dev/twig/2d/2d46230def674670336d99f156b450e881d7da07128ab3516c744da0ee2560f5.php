<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bc295bc7393f66257d1650244d473c642ef32d7a91fd5608ccae91660ea3a766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4b47c151d52fc8d717f5b212a0136b860b7dfef932970aac6cc786e9b296225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b47c151d52fc8d717f5b212a0136b860b7dfef932970aac6cc786e9b296225->enter($__internal_d4b47c151d52fc8d717f5b212a0136b860b7dfef932970aac6cc786e9b296225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4b47c151d52fc8d717f5b212a0136b860b7dfef932970aac6cc786e9b296225->leave($__internal_d4b47c151d52fc8d717f5b212a0136b860b7dfef932970aac6cc786e9b296225_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ace7db03db92d10ef075ed2e2a1139c99ee93e07d0e8ef213e800652151a9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ace7db03db92d10ef075ed2e2a1139c99ee93e07d0e8ef213e800652151a9ed->enter($__internal_6ace7db03db92d10ef075ed2e2a1139c99ee93e07d0e8ef213e800652151a9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ace7db03db92d10ef075ed2e2a1139c99ee93e07d0e8ef213e800652151a9ed->leave($__internal_6ace7db03db92d10ef075ed2e2a1139c99ee93e07d0e8ef213e800652151a9ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a691b49eea0ecb9bcdf99a58e15d5b1f6d33f2a883925735b1d5c707dc2556e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a691b49eea0ecb9bcdf99a58e15d5b1f6d33f2a883925735b1d5c707dc2556e5->enter($__internal_a691b49eea0ecb9bcdf99a58e15d5b1f6d33f2a883925735b1d5c707dc2556e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a691b49eea0ecb9bcdf99a58e15d5b1f6d33f2a883925735b1d5c707dc2556e5->leave($__internal_a691b49eea0ecb9bcdf99a58e15d5b1f6d33f2a883925735b1d5c707dc2556e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc40e2e8ce12ddaceb14421ccdbd0360b2a7a822f5c21ff868ed7f226ad39e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc40e2e8ce12ddaceb14421ccdbd0360b2a7a822f5c21ff868ed7f226ad39e8f->enter($__internal_dc40e2e8ce12ddaceb14421ccdbd0360b2a7a822f5c21ff868ed7f226ad39e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc40e2e8ce12ddaceb14421ccdbd0360b2a7a822f5c21ff868ed7f226ad39e8f->leave($__internal_dc40e2e8ce12ddaceb14421ccdbd0360b2a7a822f5c21ff868ed7f226ad39e8f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
