@extends('app')
@section('content')
    <div class='container py-5'>
        <div class='row'>
           
            <div class="col-md-12">
              
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ url('export') }}">Export User Data</a>
            </form>
               
            </div>
            <br>
            <div class="col-md-12" style="margin-top:15px">
                <table class="table table-bordered py-3">
                    <thead>
                        <tr>
                       
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $usr)
                        <tr>
                           
                            <td>{{ $usr->name }}</td>
                            <td>{{ $usr->email }}</td>
                           
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->

@endsection
