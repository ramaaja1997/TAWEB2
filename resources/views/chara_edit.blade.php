@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit chara</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('chara.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{ $datas->age }}">
                </div>
                <div class="form-group">
                    <label for="talent">Talent:</label>
                    <input type="text" class="form-control" id="talent" name="talent" value="{{ $datas->talent }}">
                </div>
                <div class="form-group">
                    <label for="chara">Foto Lama:</label>
                    <img src="{{ url('upload/chara/'.$data->chara) }}" style="width: 150px; height: 150px;">
                </div>
                <div class="form-group">
                    <label for="email">Image:</label>
                    <input type="file" class="form-control" id="chara" name="chara">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="{{URL::previous()}}" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
