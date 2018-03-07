<?php

declare(strict_types=1);

namespace NAttreid\Invoices;

use Joseki\Application\Responses\PdfResponse;
use NAttreid\Invoices\Entities\Invoice;
use NAttreid\Invoices\Lang\Translator;
use Nette\Application\UI\ITemplateFactory;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\InvalidArgumentException;
use Nette\Localization\ITranslator;

/**
 * Class PrintInvoice
 *
 * @author Attreid <attreid@gmail.com>
 */
class PrintInvoice
{
	/** @var ITemplateFactory */
	private $templateFactory;

	/** @var ITranslator|Translator */
	private $translator;

	/** @var Invoice */
	private $invoice;

	/** @var string */
	private $author = '';

	function __construct(ITemplateFactory $templateFactory)
	{
		$this->templateFactory = $templateFactory;
		$this->translator = new Translator;
	}

	public function setTranslator(ITranslator $translator): void
	{
		$this->translator = $translator;
	}

	public function getTranslator(): Translator
	{
		return $this->translator;
	}

	public function setInvoice(Invoice $invoice): void
	{
		$this->invoice = $invoice;
	}

	public function setAuthor(string $author): void
	{
		$this->author = $author;
	}

	public function getResponse(): PdfResponse
	{
		/* @var $template Template */
		$template = $this->templateFactory->createTemplate();
		$template->setFile(__DIR__ . "/invoice.latte");

		if ($this->invoice === null) {
			throw new InvalidArgumentException;
		}
		$template->invoice = $this->invoice;

		$template->addFilter('currency', function (float $number) {
			return $this->invoice->currency->format($number);
		});

		$pdf = new PdfResponse($template);
		$pdf->pageOrientation = PDFResponse::ORIENTATION_PORTRAIT;
		$pdf->pageFormat = 'A4';
		$pdf->documentTitle = $this->translator->translate('nattreid.printInvoice.title') . '-' . $this->invoice->id;
		$pdf->documentAuthor = $this->author;

		return $pdf;
	}
}