<?php

namespace App\Observers;
use App\Models\ChangeLogSusdat;
use App\Models\Susdat;

class ChangeLogObserverSusdat
{
    public function updating(Susdat $model)
    {
        // Record the change

        $oldAttributes = $model->getOriginal();
        $newAttributes = $model->getAttributes();

        foreach ($newAttributes as $key => $newValue) {
            $oldValue = $oldAttributes[$key] ?? null;

            if ($newValue != $oldValue) {
        
                ChangeLogSusdat::create([
                    'susdat_id' => $model->id,
                    'item' => $key, 
                    'old_value' => $oldValue,
                    'new_value' => $newValue,
                    'user_id' => auth()->id(),
                ]);
            }
        }
    }
}
