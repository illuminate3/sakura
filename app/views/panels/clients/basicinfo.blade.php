@extends("layouts.panel")


@section("panel")

{{ Former::horizontal_open()
    ->id("frm-basic-info")
    ->method("POST")    
    ->class("panel-body pull-left")   
}}


{{
    Former::populate(array(
                    'mtk'                   => $client->mtk,
                    'firstname'             => $client->name->first,
                    'middlename'            => $client->name->middle,
                    'lastname'              => $client->name->last,
                    'address1'              => $client->address->address->address1,
                    'address2'              => $client->address->address->address2,
                    'city'                  => $client->address->address->zip_code_id,
                    'state'                 => $client->address->address->zip_code_id,
                    'zipcode'               => $client->address->address->zip_code_id,
                    'cell'                  => $client->phone->cell,
                    'home'                  => $client->phone->home,
                    'work'                  => $client->phone->work,
                    'contact_full_name'     => $client->emergencyContact->full_name,
                    'relationship'          => $client->emergencyContact->relationship,
                    'contact_phone'         => $client->emergencyContact->phone_number,
            ))}}


    <div class="panel panel-default  pull-left">
        <h3 class=''> </h3>
        <div class="panel-body col-md-offset-0">

           
                {{ Former::hidden("mtk")}}
                <div> 
                {{Former::group("Client Basic info")
                        ->class("label label-primary")
        }}</div><br />
<div class='col-md-12'>
                <div class='col-md-2'>
                    <label for='firstname' class='label label-primary'>First Name</label>
                    {{ $firstname = Former::text("firstname")
                           ->class("form-control  input-group-sm")
                           ->placeholder("First Name")                
                           
                    }}
                </div>
                <div class='col-md-2'>
                    <label for='middlename' class='label label-primary'>Middle Name</label>
                    {{ Former::text("middlename")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Middle Name")
                    }}
                </div>
                <div class='col-md-2'>
                    <label for='lastname' class='label label-primary'>Last Name</label>
                    {{ Former::text("lastname")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Last Name")
                    }}

                </div>
</div>
           
                <div class='col-md-12'>
                    {{Former::group()}}

                    <div class='col-md-2'>
                        <label for='address1' class='label label-primary'>Street Address</label>

                        {{ Former::text("address1")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Street Address")
                        }}
                    </div>
                    <div class='col-md-2'>
                        <label for='address2' class='label label-primary'>Unit</label>

                        {{ Former::text("address2")    
                           ->class("form-control  input-group-sm")
                           ->placeholder("Apt / Unit #")
                        }}
                    </div>
                </div>
                <div class='col-md-12'>
                    <div class='col-md-2'>
                        <label for='city' class='label label-primary'>City</label>

                        {{ Former::select("city")
                            ->fromQuery(\Zipcode::all(),"City","zip_code_id")
                            ->class("form-control  input-group-sm")
                           ->setAttribute("onchange","$('#zipcode').val($('#city').val());")
                        }}
                    </div>
                    <div class='col-md-2'>
                        <label for='state' class='label label-primary'>State</label>

                        {{ Former::select("state")
                            ->fromQuery(\Zipcode::all(),"State","zip_code_id")
                            ->class("form-control  input-group-sm")
                           ->setAttribute("onchange","$('#state').val($('#city').val());")
                        }}
                    </div>
                    <div class='col-md-2'>
                        <label for='zipcode' class='label label-primary'>Zipcode</label>

                        {{ Former::select("zipcode")
                           ->fromQuery(\Zipcode::all(), "ZIPCode", "zip_code_id")
                           ->class("form-control  input-group-sm")
                           ->setAttribute("onchange","$('#city').val($('#zipcode').val());")
                        }}
                    </div>
                </div>
                      
                <div class='col-md-12'>
                    {{Former::group()}}


                    <div class='col-md-2'>
                        <label for='cell' class='label label-primary'>Cell</label>

                        {{ Former::text("cell")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Cell Phone")
                        }}
                    </div>
                    <div class='col-md-2'>
                        <label for='home' class='label label-primary'>Home</label>

                        {{ Former::text("home")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Home Phone")
                        }}
                    </div>
                    <div class='col-md-2'>
                        <label for='work' class='label label-primary'>Work</label>

                        {{ Former::text("work")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Work Phone")
                        }}
                    </div>
                </div>
          
           
                
                    <div class='col-md-12'>
                        <div>
                        {{Former::group("Emergency Contact")
                        ->class("label label-info")
                        }}</div><div> </div>
                       
                    <div class='col-md-3'>
                        <label for='contact_full_name' class='label label-primary'>Full Name</label>


                        {{ Former::text("contact_full_name")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Full Name")
                        }}

                    </div>
                    <div class='col-md-3'>
                        <label for='relationship' class='label label-primary'>Relationship</label>


                        {{ Former::text("relationship")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Relationship")
                        }}
                    </div>
                    <div class='col-md-3'>
                        <label for='contact_phone' class='label label-primary'>Phone</label>


                        {{ Former::text("contact_phone")
                           ->class("form-control  input-group-sm")
                           ->placeholder("Primary Phone")
                        }}
                    </div>

        </div>
          
                <div class="col-md-offset-0 col-md-2">
                {{
                Former::button("save", "Save")
                ->setAttribute("id","save")
                ->setAttribute('onclick','saveBasicInfo();')
                
                }}
                </div>
             
          
    
   



    {{ Former::close() }}
</div>
    </div>
    @stop