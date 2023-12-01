<?php

class __Mustache_67e73fb922e7430be5e484b43d401ae3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('editing');
        $buffer .= $this->section21a87dd4a84b9d0d7cfc433a9d39b2b7($context, $indent, $value);
        $value = $context->find('editing');
        if (empty($value)) {
            
            $value = $context->find('iscurrent');
            $buffer .= $this->section47103aed63cfd3e2748763ecbce0a1d4($context, $indent, $value);
            $value = $context->find('hiddenfromstudents');
            $buffer .= $this->sectionA77aee1fd66980078749f3168bf1a068($context, $indent, $value);
            $value = $context->find('notavailable');
            $buffer .= $this->section4d448da0a90297f0c5303e60d56c8695($context, $indent, $value);
        }

        return $buffer;
    }

    private function sectionAa413acb7776474efcb52c4cbf9fc6f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenfromstudents';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenfromstudents';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31ae0fbdc439c6d3e86010ee0fe2597e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notavailable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'notavailable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21a87dd4a84b9d0d7cfc433a9d39b2b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-pill badge-primary order-1 {{^iscurrent}}d-none{{/iscurrent}}" data-type="iscurrent">
        {{ highlightedlabel }}
    </span>
    <span class="badge badge-pill badge-warning order-2 {{^hiddenfromstudents}}d-none{{/hiddenfromstudents}}" data-type="hiddenfromstudents">
        {{#str}}hiddenfromstudents{{/str}}
    </span>
    <span class="badge badge-pill badge-secondary order-3 {{^notavailable}}d-none{{/notavailable}}">
        {{#str}}notavailable{{/str}}
    </span>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="badge badge-pill badge-primary order-1 ';
                $value = $context->find('iscurrent');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '" data-type="iscurrent">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('highlightedlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </span>
';
                $buffer .= $indent . '    <span class="badge badge-pill badge-warning order-2 ';
                $value = $context->find('hiddenfromstudents');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '" data-type="hiddenfromstudents">
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </span>
';
                $buffer .= $indent . '    <span class="badge badge-pill badge-secondary order-3 ';
                $value = $context->find('notavailable');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section31ae0fbdc439c6d3e86010ee0fe2597e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47103aed63cfd3e2748763ecbce0a1d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="badge badge-pill badge-primary order-1">{{ highlightedlabel }}</span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="badge badge-pill badge-primary order-1">';
                $value = $this->resolveValue($context->find('highlightedlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA77aee1fd66980078749f3168bf1a068(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="badge badge-pill badge-warning order-2">{{#str}}hiddenfromstudents{{/str}}</span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="badge badge-pill badge-warning order-2">';
                $value = $context->find('str');
                $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d448da0a90297f0c5303e60d56c8695(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="badge badge-pill badge-secondary order-3">{{#str}}notavailable{{/str}}</span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="badge badge-pill badge-secondary order-3">';
                $value = $context->find('str');
                $buffer .= $this->section31ae0fbdc439c6d3e86010ee0fe2597e($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
