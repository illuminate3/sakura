<?php

class AssignedHours extends \Eloquent {

    protected $fillable = ['mtk', 'weekly_hours'];
    protected $connection = 'fcs_clients';
    protected $table = 'assigned_hours';
    protected $primaryKey = 'mtk';
    protected function client() {

        $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
