@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="row justify-content-between">
            <div class="col-4">
                <h2>Categories</h2>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ip</th>
                    <th scope="col">Résultat</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cases as $case)
                    <tr>
                        <th scope="row">{{$case->id}}</th>
                        <td>{{$case->ip}}</td>
                        <td>{{$case->result}}</td>
                        <td>{{$case->created_at}}</td>
                        <td>
                            <a data-toggle="modal" data-target="#deleteModal" href="#" onclick="setId({{$case->id}})" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $cases->links() }}
        </div>
    </div>

    <div class="modal" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('cases_delete')}}" method="get">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="deletedCase">
                        <p>Etes vous sur de supprimer ce cas ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Confirmer</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        function setId(id) {
            $('#deletedCase').val(id);
        }
    </script>
@endsection
