<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 27.09.18
 * Time: 10:11
 */

namespace Imper86\TwigExtensionsBundle\Twig;


use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class FiltersExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'priceFilter']),
        ];
    }

    public function priceFilter(float $value)
    {
        return number_format($value, 2, ',', ' ');
    }
}
