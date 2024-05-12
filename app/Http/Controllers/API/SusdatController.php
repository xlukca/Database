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
       $idArray = explode(',', $id);
       $xml = new \SimpleXMLElement('<database/>');

       foreach ($idArray as $id) {
           $foundRecords = Susdat::where('id', $id)->get();

           if ($foundRecords->isEmpty()) {
               $errorXml = $xml->addChild('error');
               $errorXml->addChild('message', "Records with id $id not found in the database");
           } else {
               foreach ($foundRecords as $record) {
                   $susdatElement = $xml->addChild('susdat');
                   $susdatElement->addAttribute('id', $record->id);

                   foreach ($record->getAttributes() as $key => $value) {
                       if ($key !== 'id') {
                           $susdatElement->addChild($key, $value);
                       }
                   }
               }
           }
       }
       return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showXMLname($name)
    {
        $namesArray = explode(',', $name);
        $xml = new \SimpleXMLElement('<database/>');

        foreach ($namesArray as $name) {
            $foundRecords = Susdat::where('name', $name)->get();
            if ($foundRecords->isEmpty()) {
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with name $name not found in the database");
            } else {
                foreach ($foundRecords as $record) {
                    $susdatElement = $xml->addChild('susdat');
                    $susdatElement->addAttribute('name', $record->name);

                    foreach ($record->getAttributes() as $key => $value) {
                        if ($key !== 'name') {
                            $susdatElement->addChild($key, $value);
                        }
                    }
                }
            }
        }
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showXMLcasrn($casrn)
    {
        $casrnArray1 = explode(',', $casrn);
        $casrnArray = [];

        foreach ($casrnArray1 as $v)
        $casrnArray[] = 'CAS_RN: ' . $v;
        $xml = new \SimpleXMLElement('<database/>');

        foreach ($casrnArray as $casrn) {
            $foundRecords = Susdat::where('cas_rn', $casrn)->get();

            if ($foundRecords->isEmpty()) {
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with casrn $casrn not found in the database");
            } else {
                foreach ($foundRecords as $record) {
                    $susdatElement = $xml->addChild('susdat');
                    $susdatElement->addAttribute('cas_rn', $record->cas_rn);

                    foreach ($record->getAttributes() as $key => $value) {
                        if ($key !== 'cas_rn') {
                            $susdatElement->addChild($key, $value);
                        }
                    }
                }
            }
        }
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showXMLinchikey($stdinchikey)
    {
        $stdinchikeyArray = explode(',', $stdinchikey);
        $xml = new \SimpleXMLElement('<database/>');

        foreach ($stdinchikeyArray as $stdinchikey) {
            $foundRecords = Susdat::where('stdinchikey', $stdinchikey)->get();

            if ($foundRecords->isEmpty()) {
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with stdinchikey $stdinchikey not found in the database");
            } else {
                foreach ($foundRecords as $record) {
                    $susdatElement = $xml->addChild('susdat');
                    $susdatElement->addAttribute('stdinchikey', $record->stdinchikey);

                    foreach ($record->getAttributes() as $key => $value) {
                        if ($key !== 'stdinchikey') {
                            $susdatElement->addChild($key, $value);
                        }
                    }
                }
            }
        }
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function showXMLdtxsid($dtxsid)
    {
        $dtxsidArray = explode(',', $dtxsid);
        $xml = new \SimpleXMLElement('<database/>');

        foreach ($dtxsidArray as $dtxsid) {
            $foundRecords = Susdat::where('dtxsid', $dtxsid)->get();

            if ($foundRecords->isEmpty()) {
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with dtxsid $dtxsid not found in the database");
            } else {
                foreach ($foundRecords as $record) {
                    $susdatElement = $xml->addChild('susdat');
                    $susdatElement->addAttribute('dtxsid', $record->dtxsid);

                    foreach ($record->getAttributes() as $key => $value) {
                        if ($key !== 'dtxsid') {
                            $susdatElement->addChild($key, $value);
                        }
                    }
                }
            }
        }
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
