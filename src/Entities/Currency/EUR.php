<?php

declare(strict_types=1);

namespace NAttreid\Invoice\Currency;

/**
 * Class EUR
 *
 * @author Attreid <attreid@gmail.com>
 */
class EUR implements ICurrency
{
	public function format(float $price): string
	{
		return '€' . number_format($price, 2);
	}
}