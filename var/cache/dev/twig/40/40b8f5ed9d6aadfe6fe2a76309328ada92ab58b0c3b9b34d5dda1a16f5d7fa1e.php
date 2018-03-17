<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_88a55af4227b7530b41dbfdb2a85d8f8bd11aa76f79f5013ec3bd21b7706fe5f extends Twig_Template
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
        $__internal_d7ac9233609b49914570f29435430244fe17f3d704dcfe8380be59a9b9cb5795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ac9233609b49914570f29435430244fe17f3d704dcfe8380be59a9b9cb5795->enter($__internal_d7ac9233609b49914570f29435430244fe17f3d704dcfe8380be59a9b9cb5795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8d3c031e1092a70a3487b2f809b2ef4d53948a5e03aa2364ff322feb82a81e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3c031e1092a70a3487b2f809b2ef4d53948a5e03aa2364ff322feb82a81e52->enter($__internal_8d3c031e1092a70a3487b2f809b2ef4d53948a5e03aa2364ff322feb82a81e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ac9233609b49914570f29435430244fe17f3d704dcfe8380be59a9b9cb5795->leave($__internal_d7ac9233609b49914570f29435430244fe17f3d704dcfe8380be59a9b9cb5795_prof);

        
        $__internal_8d3c031e1092a70a3487b2f809b2ef4d53948a5e03aa2364ff322feb82a81e52->leave($__internal_8d3c031e1092a70a3487b2f809b2ef4d53948a5e03aa2364ff322feb82a81e52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74fe8cf8f894090592821e9602ff45396a1fd814df3fa1e509c084fbf143665b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fe8cf8f894090592821e9602ff45396a1fd814df3fa1e509c084fbf143665b->enter($__internal_74fe8cf8f894090592821e9602ff45396a1fd814df3fa1e509c084fbf143665b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2919b49cf12179047d52967e1d4a8d09b17ee2f45ecfef1761b5610a95eed6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2919b49cf12179047d52967e1d4a8d09b17ee2f45ecfef1761b5610a95eed6ce->enter($__internal_2919b49cf12179047d52967e1d4a8d09b17ee2f45ecfef1761b5610a95eed6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2919b49cf12179047d52967e1d4a8d09b17ee2f45ecfef1761b5610a95eed6ce->leave($__internal_2919b49cf12179047d52967e1d4a8d09b17ee2f45ecfef1761b5610a95eed6ce_prof);

        
        $__internal_74fe8cf8f894090592821e9602ff45396a1fd814df3fa1e509c084fbf143665b->leave($__internal_74fe8cf8f894090592821e9602ff45396a1fd814df3fa1e509c084fbf143665b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a964c25a925bf28dc1205e2447ec4e2b17b1d418c81f73eb88b74d0540eb1efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a964c25a925bf28dc1205e2447ec4e2b17b1d418c81f73eb88b74d0540eb1efb->enter($__internal_a964c25a925bf28dc1205e2447ec4e2b17b1d418c81f73eb88b74d0540eb1efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6696756f49f70ffb7abb8152212b843c7b7be4ba37f449e983a16ef99ee9298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6696756f49f70ffb7abb8152212b843c7b7be4ba37f449e983a16ef99ee9298->enter($__internal_f6696756f49f70ffb7abb8152212b843c7b7be4ba37f449e983a16ef99ee9298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6696756f49f70ffb7abb8152212b843c7b7be4ba37f449e983a16ef99ee9298->leave($__internal_f6696756f49f70ffb7abb8152212b843c7b7be4ba37f449e983a16ef99ee9298_prof);

        
        $__internal_a964c25a925bf28dc1205e2447ec4e2b17b1d418c81f73eb88b74d0540eb1efb->leave($__internal_a964c25a925bf28dc1205e2447ec4e2b17b1d418c81f73eb88b74d0540eb1efb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d966a2e461e6455450bfd0d9c03b804f6e479afca2087f46483e5db331a23a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d966a2e461e6455450bfd0d9c03b804f6e479afca2087f46483e5db331a23a9e->enter($__internal_d966a2e461e6455450bfd0d9c03b804f6e479afca2087f46483e5db331a23a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b3bfcd3ecbe769370467fffec5f95af5bcd303dc7ff7431c31531974fb23d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3bfcd3ecbe769370467fffec5f95af5bcd303dc7ff7431c31531974fb23d3a->enter($__internal_8b3bfcd3ecbe769370467fffec5f95af5bcd303dc7ff7431c31531974fb23d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8b3bfcd3ecbe769370467fffec5f95af5bcd303dc7ff7431c31531974fb23d3a->leave($__internal_8b3bfcd3ecbe769370467fffec5f95af5bcd303dc7ff7431c31531974fb23d3a_prof);

        
        $__internal_d966a2e461e6455450bfd0d9c03b804f6e479afca2087f46483e5db331a23a9e->leave($__internal_d966a2e461e6455450bfd0d9c03b804f6e479afca2087f46483e5db331a23a9e_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/aluno/matheus-php2/sysvet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
