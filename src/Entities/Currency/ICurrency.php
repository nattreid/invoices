<?php

declare(strict_types=1);

namespace NAttreid\Invoice\Currency;

/**
 * Class Currency
 *
 * @author Attreid <attreid@gmail.com>
 */
interface ICurrency
{
	public function format(float $price): string;
}