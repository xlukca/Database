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
       $idArray = explode(',', $id);
       $xml = new \SimpleXMLElement('<database/>');

       foreach ($idArray as $id) {
           $foundRecords = Sars::where('id', $id)->get();

           if ($foundRecords->isEmpty()) {
               $errorXml = $xml->addChild('error');
               $errorXml->addChild('message', "Records with id $id not found in the database");
           } else {
               foreach ($foundRecords as $record) {
                   $SarsElement = $xml->addChild('sars');
                   $SarsElement->addAttribute('id', $record->id);

                   foreach ($record->getAttributes() as $key => $value) {
                       if ($key !== 'id') {
                           $SarsElement->addChild($key, $value);
                       }
                   }
               }
           }
       }
       return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

   
    public function showXMLct($ct)
    {
        $ctArray = explode(',', $ct);
        $xml = new \SimpleXMLElement('<database/>');

        foreach ($ctArray as $ct) {
            $foundRecords = Sars::where('ct', $ct)->get();

            if ($foundRecords->isEmpty()) {
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with ct $ct not found in the database");
            } else {
                foreach ($foundRecords as $record) {
                    $SarsElement = $xml->addChild('Sars');
                    $SarsElement->addAttribute('ct', $record->ct);

                    foreach ($record->getAttributes() as $key => $value) {
                        if ($key !== 'ct') {
                            $SarsElement->addChild($key, $value);
                        }
                    }
                }
            }
        }
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }


    public function showXMLstation($station)
    {
        $stationArray = explode(',', $station);
        $xml = new \SimpleXMLElement('<database/>');

        foreach ($stationArray as $station) {
            $foundRecords = Sars::where('station_name', $station)->get();

            if ($foundRecords->isEmpty()) {
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with station $station not found in the database");
            } else {
                foreach ($foundRecords as $record) {
                    $SarsElement = $xml->addChild('Sars');
                    $SarsElement->addAttribute('station_name', $record->station_name);

                    foreach ($record->getAttributes() as $key => $value) {
                        if ($key !== 'station_name') {
                            $SarsElement->addChild($key, $value);
                        }
                    }
                }
            }
        }
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }


    public function showXMLcountry($country)
    {
        $countryArray = explode(',', $country);
        $xml = new \SimpleXMLElement('<database/>');

        foreach ($countryArray as $country) {
            $foundRecords = Sars::where('name_of_country', $country)->get();
            
            if ($foundRecords->isEmpty()) {
                $errorXml = $xml->addChild('error');
                $errorXml->addChild('message', "Records with stdinchikey $country not found in the database");
            } else {
                foreach ($foundRecords as $record) {
                    $SarsElement = $xml->addChild('Sars');
                    $SarsElement->addAttribute('name_of_country', $record->name_of_country);
                    
                    foreach ($record->getAttributes() as $key => $value) {
                        if ($key !== 'name_of_country') {
                            $SarsElement->addChild($key, $value);
                        }
                    }
                }
            }
        }

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
}
