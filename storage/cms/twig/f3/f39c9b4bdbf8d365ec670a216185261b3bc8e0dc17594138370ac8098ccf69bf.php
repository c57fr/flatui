<?php

/* /opt/lampp/htdocs/flatui/themes/responsiv-flat/partials/subscribe.htm */
class __TwigTemplate_2a70bd66dc771cbc84df1c7cbf9cac1be745d1d9b53bc9a4f9bfad38be4bca12 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <form>
            <div class=\"col-sm-8\">
                <input type=\"text\" placeholder=\"Enter your e-mail\" spellcheck=\"false\">
            </div>
            <div class=\"col-sm-4\">
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Join newsletter
                </button>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/flatui/themes/responsiv-flat/partials/subscribe.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <form>
            <div class=\"col-sm-8\">
                <input type=\"text\" placeholder=\"Enter your e-mail\" spellcheck=\"false\">
            </div>
            <div class=\"col-sm-4\">
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Join newsletter
                </button>
            </div>
        </form>
    </div>
</div>", "/opt/lampp/htdocs/flatui/themes/responsiv-flat/partials/subscribe.htm", "");
    }
}
