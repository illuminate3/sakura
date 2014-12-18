<a href="" data-mfp-src=""><span class='glyphicon glyphicon-plus' id='add-new-organization'></span></a>
<label class='label label-primary' for='prescriber'>Prescribing Doctor</label>
   
      {{
          Former::select('contact')->fromQuery(ContactController::getContactsList($organization),'name','contact_id')
            ->label(null)
            ->class("form-control scrollable form-inline")
            ->size("3")
            ->id("contact-select")
    }}