<?php 

class UploadController extends \BaseController{
    
    public static function index()
    {
        $response = array();
        $response[] = self::latest();
        return self::getUpdated();
    }
    protected static function latest()
        {
            $count = count(\Upload::all());
            $latest = \Upload::find($count)->filename;
            return $latest;  
        }
    protected static function getFilenames()
        {
            $uploads = \Upload::all();
            $filenames = array();
            foreach($uploads as $file)
                {
                    $filenames[] = $file->filename;
                } 
            return $filenames;    
        }
    protected static function getUpdated()
        {
            $updates = \Upload::all();
            $update = $updates[count($updates)-1]->updated_at;
            $filename = $updates[count($updates)-1]->filename;
            return $update->toDateTimeString()." ".$filename;
        }
    protected static function getUploads()
    {
        $uploads = array();
        $uploads = \Upload::all();
        $data = array();
        foreach($uploads as $upload)
        {
        $data[] = $upload->filename.' '.$upload->updated_at;
        }
        json_encode($data);
        return \View::make('dataimport::upload')->with('data', $data);
        
    }
    
    public static function show(){
        $selection = \Input::get('data');
        $uploads = \Upload::all();
        $data = array(
        'id'=>$uploads[$selection]->id,
        'filename'=>$uploads[$selection]->filename,
        'columns'=>$uploads[$selection]->columns,
        'fieldDelimiter'=>$uploads[$selection]->fieldDelimiter,
        'fieldEnclosed'=>$uploads[$selection]->columnsfieldEnclosed,
        'fieldEscaped'=>$uploads[$selection]->fieldEscaped,
        'lineDelimiter'=>$uploads[$selection]->lineDelimiter,
        'ignoreLines'=>$uploads[$selection]->ignoreLines,
        'created_at'=>$uploads[$selection]->created_at->toDateTimeString(),
        'updated_at'=>$uploads[$selection]->updated_at->toDateTimeString());
        return Response::json($data);
    }
    
    public static function selected(){
        $selection = \Input::get('data');
        $uploads = \Upload::all();
        $data = array(
        'id'=>$uploads[$selection]->id,
        'filename'=>$uploads[$selection]->filename,
        'columns'=>$uploads[$selection]->columns,
        'fieldDelimiter'=>$uploads[$selection]->fieldDelimiter,
        'fieldEnclosed'=>$uploads[$selection]->columnsfieldEnclosed,
        'fieldEscaped'=>$uploads[$selection]->fieldEscaped,
        'lineDelimiter'=>$uploads[$selection]->lineDelimiter,
        'ignoreLines'=>$uploads[$selection]->ignoreLines,
        'created_at'=>$uploads[$selection]->created_at->toDateTimeString(),
        'updated_at'=>$uploads[$selection]->updated_at->toDateTimeString());
        return Response::json($data);
    }
    
    
    
    
    
    
}