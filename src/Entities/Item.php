<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities;

use Nette\SmartObject;

/**
 * Class Item
 *
 * @property string $name
 * @property float $price
 * @property int $amount
 * @property int $vat
 * @property-read float $totalPrice
 * @property-read float $priceWithoutVat
 *
 * @author Attreid <attreid@gmail.com>
 */
class Item
{
	use SmartObject;

	/** @var string */
	private $name;

	/** @var float */
	private $price;

	/** @var int */
	private $amount;

	/** @var int */
	private $vat = 0;

	protected function getName(): string
	{
		return $this->name;
	}

	protected function setName(string $name): void
	{
		$this->name = $name;
	}

	protected function getPrice(): float
	{
		return $this->price;
	}

	protected function setPrice(float $price): void
	{
		$this->price = $price;
	}

	protected function getAmount(): int
	{
		return $this->amount;
	}

	protected function setAmount(int $amount): void
	{
		$this->amount = $amount;
	}

	protected function getVat(): int
	{
		return $this->vat;
	}

	protected function setVat(int $vat): void
	{
		$this->vat = $vat;
	}

	protected function getTotalPrice(): float
	{
		return $this->price * $this->amount;
	}

	protected function getPriceWithoutVat(): float
	{
		$price = $this->price;
		return (100 / ($this->vat + 100)) * $price;
	}
}