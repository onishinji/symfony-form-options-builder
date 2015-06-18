<?php

namespace steevanb\FormUtils\Fields;

class Date extends AbstractField
{
    use Traits\DateTimeCommon;
    use Traits\DateType;
    use Traits\HTML5;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';
}