<?php

class ProviderType extends \Eloquent {

    protected $fillable = ['id', 'title'];
    
    protected $table = 'provider_types';

    protected $connection = 'fcs_clients';
    
    protected $primaryKey = 'id';
}
