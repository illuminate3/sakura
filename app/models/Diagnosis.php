<?php

class Diagnosis extends \Eloquent {

    protected $fillable = ['mtk', 'diagnosing_clinician', 'date_of_diagnosis', 'axis_I', 'axis_II', 'axis_III', 'axis_IV', 'axis_V', 'locus', 'locus_date', 'chat', 'chat_date', 'cafas', 'cafas_date'];
    protected $connection = 'fcs_clients';
    protected $table = 'diagnoses';
    protected $primaryKey = 'mtk';
    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
