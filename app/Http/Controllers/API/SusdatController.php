<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Susdat;
use App\Http\Controllers\Controller;
use Exception;

class SusdatController extends Controller
{

    public function showXMLid($id)
    {
       // Rozdelenie zadaných id na pole
       $idArray = explode(',', $id);

       // Vytvorenie objektu SimpleXMLElement
       $xml = new \SimpleXMLElement('<database/>');

       // Pridanie jednotlivých záznamov ako elementy do XML
       foreach ($idArray as $id) {
           // Získanie všetkých záznamov s daným id
           $foundRecords = Susdat::where('id', $id)->get();

           // Kontrola, či sa našli nejaké záznamy s daným id
           if ($foundRecords->isEmpty()) {
               // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
               $errorXml = $xml->addChild('error');
               $errorXml->addChild('message', "Records with id $id not found in the database");
           } else {
               // Ak sa našli záznamy, pridáme ich do XML
               foreach ($foundRecords as $record) {
                   // Vytvorenie elementu s názvom "susdat" pre každý záznam
                   $susdatElement = $xml->addChild('susdat');
                   $susdatElement->addAttribute('id', $record->id);

                   // Pridanie atribútov ako elementy do XML pre každý záznam
                   foreach ($record->getAttributes() as $key => $value) {
                       // Preskočenie pridania atribútu "id", keďže sme ho pridali ako atribút elementu
                       if ($key !== 'id') {
                           $susdatElement->addChild($key, $value);
                       }
                   }
               }
           }
       }

       // Vrátenie odpovede vo formáte XML
       return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showXMLname($name)
    {
        // Rozdelenie zadaných mien na pole
        $namesArray = explode(',', $name);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($namesArray as $name) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Susdat::where('name', $name)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with name $name not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "susdat" pre každý záznam
                    $susdatElement = $xml->addChild('susdat');
                    $susdatElement->addAttribute('name', $record->name);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'name') {
                            $susdatElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showXMLcasrn($casrn)
    {
        // Rozdelenie zadaných mien na pole
        $casrnArray1 = explode(',', $casrn);

        $casrnArray = [];
        foreach ($casrnArray1 as $v)
        $casrnArray[] = 'CAS_RN: ' . $v;
    
        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($casrnArray as $casrn) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Susdat::where('cas_rn', $casrn)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with casrn $casrn not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "susdat" pre každý záznam
                    $susdatElement = $xml->addChild('susdat');
                    $susdatElement->addAttribute('cas_rn', $record->cas_rn);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'cas_rn') {
                            $susdatElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showXMLinchikey($stdinchikey)
    {
        // Rozdelenie zadaných mien na pole
        $stdinchikeyArray = explode(',', $stdinchikey);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($stdinchikeyArray as $stdinchikey) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Susdat::where('stdinchikey', $stdinchikey)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with stdinchikey $stdinchikey not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "susdat" pre každý záznam
                    $susdatElement = $xml->addChild('susdat');
                    $susdatElement->addAttribute('stdinchikey', $record->stdinchikey);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'stdinchikey') {
                            $susdatElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showXMLdtxsid($dtxsid)
    {
        // Rozdelenie zadaných mien na pole
        $dtxsidArray = explode(',', $dtxsid);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($dtxsidArray as $dtxsid) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Susdat::where('dtxsid', $dtxsid)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with dtxsid $dtxsid not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "susdat" pre každý záznam
                    $susdatElement = $xml->addChild('susdat');
                    $susdatElement->addAttribute('dtxsid', $record->dtxsid);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'dtxsid') {
                            $susdatElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showJSON(Request $request, $field, $values)
    {
        if ($field == 'cas_rn') 
        {
            $valuesArray1 = explode(',', $values);
            $valuesArray = [];
            foreach ($valuesArray1 as $v)
            $valuesArray[] = 'CAS_RN: ' . $v;
        }
        else
        {
            $valuesArray = explode(',', $values);
        }
        $response = [];

        foreach ($valuesArray as $value) {
            $records = Susdat::where($field, $value)->get();
            $response[] = $this->formatResponse($records, $value);
        }

        return response()->json($response, 200);
    }


    private function formatResponse($records, $value)
    {
        $response = [];

        foreach ($records as $record) {
            $recordArray = $record->toArray();
            if (!isset($recordArray['id'])) {
                $recordArray['id'] = $value;
            }
            $response[] = $recordArray;
        }

        if (empty($response)) {
            $response[] = [
                'error' => "Record with $value not found in the database"
            ];
        }

        return $response;
    }

}
