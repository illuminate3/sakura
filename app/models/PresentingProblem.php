<?php

class PresentingProblem extends \Eloquent {

    protected $fillable = ['mtk','referral_source_concern','client_perception','problem_duration'];
    protected $connection = 'fcs_clients';
    protected $table = 'presenting_problems';
    protected function client(){
        return $this->belongsTo('Client');
    }
}
