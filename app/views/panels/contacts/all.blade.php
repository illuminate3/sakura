@extends('layouts.panel')
@section('panel')
<div class='container-fluid'>



    <div id='info-panel' class="col-sm-4">
        <label for="contact-form" class="label label-primary">Contact Information</label>
        <div  class='form-group' id='contact-form'>
            {{ Former::open()
               ->id('frm-edit-contacts')
               ->class('form')
               ->populate(new Contact())
            }}

            <div class="col-sm-4">
                <label class='label label-primary' for='first'>First Name:</label>
                {{ Former::text('first')
            ->label(null)
    
                }}
                <label class='label label-primary' for='last'>Last Name:</label>
                {{ Former::text('last')
            ->label('')
                }}
                <label class='label label-primary' for='title'>Title:</label>
                {{ Former::text('title')
            ->label('')
                }}
                <label class='label label-primary' for='specialization'>Specialization:</label>
                {{ Former::text('specialization')
            ->label('')
                }}
                <label class='label label-primary' for='notes'>Notes:</label>
                {{ Former::textarea('notes')
            ->label('')
                }}
                <label class='label label-primary' for='phone'>Phone:</label>
                {{ Former::text('phone')
            ->label('')
                }}

            </div>
            {{Former::close()}}
            <div class="col-sm-4 col-xs-offset-6"><div class="btn btn-default">Save</div>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-xs-offset-1">

        <table id='contactstable' class='dtable display' >
            <thead>
                <tr>
                    <th hidden="hidden">id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Position</th>
                    <th>Phone Number</th>

                </tr>
            </thead>
            <tbody onclick='getSelectedContact();'>

                @foreach($contacts as $contact)
                <tr>
                    <td hidden="hidden">{{$contact->contact_id}}</td>
                    <td>{{$contact->first}}</td>
                    <td>{{$contact->last}}</td>
                    <td>{{$contact->title}}</td>
                    <td>{{$contact->phone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<span hidden="hidden" id="current-contact"></span><span hidden="hidden" id="current-contact-fullname"></span>
@stop