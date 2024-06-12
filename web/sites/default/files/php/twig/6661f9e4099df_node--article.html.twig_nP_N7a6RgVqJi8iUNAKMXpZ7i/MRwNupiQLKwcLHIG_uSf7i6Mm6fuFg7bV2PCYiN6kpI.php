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

/* themes/contrib/catalog_lite/templates/node--article.html.twig */
class __TwigTemplate_4d142664d6f02094233fefc6b9da3041 extends Template
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
        $this->parent = $this->loadTemplate("node.html.twig", "themes/contrib/catalog_lite/templates/node--article.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["mt_setting", "minutes", "node", "title_prefix", "page", "title_attributes", "url", "label", "title_suffix", "display_submitted", "comment_count", "date", "author_attributes", "author_name", "metadata", "content", "author_picture"]);    }

    // line 9
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if (((((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 10) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "post_progress", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 10))) {
            // line 11
            echo "    <div class=\"node__side\">
        ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 12)) {
                // line 13
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/reading-time"), "html", null, true);
                echo "
          <div class=\"reading-time\">
            ";
                // line 15
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 16
                    echo "              ";
                    echo t("1<div class=\"reading-time__text\">min read</div>", array());
                    // line 19
                    echo "            ";
                } else {
                    // line 20
                    echo "              ";
                    echo t("@minutes<div class=\"reading-time__text\">min read</div>", array("@minutes" =>                     // line 21
($context["minutes"] ?? null), ));
                    // line 23
                    echo "            ";
                }
                // line 24
                echo "          </div>
        ";
            }
            // line 26
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "affix_side", [], "any", false, false, true, 26)) {
                // line 27
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/node-side-affix"), "html", null, true);
                echo "
          <div id=\"affix\">
        ";
            }
            // line 30
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 30)) {
                // line 31
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/font-resize"), "html", null, true);
                echo "
          <div class=\"content-font-settings\">
              <div class=\"font-resize\">
                <a href=\"#\" id=\"decfont\">A-</a>
                <a href=\"#\" id=\"incfont\">A+</a>
              </div>
          </div>
        ";
            }
            // line 39
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "post_progress", [], "any", false, false, true, 39)) {
                // line 40
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/post-progress"), "html", null, true);
                echo "
          <div class=\"post-progress\">
            <div class=\"post-progress__value\"></div>
            <div class=\"post-progress__text\">";
                // line 43
                echo t("read", array());
                echo "</div>
            <div class=\"post-progress__bar\"></div>
          </div>
        ";
            }
            // line 47
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links_print_position", [], "any", false, false, true, 47) == "node-side") && (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 47) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 47)))) {
                // line 48
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/share-links"), "html", null, true);
                echo "
          <div class=\"share-links\">
            <ul>
              ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 51)) {
                    // line 52
                    echo "                <li class=\"facebook";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 52)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 53
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 53)]), "html", null, true);
                    echo "&t=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 53), 53, $this->source), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                      <i class=\"fab fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                  </a>
                </li>
                <li class=\"twitter";
                    // line 57
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 57)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"http://twitter.com/share?text=";
                    // line 58
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 58), 58, $this->source), true), "html", null, true);
                    echo "&url=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 58)]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                      <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                  </a>
                </li>
                <li class=\"email";
                    // line 62
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 62)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"mailto:?Subject=";
                    // line 63
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 63), 63, $this->source), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 63)]), "html", null, true);
                    echo "\">
                      <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
                  </a>
                </li>
              ";
                }
                // line 68
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 68)) {
                    // line 69
                    echo "                <li class=\"print";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 69)) ? (" share-links-enabled") : ("")));
                    echo "\">
                  <div class=\"print\">
                    <a href=\"javascript:window.print()\" class=\"print-button\">
                      <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                    </a>
                  </div>
                </li>
              ";
                }
                // line 77
                echo "            </ul>
          </div>
        ";
            }
            // line 80
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "affix_side", [], "any", false, false, true, 80)) {
                // line 81
                echo "          </div>
        ";
            }
            // line 83
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links_print_position", [], "any", false, false, true, 83) == "bottom") && (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 83) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 83)))) {
                // line 84
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/share-links"), "html", null, true);
                echo "
          ";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/fixed-share-links"), "html", null, true);
                echo "
          <div class=\"share-links\">
            <ul>
              ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 88)) {
                    // line 89
                    echo "                <li class=\"facebook";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 89)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 90
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 90)]), "html", null, true);
                    echo "&t=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 90), 90, $this->source), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                      <i class=\"fab fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                  </a>
                </li>
                <li class=\"twitter";
                    // line 94
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 94)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"http://twitter.com/share?text=";
                    // line 95
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 95), 95, $this->source), true), "html", null, true);
                    echo "&url=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 95)]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                      <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                  </a>
                </li>
                <li class=\"email";
                    // line 99
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 99)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"mailto:?Subject=";
                    // line 100
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 100), 100, $this->source), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 100)]), "html", null, true);
                    echo "\">
                      <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
                  </a>
                </li>
              ";
                }
                // line 105
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 105)) {
                    // line 106
                    echo "                <li class=\"print";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 106)) ? (" share-links-enabled") : ("")));
                    echo "\">
                  <div class=\"print\">
                    <a href=\"javascript:window.print()\" class=\"print-button\">
                      <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                    </a>
                  </div>
                </li>
              ";
                }
                // line 114
                echo "            </ul>
          </div>
        ";
            }
            // line 117
            echo "    </div>
  ";
        }
    }

    // line 120
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 121, $this->source), "html", null, true);
        echo "
  ";
        // line 122
        if ( !($context["page"] ?? null)) {
            // line 123
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 123), 123, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 124, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 124, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 127
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 127, $this->source), "html", null, true);
        echo "
  ";
        // line 128
        if ((($context["display_submitted"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 128) && (($context["comment_count"] ?? null) > 0)))) {
            // line 129
            echo "    <div class=\"node__meta\">
      ";
            // line 130
            if (($context["display_submitted"] ?? null)) {
                // line 131
                echo "        <span class=\"node__meta-item\">
          ";
                // line 132
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 132, $this->source), "html", null, true);
                echo "
        </span>
        <span";
                // line 134
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node__meta-user node__meta-item"], "method", false, false, true, 134), 134, $this->source), "html", null, true);
                echo ">
          ";
                // line 135
                echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                // line 136
                echo "        </span>
        ";
                // line 137
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 137, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 139
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 139) && (($context["comment_count"] ?? null) > 0))) {
                // line 140
                echo "        <div class=\"node__meta-item node__meta-comments\">
          ";
                // line 141
                echo \Drupal::translation()->formatPlural(abs(                // line 143
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 144
($context["comment_count"] ?? null), ));
                // line 146
                echo "        </div>
      ";
            }
            // line 148
            echo "    </div>
  ";
        }
    }

    // line 151
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("catalog_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 154, $this->source), "comment", "links", "field_mt_banner_image"), "html", null, true);
        echo "
  </div>
  ";
        // line 156
        if (((($context["author_picture"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "Owner", [], "any", false, false, true, 156), "field_mt_full_name", [], "any", false, false, true, 156), "value", [], "any", false, false, true, 156)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "Owner", [], "any", false, false, true, 156), "field_mt_signature", [], "any", false, false, true, 156), "value", [], "any", false, false, true, 156))) {
            // line 157
            echo "    <div class=\"node__user-info clearfix\">
      ";
            // line 158
            if (($context["author_picture"] ?? null)) {
                // line 159
                echo "        <div class=\"user-picture\">
          <div";
                // line 160
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "removeClass", ["node__meta-user node__meta-item"], "method", false, false, true, 160), 160, $this->source), "html", null, true);
                echo ">
            ";
                // line 161
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 161, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 165
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "Owner", [], "any", false, false, true, 165), "field_mt_full_name", [], "any", false, false, true, 165), "value", [], "any", false, false, true, 165)) {
                // line 166
                echo "        <div class=\"user-full-name\">
          ";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "Owner", [], "any", false, false, true, 167), "field_mt_full_name", [], "any", false, false, true, 167), "value", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 170
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "Owner", [], "any", false, false, true, 170), "field_mt_signature", [], "any", false, false, true, 170), "value", [], "any", false, false, true, 170)) {
                // line 171
                echo "        <div class=\"user-signature\">
          ";
                // line 172
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "Owner", [], "any", false, false, true, 172), "field_mt_signature", [], "any", false, false, true, 172), "value", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 175
            echo "    </div>
  ";
        }
        // line 177
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
        echo "
  ";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/catalog_lite/templates/node--article.html.twig";
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
        return array (  440 => 178,  435 => 177,  431 => 175,  425 => 172,  422 => 171,  419 => 170,  413 => 167,  410 => 166,  407 => 165,  400 => 161,  396 => 160,  393 => 159,  391 => 158,  388 => 157,  386 => 156,  381 => 154,  375 => 152,  371 => 151,  365 => 148,  361 => 146,  359 => 144,  358 => 143,  357 => 141,  354 => 140,  351 => 139,  346 => 137,  343 => 136,  341 => 135,  337 => 134,  332 => 132,  329 => 131,  327 => 130,  324 => 129,  322 => 128,  317 => 127,  309 => 124,  304 => 123,  302 => 122,  297 => 121,  293 => 120,  287 => 117,  282 => 114,  270 => 106,  267 => 105,  257 => 100,  253 => 99,  244 => 95,  240 => 94,  231 => 90,  226 => 89,  224 => 88,  218 => 85,  213 => 84,  210 => 83,  206 => 81,  203 => 80,  198 => 77,  186 => 69,  183 => 68,  173 => 63,  169 => 62,  160 => 58,  156 => 57,  147 => 53,  142 => 52,  140 => 51,  133 => 48,  130 => 47,  123 => 43,  116 => 40,  113 => 39,  101 => 31,  98 => 30,  91 => 27,  88 => 26,  84 => 24,  81 => 23,  79 => 21,  77 => 20,  74 => 19,  71 => 16,  69 => 15,  63 => 13,  61 => 12,  58 => 11,  55 => 10,  51 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/catalog_lite/templates/node--article.html.twig", "C:\\xamppp\\htdocs\\my_drupal_site\\web\\themes\\contrib\\catalog_lite\\templates\\node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "trans" => 16);
        static $filters = array("escape" => 13, "url_encode" => 53, "without" => 154);
        static $functions = array("attach_library" => 13, "url" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'url_encode', 'without'],
                ['attach_library', 'url']
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
