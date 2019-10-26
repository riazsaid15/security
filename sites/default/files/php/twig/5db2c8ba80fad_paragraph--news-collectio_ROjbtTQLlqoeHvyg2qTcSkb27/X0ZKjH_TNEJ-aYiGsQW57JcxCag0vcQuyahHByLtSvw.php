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

/* themes/security/templates/paragraphs/paragraph--news-collection-paragraph.html.twig */
class __TwigTemplate_af6b36af948d7eedb32749d8431b7b72b1184d5af5944cd1e199a7326fbed5b3 extends \Twig\Template
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
        $tags = ["set" => 1, "block" => 12, "if" => 15];
        $filters = ["clean_class" => 7, "escape" => 13];
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
        echo "

";
        // line 5
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 7
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 8
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 9
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 12
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 13
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "  </div>
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "      ";
        if ((($context["pos"] ?? null) == 0)) {
            // line 16
            echo "      <div class=\"container\">
      <div class=\"row\">
        <div class=\"";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image_1", [])), "html", null, true);
            echo "
        </div>
        <div class=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css"] ?? null)), "html", null, true);
            echo "\" style=\"background-color:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_bg_color", []), 0, [])), "html", null, true);
            echo ";\">
          ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image_text", [])), "html", null, true);
            echo "

        </div>
        </div>
      </div>
    ";
        }
        // line 28
        echo "    ";
        if ((($context["pos"] ?? null) == 1)) {
            // line 29
            echo "      <div class=\"container-fluid\">
       <div class=\"row p-md-5\">
         <div class=\"col-lg-8 p-md-5 p-sm-2\">
           ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_news_collection_view", [])), "html", null, true);
            echo "
         </div>
         <div class=\"col-lg-4 p-md-5 p-sm-2 bg-mute\">
           <div class=\"p-5 bg-light\">
             <h5 class=\"font-weight-bold mb-3\"><span class=\"\">Contact</span> Us</h5>
             ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_news_collection_block", [])), "html", null, true);
            echo "
           </div>
         </div>
       </div>
      </div>
    ";
        }
        // line 43
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/security/templates/paragraphs/paragraph--news-collection-paragraph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  136 => 37,  128 => 32,  123 => 29,  120 => 28,  111 => 22,  105 => 21,  100 => 19,  96 => 18,  92 => 16,  89 => 15,  86 => 14,  81 => 44,  79 => 14,  74 => 13,  68 => 12,  66 => 9,  65 => 8,  64 => 7,  63 => 5,  59 => 2,  57 => 1,);
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
       <div class=\"row p-md-5\">
         <div class=\"col-lg-8 p-md-5 p-sm-2\">
           {{ content.field_news_collection_view }}
         </div>
         <div class=\"col-lg-4 p-md-5 p-sm-2 bg-mute\">
           <div class=\"p-5 bg-light\">
             <h5 class=\"font-weight-bold mb-3\"><span class=\"\">Contact</span> Us</h5>
             {{ content.field_news_collection_block }}
           </div>
         </div>
       </div>
      </div>
    {% endif %}
    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/security/templates/paragraphs/paragraph--news-collection-paragraph.html.twig", "D:\\wamp64\\www\\security-test\\themes\\security\\templates\\paragraphs\\paragraph--news-collection-paragraph.html.twig");
    }
}
