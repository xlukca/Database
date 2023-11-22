<?php

namespace App\Observers;
use App\Models\ChangeLogSusdat;
use App\Models\Susdata;

class ChangeLogObserverSusdat
{
    public function updating(Susdata $model)
    {
        // Zaznamenávanie zmien

        $oldAttributes = $model->getOriginal();
        $newAttributes = $model->getAttributes();

        foreach ($newAttributes as $key => $newValue) {
            $oldValue = $oldAttributes[$key] ?? null;

            if ($newValue != $oldValue) {
        
                ChangeLogSusdat::create([
                    'susdat_id' => $model->id,
                    'item' => $key, // Stĺpec, ktorý sa zmenil
                    'old_value' => $oldValue,
                    'new_value' => $newValue,
                    'user_id' => auth()->id(),
                ]);
            }
        }
    }
}
