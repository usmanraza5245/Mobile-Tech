@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flux align-items-center">
            <div class="col-6">
                <form action="" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Device</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mr-auto">Select Category</label>
                                <select name="category" id="category" class="form-control input-lg dynamic" required="true">
                                    <option value="0" disabled="true" selected="true">Select Category</option>
                                    @foreach ($data as $record)
                                        <option value="{{$record->id}}">{{$record->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection