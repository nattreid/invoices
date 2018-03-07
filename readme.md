# Fakturace pro Nette Framework

Nastavení v **config.neon**
```neon
services:
    - NAttreid\Invoice\IInvoiceFactory
```

Použití v presenteru
```php
/** @var \NAttreid\Invoice\PrintInvoice  @inject */
public $printInvoice;

function createComponentList(){
    $receiver = new \NAttreid\Invoice\Entities\Receiver();
    $receiver->name = $obj->company;
    $receiver->ico = $obj->ico;
    $receiver->dic = $obj->dic;
    $receiver->street = $obj->address;
    $receiver->city = $obj->city;
    
    $supplier = new \NAttreid\Invoice\Entities\Supplier;
    $supplier->ico = $obj->ico;
    $supplier->dic = $obj->dic;
    $supplier->name = $obj->name;
    $supplier->street = $obj->street;
    $supplier->zip = $obj->zip;
    $supplier->city = $obj->city;
    $supplier->country = $obj->country;
    $supplier->text = $obj->text;
    $supplier->bankAccount = $obj->bankAccount;
    $supplier->iban = $obj->iban;
    $supplier->swift = $obj->swift;
    $supplier->phone = $obj->phone;
    $supplier->email = $obj->email;
    
    $invoice = new \NAttreid\Invoices\Entities\Invoice();  
    $invoice->id = $obj->id;
    $invoice->variable = $obj->variable;
    $invoice->constant = $obj->constant;
    $invoice->dueDate = $obj->dueDate;
    $invoice->dateIssue = $obj->dateIssue;
    $invoice->taxDate = $obj->taxDate;
    $invoice->vat = $obj->vat;
	$invoice->currency = new \NAttreid\Invoices\Entities\Currency\EUR();
    
    $invoice->receiver = $receiver;
    $invoice->supplier = $supplier;
    
    foreach ($obj->items as $obji) {
        $item = new Item();
        $item->name = $obj->name;
        $item->price = $obj->price;
        $item->vat = $obj->vat;
        $item->amount = $obj->amount;
        $invoice->addItem($item);
    }

    $printer = $this->printInvoice;
        
    // pro zmenu jazyka
    $printer->getTranslator()->setLang('cs');
    
    $printer->setInvoice($invoice);
    $response = $printer->getResponse();
    $this->sendResponse($response);
}
```