<?php

class __Mustache_be91d6841d634a3d6e47c46c1dc75efb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasmenu');
        $buffer .= $this->sectionCca3565ad245b2585e5e64f891bb524c($context, $indent, $value);

        return $buffer;
    }

    private function sectionCca3565ad245b2585e5e64f891bb524c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="section_action_menu bulk-hidden ml-auto" data-sectionid="{{id}}">
    {{{menu}}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="section_action_menu bulk-hidden ml-auto" data-sectionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
