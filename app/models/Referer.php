<?php

class Referer extends \Eloquent {

    protected $fillable = ['firstName','lastName','phoneNumber'];

    protected $table = 'referrers';
    
    protected $connection = 'fcs_clients';
    
        protected $primaryKey = 'mtk';
}
