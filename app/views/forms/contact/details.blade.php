

{{ Former::open()
               ->id('frm-edit-contacts')
               ->class('form panel-body')
               ->populate($contact)
                  }}
    {{ Former::text('first')}}
    {{ Former::text('last')}}
    {{ Former::text('title')}}
    {{ Former::text('phone')}}
               {{Former::close()}}

