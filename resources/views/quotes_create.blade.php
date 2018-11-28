@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Quotes</h1>
            <hr>
            <form action="{{ route('quotes.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Anime:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
				<div class="form-group">
                    <label for="quotes">Chara:</label>
                    <input type="text" class="form-control" id="chara" name="chara">
                </div>
				<div class="form-group">
                    <label for="talent">Quote:</label>
                    <input type="text" class="form-control" id="quotes" name="quotes">
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