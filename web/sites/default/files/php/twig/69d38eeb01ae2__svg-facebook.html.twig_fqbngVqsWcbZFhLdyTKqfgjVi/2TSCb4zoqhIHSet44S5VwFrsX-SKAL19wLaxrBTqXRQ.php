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

/* @solo/partials/svg/_svg-facebook.html.twig */
class __TwigTemplate_f0917c81e119fe2f32e9da6c9bc0269f extends Template
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
        yield "<svg class=\"svg-icon facebook\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"30pt\" height=\"30pt\" viewBox=\"0 0 30 30\" version=\"1.1\"><g><path class=\"path-update\" style=\"stroke:none;fill-rule:evenodd;fill:";
        yield (((($context["sm_icon_colors"] ?? null) == "")) ? ("--solo-fb") : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sm_icon_colors"] ?? null), "html", null, true)));
        yield ";fill-opacity:1;\" d=\"M 30 15.085938 C 30 6.761719 23.289062 0 15 0 C 6.710938 0 0 6.75 0 15.085938 C 0 22.625 5.488281 28.875 12.664062 30 L 12.664062 19.449219 L 8.851562 19.449219 L 8.851562 15.085938 L 12.648438 15.085938 L 12.648438 11.761719 C 12.648438 7.988281 14.898438 5.886719 18.324219 5.886719 C 19.960938 5.886719 21.675781 6.1875 21.675781 6.1875 L 21.675781 9.898438 L 19.800781 9.898438 C 17.925781 9.898438 17.351562 11.0625 17.351562 12.261719 L 17.351562 15.085938 L 21.5 15.085938 L 20.835938 19.460938 L 17.335938 19.460938 L 17.335938 30 C 24.523438 28.875 30 22.625 30 15.085938 \"/></g></svg>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sm_icon_colors"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/svg/_svg-facebook.html.twig";
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
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/svg/_svg-facebook.html.twig", "/var/www/html/web/themes/contrib/solo/partials/svg/_svg-facebook.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 1];
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
