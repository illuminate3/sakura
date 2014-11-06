<?php

class AssignedStaff extends \Eloquent {

    protected $fillable = ['mtk', 'ciw', 'ciw_assigned_date', 'dls_team_leader', 'dls_assigned_date', 'ciw_backup'];
    protected $table = 'assigned_staff';
    protected $connection = 'fcs_clients';
    protected $primaryKey = 'mtk';
    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

    protected function ciw() {

        return $this->hasOne('Staff', 'ciw', 'staff_id');
    }

}
