<?php

/* SecretariaBundle:Default:index.html.twig */
class __TwigTemplate_ca6acd20d01403fc6cd7782684c569a21e9428afaac1861b4468d5265bf0f769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SecretariaBundle:Default:layout.html.twig", "SecretariaBundle:Default:index.html.twig", 1);
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
        $__internal_c7c8673c7e6d02f529fe1cb3200be7346abc9cfb9b804d486cad2af8cb4e9076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c8673c7e6d02f529fe1cb3200be7346abc9cfb9b804d486cad2af8cb4e9076->enter($__internal_c7c8673c7e6d02f529fe1cb3200be7346abc9cfb9b804d486cad2af8cb4e9076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SecretariaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c8673c7e6d02f529fe1cb3200be7346abc9cfb9b804d486cad2af8cb4e9076->leave($__internal_c7c8673c7e6d02f529fe1cb3200be7346abc9cfb9b804d486cad2af8cb4e9076_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a913567443509d7e79e2770421aaa551a15c5b3e6c74cd9b265bfe4b921b0cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a913567443509d7e79e2770421aaa551a15c5b3e6c74cd9b265bfe4b921b0cce->enter($__internal_a913567443509d7e79e2770421aaa551a15c5b3e6c74cd9b265bfe4b921b0cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
\t";
        // line 5
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tipoMensaje", array(), "any", true, true) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tipoMensaje", array()) == "success"))) {
            echo " 
      <div class=\"alert alert-success col-md-12\" role=\"alert\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "mensaje", array()), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 10
        echo "    
    ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "tipoMensaje"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "tipoMensaje"), "method") == "error"))) {
            echo " 
    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 13
            echo $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "mensaje"), "method");
            echo "
      </div>
    ";
        }
        // line 16
        echo "        <div class=\"col-md-12\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socios"]) ? $context["socios"] : $this->getContext($context, "socios")));
        foreach ($context['_seq'] as $context["_key"] => $context["socio"]) {
            // line 28
            echo "              <tr>
              \t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["socio"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["socio"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["socio"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pical_secretaria_socio_view", array("idSocio" => $this->getAttribute($context["socio"], "id", array()))), "html", null, true);
            echo "\" class = \"btn btn-sm btn-info\">Ver</a>
                    <a href=\"app_dev.php/../../socio/delete/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["socio"], "id", array()), "html", null, true);
            echo "\" class = \"btn btn-sm btn-danger\">Eliminar</a>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
          </table>
        </div>       
 </div>
 ";
        
        $__internal_a913567443509d7e79e2770421aaa551a15c5b3e6c74cd9b265bfe4b921b0cce->leave($__internal_a913567443509d7e79e2770421aaa551a15c5b3e6c74cd9b265bfe4b921b0cce_prof);

    }

    public function getTemplateName()
    {
        return "SecretariaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  105 => 34,  101 => 33,  96 => 31,  92 => 30,  88 => 29,  85 => 28,  81 => 27,  68 => 16,  62 => 13,  57 => 11,  54 => 10,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SecretariaBundle:Default:layout.html.twig' %}

{% block body %}
<div class=\"row\">
\t{% if data.tipoMensaje is defined and data.tipoMensaje == 'success' %} 
      <div class=\"alert alert-success col-md-12\" role=\"alert\">
        {{ data.mensaje }}
      </div>
    {% endif %}
    
    {% if app.request.get('tipoMensaje') is defined and app.request.get('tipoMensaje') == 'error' %} 
    <div class=\"alert alert-danger\" role=\"alert\">
        {{ app.request.get('mensaje')|raw }}
      </div>
    {% endif %}
        <div class=\"col-md-12\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              {% for socio in socios %}
              <tr>
              \t<td>{{ socio.id }}</td>
                <td>{{ socio.nombre }}</td>
                <td>{{ socio.apellidos }}</td>
                <td>
                    <a href=\"{{ path('pical_secretaria_socio_view', {'idSocio': socio.id}) }}\" class = \"btn btn-sm btn-info\">Ver</a>
                    <a href=\"app_dev.php/../../socio/delete/{{ socio.id }}\" class = \"btn btn-sm btn-danger\">Eliminar</a>
                </td>
              </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>       
 </div>
 {% endblock %}";
    }
}
