@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Chara</h1>
            <hr>
            <form action="{{ route('chara.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
				<div class="form-group">
                    <label for="chara">Age:</label>
                    <input type="text" class="form-control" id="age" name="age">
                </div>
				<div class="form-group">
                    <label for="talent">Talent:</label>
                    <input type="text" class="form-control" id="talent" name="talent">
                </div>
                <div class="form-group">
                    <label for="email">Image:</label>
                    <input type="file" class="form-control" id="chara" name="chara">
                </div>
				<div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection