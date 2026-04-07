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

/* @solo/partials/_fixed-search-block.html.twig */
class __TwigTemplate_07776a935b3ce4203bdbb3227ebbb0d8 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fixed_search_block", [], "any", false, false, true, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("solo/solo-fixed-search-block"), "html", null, true);
            yield "
  <div id=\"fixed-search-block\"
       class=\"solo-outer lone fixed-search-block";
            // line 4
            yield (((($tmp = ($context["classes_fixed_search_block"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_fixed_search_block"] ?? null)), "html", null, true)) : (""));
            yield "\"
       role=\"search\"
       aria-label=\"";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search form"));
            yield "\"
       aria-hidden=\"true\"
       inert
       ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_fixed_search_block"] ?? null), "html", null, true);
            yield ">
    <div id=\"fixed-search-block-inner\" class=\"solo-inner solo-col solo-col-1 fixed-search-block-inner\">
      <div class=\"fixed-search-wrapper\">
        <div id=\"search-button-close\" class=\"hamburger-icon hamburger-icon-close search-button-close\">
          ";
            // line 14
            yield "          <button type=\"button\"
                  class=\"btn-animate solo-button-menu\"
                  data-drupal-selector=\"search-block-button-close-inner\"
                  aria-label=\"";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close search"));
            yield "\"
                  aria-controls=\"fixed-search-block\"
                  aria-expanded=\"false\"
                  tabindex=\"-1\">
            <span aria-hidden=\"true\">";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_bars"] ?? null));
            yield "</span>
            <span class=\"visually-hidden\">";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close search"));
            yield "</span>
          </button>
        </div>
        ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fixed_search_block", [], "any", false, false, true, 25), "html", null, true);
            yield "
      </div>
    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "classes_fixed_search_block", "attributes_fixed_search_block", "svg_bars"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_fixed-search-block.html.twig";
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
        return array (  92 => 25,  86 => 22,  82 => 21,  75 => 17,  70 => 14,  63 => 9,  57 => 6,  52 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_fixed-search-block.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_fixed-search-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 2, "t" => 6, "raw" => 21];
        static $functions = ["attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'raw'],
                ['attach_library'],
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
