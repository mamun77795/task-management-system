@extends('layout.erp.app')

@section('page')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Task List</h4>
                            <div class="card-header-form">
                                {{-- <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form> --}}
                                <form method="GET" action="{{ route('filter') }}">
                                    <select class="form-control" name="status" onchange="this.form.submit()">
                                        <option value="all">Task Filtering & Sorting</option>
                                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="proTeamScroll">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Due Date</th>                                         
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 font-13">{{ $task->title }}</h6>
                                            </td>
                                            <td class="table-img">
                                                <h6 class="mb-0 font-13">{{ $task->short_description }}</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 font-13">{{ $task->status }}</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 font-13">{{ $task->due_date }}</h6>    
                                            </td>                                            
                                            <td>
                                                <span style="display: flex; padding-top:5px;">
                                                    <a href="{{ route('tasks.edit', $task->id) }}"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
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
