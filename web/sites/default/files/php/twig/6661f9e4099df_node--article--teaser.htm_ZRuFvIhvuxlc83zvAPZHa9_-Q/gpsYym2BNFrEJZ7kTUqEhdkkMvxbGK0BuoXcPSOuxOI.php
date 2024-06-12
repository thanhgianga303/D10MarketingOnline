<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/catalog_lite/templates/node--article--teaser.html.twig */
class __TwigTemplate_cf328162cdff75abe2a2e722df7cf4b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node.html.twig", "themes/contrib/catalog_lite/templates/node--article--teaser.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "title_prefix", "title_attributes", "url", "label", "title_suffix", "display_submitted", "node", "comment_count", "metadata", "date", "author_attributes", "author_name"]);    }

    // line 9
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 13, $this->source), "html", null, true);
        echo "
  <h2";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        echo ">
    <a href=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 15, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 15, $this->source), "html", null, true);
        echo "</a>
  </h2>
  ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 17, $this->source), "html", null, true);
        echo "
  ";
        // line 18
        if ((($context["display_submitted"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 18) && (($context["comment_count"] ?? null) > 0)))) {
            // line 19
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 19, $this->source), "html", null, true);
            echo "
    <div class=\"node__meta\">
      ";
            // line 21
            if (($context["display_submitted"] ?? null)) {
                // line 22
                echo "        <span class=\"node__meta-item\">
          ";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 23, $this->source), "html", null, true);
                echo "
        </span>
        <span";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node__meta-user node__meta-item"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
                echo ">
          ";
                // line 26
                echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                // line 27
                echo "        </span>
      ";
            }
            // line 29
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 29) && (($context["comment_count"] ?? null) > 0))) {
                // line 30
                echo "        <div class=\"node__meta-item node__meta-comments\">
          ";
                // line 31
                echo \Drupal::translation()->formatPlural(abs(                // line 33
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 34
($context["comment_count"] ?? null), ));
                // line 36
                echo "        </div>
      ";
            }
            // line 38
            echo "    </div>
  ";
        }
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 44, $this->source), "comment", "links", "field_image"), "html", null, true);
        echo "
  </div>
  ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
  ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/catalog_lite/templates/node--article--teaser.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  152 => 47,  148 => 46,  143 => 44,  137 => 42,  133 => 41,  127 => 38,  123 => 36,  121 => 34,  120 => 33,  119 => 31,  116 => 30,  113 => 29,  109 => 27,  107 => 26,  103 => 25,  98 => 23,  95 => 22,  93 => 21,  87 => 19,  85 => 18,  81 => 17,  74 => 15,  70 => 14,  66 => 13,  61 => 12,  57 => 11,  51 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/catalog_lite/templates/node--article--teaser.html.twig", "C:\\xamppp\\htdocs\\my_drupal_site\\web\\themes\\contrib\\catalog_lite\\templates\\node--article--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "trans" => 26);
        static $filters = array("escape" => 12, "without" => 44);
        static $functions = array("attach_library" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
