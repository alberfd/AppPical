<?php

/* SecretariaBundle:Default:addSocio.html.twig */
class __TwigTemplate_87638ccb058f75d91ff7bae94361dea173a4221e6db3d2e18e69b2559269ba1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("SecretariaBundle:Default:layout.html.twig", "SecretariaBundle:Default:addSocio.html.twig", 7);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SecretariaBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1211820c1d366ebfd0228f52b1d1854bf548a3898258c8d0f2a07698b89c858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1211820c1d366ebfd0228f52b1d1854bf548a3898258c8d0f2a07698b89c858->enter($__internal_e1211820c1d366ebfd0228f52b1d1854bf548a3898258c8d0f2a07698b89c858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SecretariaBundle:Default:addSocio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1211820c1d366ebfd0228f52b1d1854bf548a3898258c8d0f2a07698b89c858->leave($__internal_e1211820c1d366ebfd0228f52b1d1854bf548a3898258c8d0f2a07698b89c858_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e54dfb61abf920979c98cfa13f3dbc3f3e7da8b849cba46894752161981fdc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e54dfb61abf920979c98cfa13f3dbc3f3e7da8b849cba46894752161981fdc6->enter($__internal_2e54dfb61abf920979c98cfa13f3dbc3f3e7da8b849cba46894752161981fdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"row\">
        <div class=\"col-md-6\">
        
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        
        
        \t  <div class=\"form-group\">
\t\t\t    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
\t\t\t    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "
\t\t\t    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "
\t\t\t    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "escalas", array()), 'label');
        echo "
\t\t\t    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "escalas", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "escalas", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poblacion", array()), 'label');
        echo "
\t\t\t    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poblacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poblacion", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'label');
        echo "
\t\t\t    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'label');
        echo "
\t\t\t    ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero_cuenta", array()), 'label');
        echo "
\t\t\t    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero_cuenta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero_cuenta", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_nacimiento", array()), 'label');
        echo "
\t\t\t    ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_nacimiento", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_nacimiento", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_socio", array()), 'label');
        echo "
\t\t\t    ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_socio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_socio", array()), 'errors');
        echo " </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alta", array()), 'label');
        echo "
\t\t\t    ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    <span class=\"text-danger\"> ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alta", array()), 'errors');
        echo " </span>
\t\t\t  </div>
        
        
        ";
        // line 88
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>       
 </div>
 ";
        
        $__internal_2e54dfb61abf920979c98cfa13f3dbc3f3e7da8b849cba46894752161981fdc6->leave($__internal_2e54dfb61abf920979c98cfa13f3dbc3f3e7da8b849cba46894752161981fdc6_prof);

    }

    public function getTemplateName()
    {
        return "SecretariaBundle:Default:addSocio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 88,  225 => 84,  221 => 83,  217 => 82,  210 => 78,  206 => 77,  202 => 76,  195 => 72,  191 => 71,  187 => 70,  180 => 66,  176 => 65,  172 => 64,  165 => 60,  161 => 59,  157 => 58,  150 => 54,  146 => 53,  142 => 52,  135 => 48,  131 => 47,  127 => 46,  120 => 42,  116 => 41,  112 => 40,  105 => 36,  101 => 35,  97 => 34,  90 => 30,  86 => 29,  82 => 28,  75 => 24,  71 => 23,  67 => 22,  60 => 18,  56 => 17,  52 => 16,  45 => 12,  40 => 9,  34 => 8,  11 => 7,);
    }

    public function getSource()
    {
        return "
 
 
 
 
 
 {% extends 'SecretariaBundle:Default:layout.html.twig' %}
{% block body %}
<div class=\"row\">
        <div class=\"col-md-6\">
        
        {{ form_start(form, { 'attr' : { 'novalidate': 'novalidate'} }) }}
        
        
        \t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.nombre) }}
\t\t\t    {{ form_widget(form.nombre, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.nombre) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.apellidos) }}
\t\t\t    {{ form_widget(form.apellidos, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.apellidos) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.email) }}
\t\t\t    {{ form_widget(form.email, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.email) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.direccion) }}
\t\t\t    {{ form_widget(form.direccion, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.direccion) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.escalas) }}
\t\t\t    {{ form_widget(form.escalas, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.escalas) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.poblacion) }}
\t\t\t    {{ form_widget(form.poblacion, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.poblacion) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.provincia) }}
\t\t\t    {{ form_widget(form.provincia, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.provincia) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.cp) }}
\t\t\t    {{ form_widget(form.cp, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.cp) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.numero_cuenta) }}
\t\t\t    {{ form_widget(form.numero_cuenta, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.numero_cuenta) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.fecha_nacimiento) }}
\t\t\t    {{ form_widget(form.fecha_nacimiento, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.fecha_nacimiento) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.tipo_socio) }}
\t\t\t    {{ form_widget(form.tipo_socio, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.tipo_socio) }} </span>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    {{ form_label(form.alta) }}
\t\t\t    {{ form_widget(form.alta, { 'attr' : {'class' : 'form-control' } } ) }}
\t\t\t    <span class=\"text-danger\"> {{ form_errors(form.alta) }} </span>
\t\t\t  </div>
        
        
        {{ form_end(form) }}
        </div>       
 </div>
 {% endblock %}";
    }
}
