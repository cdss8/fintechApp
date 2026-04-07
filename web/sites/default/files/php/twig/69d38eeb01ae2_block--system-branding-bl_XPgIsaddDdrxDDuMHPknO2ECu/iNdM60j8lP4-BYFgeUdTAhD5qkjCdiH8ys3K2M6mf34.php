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

/* themes/contrib/solo/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_44fda0f0156ac4655f67c03ac150c542 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("block.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "logo_default", "logo_alt", "solo_path", "site_name", "site_slogan"]);    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "
<div class=\"branding-wrapper\">
  ";
        // line 19
        if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "  <div class=\"branding-first\">
  ";
            // line 21
            if ((($context["site_logo"] ?? null) && (($context["logo_default"] ?? null) != 1))) {
                // line 22
                yield "    <a class=\"site-logo\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["logo_alt"] ?? null)));
                yield "\" rel=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["logo_alt"] ?? null)));
                yield "\">
      <img src=\"";
                // line 23
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                yield "\" class=\"site-logo-img\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["logo_alt"] ?? null)));
                yield "\" />
    </a>
  ";
            }
            // line 26
            yield "
  ";
            // line 27
            if ((($context["site_logo"] ?? null) && (($context["logo_default"] ?? null) == 1))) {
                // line 28
                yield "    <a class=\"site-logo\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["logo_alt"] ?? null)));
                yield "\" rel=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["logo_alt"] ?? null)));
                yield "\">
      ";
                // line 29
                yield from $this->load("@solo/partials/svg/_svg-logo.html.twig", 29)->unwrap()->yield(CoreExtension::toArray(["solo_path" => ($context["solo_path"] ?? null)]));
                // line 30
                yield "    </a>
  ";
            }
            // line 32
            yield "  </div>
  ";
        }
        // line 34
        yield "
  ";
        // line 35
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 36
            yield "  <div class=\"branding-second";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" site-name-outer") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["site_slogan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" site-slogan-outer") : ("")));
            yield "\">
    ";
            // line 37
            if ((($tmp = ($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "      <div class=\"site-name\">
        <a class=\"site-name-link\" href=\"";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["logo_alt"] ?? null)));
                yield "\" rel=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["logo_alt"] ?? null)));
                yield "\">
        ";
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield "
      </a>
      </div>
    ";
            }
            // line 44
            yield "
    ";
            // line 45
            if ((($tmp = ($context["site_slogan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "      <div class=\"site-slogan\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
                yield "</div>
    ";
            }
            // line 48
            yield "  </div>
  ";
        }
        // line 50
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/block/block--system-branding-block.html.twig";
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
        return array (  159 => 50,  155 => 48,  149 => 46,  147 => 45,  144 => 44,  137 => 40,  129 => 39,  126 => 38,  124 => 37,  118 => 36,  116 => 35,  113 => 34,  109 => 32,  105 => 30,  103 => 29,  94 => 28,  92 => 27,  89 => 26,  81 => 23,  72 => 22,  70 => 21,  67 => 20,  65 => 19,  61 => 17,  54 => 16,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/contrib/solo/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "if" => 19, "include" => 29];
        static $filters = ["t" => 22, "escape" => 23];
        static $functions = ["path" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if', 'include'],
                ['t', 'escape'],
                ['path'],
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
