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

/* themes/security/templates/paragraphs/paragraph--latest-accordion.html.twig */
class __TwigTemplate_a03938a88b333495cf1a3bf039fa2911bd86dc183a4a406e08d186392357a17e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "block" => 13, "if" => 16];
        $filters = ["clean_class" => 8, "escape" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
        $context["pos"] = 1;
        // line 2
        $context["css"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_css_", []), "#items", [], "array"), "getString", [], "method");
        // line 3
        echo "

";
        // line 6
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 8
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 9
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 10
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 13
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 14
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "  </div>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "      ";
        if ((($context["pos"] ?? null) == 0)) {
            // line 17
            echo "      <div class=\"container\">
      <div class=\"row\">
        <div class=\"";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image_1", [])), "html", null, true);
            echo "
        </div>
        <div class=\"";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css"] ?? null)), "html", null, true);
            echo "\" style=\"background-color:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_bg_color", []), 0, [])), "html", null, true);
            echo ";\">
          ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image_text", [])), "html", null, true);
            echo "

        </div>
        </div>
      </div>
    ";
        }
        // line 29
        echo "    ";
        if ((($context["pos"] ?? null) == 1)) {
            // line 30
            echo "      <div class=\"container-fluid\">
      <div class=\"row p-lg-5\">
        <div class=\"col-lg-6 p-4 pl-md-5\">
          <h2 class=\"py-1 underline\">";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_latest_title", [])), "html", null, true);
            echo "</h2>
          ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_latest_views", [])), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-6 p-4 pr-md-5\">
          <h2 class=\"py-1 underline\">";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_accordion_title", [])), "html", null, true);
            echo "</h2>
          ";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_accordion_view", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 42
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/security/templates/paragraphs/paragraph--latest-accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 42,  144 => 38,  140 => 37,  134 => 34,  130 => 33,  125 => 30,  122 => 29,  113 => 23,  107 => 22,  102 => 20,  98 => 19,  94 => 17,  91 => 16,  88 => 15,  83 => 43,  81 => 15,  76 => 14,  70 => 13,  68 => 10,  67 => 9,  66 => 8,  65 => 6,  61 => 3,  59 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set pos = 1 %}
{% set css = content.field_css_['#items'].getString() %}


{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      {% if pos == 0 %}
      <div class=\"container\">
      <div class=\"row\">
        <div class=\"{{ css }}\">
          {{ content.field_image_1}}
        </div>
        <div class=\"{{ css }}\" style=\"background-color:{{ content.field_bg_color.0 }};\">
          {{ content.field_image_text }}

        </div>
        </div>
      </div>
    {% endif %}
    {% if pos == 1 %}
      <div class=\"container-fluid\">
      <div class=\"row p-lg-5\">
        <div class=\"col-lg-6 p-4 pl-md-5\">
          <h2 class=\"py-1 underline\">{{ content.field_latest_title }}</h2>
          {{ content.field_latest_views }}
        </div>
        <div class=\"col-lg-6 p-4 pr-md-5\">
          <h2 class=\"py-1 underline\">{{ content.field_accordion_title }}</h2>
          {{ content.field_accordion_view }}
        </div>
      </div>
    {% endif %}
    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/security/templates/paragraphs/paragraph--latest-accordion.html.twig", "D:\\wamp64\\www\\security-test\\themes\\security\\templates\\paragraphs\\paragraph--latest-accordion.html.twig");
    }
}
