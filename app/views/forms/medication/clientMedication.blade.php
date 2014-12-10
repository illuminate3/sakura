
<div  id='client-med-form'>

   
{{
    Former::open()
        ->id('frm-edit-client-med')
        ->class('col-md-6')
        }}
        {{--$organizations[0]--}}
        @if($medication!=null)
        
 {{Former::populate(array(
             'mtk'=>'5',
             'first'=>$medication->prescriber->first,
             'last'=>$medication->prescriber->last,
             'started'=>$medication->started,
             'stopped'=>$medication->stopped,
             'client_note'=>$medication->client_note,
             'prescriber_notes'=>$medication->prescriber_notes,
             'staff'=>$medication->staff->name->first . " " .$medication->staff->name->last,
             'staff_note' => $medication->staff_note,
             'additional_history' => $medication->additional_history
             ))
}}
 @endif
 
 
 <div class='col-md-5'>
   
        <label class='label label-primary' for='prescriber'>Prescribing Facility</label>
   
      {{
          Former::select('organization')->fromQuery(Organization::all(), 'title', 'id')->select($medication->org_id)
            ->label(null)
            ->class("form-control scrollable form-inline")
            ->size("3")
            
      }}
    </div>
    <div class='col-md-3'>
    <label class='label label-primary' for='prescriber'>Prescribing Doctor</label>
   
      {{
          Former::select('contact')->fromQuery(ContactController::getContactsList($medication->org_id),'name','contact_id')->select($medication->contact_id)
            ->label(null)
            ->class("form-control scrollable form-inline")
            ->size("3")
    }}
    </div>
    <div class='col-md-3'>
    <label class='label label-primary' for='start'>Start</label>
    {{ 
        Former::text('started')
            ->label(null)
            ->id('started')
            ->class("form-control form-inline input-group-sm")
    }}
    </div>
   <div class='col-md-3'>
    <label class='label label-primary' for='end'>End</label>
    {{ 
        Former::text('stopped')
            ->label(null)
            ->id('stopped')           
            ->class("form-control form-inline input-group-sm")
    }}
</div>
    <div class='col-md-3'>
    <label class='label label-primary' for='clientnote'>Client Notes</label>
    {{ Former::textarea('client_note')
            ->label(null)
            ->class("form-control form-inline input-group-sm")
            ->id('client_note')
    }}
</div>
    <div class='col-md-3'>
    <label class='label label-primary' for='prescribernote'>Prescriber Note</label>
    {{ Former::textarea('prescriber_notes')
            ->label(null)
            ->class("form-control form-inline input-group-sm")
            ->id('prescriber_notes')
           
           
    }}</div>
   
    <div class='col-md-3'>
    <label class='label label-primary' for='staff'>Staff</label>
    {{ Former::text('staff')
            ->label(null)
            ->class("form-control form-inline input-group-sm")
            
    }}
    </div>
    <div class='col-md-3'>   
  
    <label class='label label-primary' for='staffnote'>Staff Note</label>
    {{ Former::textarea('staff_note')
            ->label(null)
            ->class("form-control form-inline input-group-sm")
    }}
    </div>
      <div class='col-md-3'>   

    <label class='label label-primary' for='additionalhistory'>Additional History</label>
    {{ Former::textarea('additional_history')
            ->label(null)
           ->class("form-control form-inline input-group-sm")
    }}
      </div>

{{Former::close()}}

</div>