<?php

class Trainings extends \Eloquent {

    protected $fillable = ['trainingId', 'title', 'description', 'implemented'];

    public function staffTrainings() {

        return $this->belongsToMany('StaffTraining','staff_training', 'trainingId', 'trainingId');
    }

}
