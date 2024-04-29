<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Susdata;
use App\Http\Controllers\Controller;
use Exception;

class SusdataController extends Controller
{
    // public function showJSONid($id)
    // {
    //        // Rozdelenie zadaných mien na pole
    //        $idArray = explode(',', $id);

    //        // Vytvorenie asociatívneho poľa pre JSON
    //     //    $response = [];

    //        // Pre každé zadané id
    //        foreach ($idArray as $id) {
    //            // Získanie záznamu podľa id
    //            $foundRecord = Susdata::where('id', $id)->get();

    //            // Ak bol záznam nájdený, pridáme ho do $response
    //            if (!$foundRecord->isEmpty()) {
    //                $response[] = $foundRecord;
    //            } else {
    //                // Ak záznam nebol nájdený, pridáme chybové hlásenie
    //                $response[] = [
    //                    'id' => $id,
    //                    'error' => 'Record not found in the database'
    //                ];
    //            }
    //        }

    //        // Vrátenie odpovede vo formáte JSON
    //        return response()->json($response, 200);
    // }

    public function showXMLid($id)
    {
       // Rozdelenie zadaných id na pole
       $idArray = explode(',', $id);

       // Vytvorenie objektu SimpleXMLElement
       $xml = new \SimpleXMLElement('<database/>');

       // Pridanie jednotlivých záznamov ako elementy do XML
       foreach ($idArray as $id) {
           // Získanie všetkých záznamov s daným id
           $foundRecords = Susdata::where('id', $id)->get();

           // Kontrola, či sa našli nejaké záznamy s daným id
           if ($foundRecords->isEmpty()) {
               // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
               $errorXml = $xml->addChild('error');
               $errorXml->addChild('message', "Records with id $id not found in the database");
           } else {
               // Ak sa našli záznamy, pridáme ich do XML
               foreach ($foundRecords as $record) {
                   // Vytvorenie elementu s názvom "susdata" pre každý záznam
                   $susdataElement = $xml->addChild('susdata');
                   $susdataElement->addAttribute('id', $record->id);

                   // Pridanie atribútov ako elementy do XML pre každý záznam
                   foreach ($record->getAttributes() as $key => $value) {
                       // Preskočenie pridania atribútu "id", keďže sme ho pridali ako atribút elementu
                       if ($key !== 'id') {
                           $susdataElement->addChild($key, $value);
                       }
                   }
               }
           }
       }

       // Vrátenie odpovede vo formáte XML
       return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    // public function showJSONname($names)
    // {
    //         // Rozdelenie zadaných mien na pole
    //         $namesArray = explode(',', $names);

    //         // Vytvorenie asociatívneho poľa pre JSON
    //         $response = [];

    //         // Pre každé zadané meno
    //         foreach ($namesArray as $name) {
    //             // Získanie záznamu podľa mena
    //             $foundRecord = Susdata::where('name', $name)->get();

    //             // Ak bol záznam nájdený, pridáme ho do $response
    //             if (!$foundRecord->isEmpty()) {
    //                 $response[] = $foundRecord;
    //             } else {
    //                 // Ak záznam nebol nájdený, pridáme chybové hlásenie
    //                 $response[] = [
    //                     'name' => $name,
    //                     'error' => 'Record not found in the database'
    //                 ];
    //             }
    //         }

    //         // Vrátenie odpovede vo formáte JSON
    //         return response()->json($response, 200);

    // }

    public function showXMLname($name)
    {
        // Rozdelenie zadaných mien na pole
        $namesArray = explode(',', $name);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($namesArray as $name) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Susdata::where('name', $name)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with name $name not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "susdata" pre každý záznam
                    $susdataElement = $xml->addChild('susdata');
                    $susdataElement->addAttribute('name', $record->name);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'name') {
                            $susdataElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    // public function showJSONcasrn($casrn)
    // {
    //     // Rozdelenie zadaných mien na pole
    //     $casrnArray = explode(',', $casrn);

    //     // Vytvorenie asociatívneho poľa pre JSON
    //     $response = [];

    //     // Pre každé zadané meno
    //     foreach ($casrnArray as $casrn) {
    //         // Získanie záznamu podľa mena
    //         $foundRecord = Susdata::where('cas_rn_dashboard', $casrn)->get();

    //         // Ak bol záznam nájdený, pridáme ho do $response
    //         if (!$foundRecord->isEmpty()) {
    //             $response[] = $foundRecord;
    //         } else {
    //             // Ak záznam nebol nájdený, pridáme chybové hlásenie
    //             $response[] = [
    //                 'cas_rn_dashboard' => $casrn,
    //                 'error' => 'Record not found in the database'
    //             ];
    //         }
    //     }

    //     // Vrátenie odpovede vo formáte JSON
    //     return response()->json($response, 200);
    // }

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
            $foundRecords = Susdata::where('cas_rn', $casrn)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with casrn $casrn not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "susdata" pre každý záznam
                    $susdataElement = $xml->addChild('susdata');
                    $susdataElement->addAttribute('cas_rn', $record->cas_rn);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'cas_rn') {
                            $susdataElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    // public function showJSONinchikey($stdinchikey)
    // {
    //     // Rozdelenie zadaných mien na pole
    //     $stdinchikeyArray = explode(',', $stdinchikey);

    //     // Vytvorenie asociatívneho poľa pre JSON
    //     $response = [];

    //     // Pre každé zadané meno
    //     foreach ($stdinchikeyArray as $stdinchikey) {
    //         // Získanie záznamu podľa mena
    //         $foundRecord = Susdata::where('stdinchikey', $stdinchikey)->get();

    //         // Ak bol záznam nájdený, pridáme ho do $response
    //         if (!$foundRecord->isEmpty()) {
    //             $response[] = $foundRecord;
    //         } else {
    //             // Ak záznam nebol nájdený, pridáme chybové hlásenie
    //             $response[] = [
    //                 'stdinchikey' => $stdinchikey,
    //                 'error' => 'Record not found in the database'
    //             ];
    //         }
    //     }

    //     // Vrátenie odpovede vo formáte JSON
    //     return response()->json($response, 200);
    // }

    public function showXMLinchikey($stdinchikey)
    {
        // Rozdelenie zadaných mien na pole
        $stdinchikeyArray = explode(',', $stdinchikey);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($stdinchikeyArray as $stdinchikey) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Susdata::where('stdinchikey', $stdinchikey)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with stdinchikey $stdinchikey not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "susdata" pre každý záznam
                    $susdataElement = $xml->addChild('susdata');
                    $susdataElement->addAttribute('stdinchikey', $record->stdinchikey);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'stdinchikey') {
                            $susdataElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

        // Vrátenie odpovede vo formáte XML
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    // public function showJSONdtxsid($dtxsid)
    // {
    //      // Rozdelenie zadaných mien na pole
    //      $dtxsidArray = explode(',', $dtxsid);

    //      // Vytvorenie asociatívneho poľa pre JSON
    //      $response = [];
 
    //      // Pre každé zadané meno
    //      foreach ($dtxsidArray as $dtxsid) {
    //          // Získanie záznamu podľa mena
    //          $foundRecord = Susdata::where('dtxsid', $dtxsid)->get();
 
    //          // Ak bol záznam nájdený, pridáme ho do $response
    //          if (!$foundRecord->isEmpty()) {
    //              $response[] = $foundRecord;
    //          } else {
    //              // Ak záznam nebol nájdený, pridáme chybové hlásenie
    //              $response[] = [
    //                  'dtxsid' => $dtxsid,
    //                  'error' => 'Record not found in the database'
    //              ];
    //          }
    //      }
 
    //      // Vrátenie odpovede vo formáte JSON
    //      return response()->json($response, 200);
    // }

    public function showXMLdtxsid($dtxsid)
    {
        // Rozdelenie zadaných mien na pole
        $dtxsidArray = explode(',', $dtxsid);

        // Vytvorenie objektu SimpleXMLElement
        $xml = new \SimpleXMLElement('<database/>');

        // Pridanie jednotlivých záznamov ako elementy do XML
        foreach ($dtxsidArray as $dtxsid) {
            // Získanie všetkých záznamov s daným menom
            $foundRecords = Susdata::where('dtxsid', $dtxsid)->get();

            // Kontrola, či sa našli nejaké záznamy s daným menom
            if ($foundRecords->isEmpty()) {
                // Ak sa záznamy nenájdu, pridáme chybové hlásenie do XML
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with dtxsid $dtxsid not found in the database");
            } else {
                // Ak sa našli záznamy, pridáme ich do XML
                foreach ($foundRecords as $record) {
                    // Vytvorenie elementu s názvom "susdata" pre každý záznam
                    $susdataElement = $xml->addChild('susdata');
                    $susdataElement->addAttribute('dtxsid', $record->dtxsid);

                    // Pridanie atribútov ako elementy do XML pre každý záznam
                    foreach ($record->getAttributes() as $key => $value) {
                        // Preskočenie pridania atribútu "name", keďže sme ho pridali ako atribút elementu
                        if ($key !== 'dtxsid') {
                            $susdataElement->addChild($key, $value);
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
            $records = Susdata::where($field, $value)->get();
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
