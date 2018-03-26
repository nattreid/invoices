<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities\Payment;

/**
 * Interface IPayment
 *
 * @author Attreid <attreid@gmail.com>
 */
interface IPayment
{
	public function __toString(): string;
}