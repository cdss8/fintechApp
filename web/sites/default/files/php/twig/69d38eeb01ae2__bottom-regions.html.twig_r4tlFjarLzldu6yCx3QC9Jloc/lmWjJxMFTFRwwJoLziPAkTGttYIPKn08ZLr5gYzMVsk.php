<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @solo/partials/_bottom-regions.html.twig */
class __TwigTemplate_beabf237b3555f4597ce6a945fc8155d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["bottom_first"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 1)) : (null));
        // line 2
        $context["bottom_second"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 2))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 2)) : (null));
        // line 3
        $context["bottom_third"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 3))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 3)) : (null));
        // line 4
        $context["bottom_fourth"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_fourth", [], "any", false, false, true, 4))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_fourth", [], "any", false, false, true, 4)) : (null));
        // line 5
        yield "
";
        // line 6
        if ((((($context["bottom_first"] ?? null) || ($context["bottom_second"] ?? null)) || ($context["bottom_third"] ?? null)) || ($context["bottom_fourth"] ?? null))) {
            // line 7
            yield "
";
            // line 8
            $context["bottom_regions"] = 0;
            // line 9
            yield "
";
            // line 10
            if ((($tmp = ($context["bottom_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "  ";
                $context["bottom_regions"] = (($context["bottom_regions"] ?? null) + 1);
                // line 12
                yield "  ";
                $context["bottom_first_outer_classes"] = "region-outer bottom-box bottom-box-first";
                // line 13
                yield "  ";
                $context["bottom_first_inner_classes"] = (("region-inner bottom-box-inner bottom-box-first-inner fade-inner" . (((($tmp = ($context["align_bottom_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_bottom_first"] ?? null))) : (""))) . (((($tmp = ($context["classes_bottom_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_bottom_first"] ?? null))) : ("")));
            }
            // line 15
            yield "
";
            // line 16
            if ((($tmp = ($context["bottom_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "  ";
                $context["bottom_regions"] = (($context["bottom_regions"] ?? null) + 1);
                // line 18
                yield "  ";
                $context["bottom_second_outer_classes"] = "region-outer bottom-box bottom-box-second";
                // line 19
                yield "  ";
                $context["bottom_second_inner_classes"] = (("region-inner bottom-box-inner bottom-box-second-inner fade-inner" . (((($tmp = ($context["align_bottom_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_bottom_second"] ?? null))) : (""))) . (((($tmp = ($context["classes_bottom_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_bottom_second"] ?? null))) : ("")));
            }
            // line 21
            yield "
";
            // line 22
            if ((($tmp = ($context["bottom_third"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "  ";
                $context["bottom_regions"] = (($context["bottom_regions"] ?? null) + 1);
                // line 24
                yield "  ";
                $context["bottom_third_outer_classes"] = "region-outer bottom-box bottom-box-third";
                // line 25
                yield "  ";
                $context["bottom_third_inner_classes"] = (("region-inner bottom-box-inner bottom-box-third-inner fade-inner" . (((($tmp = ($context["align_bottom_third"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_bottom_third"] ?? null))) : (""))) . (((($tmp = ($context["classes_bottom_third"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_bottom_third"] ?? null))) : ("")));
            }
            // line 27
            yield "
";
            // line 28
            if ((($tmp = ($context["bottom_fourth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "  ";
                $context["bottom_regions"] = (($context["bottom_regions"] ?? null) + 1);
                // line 30
                yield "  ";
                $context["bottom_fourth_outer_classes"] = "region-outer bottom-box bottom-box-fourth";
                // line 31
                yield "  ";
                $context["bottom_fourth_inner_classes"] = (("region-inner bottom-box-inner bottom-box-fourth-inner fade-inner" . (((($tmp = ($context["align_bottom_fourth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_bottom_fourth"] ?? null))) : (""))) . (((($tmp = ($context["classes_bottom_fourth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_bottom_fourth"] ?? null))) : ("")));
            }
            // line 33
            yield "
";
            // line 34
            $context["bottom_active"] = ("active-bottom-" . ($context["bottom_regions"] ?? null));
            // line 35
            yield "
";
            // line 36
            $context["bottom_outer"] = (((((("solo-outer multi bottom-container" . (((($tmp =             // line 37
($context["bottom_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["bottom_active"] ?? null))) : (""))) . (((($tmp =             // line 38
($context["site_regions_bottom_border"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-border") : (""))) . (((($tmp =             // line 39
($context["site_regions_bottom_rounded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_regions_bottom_rounded"] ?? null))) : (""))) . (((($tmp =             // line 40
($context["site_regions_bottom_animate_border"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" animate-border") : (""))) . (((($tmp =             // line 41
($context["site_regions_bottom_animate_hover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" animate-hover") : (""))) . (((($tmp =             // line 42
($context["classes_bottom_container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_bottom_container"] ?? null))) : ("")));
            // line 43
            yield "
";
            // line 44
            $context["bottom_inner"] = ("solo-inner solo-col bottom-container-inner" . (((($tmp =             // line 45
($context["bottom_layout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["bottom_layout"] ?? null))) : ("")));
            // line 46
            yield "
  <!-- Start: Bottom Container -->
  <div id=\"bottom-container\"";
            // line 48
            if ((($tmp = ($context["enable_aria_bottom"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " role=\"region\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Bottom Section"));
                yield "\"";
            }
            yield " class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_outer"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_container"] ?? null), "html", null, true);
            yield ">

    <div id=\"bottom-container-inner\" class=\"";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_inner"] ?? null), "html", null, true);
            yield "\">

    ";
            // line 52
            if ((($tmp = ($context["bottom_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "      <!-- Start: Bottom First -->
      <div id=\"bottom-box-first\" class=\"";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_first_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 55
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_first_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_first"] ?? null), "html", null, true);
                yield ">
          ";
                // line 56
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_first"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Bottom First -->
    ";
            }
            // line 61
            yield "
    ";
            // line 62
            if ((($tmp = ($context["bottom_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "      <!-- Start: Bottom Second -->
      <div id=\"bottom-box-second\" class=\"";
                // line 64
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_second_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 65
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_second_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_second"] ?? null), "html", null, true);
                yield ">
          ";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_second"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Bottom Second -->
    ";
            }
            // line 71
            yield "
    ";
            // line 72
            if ((($tmp = ($context["bottom_third"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "      <!-- Start: Bottom Third -->
      <div id=\"bottom-box-third\" class=\"";
                // line 74
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_third_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 75
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_third_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_third"] ?? null), "html", null, true);
                yield ">
          ";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_third"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Bottom Third -->
    ";
            }
            // line 81
            yield "
    ";
            // line 82
            if ((($tmp = ($context["bottom_fourth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "      <!-- Start: Bottom Fourth -->
      <div id=\"bottom-box-fourth\" class=\"";
                // line 84
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_fourth_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_fourth_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_fourth"] ?? null), "html", null, true);
                yield ">
          ";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_fourth"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Bottom Fourth -->
    ";
            }
            // line 91
            yield "
    </div>
  </div>
  <!-- End: Bottom -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "align_bottom_first", "classes_bottom_first", "align_bottom_second", "classes_bottom_second", "align_bottom_third", "classes_bottom_third", "align_bottom_fourth", "classes_bottom_fourth", "site_regions_bottom_border", "site_regions_bottom_rounded", "site_regions_bottom_animate_border", "site_regions_bottom_animate_hover", "classes_bottom_container", "bottom_layout", "enable_aria_bottom", "attributes_bottom_container", "attributes_bottom_first", "attributes_bottom_second", "attributes_bottom_third", "attributes_bottom_fourth"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_bottom-regions.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  267 => 91,  259 => 86,  253 => 85,  249 => 84,  246 => 83,  244 => 82,  241 => 81,  233 => 76,  227 => 75,  223 => 74,  220 => 73,  218 => 72,  215 => 71,  207 => 66,  201 => 65,  197 => 64,  194 => 63,  192 => 62,  189 => 61,  181 => 56,  175 => 55,  171 => 54,  168 => 53,  166 => 52,  161 => 50,  148 => 48,  144 => 46,  142 => 45,  141 => 44,  138 => 43,  136 => 42,  135 => 41,  134 => 40,  133 => 39,  132 => 38,  131 => 37,  130 => 36,  127 => 35,  125 => 34,  122 => 33,  118 => 31,  115 => 30,  112 => 29,  110 => 28,  107 => 27,  103 => 25,  100 => 24,  97 => 23,  95 => 22,  92 => 21,  88 => 19,  85 => 18,  82 => 17,  80 => 16,  77 => 15,  73 => 13,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_bottom-regions.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_bottom-regions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 6];
        static $filters = ["t" => 48, "escape" => 48];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape'],
                [],
                $this->source
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
