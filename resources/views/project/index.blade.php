@extends('project.base')
@section('action-content') 
<div class="row clearfix">
  <div class="col-sm-6"></div>
  <div class="col-sm-6"></div>
</div> 
  <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
              <div class="header">
                  <h2>
                      Project
                  </h2>
                  <ul class="header-dropdown m-r--5">
                      <li class="dropdown">
                          <a class="btn btn-primary" href="{{ route('project.create') }}">Add new project</a>
                      </li>
                  </ul>
              </div> 
              <div class="body">
                  <div class="table-responsive">
                      <table id = 'DataTables_Table_0' class="table table-bordered table-striped table-hover js-basic-example dataTable">
                          <thead> 
                              <tr>
                                  <th>PROJECT</th>
                                  <th>CLIENT</th>
                                  <th>CHAT MODE</th>
                                  <th>TASK</th>
                                  <th>PIRCE</th>
                                  <th>DEVELOPER</th>
                                  <th>MEET TIME</th>
                                  <th>PROCESS MODE</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>PROJECT</th>
                                  <th>CLIENT</th>
                                  <th>CHAT MODE</th>
                                  <th>TASK</th>
                                  <th>PIRCE</th>
                                  <th>DEVELOPER</th>
                                  <th>MEET TIME</th>
                                  <th>PROCESS MODE</th>
                              </tr>
                          </tfoot>
                          <tbody>
                          @foreach ($projects as $project)
                              <tr>
                                  <td>{{ $project->p_name }}</td>
                                  <td>{{ $project->p_client }}</td>
                                  <td>{{ $project->task }}</td>
                                  <td>{{ $project->price }}</td>
                                  <td>{{ $project->developer }}</td>
                                  <td>{{ $project->meet_time }}</td>
                                  <td>{{ $project->mode }}</td>
                                  <td align = "center">
                                      <form class="row" method="POST" action="{{ route('project.destroy', ['id' => $project->id]) }}" onsubmit = "return confirm('Are you sure?')">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <a href="{{ route('project.edit', ['id' => $project->id]) }}" class="btn btn-info waves-effect">
                                            Update
                                            </a>
                                            {{--@if ($user->username != Auth::user()->username)--}}
                                            <button type="submit" class="btn btn-danger waves-effect">
                                            Delete
                                            </button>
                                            {{--@endif--}}
                                        </form>
                                  </td>
                              </tr>
                          @endforeach 
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div> 
  </div> 
@endsection