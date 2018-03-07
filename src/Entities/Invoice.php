<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities;

use DateTime;
use DateTimeInterface;
use NAttreid\Invoices\Entities\Currency\CZK;
use NAttreid\Invoices\Entities\Currency\EUR;
use NAttreid\Invoices\Entities\Currency\ICurrency;
use Nette\SmartObject;

/**
 * Class Invoice
 *
 * @property int $id
 * @property int $constant
 * @property int $variable
 * @property DateTimeInterface $dueDate
 * @property DateTimeInterface $dateIssue
 * @property DateTimeInterface $taxDate
 * @property ICurrency $currency
 * @property bool $vat
 * @property Supplier $supplier
 * @property Receiver $receiver
 * @property Item[] $items
 * @property float $price
 *
 * @author Attreid <attreid@gmail.com>
 */
class Invoice
{
	use SmartObject;

	/** @var int */
	private $id;

	/** @var int */
	private $constant;

	/** @var int */
	private $variable;

	/** @var DateTimeInterface */
	private $dueDate;

	/** @var DateTimeInterface */
	private $dateIssue;

	/** @var DateTimeInterface */
	private $taxDate;

	/** @var ICurrency */
	private $currency;

	/** @var Supplier */
	private $supplier;

	/** @var Receiver */
	private $receiver;

	/** @var Item[] */
	private $items = [];

	public function __construct()
	{
		$this->dueDate = new DateTime;
		$this->dateIssue = new DateTime;
		$this->taxDate = new DateTime;
		$this->currency = new EUR;
	}

	protected function getId(): int
	{
		return $this->id;
	}

	protected function setId(int $id): void
	{
		$this->id = $id;
	}

	protected function getConstant(): int
	{
		return $this->constant;
	}

	protected function setConstant(int $constant): void
	{
		$this->constant = $constant;
	}

	protected function getVariable(): int
	{
		return $this->variable;
	}

	protected function setVariable(int $variable): void
	{
		$this->variable = $variable;
	}

	protected function getDueDate(): DateTimeInterface
	{
		return $this->dueDate;
	}

	protected function setDueDate(DateTimeInterface $dueDate): void
	{
		$this->dueDate = $dueDate;
	}

	protected function getDateIssue(): DateTimeInterface
	{
		return $this->dateIssue;
	}

	protected function setDateIssue(DateTimeInterface $dateIssue): void
	{
		$this->dateIssue = $dateIssue;
	}

	protected function getTaxDate(): DateTimeInterface
	{
		return $this->taxDate;
	}

	protected function setTaxDate(DateTimeInterface $taxDate): void
	{
		$this->taxDate = $taxDate;
	}

	protected function getCurrency(): ICurrency
	{
		return $this->currency;
	}

	/**
	 * @param ICurrency|string $currency
	 */
	protected function setCurrency($currency): void
	{
		if ($currency instanceof ICurrency) {
			$this->currency = $currency;
		} elseif (is_string($currency)) {
			switch ($currency) {
				case 'CZK':
					$this->currency = new CZK;
					break;
				case 'EUR':
					$this->currency = new EUR;
					break;
			}
		}
	}

	protected function isVat(): bool
	{
		return $this->vat;
	}

	protected function setVat(bool $vat): void
	{
		$this->vat = $vat;
	}

	protected function getSupplier(): Supplier
	{
		return $this->supplier;
	}

	protected function setSupplier(Supplier $supplier): void
	{
		$this->supplier = $supplier;
	}

	protected function getReceiver(): Receiver
	{
		return $this->receiver;
	}

	protected function setReceiver(Receiver $receiver): void
	{
		$this->receiver = $receiver;
	}

	public function addItem(Item $item): void
	{
		$this->items[] = $item;
	}

	protected function getItems(): array
	{
		return $this->items;
	}

	protected function getPrice(): float
	{
		$price = 0;
		foreach ($this->items as $item) {
			$price += $item->totalPrice;
		}
		return $price;
	}
}