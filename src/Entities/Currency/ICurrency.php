<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities\Currency;

/**
 * Interface Currency
 *
 * @author Attreid <attreid@gmail.com>
 */
interface ICurrency
{
	public function format(float $price): string;

	public function __toString(): string;
}