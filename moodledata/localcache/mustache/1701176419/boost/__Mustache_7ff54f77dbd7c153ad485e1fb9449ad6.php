<?php

class __Mustache_7ff54f77dbd7c153ad485e1fb9449ad6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/notification_base')) {
            $context->pushBlockContext(array(
                'alertclass' => array($this, 'blockD60644d571e50184b24a248777c976cf'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function blockD60644d571e50184b24a248777c976cf($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'alert-info';
    
        return $buffer;
    }
}
