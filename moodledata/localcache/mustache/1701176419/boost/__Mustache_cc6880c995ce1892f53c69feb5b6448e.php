<?php

class __Mustache_cc6880c995ce1892f53c69feb5b6448e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('overview.messageurl');
        $buffer .= $this->sectionF6bfc1a2a1de258e23c7e7202d464728($context, $indent, $value);

        return $buffer;
    }

    private function sectionA66c69093db49656d03b61ec97795dc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' seeall, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' seeall, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6bfc1a2a1de258e23c7e7202d464728(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="view-overview" class="text-center">
        <a href="{{overview.messageurl}}">
            {{#str}} seeall, core_message {{/str}}
        </a>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div data-region="view-overview" class="text-center">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->findDot('overview.messageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionA66c69093db49656d03b61ec97795dc2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
