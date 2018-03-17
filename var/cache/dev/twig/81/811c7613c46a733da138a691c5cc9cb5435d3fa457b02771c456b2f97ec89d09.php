<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_7268e8656cfa9c47e49a50ba0ce9bc04e4e4abb6b732a98a6bd70990e3b7b3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81e83a7a86a908f19ef2ca4fc12f738e9509adaeab358137f8cc1907fbc1348b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e83a7a86a908f19ef2ca4fc12f738e9509adaeab358137f8cc1907fbc1348b->enter($__internal_81e83a7a86a908f19ef2ca4fc12f738e9509adaeab358137f8cc1907fbc1348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_abf7b61c5e1adcdfa089ddc00abab1314ec7016493e3991d9ea780ec5e10dbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf7b61c5e1adcdfa089ddc00abab1314ec7016493e3991d9ea780ec5e10dbb6->enter($__internal_abf7b61c5e1adcdfa089ddc00abab1314ec7016493e3991d9ea780ec5e10dbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('submit_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('reset_row', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_81e83a7a86a908f19ef2ca4fc12f738e9509adaeab358137f8cc1907fbc1348b->leave($__internal_81e83a7a86a908f19ef2ca4fc12f738e9509adaeab358137f8cc1907fbc1348b_prof);

        
        $__internal_abf7b61c5e1adcdfa089ddc00abab1314ec7016493e3991d9ea780ec5e10dbb6->leave($__internal_abf7b61c5e1adcdfa089ddc00abab1314ec7016493e3991d9ea780ec5e10dbb6_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8452480a639702ba9f3dab4ae11464b955a6f1e82393f47bceeb3e6017f16aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8452480a639702ba9f3dab4ae11464b955a6f1e82393f47bceeb3e6017f16aec->enter($__internal_8452480a639702ba9f3dab4ae11464b955a6f1e82393f47bceeb3e6017f16aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ee687991533083aecaafd3a13433c4a05930623187506fd082b48828d9431624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee687991533083aecaafd3a13433c4a05930623187506fd082b48828d9431624->enter($__internal_ee687991533083aecaafd3a13433c4a05930623187506fd082b48828d9431624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_ee687991533083aecaafd3a13433c4a05930623187506fd082b48828d9431624->leave($__internal_ee687991533083aecaafd3a13433c4a05930623187506fd082b48828d9431624_prof);

        
        $__internal_8452480a639702ba9f3dab4ae11464b955a6f1e82393f47bceeb3e6017f16aec->leave($__internal_8452480a639702ba9f3dab4ae11464b955a6f1e82393f47bceeb3e6017f16aec_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_156d8d687b2523390337d2b9365283040a5c84c26fdb15f962eb07b63c04563a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156d8d687b2523390337d2b9365283040a5c84c26fdb15f962eb07b63c04563a->enter($__internal_156d8d687b2523390337d2b9365283040a5c84c26fdb15f962eb07b63c04563a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d8ae2c6288714102b8ea2bf9bcf707733c9eff7540c659c47a1853717a1e9258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ae2c6288714102b8ea2bf9bcf707733c9eff7540c659c47a1853717a1e9258->enter($__internal_d8ae2c6288714102b8ea2bf9bcf707733c9eff7540c659c47a1853717a1e9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_d8ae2c6288714102b8ea2bf9bcf707733c9eff7540c659c47a1853717a1e9258->leave($__internal_d8ae2c6288714102b8ea2bf9bcf707733c9eff7540c659c47a1853717a1e9258_prof);

        
        $__internal_156d8d687b2523390337d2b9365283040a5c84c26fdb15f962eb07b63c04563a->leave($__internal_156d8d687b2523390337d2b9365283040a5c84c26fdb15f962eb07b63c04563a_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_81291841b61e5c5b8092e6677a74c3a499fd36c20a4282ef23c8784797a5baab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81291841b61e5c5b8092e6677a74c3a499fd36c20a4282ef23c8784797a5baab->enter($__internal_81291841b61e5c5b8092e6677a74c3a499fd36c20a4282ef23c8784797a5baab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_89b43ad593b0ee72a8ea8699e6b5cfb631641984acfd52cc05b8a711c949477c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b43ad593b0ee72a8ea8699e6b5cfb631641984acfd52cc05b8a711c949477c->enter($__internal_89b43ad593b0ee72a8ea8699e6b5cfb631641984acfd52cc05b8a711c949477c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo "</div>
    ";
            // line 32
            echo "</div>";
        }
        
        $__internal_89b43ad593b0ee72a8ea8699e6b5cfb631641984acfd52cc05b8a711c949477c->leave($__internal_89b43ad593b0ee72a8ea8699e6b5cfb631641984acfd52cc05b8a711c949477c_prof);

        
        $__internal_81291841b61e5c5b8092e6677a74c3a499fd36c20a4282ef23c8784797a5baab->leave($__internal_81291841b61e5c5b8092e6677a74c3a499fd36c20a4282ef23c8784797a5baab_prof);

    }

    // line 36
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_8776e5ca9321f3bdd46b5f05b12f1aa549489a39509f15c6a95adfdb378f8ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8776e5ca9321f3bdd46b5f05b12f1aa549489a39509f15c6a95adfdb378f8ac8->enter($__internal_8776e5ca9321f3bdd46b5f05b12f1aa549489a39509f15c6a95adfdb378f8ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_431cabd6f663c08626ea055ccb9d49b6c7ed7bf58d8835b967dd327a8ec8a967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431cabd6f663c08626ea055ccb9d49b6c7ed7bf58d8835b967dd327a8ec8a967->enter($__internal_431cabd6f663c08626ea055ccb9d49b6c7ed7bf58d8835b967dd327a8ec8a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 37
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 38
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 40
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 42
        echo "</div>
        </div>
";
        // line 44
        echo "</fieldset>";
        
        $__internal_431cabd6f663c08626ea055ccb9d49b6c7ed7bf58d8835b967dd327a8ec8a967->leave($__internal_431cabd6f663c08626ea055ccb9d49b6c7ed7bf58d8835b967dd327a8ec8a967_prof);

        
        $__internal_8776e5ca9321f3bdd46b5f05b12f1aa549489a39509f15c6a95adfdb378f8ac8->leave($__internal_8776e5ca9321f3bdd46b5f05b12f1aa549489a39509f15c6a95adfdb378f8ac8_prof);

    }

    // line 47
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0cbfca7d4ab1712f27da63abf07c02191446d5b002f903f8ab886c62285d8191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbfca7d4ab1712f27da63abf07c02191446d5b002f903f8ab886c62285d8191->enter($__internal_0cbfca7d4ab1712f27da63abf07c02191446d5b002f903f8ab886c62285d8191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_bb938b785e10b9edf1ad097f45bf660baf0783d1b1a0fc397497e7647490f1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb938b785e10b9edf1ad097f45bf660baf0783d1b1a0fc397497e7647490f1f6->enter($__internal_bb938b785e10b9edf1ad097f45bf660baf0783d1b1a0fc397497e7647490f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 48
        echo "<div class=\"form-group row\">";
        // line 49
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 50
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 52
        echo "</div>";
        // line 53
        echo "</div>";
        
        $__internal_bb938b785e10b9edf1ad097f45bf660baf0783d1b1a0fc397497e7647490f1f6->leave($__internal_bb938b785e10b9edf1ad097f45bf660baf0783d1b1a0fc397497e7647490f1f6_prof);

        
        $__internal_0cbfca7d4ab1712f27da63abf07c02191446d5b002f903f8ab886c62285d8191->leave($__internal_0cbfca7d4ab1712f27da63abf07c02191446d5b002f903f8ab886c62285d8191_prof);

    }

    // line 56
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_111c85939e843dd9fcca1250e95fe5526087b81dfa3cf25955241d24688bf92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111c85939e843dd9fcca1250e95fe5526087b81dfa3cf25955241d24688bf92b->enter($__internal_111c85939e843dd9fcca1250e95fe5526087b81dfa3cf25955241d24688bf92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a2f40ac7045ccbab2e81fb491f88d6ee9ff1cc5f24139b2b77a7dbe40b9eb7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f40ac7045ccbab2e81fb491f88d6ee9ff1cc5f24139b2b77a7dbe40b9eb7eb->enter($__internal_a2f40ac7045ccbab2e81fb491f88d6ee9ff1cc5f24139b2b77a7dbe40b9eb7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 57
        echo "<div class=\"form-group row\">";
        // line 58
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 61
        echo "</div>";
        // line 62
        echo "</div>";
        
        $__internal_a2f40ac7045ccbab2e81fb491f88d6ee9ff1cc5f24139b2b77a7dbe40b9eb7eb->leave($__internal_a2f40ac7045ccbab2e81fb491f88d6ee9ff1cc5f24139b2b77a7dbe40b9eb7eb_prof);

        
        $__internal_111c85939e843dd9fcca1250e95fe5526087b81dfa3cf25955241d24688bf92b->leave($__internal_111c85939e843dd9fcca1250e95fe5526087b81dfa3cf25955241d24688bf92b_prof);

    }

    // line 65
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_d81e0ec990ce2318e981acff59d85e7b1e533dd4db1d4f5e8fb0505e21cb8b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81e0ec990ce2318e981acff59d85e7b1e533dd4db1d4f5e8fb0505e21cb8b91->enter($__internal_d81e0ec990ce2318e981acff59d85e7b1e533dd4db1d4f5e8fb0505e21cb8b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_9af952f6eb0d01f2fcc41ed9bec718e0f04540a56384bb098d5f025cabff6767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af952f6eb0d01f2fcc41ed9bec718e0f04540a56384bb098d5f025cabff6767->enter($__internal_9af952f6eb0d01f2fcc41ed9bec718e0f04540a56384bb098d5f025cabff6767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 66
        echo "col-sm-10";
        
        $__internal_9af952f6eb0d01f2fcc41ed9bec718e0f04540a56384bb098d5f025cabff6767->leave($__internal_9af952f6eb0d01f2fcc41ed9bec718e0f04540a56384bb098d5f025cabff6767_prof);

        
        $__internal_d81e0ec990ce2318e981acff59d85e7b1e533dd4db1d4f5e8fb0505e21cb8b91->leave($__internal_d81e0ec990ce2318e981acff59d85e7b1e533dd4db1d4f5e8fb0505e21cb8b91_prof);

    }

    // line 69
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_691dc90736ae8f15204302a2734904818305b70237b9a8e8f16695c3e3914b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691dc90736ae8f15204302a2734904818305b70237b9a8e8f16695c3e3914b8d->enter($__internal_691dc90736ae8f15204302a2734904818305b70237b9a8e8f16695c3e3914b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1ba4a138980a1d4572f5a6bd91297fa94c7cc5a3f8175084309c2a17eb3c6d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba4a138980a1d4572f5a6bd91297fa94c7cc5a3f8175084309c2a17eb3c6d7d->enter($__internal_1ba4a138980a1d4572f5a6bd91297fa94c7cc5a3f8175084309c2a17eb3c6d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 70
        echo "<div class=\"form-group row\">";
        // line 71
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 72
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 75
        echo "</div>";
        // line 76
        echo "</div>";
        
        $__internal_1ba4a138980a1d4572f5a6bd91297fa94c7cc5a3f8175084309c2a17eb3c6d7d->leave($__internal_1ba4a138980a1d4572f5a6bd91297fa94c7cc5a3f8175084309c2a17eb3c6d7d_prof);

        
        $__internal_691dc90736ae8f15204302a2734904818305b70237b9a8e8f16695c3e3914b8d->leave($__internal_691dc90736ae8f15204302a2734904818305b70237b9a8e8f16695c3e3914b8d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  343 => 76,  341 => 75,  339 => 74,  337 => 73,  333 => 72,  329 => 71,  327 => 70,  318 => 69,  308 => 66,  299 => 65,  289 => 62,  287 => 61,  285 => 60,  281 => 59,  277 => 58,  275 => 57,  266 => 56,  256 => 53,  254 => 52,  252 => 51,  248 => 50,  244 => 49,  242 => 48,  233 => 47,  223 => 44,  219 => 42,  217 => 41,  213 => 40,  211 => 39,  206 => 38,  203 => 37,  194 => 36,  183 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 69,  86 => 68,  84 => 65,  81 => 64,  79 => 56,  76 => 55,  74 => 47,  71 => 46,  69 => 36,  66 => 35,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/home/aluno/matheus-php2/sysvet/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
