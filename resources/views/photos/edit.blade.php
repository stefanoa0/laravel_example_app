
<x-layout>
<h3>Edit a photo</h3>

<!-- if there are creation errors, they will show here -->

{{ Form::model($photo, ['route' => ['photos.update', $photo->id], 'method' => 'PUT']) }}
    <div class="row">
        <div class="input-field col s6">
            {{ Form::text('title', null, ['class' => 'form-control']) }}
            {{ Form::label('title', 'Title') }}
        </div>

        <div class="input-field col s6">
            {{ Form::select('format', ['png' => 'PNG', 'jpg' => 'JPG', 'tiff' => 'TIFF', 'raw' => 'RAW'], null) }}
            {{ Form::label('format', 'Format') }}
        </div>

        <div class="input-field col s6">
            {{ Form::text('width', null, ['class' => 'form-contrl'])}}
            {{ Form::label('width', 'Width') }}
        </div>

        <div class="input-field col s6">
            {{ Form::text('length', null, ['class' => 'form-contrl']) }}
            {{ Form::label('length', 'Length') }}
        </div>
    </div>

    {{ Form::submit('Edit photo', ['class' => 'btn btn-prmary']) }}

{{ Form::close() }}

</div>

</x-layout>