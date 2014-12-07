
<div  id='client-med-form'>

{{
    Former::open()
        ->id('frm-edit-client-med')
        ->class('col-md-6')
        ->populate(ClientsController::$current_client)
                
        
}}

    <div class='col-md-3'>
    <label class='label label-primary' for='prescriber'>Prescriber</label>
    {{ 
        Former::text('prescriber')
            ->id('prescriber')
            ->label(null)
            ->class("form-control form-inline input-group-sm")
            
    }}
    </div>
    <div class='col-md-3'>
    <label class='label label-primary' for='start'>Start</label>
    {{ 
        Former::text('start')
            ->label(null)
            ->id('start-date')
            ->class("form-control form-inline input-group-sm")
    }}
    </div>
   <div class='col-md-3'>
    <label class='label label-primary' for='end'>End</label>
    {{ 
        Former::text('end')
            ->label(null)
            ->id('end-date')           
            ->class("form-control form-inline input-group-sm")
    }}
</div>
    <div class='col-md-3'>
    <label class='label label-primary' for='clientnote'>Client Notes</label>
    {{ Former::textarea('clientnote')
            ->label(null)
            ->class("form-control form-inline input-group-sm")
     
    }}
</div>
    <div class='col-md-3'>
    <label class='label label-primary' for='prescribernote'>Prescriber Note</label>
    {{ Former::textarea('prescribernote')
            ->label(null)
            ->class("form-control form-inline input-group-sm")
           
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
    {{ Former::textarea('staffnote')
            ->label(null)
            ->class("form-control form-inline input-group-sm")
    }}
    </div>
      <div class='col-md-3'>   

    <label class='label label-primary' for='additionalhistory'>Additional History</label>
    {{ Former::textarea('additionalhistory')
            ->label(null)
           ->class("form-control form-inline input-group-sm")
    }}
      </div>

{{Former::close()}}

</div>