

<div  class='panel-body' id='contact-form'>
    {{ Former::open()
               ->id('frm-edit-contacts')
               ->class('form')
               ->populate($contact)
    }}
    <div class="col-md-8">
        <label class='label label-primary' for='first'>First Name:</label>
        {{ Former::text('first')
            ->label(null)
    ->class("form-control form-inline input-group-sm")
    
        }}
        <label class='label label-primary' for='last'>Last Name:</label>
        {{ Former::text('last')
            ->label('')
    ->class("form-control form-inline input-group-sm")
        }}
        <label class='label label-primary' for='title'>Title:</label>
        {{ Former::text('title')
            ->label('')
    ->class("form-control form-inline input-group-sm")
        }}
        <label class='label label-primary' for='specialization'>Specialization:</label>
        {{ Former::text('specialization')
            ->label('')
    ->class("form-control form-inline input-group-sm")
        }}
        <label class='label label-primary' for='notes'>Notes:</label>
        {{ Former::textarea('notes')
            ->label('')
    ->class("form-control form-inline input-group-sm")
        }}
        <label class='label label-primary' for='phone'>Phone:</label>
        {{ Former::text('phone')
            ->label('')
    ->class("form-control form-inline input-group-sm")
        }}

    
    {{Former::close()}}
    <div class=''>

    <div class="btn btn-primary">Save</div>
        </div>
    
    </div>
    </div>
