<?php

class __Mustache_24608e1b682d00e199703dd9b8bba30f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasmodavailability');
        $buffer .= $this->section06a1b5720be6151e94f80d2d0a31ab2c($context, $indent, $value);

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

    private function section12f1ba3d8d86971df37f4c6b632dbf69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activity-availability availabilityinfo {{classes}}" data-region="availabilityinfo">
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
                
                $buffer .= $indent . '        <div class="activity-availability availabilityinfo ';
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

    private function section06a1b5720be6151e94f80d2d0a31ab2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#info}}
        <div class="activity-availability availabilityinfo {{classes}}" data-region="availabilityinfo">
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
                $buffer .= $this->section12f1ba3d8d86971df37f4c6b632dbf69($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
