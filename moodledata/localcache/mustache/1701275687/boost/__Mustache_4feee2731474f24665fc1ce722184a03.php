<?php

class __Mustache_4feee2731474f24665fc1ce722184a03 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="section_availability">
';
        $value = $context->find('hasavailability');
        $buffer .= $this->section9b9f7d9783a603eb33d584a62b6047db($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2fb22ee6cecdc53eba9991668a181271(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_courseformat/local/content/availability }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/availability')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB019607ee91b5ea3744d065887971d40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="availabilityinfo {{classes}}" data-region="availabilityinfo">
        {{^isrestricted}}
            <span class="badge badge-pill badge-warning">{{{text}}}</span>
        {{/isrestricted}}
        {{#isrestricted}}
            {{> core_courseformat/local/content/availability }}
        {{/isrestricted}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="availabilityinfo ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-region="availabilityinfo">
';
                $value = $context->find('isrestricted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <span class="badge badge-pill badge-warning">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                }
                $value = $context->find('isrestricted');
                $buffer .= $this->section2fb22ee6cecdc53eba9991668a181271($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b9f7d9783a603eb33d584a62b6047db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#info}}
        <div class="availabilityinfo {{classes}}" data-region="availabilityinfo">
        {{^isrestricted}}
            <span class="badge badge-pill badge-warning">{{{text}}}</span>
        {{/isrestricted}}
        {{#isrestricted}}
            {{> core_courseformat/local/content/availability }}
        {{/isrestricted}}
        </div>
    {{/info}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('info');
                $buffer .= $this->sectionB019607ee91b5ea3744d065887971d40($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
