

<div  class='form-group' id='contact-form'>
    {{ Former::open()
               ->id('frm-edit-contacts')
               ->class('form')
               ->populate($contact)
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

