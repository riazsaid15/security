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

/* themes/security/templates/paragraphs/paragraph--news-parareaph.html.twig */
class __TwigTemplate_a7de4d0bbc8006a9d4bfc7a463517ed6a7ca9b44246f3ad3810d46ef54d928fa extends \Twig\Template
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
        $tags = ["set" => 1, "block" => 11, "if" => 14];
        $filters = ["clean_class" => 6, "escape" => 12];
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
        $context["pos"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_services_block_condition", []), "#items", [], "array"), "getString", [], "method");
        // line 2
        echo "
";
        // line 4
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 6
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 7
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 8
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 11
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 12
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        // line 14
        echo "      ";
        if ((($context["pos"] ?? null) == 0)) {
            // line 15
            echo "      <div class=\"container-fluid\">
       <div class=\"row p-lg-5\">
         <div class=\"col-lg-4 p-lg-5 p-5 order-lg-1 order-2\">
           <div class=\"\">
             ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_views_paragraph", [])), "html", null, true);
            echo "
           </div>
           <div class=\"py-5\">
<!--             <h5 class=\"underline\">Contact Us</h5>-->
             ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_block", [])), "html", null, true);
            echo "
           </div>
         </div>
         <div class=\"col-lg-8 p-lg-5 p-5 order-lg-2 order-1\">
           <div class=\"text-dark h2 font-weight-bold py-5\">
             ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contents_title", [])), "html", null, true);
            echo "
           </div>
           <div class=\"text-warning left\">
             ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_author_info", [])), "html", null, true);
            echo "
           </div>
             ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contents_body", [])), "html", null, true);
            echo "
           <div class=\"\">
             <img src=\"";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_content_pic", []), 0, [], "array")), "html", null, true);
            echo "\" width=\"100%\">
           </div>
         </div>
       </div>
      </div>
    ";
        }
        // line 41
        echo "    ";
        if ((($context["pos"] ?? null) == 1)) {
            // line 42
            echo "      <div class=\"container-fluid\">
       <div class=\"row p-lg-5\">
         <div class=\"col-lg-8 p-lg-5 p-5\">
           <div class=\"text-dark h2 font-weight-bold py-5\">
             ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contents_title", [])), "html", null, true);
            echo "
           </div>
           <div class=\"text-warning left\">
             ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_author_info", [])), "html", null, true);
            echo "
           </div>
             ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contents_body", [])), "html", null, true);
            echo "
           <div class=\"\">
             <img src=\"";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_content_pic", []), 0, [], "array")), "html", null, true);
            echo "\" width=\"100%\">
           </div>
         </div>
         <div class=\"col-lg-4 p-lg-5 p-5\">
           <div class=\"\">
             ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_views_paragraph", [])), "html", null, true);
            echo "
           </div>
           <div class=\"py-5\">
<!--             <h5 class=\"underline\">Contact Us</h5>-->
             ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_block", [])), "html", null, true);
            echo "
           </div>
         </div>
       </div>
      </div>
    ";
        }
        // line 68
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/security/templates/paragraphs/paragraph--news-parareaph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 68,  177 => 62,  170 => 58,  162 => 53,  157 => 51,  152 => 49,  146 => 46,  140 => 42,  137 => 41,  128 => 35,  123 => 33,  118 => 31,  112 => 28,  104 => 23,  97 => 19,  91 => 15,  88 => 14,  85 => 13,  80 => 69,  78 => 13,  73 => 12,  67 => 11,  65 => 8,  64 => 7,  63 => 6,  62 => 4,  59 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set pos = content.field_services_block_condition['#items'].getString() %}

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
      <div class=\"container-fluid\">
       <div class=\"row p-lg-5\">
         <div class=\"col-lg-4 p-lg-5 p-5 order-lg-1 order-2\">
           <div class=\"\">
             {{ content.field_views_paragraph }}
           </div>
           <div class=\"py-5\">
<!--             <h5 class=\"underline\">Contact Us</h5>-->
             {{ content.field_contact_block }}
           </div>
         </div>
         <div class=\"col-lg-8 p-lg-5 p-5 order-lg-2 order-1\">
           <div class=\"text-dark h2 font-weight-bold py-5\">
             {{ content.field_contents_title }}
           </div>
           <div class=\"text-warning left\">
             {{ content.field_author_info }}
           </div>
             {{ content.field_contents_body }}
           <div class=\"\">
             <img src=\"{{ content.field_content_pic[0] }}\" width=\"100%\">
           </div>
         </div>
       </div>
      </div>
    {% endif %}
    {% if pos == 1 %}
      <div class=\"container-fluid\">
       <div class=\"row p-lg-5\">
         <div class=\"col-lg-8 p-lg-5 p-5\">
           <div class=\"text-dark h2 font-weight-bold py-5\">
             {{ content.field_contents_title }}
           </div>
           <div class=\"text-warning left\">
             {{ content.field_author_info }}
           </div>
             {{ content.field_contents_body }}
           <div class=\"\">
             <img src=\"{{ content.field_content_pic[0] }}\" width=\"100%\">
           </div>
         </div>
         <div class=\"col-lg-4 p-lg-5 p-5\">
           <div class=\"\">
             {{ content.field_views_paragraph }}
           </div>
           <div class=\"py-5\">
<!--             <h5 class=\"underline\">Contact Us</h5>-->
             {{ content.field_contact_block }}
           </div>
         </div>
       </div>
      </div>
    {% endif %}
    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/security/templates/paragraphs/paragraph--news-parareaph.html.twig", "C:\\xampp\\htdocs\\security-test\\themes\\security\\templates\\paragraphs\\paragraph--news-parareaph.html.twig");
    }
}
