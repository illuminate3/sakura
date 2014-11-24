<?php

class FamilyHistory extends \Eloquent {

    protected $fillable=[
                            'mtk',
                            'mothers_name',
                            'fathers_name',
                            'parental_history',
                            'other_guardians',
                            'male_siblings',
                            'female_siblings',
                            'client_birth_order',
                            'developmental_milestone_history',
                            'developmental_notes',
                            'childhood_events',
                            'interpersonal_relationships',
                            'client_family_values',
                            'additional_information'
                        ];
    protected $table = 'family_histories';
    protected $connection = 'fcs_clients';
protected $primaryKey = 'mtk';
    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
