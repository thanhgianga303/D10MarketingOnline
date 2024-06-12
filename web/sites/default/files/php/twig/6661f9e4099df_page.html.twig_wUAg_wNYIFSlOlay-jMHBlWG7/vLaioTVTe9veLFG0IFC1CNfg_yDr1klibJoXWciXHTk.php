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

/* themes/contrib/catalog_lite/templates/page.html.twig */
class __TwigTemplate_e45b9ca65d27ad0b4013431bfcdaf7ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'internal_banner' => [$this, 'block_internal_banner'],
            'product_title' => [$this, 'block_product_title'],
            'main_content' => [$this, 'block_main_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 76)) {
            // line 77
            echo "  ";
            // line 78
            echo "  <div class=\"clearfix slideout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null), 78, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 80
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 86
            echo "  </div>
  ";
            // line 88
            echo "
  ";
            // line 90
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"></button>
  ";
        }
        // line 93
        echo "
";
        // line 95
        echo "<div class=\"page-container\">

  ";
        // line 97
        if (((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 97) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 97)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 97)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 97)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 97)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 97)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 97))) {
            // line 98
            echo "    ";
            // line 99
            echo "    <div class=\"header-container\">

      ";
            // line 101
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 101) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 101))) {
                // line 102
                echo "        ";
                // line 103
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 103, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 104, $this->source), "html", null, true);
                echo "\">
            ";
                // line 106
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 107
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 108
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 108, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 109
                echo ">
              <div class=\"row\">
                ";
                // line 111
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 111)) {
                    // line 112
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 112, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 114
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 115
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 118
                    echo "                  </div>
                ";
                }
                // line 120
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 120)) {
                    // line 121
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 121, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 123
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 124
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 127
                    echo "                  </div>
                ";
                }
                // line 129
                echo "              </div>
            </div>
            ";
                // line 132
                echo "          </div>
        </div>
        ";
                // line 135
                echo "      ";
            }
            // line 136
            echo "
      ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 137) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 137))) {
                // line 138
                echo "        ";
                // line 139
                echo "        <div class=\"clearfix header-top ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 139, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 140, $this->source), "html", null, true);
                echo "\">
            ";
                // line 142
                echo "            <div class=\"clearfix header-top__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 143
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 144
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 144, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 145
                echo ">
              <div class=\"row\">
                ";
                // line 147
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 147)) {
                    // line 148
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 148, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 150
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 151
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 154
                    echo "                  </div>
                ";
                }
                // line 156
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 156)) {
                    // line 157
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 157, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 159
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 160
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 163
                    echo "                  </div>
                ";
                }
                // line 165
                echo "              </div>
            </div>
            ";
                // line 168
                echo "          </div>
        </div>
        ";
                // line 171
                echo "      ";
            }
            // line 172
            echo "
      ";
            // line 173
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 173) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 173))) {
                // line 174
                echo "        ";
                // line 175
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 175, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 175, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 175, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 176
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 176, $this->source), "html", null, true);
                echo "\">
            ";
                // line 178
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 180
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 180)) {
                    // line 181
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 181, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 183
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 184
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 187
                    echo "                  </div>
                ";
                }
                // line 189
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 189)) {
                    // line 190
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 190, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 192
                    echo "                    <div class=\"clearfix header__section header-first";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                    echo "\">
                      ";
                    // line 193
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 196
                    echo "                  </div>
                ";
                }
                // line 198
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 198)) {
                    // line 199
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 199, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 201
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 202
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 205
                    echo "                  </div>
                ";
                }
                // line 207
                echo "              </div>
            </div>
            ";
                // line 210
                echo "          </div>
        </header>
        ";
                // line 213
                echo "      ";
            }
            // line 214
            echo "
    </div>
    ";
            // line 217
            echo "  ";
        }
        // line 218
        echo "
  ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 219)) {
            // line 220
            echo "    ";
            // line 221
            echo "    <div ";
            if (($context["banner_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 221, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix banner ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 221, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 222
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 222, $this->source), "html", null, true);
            echo "\">
        ";
            // line 224
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"banner__section\">
                ";
            // line 228
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 234
            echo "      </div>
    </div>
    ";
            // line 237
            echo "  ";
        }
        // line 238
        echo "
  ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 239)) {
            // line 240
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 250
        echo "
  ";
        // line 251
        $this->displayBlock('internal_banner', $context, $blocks);
        // line 253
        echo "
  ";
        // line 254
        $this->displayBlock('product_title', $context, $blocks);
        // line 256
        echo "
  ";
        // line 257
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 257)) {
            // line 258
            echo "    ";
            // line 259
            echo "    <div ";
            if (($context["content_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null), 259, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null), 259, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 260
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null), 260, $this->source), "html", null, true);
            echo "\">
        ";
            // line 262
            echo "        <div class=\"clearfix content-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 263
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 264
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null), 264, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 265
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 269
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 275
            echo "      </div>
    </div>
    ";
            // line 278
            echo "  ";
        }
        // line 279
        echo "
  ";
        // line 280
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 280)) {
            // line 281
            echo "    ";
            // line 282
            echo "    <div ";
            if (($context["content_top_highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null), 282, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null), 282, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null), 282, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 283
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null), 283, $this->source), "html", null, true);
            echo "\">
        ";
            // line 285
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 286
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 287
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null), 287, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 288
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 292
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 298
            echo "      </div>
    </div>
    ";
            // line 301
            echo "  ";
        }
        // line 302
        echo "
  ";
        // line 304
        echo "  ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 350
        echo "  ";
        // line 351
        echo "
  ";
        // line 352
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 352) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 352))) {
            // line 353
            echo "    ";
            // line 354
            echo "    <div ";
            if (($context["content_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null), 354, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 354, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 354, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 355
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 355, $this->source), "html", null, true);
            echo "\">
        ";
            // line 357
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 358
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 359
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 359, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 360
            echo ">
          <div class=\"row\">
            ";
            // line 362
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 362)) {
                // line 363
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 363, $this->source), "html", null, true);
                echo "\">
                ";
                // line 365
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 366
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 366), 366, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 369
                echo "              </div>
            ";
            }
            // line 371
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 371)) {
                // line 372
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 372, $this->source), "html", null, true);
                echo "\">
                ";
                // line 374
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 375
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 375), 375, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 378
                echo "              </div>
            ";
            }
            // line 380
            echo "          </div>
        </div>
        ";
            // line 383
            echo "      </div>
    </div>
    ";
            // line 386
            echo "  ";
        }
        // line 387
        echo "
  ";
        // line 388
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 388)) {
            // line 389
            echo "    ";
            // line 390
            echo "    <div ";
            if (($context["featured_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null), 390, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 390, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 390, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 391
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 391, $this->source), "html", null, true);
            echo "\">
        ";
            // line 393
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 394
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 395
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 395, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 396
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 400
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 400), 400, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 406
            echo "      </div>
    </div>
    ";
            // line 409
            echo "  ";
        }
        // line 410
        echo "
  ";
        // line 411
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 411)) {
            // line 412
            echo "    ";
            // line 413
            echo "    <div ";
            if (($context["featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null), 413, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 413, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 413, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 414
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 414, $this->source), "html", null, true);
            echo "\">
        ";
            // line 416
            echo "        <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 417
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 418
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 418, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 419
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 423
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 423), 423, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 429
            echo "      </div>
    </div>
    ";
            // line 432
            echo "  ";
        }
        // line 433
        echo "
  ";
        // line 434
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 434)) {
            // line 435
            echo "    ";
            // line 436
            echo "    <div ";
            if (($context["featured_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null), 436, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 436, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 436, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 437
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 437, $this->source), "html", null, true);
            echo "\">
        ";
            // line 439
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 440
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 441
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 441, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 442
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 446
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 446), 446, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 452
            echo "      </div>
    </div>
    ";
            // line 455
            echo "  ";
        }
        // line 456
        echo "
  ";
        // line 457
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 457)) {
            // line 458
            echo "    ";
            // line 459
            echo "    <div ";
            if (($context["sub_featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null), 459, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 459, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 459, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 460
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 460, $this->source), "html", null, true);
            echo "\">
        ";
            // line 462
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 463
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 464
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 464, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 465
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 469
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 469), 469, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 475
            echo "      </div>
    </div>
    ";
            // line 478
            echo "  ";
        }
        // line 479
        echo "
  ";
        // line 480
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 480)) {
            // line 481
            echo "    ";
            // line 482
            echo "    <div ";
            if (($context["highlighted_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null), 482, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 482, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 482, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 483
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 483, $this->source), "html", null, true);
            echo "\">
        ";
            // line 485
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 486
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 487
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 487, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 488
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 492
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 492), 492, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 498
            echo "      </div>
    </div>
    ";
            // line 501
            echo "  ";
        }
        // line 502
        echo "
  ";
        // line 503
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 503)) {
            // line 504
            echo "    ";
            // line 505
            echo "    <div ";
            if (($context["highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null), 505, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 505, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 505, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 506
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 506, $this->source), "html", null, true);
            echo "\">
        ";
            // line 508
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 509
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 510
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 510, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 511
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 515
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 515), 515, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 521
            echo "      </div>
    </div>
    ";
            // line 524
            echo "  ";
        }
        // line 525
        echo "
  ";
        // line 526
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 526) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 526))) {
            // line 527
            echo "    ";
            // line 528
            echo "    <div ";
            if (($context["footer_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null), 528, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 528, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 528, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 528, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 529
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 529, $this->source), "html", null, true);
            echo "\">
        ";
            // line 531
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 532
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 533
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 533, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 534
            echo ">
          <div class=\"row\">
            ";
            // line 536
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 536)) {
                // line 537
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 537, $this->source), "html", null, true);
                echo "\">
                ";
                // line 539
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 540
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 540), 540, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 543
                echo "              </div>
            ";
            }
            // line 545
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 545)) {
                // line 546
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 546, $this->source), "html", null, true);
                echo "\">
                ";
                // line 548
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 549
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 549), 549, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 552
                echo "              </div>
            ";
            }
            // line 554
            echo "          </div>
        </div>
        ";
            // line 557
            echo "      </div>
    </div>
    ";
            // line 560
            echo "  ";
        }
        // line 561
        echo "
  ";
        // line 562
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 562) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 562)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 562)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 562)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 562))) {
            // line 563
            echo "    ";
            // line 564
            echo "    <footer ";
            if (($context["footer_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null), 564, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 564, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 564, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 565
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null), 565, $this->source), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 568
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 568)) {
                // line 569
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null), 569, $this->source), "html", null, true);
                echo "\">
                ";
                // line 571
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 572
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 573
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 573, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 574
                echo ">
                  ";
                // line 575
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 575), 575, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 578
                echo "              </div>
            ";
            }
            // line 580
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 580)) {
                // line 581
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null), 581, $this->source), "html", null, true);
                echo "\">
                ";
                // line 583
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 584
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 585
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 585, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 586
                echo ">
                  ";
                // line 587
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 587), 587, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 590
                echo "              </div>
            ";
            }
            // line 592
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null), 592, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 593
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 593)) {
                // line 594
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null), 594, $this->source), "html", null, true);
                echo "\">
                ";
                // line 596
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 597
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 598
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 598, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 599
                echo ">
                  ";
                // line 600
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 600), 600, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 603
                echo "              </div>
            ";
            }
            // line 605
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null), 605, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null), 605, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 606
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 606)) {
                // line 607
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null), 607, $this->source), "html", null, true);
                echo "\">
                ";
                // line 609
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 610
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 611
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 611, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 612
                echo ">
                  ";
                // line 613
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 613), 613, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 616
                echo "              </div>
            ";
            }
            // line 618
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 618)) {
                // line 619
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null), 619, $this->source), "html", null, true);
                echo "\">
                ";
                // line 621
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 622
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 623
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 623, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 624
                echo ">
                  ";
                // line 625
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 625), 625, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 628
                echo "              </div>
            ";
            }
            // line 630
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 635
            echo "  ";
        }
        // line 636
        echo "
  ";
        // line 637
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 637)) {
            // line 638
            echo "    ";
            // line 639
            echo "    <div ";
            if (($context["footer_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null), 639, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 639, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 639, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 640
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 640, $this->source), "html", null, true);
            echo "\">
        ";
            // line 642
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 646
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 646), 646, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 652
            echo "      </div>
    </div>
    ";
            // line 655
            echo "  ";
        }
        // line 656
        echo "
  ";
        // line 657
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 657) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 657)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 657))) {
            // line 658
            echo "    ";
            // line 659
            echo "    <div ";
            if (($context["subfooter_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_id"] ?? null), 659, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix subfooter-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_background_color"] ?? null), 659, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_separator"] ?? null), 659, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 660
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_layout_container"] ?? null), 660, $this->source), "html", null, true);
            echo "\">
        ";
            // line 662
            echo "        <div class=\"clearfix subfooter-top__container\">
          <div class=\"row\">
            ";
            // line 664
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 664)) {
                // line 665
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_first_grid_class"] ?? null), 665, $this->source), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 667
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 667), 667, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 671
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 671)) {
                // line 672
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_second_grid_class"] ?? null), 672, $this->source), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 674
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 674), 674, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 678
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 678)) {
                // line 679
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_third_grid_class"] ?? null), 679, $this->source), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 681
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 681), 681, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 685
            echo "          </div>
        </div>
        ";
            // line 688
            echo "      </div>
    </div>
    ";
            // line 691
            echo "  ";
        }
        // line 692
        echo "
  ";
        // line 693
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 693) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 693))) {
            // line 694
            echo "    ";
            // line 695
            echo "    <div ";
            if (($context["subfooter_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null), 695, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix subfooter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 695, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 695, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 696
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 696, $this->source), "html", null, true);
            echo "\">
        ";
            // line 698
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 700
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 700)) {
                // line 701
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 701, $this->source), "html", null, true);
                echo "\">
                ";
                // line 703
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 704
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 704), 704, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 707
                echo "              </div>
            ";
            }
            // line 709
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 709)) {
                // line 710
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 710, $this->source), "html", null, true);
                echo "\">
                ";
                // line 712
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 713
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 713), 713, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 716
                echo "              </div>
            ";
            }
            // line 718
            echo "          </div>
        </div>
        ";
            // line 721
            echo "      </div>
    </div>
    ";
            // line 724
            echo "  ";
        }
        // line 725
        echo "
  ";
        // line 726
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 727
            echo "  ";
            // line 728
            echo "    <div class=\"to-top\"><i class=\"fas ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 728, $this->source), "html", null, true);
            echo "\"></i></div>
  ";
            // line 730
            echo "  ";
        }
        // line 731
        echo "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "slideout_background_color", "slideout_blocks_paddings", "slideout_region_paddings", "header_top_highlighted_background_color", "header_top_highlighted_blocks_paddings", "header_top_highlighted_region_paddings", "header_top_highlighted_layout_container", "header_top_highlighted_animations", "header_top_highlighted_animation_effect", "header_top_highlighted_first_grid_class", "header_top_highlighted_second_grid_class", "header_top_background_color", "header_top_blocks_paddings", "header_top_region_paddings", "header_top_layout_container", "header_top_animations", "header_top_animation_effect", "header_top_first_grid_class", "header_top_second_grid_class", "header_background_color", "header_layout_container_class", "header_layout_columns_class", "header_blocks_paddings", "header_region_paddings", "header_layout_container", "header_third_grid_class", "header_first_grid_class", "slideout_mobile_menu_display", "header_second_grid_class", "banner_id", "banner_background_color", "banner_blocks_paddings", "banner_region_paddings", "banner_layout_container", "content_top_id", "content_top_background_color", "content_top_blocks_paddings", "content_top_region_paddings", "content_top_layout_container", "content_top_animations", "content_top_animation_effect", "content_top_highlighted_id", "content_top_highlighted_background_color", "content_top_highlighted_separator", "content_top_highlighted_blocks_paddings", "content_top_highlighted_region_paddings", "content_top_highlighted_layout_container", "content_top_highlighted_animations", "content_top_highlighted_animation_effect", "content_bottom_id", "content_bottom_background_color", "content_bottom_separator", "content_bottom_blocks_paddings", "content_bottom_region_paddings", "content_bottom_layout_container", "content_bottom_animations", "content_bottom_animation_effect", "content_bottom_first_grid_class", "content_bottom_second_grid_class", "featured_top_id", "featured_top_background_color", "featured_top_separator", "featured_top_blocks_paddings", "featured_top_region_paddings", "featured_top_layout_container", "featured_top_animations", "featured_top_animation_effect", "featured_id", "featured_background_color", "featured_separator", "featured_blocks_paddings", "featured_region_paddings", "featured_layout_container", "featured_animations", "featured_animation_effect", "featured_bottom_id", "featured_bottom_background_color", "featured_bottom_separator", "featured_bottom_blocks_paddings", "featured_bottom_region_paddings", "featured_bottom_layout_container", "featured_bottom_animations", "featured_bottom_animation_effect", "sub_featured_id", "sub_featured_background_color", "sub_featured_separator", "sub_featured_blocks_paddings", "sub_featured_region_paddings", "sub_featured_layout_container", "sub_featured_animations", "sub_featured_animation_effect", "highlighted_top_id", "highlighted_top_background_color", "highlighted_top_separator", "highlighted_top_blocks_paddings", "highlighted_top_region_paddings", "highlighted_top_layout_container", "highlighted_top_animations", "highlighted_top_animation_effect", "highlighted_id", "highlighted_background_color", "highlighted_separator", "highlighted_blocks_paddings", "highlighted_region_paddings", "highlighted_layout_container", "highlighted_animations", "highlighted_animation_effect", "footer_top_id", "footer_top_regions", "footer_top_background_color", "footer_top_separator", "footer_top_blocks_paddings", "footer_top_region_paddings", "footer_top_layout_container", "footer_top_animations", "footer_top_animation_effect", "footer_top_first_grid_class", "footer_top_second_grid_class", "footer_id", "footer_background_color", "footer_separator", "footer_blocks_paddings", "footer_region_paddings", "footer_layout_container", "footer_first_grid_class", "footer_animations", "footer_animation_effect", "footer_second_grid_class", "footer_4_columns_clearfix_first", "footer_third_grid_class", "footer_4_columns_clearfix_second", "footer_5_columns_clearfix", "footer_fourth_grid_class", "footer_fifth_grid_class", "footer_bottom_id", "footer_bottom_background_color", "footer_bottom_separator", "footer_bottom_blocks_paddings", "footer_bottom_region_paddings", "footer_bottom_layout_container", "subfooter_top_id", "subfooter_top_background_color", "subfooter_top_separator", "subfooter_top_blocks_paddings", "subfooter_top_region_paddings", "subfooter_top_layout_container", "subfooter_top_first_grid_class", "subfooter_top_second_grid_class", "subfooter_top_third_grid_class", "subfooter_id", "subfooter_background_color", "subfooter_separator", "subfooter_blocks_paddings", "subfooter_region_paddings", "subfooter_layout_container", "subfooter_first_grid_class", "subfooter_second_grid_class", "scroll_to_top_display", "scroll_to_top_icon", "main_content_id", "main_content_separator", "main_grid_class", "main_content_animations", "main_content_blocks_paddings", "main_content_region_paddings", "main_content_animation_effect", "sidebar_first_grid_class", "sidebar_first_animations", "sidebar_first_blocks_paddings", "sidebar_first_region_paddings", "sidebar_first_animation_effect", "sidebar_second_grid_class", "sidebar_second_animations", "sidebar_second_blocks_paddings", "sidebar_second_region_paddings", "sidebar_second_animation_effect"]);    }

    // line 251
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 252
        echo "  ";
    }

    // line 254
    public function block_product_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "  ";
    }

    // line 304
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 305
        echo "    <div ";
        if (($context["main_content_id"] ?? null)) {
            echo "id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null), 305, $this->source), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null), 305, $this->source), "html", null, true);
        echo "\">
      <div class=\"container\">
        <div class=\"clearfix main-content__container\">
          <div class=\"row\">
            <section class=\"";
        // line 309
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 309, $this->source), "html", null, true);
        echo "\">
              ";
        // line 311
        echo "              <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
                ";
        // line 312
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 313
            echo "                  data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 313, $this->source), "html", null, true);
            echo "\"
                ";
        }
        // line 314
        echo ">
                ";
        // line 315
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 315)) {
            // line 316
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 316), 316, $this->source), "html", null, true);
            echo "
                ";
        }
        // line 318
        echo "              </div>
              ";
        // line 320
        echo "            </section>
            ";
        // line 321
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 321)) {
            // line 322
            echo "              <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 322, $this->source), "html", null, true);
            echo "\">
                ";
            // line 324
            echo "                <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 325
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 326
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 326, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 327
            echo ">
                  ";
            // line 328
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 328), 328, $this->source), "html", null, true);
            echo "
                </section>
                ";
            // line 331
            echo "              </aside>
            ";
        }
        // line 333
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 333)) {
            // line 334
            echo "              <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 334, $this->source), "html", null, true);
            echo "\">
                ";
            // line 336
            echo "                <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 337
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 338
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 338, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 339
            echo ">
                  ";
            // line 340
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 340), 340, $this->source), "html", null, true);
            echo "
                </section>
                ";
            // line 343
            echo "              </aside>
            ";
        }
        // line 345
        echo "          </div>
        </div>
      </div>
    </div>
  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/catalog_lite/templates/page.html.twig";
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
        return array (  1700 => 345,  1696 => 343,  1691 => 340,  1688 => 339,  1682 => 338,  1680 => 337,  1673 => 336,  1668 => 334,  1665 => 333,  1661 => 331,  1656 => 328,  1653 => 327,  1647 => 326,  1645 => 325,  1638 => 324,  1633 => 322,  1631 => 321,  1628 => 320,  1625 => 318,  1619 => 316,  1617 => 315,  1614 => 314,  1608 => 313,  1606 => 312,  1599 => 311,  1595 => 309,  1581 => 305,  1577 => 304,  1573 => 255,  1569 => 254,  1565 => 252,  1561 => 251,  1554 => 731,  1551 => 730,  1546 => 728,  1544 => 727,  1542 => 726,  1539 => 725,  1536 => 724,  1532 => 721,  1528 => 718,  1524 => 716,  1519 => 713,  1516 => 712,  1511 => 710,  1508 => 709,  1504 => 707,  1499 => 704,  1496 => 703,  1491 => 701,  1489 => 700,  1485 => 698,  1481 => 696,  1465 => 695,  1463 => 694,  1461 => 693,  1458 => 692,  1455 => 691,  1451 => 688,  1447 => 685,  1440 => 681,  1434 => 679,  1431 => 678,  1424 => 674,  1418 => 672,  1415 => 671,  1408 => 667,  1402 => 665,  1400 => 664,  1396 => 662,  1392 => 660,  1376 => 659,  1374 => 658,  1372 => 657,  1369 => 656,  1366 => 655,  1362 => 652,  1354 => 646,  1348 => 642,  1344 => 640,  1328 => 639,  1326 => 638,  1324 => 637,  1321 => 636,  1318 => 635,  1312 => 630,  1308 => 628,  1303 => 625,  1300 => 624,  1294 => 623,  1292 => 622,  1287 => 621,  1282 => 619,  1279 => 618,  1275 => 616,  1270 => 613,  1267 => 612,  1261 => 611,  1259 => 610,  1254 => 609,  1249 => 607,  1247 => 606,  1240 => 605,  1236 => 603,  1231 => 600,  1228 => 599,  1222 => 598,  1220 => 597,  1215 => 596,  1210 => 594,  1208 => 593,  1203 => 592,  1199 => 590,  1194 => 587,  1191 => 586,  1185 => 585,  1183 => 584,  1178 => 583,  1173 => 581,  1170 => 580,  1166 => 578,  1161 => 575,  1158 => 574,  1152 => 573,  1150 => 572,  1145 => 571,  1140 => 569,  1138 => 568,  1132 => 565,  1116 => 564,  1114 => 563,  1112 => 562,  1109 => 561,  1106 => 560,  1102 => 557,  1098 => 554,  1094 => 552,  1089 => 549,  1086 => 548,  1081 => 546,  1078 => 545,  1074 => 543,  1069 => 540,  1066 => 539,  1061 => 537,  1059 => 536,  1055 => 534,  1049 => 533,  1047 => 532,  1042 => 531,  1038 => 529,  1021 => 528,  1019 => 527,  1017 => 526,  1014 => 525,  1011 => 524,  1007 => 521,  999 => 515,  993 => 511,  987 => 510,  985 => 509,  980 => 508,  976 => 506,  961 => 505,  959 => 504,  957 => 503,  954 => 502,  951 => 501,  947 => 498,  939 => 492,  933 => 488,  927 => 487,  925 => 486,  920 => 485,  916 => 483,  901 => 482,  899 => 481,  897 => 480,  894 => 479,  891 => 478,  887 => 475,  879 => 469,  873 => 465,  867 => 464,  865 => 463,  860 => 462,  856 => 460,  841 => 459,  839 => 458,  837 => 457,  834 => 456,  831 => 455,  827 => 452,  819 => 446,  813 => 442,  807 => 441,  805 => 440,  800 => 439,  796 => 437,  781 => 436,  779 => 435,  777 => 434,  774 => 433,  771 => 432,  767 => 429,  759 => 423,  753 => 419,  747 => 418,  745 => 417,  740 => 416,  736 => 414,  721 => 413,  719 => 412,  717 => 411,  714 => 410,  711 => 409,  707 => 406,  699 => 400,  693 => 396,  687 => 395,  685 => 394,  680 => 393,  676 => 391,  661 => 390,  659 => 389,  657 => 388,  654 => 387,  651 => 386,  647 => 383,  643 => 380,  639 => 378,  634 => 375,  631 => 374,  626 => 372,  623 => 371,  619 => 369,  614 => 366,  611 => 365,  606 => 363,  604 => 362,  600 => 360,  594 => 359,  592 => 358,  587 => 357,  583 => 355,  568 => 354,  566 => 353,  564 => 352,  561 => 351,  559 => 350,  556 => 304,  553 => 302,  550 => 301,  546 => 298,  538 => 292,  532 => 288,  526 => 287,  524 => 286,  519 => 285,  515 => 283,  500 => 282,  498 => 281,  496 => 280,  493 => 279,  490 => 278,  486 => 275,  478 => 269,  472 => 265,  466 => 264,  464 => 263,  459 => 262,  455 => 260,  442 => 259,  440 => 258,  438 => 257,  435 => 256,  433 => 254,  430 => 253,  428 => 251,  425 => 250,  416 => 244,  410 => 240,  408 => 239,  405 => 238,  402 => 237,  398 => 234,  390 => 228,  384 => 224,  380 => 222,  367 => 221,  365 => 220,  363 => 219,  360 => 218,  357 => 217,  353 => 214,  350 => 213,  346 => 210,  342 => 207,  338 => 205,  333 => 202,  330 => 201,  325 => 199,  322 => 198,  318 => 196,  313 => 193,  308 => 192,  303 => 190,  300 => 189,  296 => 187,  291 => 184,  288 => 183,  283 => 181,  281 => 180,  277 => 178,  273 => 176,  262 => 175,  260 => 174,  258 => 173,  255 => 172,  252 => 171,  248 => 168,  244 => 165,  240 => 163,  235 => 160,  232 => 159,  227 => 157,  224 => 156,  220 => 154,  215 => 151,  212 => 150,  207 => 148,  205 => 147,  201 => 145,  195 => 144,  193 => 143,  188 => 142,  184 => 140,  177 => 139,  175 => 138,  173 => 137,  170 => 136,  167 => 135,  163 => 132,  159 => 129,  155 => 127,  150 => 124,  147 => 123,  142 => 121,  139 => 120,  135 => 118,  130 => 115,  127 => 114,  122 => 112,  120 => 111,  116 => 109,  110 => 108,  108 => 107,  103 => 106,  99 => 104,  92 => 103,  90 => 102,  88 => 101,  84 => 99,  82 => 98,  80 => 97,  76 => 95,  73 => 93,  69 => 90,  66 => 88,  63 => 86,  57 => 82,  53 => 80,  46 => 78,  44 => 77,  42 => 76,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/catalog_lite/templates/page.html.twig", "C:\\xamppp\\htdocs\\my_drupal_site\\web\\themes\\contrib\\catalog_lite\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 76, "block" => 251);
        static $filters = array("escape" => 78);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
                []
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
