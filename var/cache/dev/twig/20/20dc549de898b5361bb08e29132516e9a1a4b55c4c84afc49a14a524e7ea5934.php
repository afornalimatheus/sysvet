<?php

/* servico/new.html.twig */
class __TwigTemplate_ede42508e5525545714e20053dd898ae3d64d3f46d083fff06336c9abfbd65da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "servico/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8f601d6e7feccbbe752d6bb7b63fea4f213189c7fd6df46319d3613b15f2a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f601d6e7feccbbe752d6bb7b63fea4f213189c7fd6df46319d3613b15f2a28->enter($__internal_c8f601d6e7feccbbe752d6bb7b63fea4f213189c7fd6df46319d3613b15f2a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "servico/new.html.twig"));

        $__internal_080e035db8c2820e8521025864768d234cd047ae3bbddd586f5fec45054e8a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080e035db8c2820e8521025864768d234cd047ae3bbddd586f5fec45054e8a68->enter($__internal_080e035db8c2820e8521025864768d234cd047ae3bbddd586f5fec45054e8a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "servico/new.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_4_horizontal_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8f601d6e7feccbbe752d6bb7b63fea4f213189c7fd6df46319d3613b15f2a28->leave($__internal_c8f601d6e7feccbbe752d6bb7b63fea4f213189c7fd6df46319d3613b15f2a28_prof);

        
        $__internal_080e035db8c2820e8521025864768d234cd047ae3bbddd586f5fec45054e8a68->leave($__internal_080e035db8c2820e8521025864768d234cd047ae3bbddd586f5fec45054e8a68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d4cba5135ab23851eed167b5fbafacb30979718666eb9f492c3c7d0aa16a3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4cba5135ab23851eed167b5fbafacb30979718666eb9f492c3c7d0aa16a3c0->enter($__internal_7d4cba5135ab23851eed167b5fbafacb30979718666eb9f492c3c7d0aa16a3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1734e0e7d2f47078402a74809fbf8eb9d4e7d5a3094de164f011354e498452b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1734e0e7d2f47078402a74809fbf8eb9d4e7d5a3094de164f011354e498452b->enter($__internal_f1734e0e7d2f47078402a74809fbf8eb9d4e7d5a3094de164f011354e498452b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Novo Serviço</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => true)));
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nome", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descricao", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "preco", array()), 'row');
        echo "
        <input type=\"submit\" value=\"Criar\" class=\"btn btn-primary\" />
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f1734e0e7d2f47078402a74809fbf8eb9d4e7d5a3094de164f011354e498452b->leave($__internal_f1734e0e7d2f47078402a74809fbf8eb9d4e7d5a3094de164f011354e498452b_prof);

        
        $__internal_7d4cba5135ab23851eed167b5fbafacb30979718666eb9f492c3c7d0aa16a3c0->leave($__internal_7d4cba5135ab23851eed167b5fbafacb30979718666eb9f492c3c7d0aa16a3c0_prof);

    }

    public function getTemplateName()
    {
        return "servico/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_4_horizontal_layout.html.twig' %}

{% block body %}
    <h1>Novo Serviço</h1>

    {{ form_start(form, {\"attr\":{\"novalidate\": true}}) }}
        {{ form_row(form.nome) }}
        {{ form_row(form.descricao) }}
        {{ form_row(form.preco) }}
        <input type=\"submit\" value=\"Criar\" class=\"btn btn-primary\" />
    {{ form_end(form) }}
{% endblock %}", "servico/new.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/servico/new.html.twig");
    }
}
