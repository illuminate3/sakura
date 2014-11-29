

{{ Former::open()
               ->id('frm-edit-contacts')
               ->class('form panel-body')
               ->populate($contact)
}}
<div class="col-lg-3">
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
<label class='label label-primary' for='phone'>Phone:</label>
{{ Former::text('phone')
            ->label('')
}}

</div>
{{Former::close()}}
<div class="col-sm-1 pull-left"><div class="btn btn-default">Save</div>
    </div>

