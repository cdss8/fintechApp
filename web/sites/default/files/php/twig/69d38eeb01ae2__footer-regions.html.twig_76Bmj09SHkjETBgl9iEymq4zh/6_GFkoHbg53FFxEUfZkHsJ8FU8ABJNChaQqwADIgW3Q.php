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

/* @solo/partials/_footer-regions.html.twig */
class __TwigTemplate_8abdf3c7985bd5218c5a3371d703eacc extends Template
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
        $context["footer_first"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1)) : (null));
        // line 2
        $context["footer_second"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 2))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 2)) : (null));
        // line 3
        $context["footer_third"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 3))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 3)) : (null));
        // line 4
        yield "
";
        // line 5
        if (((($context["footer_first"] ?? null) || ($context["footer_second"] ?? null)) || ($context["footer_third"] ?? null))) {
            // line 6
            yield "
";
            // line 7
            $context["footer_regions"] = 0;
            // line 8
            yield "
";
            // line 9
            if ((($tmp = ($context["footer_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "  ";
                $context["footer_regions"] = (($context["footer_regions"] ?? null) + 1);
                // line 11
                yield "  ";
                $context["footer_first_outer_classes"] = "region-outer footer-box footer-box-first";
                // line 12
                yield "  ";
                $context["footer_first_inner_classes"] = (("region-inner footer-box-inner footer-box-first-inner fade-inner" . (((($tmp = ($context["align_footer_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_footer_first"] ?? null))) : (""))) . (((($tmp = ($context["classes_footer_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_footer_first"] ?? null))) : ("")));
            }
            // line 14
            yield "
";
            // line 15
            if ((($tmp = ($context["footer_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "  ";
                $context["footer_regions"] = (($context["footer_regions"] ?? null) + 1);
                // line 17
                yield "  ";
                $context["footer_second_outer_classes"] = "region-outer footer-box footer-box-second";
                // line 18
                yield "  ";
                $context["footer_second_inner_classes"] = (("region-inner footer-box-inner footer-box-second-inner fade-inner" . (((($tmp = ($context["align_footer_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_footer_second"] ?? null))) : (""))) . (((($tmp = ($context["classes_footer_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_footer_second"] ?? null))) : ("")));
            }
            // line 20
            yield "
";
            // line 21
            if ((($tmp = ($context["footer_third"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "  ";
                $context["footer_regions"] = (($context["footer_regions"] ?? null) + 1);
                // line 23
                yield "  ";
                $context["footer_third_outer_classes"] = "region-outer footer-box footer-box-third";
                // line 24
                yield "  ";
                $context["footer_third_inner_classes"] = (("region-inner footer-box-inner footer-box-third-inner fade-inner" . (((($tmp = ($context["align_footer_third"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_footer_third"] ?? null))) : (""))) . (((($tmp = ($context["classes_footer_third"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_footer_third"] ?? null))) : ("")));
            }
            // line 26
            yield "
";
            // line 27
            $context["footer_active"] = ("active-footer-" . ($context["footer_regions"] ?? null));
            // line 28
            yield "
";
            // line 29
            $context["footer_outer"] = (((((("solo-outer multi footer-container" . (((($tmp =             // line 30
($context["footer_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["footer_active"] ?? null))) : (""))) . (((($tmp =             // line 31
($context["site_regions_footer_border"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-border") : (""))) . (((($tmp =             // line 32
($context["site_regions_footer_rounded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_regions_footer_rounded"] ?? null))) : (""))) . (((($tmp =             // line 33
($context["site_regions_footer_animate_border"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" animate-border") : (""))) . (((($tmp =             // line 34
($context["site_regions_footer_animate_hover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" animate-hover") : (""))) . (((($tmp =             // line 35
($context["classes_footer_container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_footer_container"] ?? null))) : ("")));
            // line 36
            yield "
";
            // line 37
            $context["footer_inner"] = ("solo-inner solo-col footer-container-inner" . (((($tmp =             // line 38
($context["footer_layout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["footer_layout"] ?? null))) : ("")));
            // line 39
            yield "
  <!-- Start: Footer -->
  <div id=\"footer-container\"";
            // line 41
            if ((($tmp = ($context["enable_aria_footer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " role=\"region\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Footer Section"));
                yield "\"";
            }
            yield " class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_outer"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_footer_container"] ?? null), "html", null, true);
            yield ">
    <div id=\"footer-container-inner\" class=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_inner"] ?? null), "html", null, true);
            yield "\">

    ";
            // line 44
            if ((($tmp = ($context["footer_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "      <!-- Start: Footer First  -->
      <div id=\"footer-box-first\" class=\"";
                // line 46
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_first_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_first_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_footer_first"] ?? null), "html", null, true);
                yield ">
          ";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_first"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Footer First -->
    ";
            }
            // line 53
            yield "
    ";
            // line 54
            if ((($tmp = ($context["footer_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "      <!-- Start: Footer Second Region -->
      <div id=\"footer-box-second\" class=\"";
                // line 56
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_second_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_second_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_footer_second"] ?? null), "html", null, true);
                yield ">
          ";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_second"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Footer Second -->
    ";
            }
            // line 63
            yield "
    ";
            // line 64
            if ((($tmp = ($context["footer_third"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "      <!-- Start: Footer Third -->
      <div id=\"footer-box-third\" class=\"";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_third_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 67
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_third_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_footer_third"] ?? null), "html", null, true);
                yield ">
          ";
                // line 68
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_third"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Footer Third -->
    ";
            }
            // line 73
            yield "
    </div>
  </div>
  <!-- End: Footer -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "align_footer_first", "classes_footer_first", "align_footer_second", "classes_footer_second", "align_footer_third", "classes_footer_third", "site_regions_footer_border", "site_regions_footer_rounded", "site_regions_footer_animate_border", "site_regions_footer_animate_hover", "classes_footer_container", "footer_layout", "enable_aria_footer", "attributes_footer_container", "attributes_footer_first", "attributes_footer_second", "attributes_footer_third"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_footer-regions.html.twig";
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
        return array (  223 => 73,  215 => 68,  209 => 67,  205 => 66,  202 => 65,  200 => 64,  197 => 63,  189 => 58,  183 => 57,  179 => 56,  176 => 55,  174 => 54,  171 => 53,  163 => 48,  157 => 47,  153 => 46,  150 => 45,  148 => 44,  143 => 42,  131 => 41,  127 => 39,  125 => 38,  124 => 37,  121 => 36,  119 => 35,  118 => 34,  117 => 33,  116 => 32,  115 => 31,  114 => 30,  113 => 29,  110 => 28,  108 => 27,  105 => 26,  101 => 24,  98 => 23,  95 => 22,  93 => 21,  90 => 20,  86 => 18,  83 => 17,  80 => 16,  78 => 15,  75 => 14,  71 => 12,  68 => 11,  65 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_footer-regions.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_footer-regions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 5];
        static $filters = ["t" => 41, "escape" => 41];
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
