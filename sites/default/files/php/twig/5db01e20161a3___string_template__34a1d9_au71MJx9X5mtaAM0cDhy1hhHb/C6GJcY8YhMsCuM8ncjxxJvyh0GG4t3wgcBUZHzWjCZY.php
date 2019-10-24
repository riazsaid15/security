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

/* __string_template__34a1d92c32c16363ac3c7d2c2731b3fc982356bfb87e8380648de4bb487c6915 */
class __TwigTemplate_b77449270f46169f5e87898a01838b4ea9f7fb368523506480dc9dcd74d9d861 extends \Twig\Template
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
        echo "<div class=\"card bg-light  text-center shadow-box\" style=\"width: 18rem;\">  
<img src=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_content_pic"] ?? null)), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body pt-2\">
    <h5 class=\"card-title py-3\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_contents_title"] ?? null)), "html", null, true);
        echo "</h5>
    <p class=\"\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_contents_body"] ?? null)), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true);
        echo "\" class=\"btn btn-outline-warning \">Read More</a> 

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__34a1d92c32c16363ac3c7d2c2731b3fc982356bfb87e8380648de4bb487c6915";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 6,  67 => 5,  63 => 4,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"card bg-light  text-center shadow-box\" style=\"width: 18rem;\">  
<img src=\"{{ field_content_pic }}\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body pt-2\">
    <h5 class=\"card-title py-3\">{{ field_contents_title }}</h5>
    <p class=\"\">{{ field_contents_body }}</p>
    <a href=\"{{ view_node }}\" class=\"btn btn-outline-warning \">Read More</a> 

  </div>
</div>
", "__string_template__34a1d92c32c16363ac3c7d2c2731b3fc982356bfb87e8380648de4bb487c6915", "");
    }
}
