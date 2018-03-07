<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities\Currency;

/**
 * Class CZK
 *
 * @author Attreid <attreid@gmail.com>
 */
class CZK implements ICurrency
{
	public function format(float $price): string
	{
		return number_format($price, 2, ',', ' ') . ' Kč';
	}

	public function __toString(): string
	{
		return 'CZK';
	}
}