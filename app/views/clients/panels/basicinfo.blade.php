@extends("layouts.panel")


@section("panel")

{{ Former::horizontal_open()
    ->id("frm-basic-info")
    ->method("POST")
    
    ->class("navbar-form navbar-left")
    
   
}}
<div class="panel panel-default">

    <div class="panel-body">
        <div class="input-group-sm">
            {{ Former::group("Name:")}}
            <br />

            <span class="form-group-sm form-inline">
                {{ Former::text("firstname")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("First Name")
                }}</span>

            <span class="form-group-sm form-inline">
                {{ Former::text("middlename")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Middle Name")
                }}</span>

            <span class="form-group-sm form-inline">
                {{ Former::text("lastname")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Last Name")
                }}</span>


            {{Former::group("address")}}
            <br/>
            <span class="form-group-sm form-inline">
                {{ Former::text("address1")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Street Address")
                }}</span>
            <span class="form-group-sm form-inline">
                {{ Former::text("address2")    
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Apt / Unit #")
                }}</span>

            <br />
            <span class="form-group-sm form-inline">

                {{ Former::select("city")
                            ->fromQuery(\Zipcode::all(),"City","zip_code_id")
                            ->class("form-control form-inline input-group-sm")
                           ->setAttribute("onchange","$('#zipcode').val($('#city').val());")
                }}</span>

            <span class="form-group-sm form-inline">
                {{ Former::label("state")
                           ->class("form-control form-inline input-group-sm")
                           ->text("Maine")

                }}
            </span>

            <span class="form-group-sm form-inline">
                {{ Former::select("zipcode")
                           ->fromQuery(\Zipcode::all(), "ZIPCode", "zip_code_id")
                           ->class("form-control form-inline input-group-sm")
                           ->setAttribute("onchange","$('#city').val($('#zipcode').val());")
                }}
            </span>

            {{Former::group("Phone Number")}}
            <br/>

            <span class="form-group-sm form-inline">
                {{ Former::text("phone1")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Primary Phone")
                }}
            </span>
            <span class="form-group-sm form-inline">
                {{ Former::text("phone2")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Secondary Phone")
                }}
            </span>

            <br />

            <h4>Emergency Contact</h4>

            <span class="form-group-sm form-inline">
                {{ Former::text("contact_full_name")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Full Name")
                }}
            </span>

            <span class="form-group-sm form-inline">
                {{ Former::text("relationship")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Relationship")
                }}
            </span>


            {{Former::group("Phone")}}
            <br />

            <span class="form-group-sm form-inline">
                {{ Former::text("contact_phone")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Primary Phone")
                }}
            </span>
            <span class="form-group-sm form-inline">
                {{ Former::text("contact_second_phone")
                           ->class("form-control form-inline input-group-sm")
                           ->placeholder("Secondary Phone")
                }}
            </span>
            {{
                Former::button("save", "Save")
                ->setAttribute("id","save")
                ->setAttribute('onclick','alert(saveBasicInfo());')
                
            }}
        </div>
    </div>

</div>


{{ Former::close() }}


@stop