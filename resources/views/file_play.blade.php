@extends('base')
@section('content')

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
        	<h1>Play Video</h1>
            <hr>
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
        </div>

        <video width="100%" height="100%" controls>
			<source src="{{ url('upload/file/'.$data->file) }}" type="video/mp4">
		</video>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
    