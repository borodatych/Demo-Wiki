<?php

/* Ttt/index.html */
class __TwigTemplate_6ccc377f59ec3c6cfb8ecfd0807e43af extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo twig_escape_filter($this->env, (isset($context['myvar']) ? $context['myvar'] : null), "html");
    }

    public function getTemplateName()
    {
        return "Ttt/index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
