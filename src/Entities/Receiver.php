<?php

declare(strict_types=1);

namespace NAttreid\Invoices\Entities;

use Nette\SmartObject;

/**
 * Class Receiver
 *
 * @property string|null $ico
 * @property string|null $dic
 * @property string|null $name
 * @property string|null $street
 * @property string|null $zip
 * @property string|null $city
 * @property string|null $country
 *
 * @author Attreid <attreid@gmail.com>
 */
class Receiver
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

	protected function getIco(): ?string
	{
		return $this->ico;
	}

	protected function setIco(string $ico): void
	{
		$this->ico = $ico;
	}

	protected function getDic(): ?string
	{
		return $this->dic;
	}

	protected function setDic(string $dic): void
	{
		$this->dic = $dic;
	}

	protected function getName(): ?string
	{
		return $this->name;
	}

	protected function setName(string $name): void
	{
		$this->name = $name;
	}

	protected function getStreet(): ?string
	{
		return $this->street;
	}

	protected function setStreet(string $street): void
	{
		$this->street = $street;
	}

	protected function getZip(): ?string
	{
		return $this->zip;
	}

	protected function setZip(string $zip): void
	{
		$this->zip = $zip;
	}

	protected function getCity(): ?string
	{
		return $this->city;
	}

	protected function setCity(string $city): void
	{
		$this->city = $city;
	}

	protected function getCountry(): ?string
	{
		return $this->country;
	}

	protected function setCountry(string $country): void
	{
		$this->country = $country;
	}
}