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
        $selection = \Input::get('data');
        
        $table = Upload::find($selection)->take(1)->get();
        $table = Upload::where('tablename', '=', $selection)->get();
                

        $columns = Schema::connection('codes')->getColumnListing($table);
        $sql = DB::connection('codes')->table($table)->toSql();

        $db = DB::connection('codes')->getPDO();

        $query = $db->prepare($sql);

        $query->execute();
        
        return View::make('sections.uploads.show', ['columns'=>$columns, 'query'=>$query]);
    }

    public static function showAll() {
        return View::make('sections.uploads.index', ['uploads' => Upload::all()]);
    }

}
