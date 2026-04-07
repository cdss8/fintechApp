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

/* @solo/partials/_copyright.html.twig */
class __TwigTemplate_abfd79ede66bbbd47f121ec65a46e23e extends Template
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
        if ((($context["footer_use_formatted_text"] ?? null) && ($context["footer_copyright_formatted_rendered"] ?? null))) {
            // line 2
            yield "    <!-- Start: Copyright (formatted) -->
    <div id=\"copyright\" class=\"solo-outer lone copyright";
            // line 3
            yield (((($tmp = ($context["classes_credit_copyright"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_credit_copyright"] ?? null)), "html", null, true)) : (""));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_credit_copyright"] ?? null), "html", null, true);
            yield " aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site Copyright and Credit"));
            yield "\">
      <div id=\"copyright-inner\" class=\"solo-inner solo-col copyright-inner solo-col-1\">
        <div class=\"copyright-formatted\">
          ";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_copyright_formatted_rendered"] ?? null), "html", null, true);
            yield "
        </div>
      </div>
    </div>
    <!-- End: Copyright (formatted) -->
  ";
        } elseif ((        // line 11
($context["footer_copyright"] ?? null) || ($context["footer_link"] ?? null))) {
            // line 12
            yield "    <!-- Start: Copyright -->
    <div id=\"copyright\" class=\"solo-outer lone copyright";
            // line 13
            yield (((($tmp = ($context["classes_credit_copyright"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_credit_copyright"] ?? null)), "html", null, true)) : (""));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_credit_copyright"] ?? null), "html", null, true);
            yield " aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site Copyright and Credit"));
            yield "\">
      <div id=\"copyright-inner\" class=\"solo-inner solo-col copyright-inner";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_copyright"] ?? null) && ($context["footer_link"] ?? null))) ? (" solo-col-2") : (" solo-col-1")));
            yield "\">
      ";
            // line 15
            if ((($tmp = ($context["footer_copyright"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "      <!-- Start: Copyright -->
      <p class=\"copyright-first\">
        ";
                // line 18
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(($context["footer_copyright"] ?? null), ["%year%" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")]), "html", null, true);
                yield "
      </p>
      <!-- End: Copyright -->
      ";
            }
            // line 22
            yield "      ";
            if ((($tmp = ($context["footer_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "          <!-- Start: Credit Link -->
      <p class=\"copyright-second\">
        ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_link_label"] ?? null), "html", null, true);
                yield " <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_link"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_link_text"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_link_text"] ?? null), "html", null, true);
                yield "</a>
      </p>
      <!-- End: Credit Link -->
      ";
            }
            // line 29
            yield "      </div>
    </div>
    <!-- End: Copyright -->
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["footer_use_formatted_text", "footer_copyright_formatted_rendered", "classes_credit_copyright", "attributes_credit_copyright", "footer_copyright", "footer_link", "footer_link_label", "footer_link_text"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_copyright.html.twig";
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
        return array (  118 => 29,  105 => 25,  101 => 23,  98 => 22,  91 => 18,  87 => 16,  85 => 15,  81 => 14,  73 => 13,  70 => 12,  68 => 11,  60 => 6,  50 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_copyright.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_copyright.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 3, "t" => 3, "replace" => 18, "date" => 18];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'replace', 'date'],
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
