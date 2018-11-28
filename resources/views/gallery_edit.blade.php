@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit gallery</h1>
            <hr>
            <form action="{{ route('gallery.update', $data->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                </div>
                <div class="form-group">
                    <label for="gallery">Foto Lama:</label>
                    <img src="{{ url('upload/gallery/'.$data->gallery) }}" style="width: 150px; height: 150px;">
                </div>
                <div class="form-group">
                    <label for="email">gallery:</label>
                    <input type="file" class="form-control" id="email" name="gallery">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a href="{{URL::previous()}}" class="btn btn-md btn-danger">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
