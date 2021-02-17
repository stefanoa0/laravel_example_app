<x-layout>

<h3>Create a photo</h3>

<!-- if there are creation errors, they will show here -->

{{ Form::open(['url' => 'photos']) }}
    <div class="row">
        <div class="input-field col s6">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control']) }}
        </div>

        <div class="input-field col s6">
            {{ Form::select('format', ['png' => 'PNG', 'jpg' => 'JPG', 'tiff' => 'TIFF', 'raw' => 'RAW'], '') }}
            {{ Form::label('format', 'Format') }}
        </div>

        <div class="input-field col s6">
            {{ Form::label('width', 'Width') }}
            {{ Form::text('width', '', ['class' => 'form-control'])}}
        </div>

        <div class="input-field col s6">
            {{ Form::label('length', 'Length') }}
            {{ Form::text('length','', ['class' => 'form-control']) }}
        </div>
    </div>

    {{ Form::submit('Create the photo!', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}

</div>
</x-layout>