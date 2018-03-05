# Fakturace pro Nette Framework

Nastavení v **config.neon**
```neon
services:
    - NAttreid\Invoice\IInvoiceFactory
```

Použití v presenteru
```php
/** @var \NAttreid\Invoice\IInvoiceFactory @inject */
public $invoiceFactory;

function createComponentList(){
    $invoice = $this->invoiceFactory->create($basePath);

    // pro zmenu jazyka
    $invoice->getTranslator()->setLang('cs');

    return $invoice;
}
```