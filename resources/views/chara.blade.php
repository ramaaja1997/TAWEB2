@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>My Chara</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
					<th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Talent</th>
					<th>Aksi</th>
              
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
						<td>{{ $no++ }}</td>
                        <td><img src="{{ url('upload/chara/'.$d->chara) }}" style="width: 150px; height: 150px;"></td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->age }}</td>
                        <td>{{ $d->talent }}</td>
                        <td>
                            <form action="{{ route('chara.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('chara.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
    