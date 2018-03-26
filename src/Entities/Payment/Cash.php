<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities\Payment;

/**
 * Class Cash
 *
 * @author Attreid <attreid@gmail.com>
 */
class Cash implements IPayment
{
	public function __toString(): string
	{
		return 'cash';
	}
}