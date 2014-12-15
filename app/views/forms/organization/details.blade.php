<div class="panel-body">
    <div>
        {{
Former::open()
    ->id("frm-information")
    ->method("POST")
    ->class("panel-body")
        }}


        {{ Former::hidden("org_id")}}
       
        <br/>
            <div class="col-md-12">
                <div class="col-md-8">
                    <label class='label label-primary ' for='title'>Title:</label>
                    {{ Former::text('title')
                        ->label(null)
    ->class('form-control form-inline')
    ->placeholder('title')

                    }}
                </div>
                <div class="col-md-8 ">
                    <label class='label label-primary ' for='description'>Description</label>
                    {{ Former::textarea('description')
                        ->label(null)
    ->class('form-control form-inline')
    ->placeholder('description')
                    }}
                </div>
            </div>
      



        
            <div class="col-md-6">
                <label class='label label-primary ' for='address1'>Street Address</label>
                {{ Former::text('address1')
                    ->label(null)
    ->class('form-control form-inline')
    ->placeholder('address1')
                }}
            </div>
            <div class="col-md-4">
                <label class='label label-primary ' for='address2'>Building/Unit</label>
                {{ Former::text('address2')
                    ->label(null)
    ->class('form-control form-inline')
    ->placeholder('address2')
                }}
            </div>
        
            <div class="col-md-6">
                <label class='label label-primary ' for='city'>City</label>
                {{ Former::select("city")
                    ->label(null)
    ->fromQuery(\Zipcode::all(),"City","zip_code_id")
    ->class("form-control form-inline ")
    ->setAttribute("onchange","$('#zipcode').val($('#city').val());")
                }}
            </div>
            <div class="col-md-4">
                <label class='label label-primary ' for='state'>State</label>
                {{ Former::select("state")
                    ->label(null)
    ->fromQuery(\Zipcode::all(),"State","zip_code_id")
    ->class("form-control form-inline ")
    ->setAttribute("onchange","$('#state').val($('#city').val());")
                }}
            </div>
            <div class="col-md-6">
                <label class='label label-primary ' for='zipcode'>Zipcode</label>
                {{ Former::select("zipcode")
                    ->label(null)
->fromQuery(\Zipcode::all(), "ZIPCode", "zip_code_id")
->class("form-control form-inline ")
->setAttribute("onchange","$('#city').val($('#zipcode').val());")
                }}
            </div>
 
        
            <div class="col-md-6">
                <label class='label label-primary ' for='local'>Local</label>
                {{ Former::text('local')
                    ->name('local')
                    ->label(null)
->class('form-control form-inline form-control')
->placeholder('local')
                }}
            </div>
            <div class="col-md-6">
                <label class='label label-primary ' for='tollfree'>Toll Free</label>
                {{ Former::text('tollfree')
                    ->label(null)
->class('form-control form-inline form-control')
->placeholder('tollfree')
                }}
            </div>
            <div class="col-md-6">
                <label class='label label-primary ' for='fax'>Fax</label>
                {{ Former::text('fax')
                    ->label(null)
->class('form-control form-inline form-control')
->placeholder('fax')
                }}
            </div>
        </div>
   <br />
        <div class="col-md-6">
            <div class="btn btn-primary" onclick="saveInformation();">Save</div>
        </div>
    {{ Former::close() }}
</div>