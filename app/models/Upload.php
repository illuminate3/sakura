<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Upload extends \Eloquent  implements StaplerableInterface
{
    use EloquentTrait;
    protected $table = 'uploads';
    protected $connection = 'codes';
    protected $fillable = array(
        
        'filename',
        'file',
        'tablename',
        'columns',
        'fieldDelimiter',
        'fieldEnclosed',
        'fieldEscaped',
        'lineDelimiter',
        'ignoreLines'
        
        );
    protected $primaryKey = 'id';
    
    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('file');
        
        
        parent::__construct($attributes);
    }
    
    
}
