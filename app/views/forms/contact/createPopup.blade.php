<div id="create-contact-popup" class="white-popup " >
    <div class=' panel panel-default'>
        <div class='panel-heading'>
            <h3 class='panel-title'> Create a new Contact:
            </h3></div>

        <div class="panel-body form-group" style="width:auto;height:auto;" >

            @include('forms.contact.details', array('contact'=> new Contact()))

        </div>
    </div>
</div>