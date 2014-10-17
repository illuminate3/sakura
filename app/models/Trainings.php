<?php

class Trainings extends \Eloquent {

    protected $fillable = ['trainingId', 'title', 'description', 'implemented'];

    public function staffTrainings() {

        return $this->belongsTo('StaffTraining', 'trainingId', 'trainingId');
    }

}
