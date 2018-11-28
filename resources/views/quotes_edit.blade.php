@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit quotes</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('quotes.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">anime:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="age">chara:</label>
                    <input type="text" class="form-control" id="age" name="chara" value="{{ $datas->chara }}">
                </div>
                <div class="form-group">
                    <label for="talent">quote:</label>
                    <input type="text" class="form-control" id="talent" name="quotes" value="{{ $datas->quotes }}">
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
