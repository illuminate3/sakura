<?php

class AbilityScore extends Eloquent {

    protected $fillable = ['mtk', 'ability_level'];
    protected $connection = 'fcs_clients';
    protected $primaryKey = 'mtk';
    public $timestamps = false;
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $table = 'abilityscores';

    public function client() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
