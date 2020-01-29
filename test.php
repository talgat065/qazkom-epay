<?php

$data = '<document>
   <bank name="Kazkommertsbank JSC">
      <customer name="John Cardholder" mail="klient@mymail.com" phone="223322">
         <merchant cert_id="7269C18D00010000005E" name="Shop Name">
            <order order_id="000282" amount="3100" currency="398">
               <department merchant_id="90028101" amount="1300" rl=ASDFG" />
            </order>
         </merchant>
         <merchant_sign type="RSA/">
      </customer>
      <customer_sign type="SSL">
         4817C411000100000084
         </customer_sign>
      <results timestamp="2006-11-22 12:20:30 ">
         <payment merchant_id="90050801" amount="320.50" reference="109600746891" approval_code="730190" response_code="00" Secure="No" card_bin="KAZ" c_hash="6A2D7673A8EEF25A2C33D67CB5AAD091"/>
      </results>
   </bank>
   <bank_sign cert_id="14276668000100000028" type="SHA/RSA">
      JI3RZMEvexNlDmKsOQhe0pzHuKijnbhvnLu99qh7h+Ju8HvSfGNbEJxXUL58M94tXvu7w0BXSY7M
      HePGqz32JuMLAncuzyMwq845linW/sH/WvbZ+6SSYfxDMnvgX0S/pKxbhSXs7lGVBngXOwq7Bhsk
      8GcDUkWAM5UAsKpEKoI=
   </bank_sign>
</document>';

include ("/home/majesty/projects/kolesa.kz/lib/kkb/kkb.utils.php");

$parser = new xml();
$result = $parser->parse($data);

var_dump($result);
if (in_array("DOCUMENT", $result)) {
    var_export(split_sign($data, "BANK"));
}
