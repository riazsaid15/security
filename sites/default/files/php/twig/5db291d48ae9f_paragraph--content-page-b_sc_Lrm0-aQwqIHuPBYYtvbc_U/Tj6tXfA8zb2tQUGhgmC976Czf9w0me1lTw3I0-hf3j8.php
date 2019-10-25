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

/* themes/security/templates/paragraphs/paragraph--content-page-banner.html.twig */
class __TwigTemplate_abdd91dd302ac5c88815b373714af5de79f4d15d05575e7df74cbda67801860d extends \Twig\Template
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
        $tags = ["set" => 1, "block" => 11];
        $filters = ["clean_class" => 6, "escape" => 12];
        $functions = ["file_url" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
                ['file_url']
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
        $context["media_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_banner_pic", []), 0, [], "array"), "#media", [], "array"), "field_media_image", []), "entity", []), "uri", []), "value", []))]);
        // line 3
        $context["classes"] = [0 => "paragraph", 1 => "cont", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 6
($context["paragraph"] ?? null), "bundle", [])))), 3 => ((        // line 7
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 4 => (( !$this->getAttribute(        // line 8
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 11
        $this->displayBlock('paragraph', $context, $blocks);
        // line 30
        echo "
";
    }

    // line 11
    public function block_paragraph($context, array $blocks = [])
    {
        // line 12
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        // line 14
        echo "      
  <header class=\"content\" style=\"background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url('";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_banner_image", []), 0, [], "array")), "html", null, true);
        echo "'\">
   
    <div class=\"container h-100\">
      <div class=\"row h-100  align-items-center justify-content-center text-center\">
        <div class=\"col-lg-10 align-self-center pt-5\">
          <h1 class=\"text-uppercase text-white font-weight-bold pt-5\">";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_banner_title", [])), "html", null, true);
        echo "</h1>
        </div>
      </div>
    </div>
  </header>      
      
      
    ";
    }

    public function getTemplateName()
    {
        return "themes/security/templates/paragraphs/paragraph--content-page-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 20,  92 => 15,  89 => 14,  86 => 13,  81 => 28,  79 => 13,  74 => 12,  71 => 11,  66 => 30,  64 => 11,  62 => 8,  61 => 7,  60 => 6,  59 => 3,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set media_url = file_url(content.field_banner_pic[0]['#media'].field_media_image.entity.uri.value) %}
{%
  set classes = [
    'paragraph',
    'cont',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      
  <header class=\"content\" style=\"background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url('{{ content.field_banner_image[0] }}'\">
   
    <div class=\"container h-100\">
      <div class=\"row h-100  align-items-center justify-content-center text-center\">
        <div class=\"col-lg-10 align-self-center pt-5\">
          <h1 class=\"text-uppercase text-white font-weight-bold pt-5\">{{ content.field_banner_title }}</h1>
        </div>
      </div>
    </div>
  </header>      
      
      
    {% endblock %}
  </div>
{% endblock paragraph %}

", "themes/security/templates/paragraphs/paragraph--content-page-banner.html.twig", "C:\\xampp\\htdocs\\security-test\\themes\\security\\templates\\paragraphs\\paragraph--content-page-banner.html.twig");
    }
}
