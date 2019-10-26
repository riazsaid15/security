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

/* __string_template__2f5338f8de6a0c1b0faa89de1f5df9ebbe01dd8b4aef0a27c608680e6f229853 */
class __TwigTemplate_95ec74de4d5dffac364af2f76bbf6b72e851cd1e85edb4813ffd27164ad7f987 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
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
        echo "<p><span>Published By <i class=\"far fa-user p-1 text-muted\"  aria-hidden=\"true\"> </i></span> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null)), "html", null, true);
        echo " , created at <i class=\"fa fa-clock-o p-1 text-muted\" aria-hidden=\"true\"></i> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
        echo " </p>";
    }

    public function getTemplateName()
    {
        return "__string_template__2f5338f8de6a0c1b0faa89de1f5df9ebbe01dd8b4aef0a27c608680e6f229853";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<p><span>Published By <i class=\"far fa-user p-1 text-muted\"  aria-hidden=\"true\"> </i></span> {{ uid }} , created at <i class=\"fa fa-clock-o p-1 text-muted\" aria-hidden=\"true\"></i> {{ created }} </p>", "__string_template__2f5338f8de6a0c1b0faa89de1f5df9ebbe01dd8b4aef0a27c608680e6f229853", "");
    }
}
