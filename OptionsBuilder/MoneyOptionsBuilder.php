<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class MoneyOptionsBuilder extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;
    use Behavior\CurrencyTrait;
    use Behavior\DivisorTrait;
    use Behavior\GroupingTrait;
    use Behavior\ScaleTrait;
    use Behavior\AttrPlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return MoneyType::class;
    }

    /**
     * @return int
     */
    public function getScale()
    {
        return $this->getOption('scale');
    }
}
