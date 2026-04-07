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

/* @solo/partials/_primary-sidebar-menu.html.twig */
class __TwigTemplate_36ee3a0c9c4c74b4127102d87ef0b2dc extends Template
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
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_sidebar_menu", [], "any", false, false, true, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <!-- Start: Primary Sidebar Menu  -->
  <div id=\"primary-sidebar-menu\" class=\"solo-outer lone main-navigation-wrapper primary-sidebar-menu hamburger-icon";
            // line 3
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["header_change_icons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hs-icons-left") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["primary_sidebar_menu_border"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-border") : ("")));
            yield (((($tmp = ($context["classes_primary_sidebar_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_primary_sidebar_menu"] ?? null)), "html", null, true)) : (""));
            yield "\" role=\"navigation\" aria-hidden=\"true\"  aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary Sidebar Menu"));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_primary_sidebar_menu"] ?? null), "html", null, true);
            yield ">
    <div id=\"primary-sidebar-menu-inner\" class=\"solo-inner primary-sidebar-menu-inner\">

      <div id=\"sidebar-button-close\" class=\"sidebar-button-close";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["header_change_icons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hs-icons-left") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["primary_sidebar_menu_branding"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" activate-branding") : ("")));
            yield "\">
        ";
            // line 8
            yield "          <button class=\"btn-animate solo-button-menu hamburger-icon hamburger-icon-close\" data-drupal-selector=\"sidebar-hamburger-icon\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close Primary Sidebar Menu"));
            yield "\" aria-controls=\"primary-sidebar-menu\" aria-expanded=\"false\">
              <span aria-hidden=\"true\">";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_bars"] ?? null));
            yield "</span>
              <span class=\"visually-hidden\">";
            // line 10
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close Primary Sidebar Menu"));
            yield "</span>
          </button>
          ";
            // line 12
            if ((($tmp = ($context["primary_sidebar_menu_branding"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "          ";
                yield from $this->load("@solo/partials/_menu-branding.html.twig", 13)->unwrap()->yield($context);
                // line 14
                yield "          ";
            }
            // line 15
            yield "      </div>
      ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_sidebar_menu", [], "any", false, false, true, 16), "html", null, true);
            yield "
    </div>
  </div>
  <!-- End: Primary Sidebar Menu -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "header_change_icons", "primary_sidebar_menu_border", "classes_primary_sidebar_menu", "attributes_primary_sidebar_menu", "primary_sidebar_menu_branding", "svg_bars"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_primary-sidebar-menu.html.twig";
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
        return array (  92 => 16,  89 => 15,  86 => 14,  83 => 13,  81 => 12,  76 => 10,  72 => 9,  67 => 8,  62 => 6,  50 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_primary-sidebar-menu.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_primary-sidebar-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "include" => 13];
        static $filters = ["escape" => 3, "t" => 3, "raw" => 9];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 't', 'raw'],
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
