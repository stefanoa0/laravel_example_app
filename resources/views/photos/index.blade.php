<x-layout>

<h3>Photos List</h3>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Format</td>
            <td>Width</td>
            <td>Length</td>
        </tr>
    </thead>
    <tbody>
    @foreach($photos as $key => $value)
        <tr>
            <td><a  href="{{ URL::to('photos/' . $value->id) }}">{{ $value->id }}</a></td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->format }}</td>
            <td>{{ $value->width }}</td>
            <td>{{ $value->length }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the photo (uses the destroy method DESTROY /photos/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the photo (uses the show method found at GET /photos/{id} -->

                <!-- edit this photo (uses the edit method found at GET /photos/{id}/edit -->
                <a class="btn-floating btn-large waves-effect waves-light green" href="{{ URL::to('photos/' . $value->id . '/edit') }}">Edit photo</a>
            </td>
            <td>
                {{ Form::open(['url' => 'photos/' . $value->id, 'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('DELETE', ['class' => 'btn-floating btn-large waves-effect waves-light red']) }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</x-layout>