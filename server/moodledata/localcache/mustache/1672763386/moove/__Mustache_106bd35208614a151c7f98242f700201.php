<?php

class __Mustache_106bd35208614a151c7f98242f700201 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '    <div class="col-md-4">';
        $blockFunction = $context->findInBlock('column1');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('col1content'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="col-md-4">';
        $blockFunction = $context->findInBlock('column2');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('col2content'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="col-md-4">';
        $blockFunction = $context->findInBlock('column3');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('col3content'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
