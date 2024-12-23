@extends('layouts.erp.app')

@section('page')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Users List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="proTeamScroll">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 font-13">{{ $user->name }}</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 font-13">{{ $user->email }}</h6>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
