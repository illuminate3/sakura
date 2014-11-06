<?php

class Trainings extends \Eloquent {

    protected $connection = 'fcs_staff';
    protected $table = 'trainings';
    protected $primaryKey = 'training_id';
    
    protected $fillable = ['training_id', 'title', 'description', 'implemented'];

    public function staffTrainings() {

        return $this->belongsToMany('StaffTraining','staff_training', 'trainingId', 'trainingId');
    }

}
