<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Upload extends \Eloquent 
{
    protected $table = 'uploads';
    protected $connection = 'codes';
    protected $guarded = array(
        'id',
        'filename',
        'columns',
        'fieldDelimiter',
        'fieldEnclosed',
        'fieldEscaped',
        'lineDelimiter',
        'ignoreLines',
        'created_at',
        'updated_at',
        );
}
