@extends('layouts.panel')
@section('panel')
{{$client->name->first}}
{{$client->name->middle}}
{{$client->name->last}}

{{
Former::open()
->id("frm-biography")
->method("POST")
->class("form")

}}

{{
Former::populate(array(
'mtk' => $client->mtk,
 'birthday_day' => $client->birthday->day,
 'birthday_month' => $client->birthday->month,
 'birthday_year' => $client->birthday->year,
 'mothers_name' => $client->familyHistory->mothers_name,
 'fathers_name' => $client->familyHistory->fathers_name,
 'parental_history' => $client->familyHistory->parental_history,
 'other_guardians' => $client->familyHistory->other_guardians,
 'male_siblings' => $client->familyHistory->male_siblings,
 'female_siblings' => $client->familyHistory->female_siblingsg,
 'client_birth_order' => $client->familyHistory->birth_order,
 'developmental_milestone_history' => $client->familyHistory->developmental_milestone_history,
 'developmental_notes' => $client->familyHistory->developmental_notes,
 'childhood_events' => $client->familyHistory->childhood_events,
 'interpersonal_relationships' => $client->familyHistory->interpersonal_relationships,
 'client_family_values' => $client->familyHistory->client_family_values,
 'additional_information' => $client->familyHistory->additional_information
)
)
}}
{{ Former::hidden('mtk')}}
<div class='row'>
<div class='col-xs-2'>
{{ Former::text('mothers_name')
    ->class("form-control")
    ->label("mothers full name")
    
}}
</div>
<div class='col-xs-2'>
{{ Former::text('fathers_name')
    ->class("form-control")
    ->label("fathers full name")
}}
</div>
<div class='col-sm-3'>
{{ Former::textarea('parental_history')
    ->class("form-control")
    ->label("Parental history")
}}
</div>
<div class='col-sm-3'>
{{ Former::textarea('other_guardians')
    ->class("form-control")
    ->label("other guardians")
}}
</div>
</div>
<div class='row'>
<div class='col-sm-5'>
{{ Former::textarea('male_siblings')
    ->class("form-control")
    ->label("male siblings")
}}
</div>
<div class='col-sm-5'>
{{ Former::textarea('female_siblings')
    ->class("form-control")
    ->label("female siblings")
}}
</div>
<div class='col-sm-3'>
{{ Former::text('client_birth_order')
    ->class("form-control")
    ->label("Client birth order")
}}
</div>
</div>
<div class='row'>
<div class='col-sm-4'>
{{ Former::textarea('developmental_milestone_history')
    ->class("form-control")
    ->label("developmental milestone history")
}}
</div>
    <div class='col-sm-4'>
{{ Former::textarea('developmental_notes')
    ->class("form-control")
    ->label("developmental notes")
}}
    </div>
    <div class='col-sm-4'>
{{ Former::textarea('childhood_events')
    ->class("form-control")
    ->label("childhood events")
}}
    </div>
    <div class='col-sm-4'>
{{ Former::textarea('interpersonal_relationships')
    ->class("form-control")
    ->label("interpersonal relationships")
}}
    </div>
    <div class='col-sm-4'>
{{ Former::textarea('client_family_values')
    ->class("form-control")
    ->label("client family values")
}}</div>
    <div class='col-sm-4'>
{{ Former::textarea('additional_information')
    ->class("form-control")
    ->label("additional information")
}}</div>
</div>
{{Former::close()}}

@stop