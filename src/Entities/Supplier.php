<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities;

use Nette\SmartObject;

/**
 * Class Supplier
 *
 * @property string|null $ico
 * @property string|null $dic
 * @property string|null $name
 * @property string|null $street
 * @property string|null $zip
 * @property string|null $city
 * @property string|null $country
 * @property string|null $text
 * @property string|null $bankAccount
 * @property string|null $iban
 * @property string|null $swift
 * @property string|null $email
 * @property string|null $phone
 *
 * @property bool $hasBankData
 *
 * @author Attreid <attreid@gmail.com>
 */
class Supplier
{
	use SmartObject;

	/** @var string|null */
	private $ico;

	/** @var string|null */
	private $dic;

	/** @var string|null */
	private $name;

	/** @var string|null */
	private $street;

	/** @var string|null */
	private $zip;

	/** @var string|null */
	private $city;

	/** @var string|null */
	private $country;

	/** @var string|null */
	private $text;

	/** @var string|null */
	private $bankAccount;

	/** @var string|null */
	private $iban;

	/** @var string|null */
	private $swift;

	/** @var string|null */
	private $phone;

	/** @var string|null */
	private $email;

	protected function getIco(): ?string
	{
		return $this->ico;
	}

	protected function setIco(?string $ico): void
	{
		$this->ico = $ico;
	}

	protected function getDic(): ?string
	{
		return $this->dic;
	}

	protected function setDic(?string $dic): void
	{
		$this->dic = $dic;
	}

	protected function getName(): ?string
	{
		return $this->name;
	}

	protected function setName(?string $name): void
	{
		$this->name = $name;
	}

	protected function getStreet(): ?string
	{
		return $this->street;
	}

	protected function setStreet(?string $street): void
	{
		$this->street = $street;
	}

	protected function getZip(): ?string
	{
		return $this->zip;
	}

	protected function setZip(?string $zip): void
	{
		$this->zip = $zip;
	}

	protected function getCity(): ?string
	{
		return $this->city;
	}

	protected function setCity(?string $city): void
	{
		$this->city = $city;
	}

	protected function getCountry(): ?string
	{
		return $this->country;
	}

	protected function setCountry(?string $country): void
	{
		$this->country = $country;
	}

	protected function getText(): ?string
	{
		return $this->text;
	}

	protected function setText(?string $text): void
	{
		$this->text = $text;
	}

	protected function getBankAccount(): ?string
	{
		return $this->bankAccount;
	}

	protected function setBankAccount(?string $bankAccount): void
	{
		$this->bankAccount = $bankAccount;
	}

	protected function getIban(): ?string
	{
		return $this->iban;
	}

	protected function setIban(?string $iban): void
	{
		$this->iban = $iban;
	}

	protected function getSwift(): ?string
	{
		return $this->swift;
	}

	protected function setSwift(?string $swift): void
	{
		$this->swift = $swift;
	}

	protected function getPhone(): ?string
	{
		return $this->phone;
	}

	protected function setPhone(?string $phone): void
	{
		$this->phone = $phone;
	}

	protected function getEmail(): ?string
	{
		return $this->email;
	}

	protected function setEmail(?string $email): void
	{
		$this->email = $email;
	}

	protected function getHasBankData(): bool
	{
		return
			!empty($this->bankAccount)
			|| !empty($this->iban)
			|| !empty($this->swift);
	}
}