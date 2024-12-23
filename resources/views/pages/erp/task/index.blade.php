@extends('layouts.erp.app')

@section('page')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Task List</h4>
                            <div class="card-header-form">
                                <form method="GET" action="{{ route('filter') }}">
                                    <select class="form-control" name="status" onchange="this.form.submit()">
                                        <option value="all">Task Filtering & Sorting</option>
                                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="proTeamScroll">
                                <table class="table table-striped">
                                    <thead >
                                        <tr>
                                            <th style="background-color: white !important; color:black !important;">Title</th>
                                            <th style="background-color: white !important; color:black !important;">Description</th>
                                            <th style="background-color: white !important; color:black !important;">Status</th>
                                            <th style="background-color: white !important; color:black !important;">Due Date</th>                                         
                                            <th style="background-color: white !important; color:black !important;">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>
                                                <p class="mb-0 font-13">{{ $task->title }}</p>
                                            </td>
                                            <td class="table-img">
                                                {!! $task->description !!}
                                            </td>
                                            <td>
                                                <p class="mb-0 font-13">{{ $task->status }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 font-13">{{ $task->due_date }}</p>    
                                            </td>                                            
                                            <td>
                                                <span style="display: flex; padding-top:5px;">
                                                    <a href="{{ route('tasks.edit', $task->id) }}"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-original-title="Edit" style="margin-right:5px; "><i class="fas fa-pencil-alt"></i></a>
                                                    <form action="{{ route('tasks.destroy', $task->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="border: none;"><i
                                                                class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </span>
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
