<?php

class __Mustache_66173b92b9a9ec5dafb6446bbb8efeee extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="action-menu ';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $value = $context->find('attributes');
        $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('primary');
        $buffer .= $this->sectionB7d458dfd928f212e0f701c9140b99cb($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionAd20463c348991d5bbd2fb97358ea7c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa7e1488ef4cdb9b4dc332ce9d6b3f22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/action_menu_trigger }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu_trigger')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d7c7a3a2dfb028890bf03cc4e4be16d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="action-menu-item">
                    {{> core/action_menu_item }}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="action-menu-item">
';
                if ($partial = $this->mustache->loadPartial('core/action_menu_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7d458dfd928f212e0f701c9140b99cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

        <div class="{{classes}} d-flex "{{#attributes}} {{name}}="{{value}}"{{/attributes}}>

            {{#prioritise}}{{> core/action_menu_trigger }}{{/prioritise}}

            {{#items}}
                <div class="action-menu-item">
                    {{> core/action_menu_item }}
                </div>
            {{/items}}

            {{^prioritise}}
                <div class="action-menu-trigger">
                    {{> core/action_menu_trigger }}
                </div>
            {{/prioritise}}

        </div>

    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' d-flex "';
                $value = $context->find('attributes');
                $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                $value = $context->find('prioritise');
                $buffer .= $this->sectionEa7e1488ef4cdb9b4dc332ce9d6b3f22($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $value = $context->find('items');
                $buffer .= $this->section7d7c7a3a2dfb028890bf03cc4e4be16d($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('prioritise');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div class="action-menu-trigger">
';
                    if ($partial = $this->mustache->loadPartial('core/action_menu_trigger')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                    $buffer .= $indent . '                </div>
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
