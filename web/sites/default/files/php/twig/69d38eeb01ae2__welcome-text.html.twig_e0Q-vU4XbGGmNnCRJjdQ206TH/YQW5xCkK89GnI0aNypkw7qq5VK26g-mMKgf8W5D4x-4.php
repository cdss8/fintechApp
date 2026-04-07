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

/* @solo/partials/_welcome-text.html.twig */
class __TwigTemplate_27b28be7ba1a55d43327fd49fdcb8e80 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <!-- Start: Welcome Text -->
    ";
            // line 3
            if ((($tmp = ($context["site_regions_welcome_width"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4
                yield "      ";
                $context["region_classes"] = "solo-col solo-col-1 welcome-text-inner";
                // line 5
                yield "    ";
            } else {
                // line 6
                yield "      ";
                $context["region_classes"] = "solo-inner solo-col solo-col-1 welcome-text-inner";
                // line 7
                yield "    ";
            }
            // line 8
            yield "
    <div id=\"welcome-text\"";
            // line 9
            if ((($tmp = ($context["enable_aria_welcome"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " role=\"region\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Welcome Section"));
                yield "\"";
            }
            yield " class=\"solo-outer lone welcome-text";
            yield (((($tmp = ($context["classes_welcome_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_welcome_text"] ?? null)), "html", null, true)) : (""));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_welcome_text"] ?? null), "html", null, true);
            yield ">
      <div id=\"welcome-text-inner\" class=\"";
            // line 10
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["region_classes"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 11), "html", null, true);
            yield "
      </div>
    </div>
    <!-- End: Welcome Text -->
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "site_regions_welcome_width", "enable_aria_welcome", "classes_welcome_text", "attributes_welcome_text"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_welcome-text.html.twig";
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
        return array (  83 => 11,  79 => 10,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  50 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_welcome-text.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_welcome-text.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "set" => 4];
        static $filters = ["t" => 9, "escape" => 9];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
