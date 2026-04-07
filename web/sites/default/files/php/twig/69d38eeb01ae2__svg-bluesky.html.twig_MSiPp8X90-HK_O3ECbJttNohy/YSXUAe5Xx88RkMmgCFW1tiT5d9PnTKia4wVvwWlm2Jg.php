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

/* @solo/partials/svg/_svg-bluesky.html.twig */
class __TwigTemplate_27c33723487a5ba8ba4012282916f780 extends Template
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
        yield "<svg class=\"svg-icon bluesky\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"34.9 34.9 430.2 430.2\" version=\"1.1\">
  <g>
    <path class=\"path-update\"style=\"fill:";
        // line 3
        yield (((($context["sm_icon_colors"] ?? null) == "")) ? ("--solo-bs") : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sm_icon_colors"] ?? null), "html", null, true)));
        yield "; stroke:none; fill-opacity:1; fill-rule:evenodd;\" d=\"M250,465.1C131.2,465.1,34.9,368.8,34.9,250S131.2,34.9,250,34.9S465.1,131.2,465.1,250 S368.8,465.1,250,465.1z M165.3,136c34.3,25.8,71.2,78,84.7,106c13.5-28,50.4-80.2,84.7-106c24.8-18.6,64.9-33,64.9,12.8 c0,9.1-5.2,76.8-8.3,87.7c-10.7,38.2-49.6,47.9-84.2,42c60.5,10.3,75.9,44.4,42.7,78.5c-63.1,64.8-90.7-16.3-97.8-37 c-1.3-3.8-1.9-5.6-1.9-4.1c0-1.5-0.6,0.3-1.9,4.1c-7.1,20.8-34.7,101.8-97.8,37c-33.2-34.1-17.9-68.2,42.7-78.5 c-34.6,5.9-73.5-3.8-84.2-42c-3.1-11-8.3-78.6-8.3-87.7C100.4,103,140.5,117.4,165.3,136z\"></path>
  </g>
</svg>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sm_icon_colors"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/svg/_svg-bluesky.html.twig";
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
        return array (  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/svg/_svg-bluesky.html.twig", "/var/www/html/web/themes/contrib/solo/partials/svg/_svg-bluesky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
