<?php

class UploadController extends \BaseController {

    public function getIndex() {
        $response = array();
        $response[] = self::latest();
        return self::getUpdated();
    }

    protected static function latest() {
        $count = count(\Upload::all());
        $latest = \Upload::find($count)->filename;
        return $latest;
    }

    protected static function getFilenames() {
        $uploads = \Upload::all();
        $filenames = array();
        foreach ($uploads as $file) {
            $filenames[] = $file->filename;
        }
        return $filenames;
    }

    protected static function getUpdated() {
        $updates = \Upload::all();
        $update = $updates[count($updates) - 1]->updated_at;
        $filename = $updates[count($updates) - 1]->filename;
        return $update->toDateTimeString() . " " . $filename;
    }

    public static function dashboard() {


        return View::make('dashboards.uploads.dashboard');
    }

    protected static function getUploads() {
        $uploads = array();
        $uploads = \Upload::all();
        $data = array();
        foreach ($uploads as $upload) {
            $data[] = $upload->filename . ' ' . $upload->updated_at;
        }
        json_encode($data);
        return \View::make('dataimport::upload')->with('data', $data);
    }

    public static function show() {
        $selection = \Input::get('selected');
        $uploads = \Upload::all();
        $data = array(
            'id' => $uploads[$selection]->id,
            'filename' => $uploads[$selection]->filename,
            'columns' => $uploads[$selection]->columns,
            'fieldDelimiter' => $uploads[$selection]->fieldDelimiter,
            'fieldEnclosed' => $uploads[$selection]->columnsfieldEnclosed,
            'fieldEscaped' => $uploads[$selection]->fieldEscaped,
            'lineDelimiter' => $uploads[$selection]->lineDelimiter,
            'ignoreLines' => $uploads[$selection]->ignoreLines,
            'created_at' => $uploads[$selection]->created_at->toDateTimeString(),
            'updated_at' => $uploads[$selection]->updated_at->toDateTimeString());
        return Response::json($data);
    }

    public static function selected() {
        $selection = \Input::get('selected');
        $total = \Input::get('total') !==null ? \Input::get('total') : 1;
        $offset = \Input::get('offset') !== null ? \Input::get('offset') : 0;
        $table = Upload::where('id','=',$selection)->take(1)->get();
        //$table = Upload::where('tablename', '=', $selection)->get();
        $tablename = $table[0]->tablename;        
        $count = DB::connection('codes')->table($tablename)->count();    
        $columns = Schema::connection('codes')->getColumnListing($tablename);
        $sql = DB::connection('codes')->table($tablename)->skip($offset)->take($total)->toSql();

        $db = DB::connection('codes')->getPDO();
        //return var_dump(Input::all());
        $query = $db->prepare($sql);

        $query->execute();
        
        return View::make('sections.uploads.show', ['columns'=>$columns, 'count'=>$count, 'query'=>$query]);
    }

    public static function showAll() {
        return View::make('sections.uploads.index', ['uploads' => Upload::all()]);
    }
    
    public static function newUpload()
    {
        
        return View::make('sections.uploads.create');
        
    }
    
    public function store(){
        //$upload = Upload::create(\Input::all());
        
        return \Input::all();
        
    }
    
    
}
