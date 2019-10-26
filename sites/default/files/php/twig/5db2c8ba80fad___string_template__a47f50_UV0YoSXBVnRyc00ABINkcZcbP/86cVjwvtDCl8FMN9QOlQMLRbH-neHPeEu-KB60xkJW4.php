<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__a47f50584102f31f652a9870dafb928767953768e5ca6a9e42d2ca4cf54c0c36 */
class __TwigTemplate_7a522f5846ed2d377ed2d1e6c8c9d6388a0ffa1987d6138624cbaa3a10a3fadb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"card bg-white shadow-box mx-3\" style=\"width: 18rem;\">  
<img src=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_content_pic"] ?? null)), "html", null, true);
        echo "\" class=\"card-img-top\" width=\"60%\" alt=\"...\">
  <div class=\"card-body pt-2\">
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true);
        echo "\" class=\"\"><h6 class=\"card-title float-left pt-3\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_contents_title"] ?? null)), "html", null, true);
        echo "</h6></a>
    <p class=\" float-left\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_contents_body"] ?? null)), "html", null, true);
        echo "</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a47f50584102f31f652a9870dafb928767953768e5ca6a9e42d2ca4cf54c0c36";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 5,  63 => 4,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"card bg-white shadow-box mx-3\" style=\"width: 18rem;\">  
<img src=\"{{ field_content_pic }}\" class=\"card-img-top\" width=\"60%\" alt=\"...\">
  <div class=\"card-body pt-2\">
    <a href=\"{{ view_node }}\" class=\"\"><h6 class=\"card-title float-left pt-3\">{{ field_contents_title }}</h6></a>
    <p class=\" float-left\">{{ field_contents_body }}</p>
  </div>
</div>
", "__string_template__a47f50584102f31f652a9870dafb928767953768e5ca6a9e42d2ca4cf54c0c36", "");
    }
}
