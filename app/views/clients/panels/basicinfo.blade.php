@extends('layouts.panel')


@section('panel')

{{ Former::horizontal_open()
    ->id('basic-info')
    ->method('POST')
    ->action('ClientsController@create')
    ->class('navbar-form navbar-left')
    
   
}}
<div class='panel panel-default'>

    <div class='panel-body'>
        <div class='input-group-sm'>
            {{ Former::group('Name:')}}
            <br />

            <span class='form-group-sm form-inline'>
                {{ Former::text('firstname')
                           ->class('form-control form-inline col-sm-2')
                           ->placeholder('First Name')
                }}</span>

            <span class='form-group-sm form-inline'>
                {{ Former::text('middlename')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Middle Name')
                }}</span>

            <span class='form-group-sm form-inline'>
                {{ Former::text('lastname')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Last Name')
                }}</span>


            {{Former::group('address')}}
            <br/>
            <span class='form-group-sm form-inline'>
                {{ Former::text('address1')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Street Address')
                }}</span>
            <span class='form-group-sm form-inline'>
                {{ Former::text('address2')    
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Apt / Unit #')
                }}</span>

            <br />
            <span class='form-group-sm form-inline'>

                {{ Former::select('city')
                            ->fromQuery(\Zipcode::all(),'City','zip_code_id')
                            ->class('form-control form-inline input-group-sm')
                           ->setAttribute('onchange',"$('#zipcode').val($('#city').val());")
                }}</span>

            <span class='form-group-sm form-inline'>
                {{ Former::label('state')
                           ->class('form-control form-inline input-group-sm')
                           ->text('Maine')

                }}
            </span>

            <span class='form-group-sm form-inline'>
                {{ Former::select('zipcode')
                           ->fromQuery(\Zipcode::all(), 'ZIPCode', 'zip_code_id')
                           ->class('form-control form-inline input-group-sm')
                           ->setAttribute('onchange',"$('#city').val($('#zipcode').val());")
                }}
            </span>

            {{Former::group('Phone Number')}}
            <br/>

            <span class="form-group-sm form-inline">
                {{ Former::text('phone1')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Primary Phone')
                }}
            </span>
            <span class="form-group-sm form-inline">
                {{ Former::text('phone2')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Secondary Phone')
                }}
            </span>

            <br />

            <h4>Emergency Contact</h4>

            <span class="form-group-sm form-inline">
                {{ Former::text('contact_full_name')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Full Name')
                }}
            </span>

            <span class="form-group-sm form-inline">
                {{ Former::text('relationship')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Relationship')
                }}
            </span>


            {{Former::group('Phone')}}
            <br />

            <span class="form-group-sm form-inline">
                {{ Former::text('contact_phone')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Primary Phone')
                }}
            </span>
            <span class="form-group-sm form-inline">
                {{ Former::text('contact_second_phone')
                           ->class('form-control form-inline input-group-sm')
                           ->placeholder('Secondary Phone')
                }}
            </span>
            {{Former::button('save', 'Save')
                            ->setAttribute('onclick',"alert($('#basic-info').serialize());save();")
            }}
        </div>
    </div>

</div>


{{ Former::close() }}

@stop

@section('scripts')
@parent
<script>
    
    function save()
    {
         $.ajax({
                type: "post",
                url: "{{ URL::action('ClientsController@create')}}",
                data: $('#basic-info').serialize(),
                success: function (data) {
                    console.log(data);
                    $('#basic-info').trigger("reset");
                    document.getElementById('busy-icon').innerHTML = "Save Complete. Enter new Program.";
                }
            }, 'json');
        
        
    }
    $("document").ready(function ($) {

        

    



        $('#save').on('click', function (e) {

            e.preventDefault();
            var forminfo = $('#basic-info').serialize();
            alert(forminfo);
            var token = $('input[name=_token]').val();
            var firstname = $('#firstname').val();
            var middlename = $('#middlename').val();
            var lastname = $('#lastname').val();
            var address1 = $('#address1').val();
            var address2 = $('#address2').val();
            //var zipcode = ;
            var action = "{{ URL::action('ClientsController@create')}}";
            var formData = 'title=' + title + '&description=' + description;
            // we should do saving animation herre id='busy-icon'
            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            if (title === "")
            {
                document.getElementById('title').focus();
                document.getElementById('busy-icon').innerHTML = "";
                return false;
            } else
            if (description === "") {
                document.getElementById('description').focus();
                document.getElementById('busy-icon').innerHTML = "";
                return false;
            }
            $.ajax({
                type: "post",
                url: action,
                data: formData,
                success: function (data) {
                    console.log(data);
                    $('#frm-add-program').trigger("reset");
                    document.getElementById('busy-icon').innerHTML = "Save Complete. Enter new Program.";
                }
            }, 'json');
            return false;
        });
    });
</script>


@stop