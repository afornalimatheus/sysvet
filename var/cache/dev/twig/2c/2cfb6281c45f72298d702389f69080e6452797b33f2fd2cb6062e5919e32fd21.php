<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_799109897a00351cb424175a57a6f83b0265a2b331b093f13546dd3cec733282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0173d4533637ba84fb32cc99560333dfbdc23ebc47efd9633b6e68f24dd6ef00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0173d4533637ba84fb32cc99560333dfbdc23ebc47efd9633b6e68f24dd6ef00->enter($__internal_0173d4533637ba84fb32cc99560333dfbdc23ebc47efd9633b6e68f24dd6ef00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1a95c0faf46f10c1ac742ded572dd4409e46164581ac6ae344715860abf005be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a95c0faf46f10c1ac742ded572dd4409e46164581ac6ae344715860abf005be->enter($__internal_1a95c0faf46f10c1ac742ded572dd4409e46164581ac6ae344715860abf005be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0173d4533637ba84fb32cc99560333dfbdc23ebc47efd9633b6e68f24dd6ef00->leave($__internal_0173d4533637ba84fb32cc99560333dfbdc23ebc47efd9633b6e68f24dd6ef00_prof);

        
        $__internal_1a95c0faf46f10c1ac742ded572dd4409e46164581ac6ae344715860abf005be->leave($__internal_1a95c0faf46f10c1ac742ded572dd4409e46164581ac6ae344715860abf005be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b181f54885e798dc3297b0cf70e42c34dfee66b746f7a2fad16a39159677b781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b181f54885e798dc3297b0cf70e42c34dfee66b746f7a2fad16a39159677b781->enter($__internal_b181f54885e798dc3297b0cf70e42c34dfee66b746f7a2fad16a39159677b781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9118746c139435397ab8811ef02a0ffb1c10e421d7c64bf82a79f7b54cc0678c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9118746c139435397ab8811ef02a0ffb1c10e421d7c64bf82a79f7b54cc0678c->enter($__internal_9118746c139435397ab8811ef02a0ffb1c10e421d7c64bf82a79f7b54cc0678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9118746c139435397ab8811ef02a0ffb1c10e421d7c64bf82a79f7b54cc0678c->leave($__internal_9118746c139435397ab8811ef02a0ffb1c10e421d7c64bf82a79f7b54cc0678c_prof);

        
        $__internal_b181f54885e798dc3297b0cf70e42c34dfee66b746f7a2fad16a39159677b781->leave($__internal_b181f54885e798dc3297b0cf70e42c34dfee66b746f7a2fad16a39159677b781_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd1b1adf155e814c4abf029cba462f29edc5e895d17908f6431c7887ac88af5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1b1adf155e814c4abf029cba462f29edc5e895d17908f6431c7887ac88af5b->enter($__internal_bd1b1adf155e814c4abf029cba462f29edc5e895d17908f6431c7887ac88af5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24958007e6b4d3c41fed54f06c39d54b3d75c4cc6efcc6a90298448396d12714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24958007e6b4d3c41fed54f06c39d54b3d75c4cc6efcc6a90298448396d12714->enter($__internal_24958007e6b4d3c41fed54f06c39d54b3d75c4cc6efcc6a90298448396d12714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_24958007e6b4d3c41fed54f06c39d54b3d75c4cc6efcc6a90298448396d12714->leave($__internal_24958007e6b4d3c41fed54f06c39d54b3d75c4cc6efcc6a90298448396d12714_prof);

        
        $__internal_bd1b1adf155e814c4abf029cba462f29edc5e895d17908f6431c7887ac88af5b->leave($__internal_bd1b1adf155e814c4abf029cba462f29edc5e895d17908f6431c7887ac88af5b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e68d78ab884d89c5b703f21d21e5991580ae24adc2d2bec4a9d7b4bac2bac14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e68d78ab884d89c5b703f21d21e5991580ae24adc2d2bec4a9d7b4bac2bac14->enter($__internal_6e68d78ab884d89c5b703f21d21e5991580ae24adc2d2bec4a9d7b4bac2bac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e748944249936bdea1754cf23e93e5d471833303720ea3f0a96483113c953900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e748944249936bdea1754cf23e93e5d471833303720ea3f0a96483113c953900->enter($__internal_e748944249936bdea1754cf23e93e5d471833303720ea3f0a96483113c953900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e748944249936bdea1754cf23e93e5d471833303720ea3f0a96483113c953900->leave($__internal_e748944249936bdea1754cf23e93e5d471833303720ea3f0a96483113c953900_prof);

        
        $__internal_6e68d78ab884d89c5b703f21d21e5991580ae24adc2d2bec4a9d7b4bac2bac14->leave($__internal_6e68d78ab884d89c5b703f21d21e5991580ae24adc2d2bec4a9d7b4bac2bac14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/aluno/matheus-php2/sysvet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
