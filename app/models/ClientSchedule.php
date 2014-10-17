<?php

class ClientSchedule extends \Eloquent {
    protected $fillable = ['mtk','staff_id','editor_id', 'day_start', 'day_end', 'time_start', 'time_end'];
    protected $connection = 'fcs_clients';
    protected $table = 'client_schedules';
    
    
    protected function client()
    {
        return $this->belongsTo('Client','mtk','mtk');
        
        
    }
    
    protected function staff()
    {
        
        return $this->hasOne('Staff','staff_id','staff_id');
        
    }
    
    protected function editor()
    {
        
        return $this->hasOne('Staff', 'staff_id', 'staff_id');
        
    }
    
    
    

}
