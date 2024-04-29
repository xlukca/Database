<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Sars;
use App\Http\Controllers\Controller;
use Exception;

class SarsController extends Controller
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
           $foundRecords = Sars::where('id', $id)->get();

           // Kontrola, či sa našli nejaké záznamy s daným id
           if ($foundRecords->isEmpty()) {
               // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
               $errorXml = $xml->addChild('error');
               $errorXml->addChild('message', "Records with id $id not found in the database");
           } else {
               // Ak sa našli záznamy, pridáme ich do XML
               foreach ($foundRecords as $record) {
                   // Vytvorenie elementu s názvom "sars" pre každý záznam
                   $SarsElement = $xml->addChild('sars');
                   $SarsElement->addAttribute('id', $record->id);

                   // Pridanie atribútov ako elementy do XML pre každý záznam
                   foreach ($record->getAttributes() as $key => $value) {
                       // Preskočenie pridania atribútu "id", keďže sme ho pridali ako atribút elementu
                       if ($key !== 'id') {
                           $SarsElement->addChild($key, $value);
                       }
                   }
               }
           }
       }

       // Vrátenie odpovede vo formáte XML
       return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

   
    public function showXMLct($ct)
    {
        // Rozdelenie zadaných mien na pole
        $ctArray = explode(',', $ct);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($ctArray as $ct) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Sars::where('ct', $ct)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with ct $ct not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "Sars" pre každý záznam
                    $SarsElement = $xml->addChild('Sars');
                    $SarsElement->addAttribute('ct', $record->ct);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "ct", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'ct') {
                            $SarsElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }


    public function showXMLstation($station)
    {
        // Rozdelenie zadaných mien na pole
        $stationArray = explode(',', $station);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($stationArray as $station) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Sars::where('station_name', $station)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with station $station not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "Sars" pre každý záznam
                    $SarsElement = $xml->addChild('Sars');
                    $SarsElement->addAttribute('station_name', $record->station_name);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'station_name') {
                            $SarsElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }


    public function showXMLcountry($country)
    {
        // Rozdelenie zadaných mien na pole
        $countryArray = explode(',', $country);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($countryArray as $country) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Sars::where('name_of_country', $country)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with stdinchikey $country not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "Sars" pre každý záznam
                    $SarsElement = $xml->addChild('Sars');
                    $SarsElement->addAttribute('name_of_country', $record->name_of_country);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name_of_country", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'name_of_country') {
                            $SarsElement->addChild($key, $value);
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
        $valuesArray = explode(',', $values);
        $response = [];

        foreach ($valuesArray as $value) {
            $records = Sars::where($field, $value)->get();
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


    // Z dôvodu bezpečnosti, nebudeme povoľovať vkladanie, editovanie a mazanie 
}
