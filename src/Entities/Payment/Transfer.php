<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities\Payment;

/**
 * Class Transfer
 *
 * @author Attreid <attreid@gmail.com>
 */
class Transfer implements IPayment
{
	public function __toString(): string
	{
		return 'transfer';
	}
}