@extends("layouts.panel")


@section("panel")

{{ Former::horizontal_open()
    ->id("frm-basic-info")
    ->method("POST")
    
    ->class("navbar-form navbar-left")
    
   
}}
{{ $client->address->address1 }}
{{ $client->address->address2 }}
{{ $client->address->zipcode->ZIPCode }}
{{Former::populate(array(
                    'firstname'  => $client->name->first,
                    'middlename' => $client->name->middle,
                    'lastname'   => $client->name->last,
                    'address1'   => $client->address->address_1,
                    'address2'   => $client->address->address_2,
                    'city'       => $client->address->zip_code_id,
                    'state'      => $client->address->zip_code_id,
                    'zipcode'    => $client->address->zip_code_id,
                    'cell'       => $client->phone->cell,
                    'home'       => $client->phone->home,
                    'work'       => $client->phone->work
            ))}}
{{ $client->name->first }}

<div class="panel panel-default">

    <div class="panel-body">
        <div class="input-group-sm">
            {{ Former::group("Name:")}}
            <br />

            
                {{ $firstname = Former::text("firstname")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("First Name")                
                           
               }}
                {{ Former::text("middlename")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Middle Name")
                }}

            
                {{ Former::text("lastname")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Last Name")
                }}


            {{Former::group("address")}}
            <br/>
            
                {{ Former::text("address1")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Street Address")
                }}
            
                {{ Former::text("address2")    
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Apt / Unit #")
                }}

            <br />
            

                {{ Former::select("city")
                            ->fromQuery(\Zipcode::all(),"City","zip_code_id")
                            ->class("form-control form-inline input-group-sm")
                           ->setAttribute("onchange","$('#zipcode').val($('#city').val());")
                }}

            
                {{ Former::select("state")
                            ->fromQuery(\Zipcode::all(),"State","zip_code_id")
                            ->class("form-control form-inline input-group-sm")
                           ->setAttribute("onchange","$('#state').val($('#city').val());")
                }}

            
                {{ Former::select("zipcode")
                           ->fromQuery(\Zipcode::all(), "ZIPCode", "zip_code_id")
                           ->class("form-control form-inline input-group-sm")
                           ->setAttribute("onchange","$('#city').val($('#zipcode').val());")
                }}
            

            {{Former::group("Phone Number")}}
            <br/>

            
                {{ Former::text("cell")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Cell Phone")
                }}
            
            
                {{ Former::text("home")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Home Phone")
                }}
                
                {{ Former::text("work")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Work Phone")
                }}

            <br />

            <h4>Emergency Contact</h4>

            
                {{ Former::text("contact_full_name")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Full Name")
                }}
            

            
                {{ Former::text("relationship")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Relationship")
                }}
            


            {{Former::group("Phone")}}
            <br />

            
                {{ Former::text("contact_phone")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Primary Phone")
                }}
            
            
                {{ Former::text("contact_second_phone")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Secondary Phone")
                }}
            
            {{
                Former::button("save", "Save")
                ->setAttribute("id","save")
                ->setAttribute('onclick','saveBasicInfo();')
                
            }}
        </div>
    </div>

</div>


{{ Former::close() }}


@stop