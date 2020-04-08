@extends('layouts.app')

@section('title', 'List of Users')

@section('icon_title')
    <i class="fa fa-fw fa-users"></i>
@endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Users</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                <a href="" title="Create User">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Names</th>
                        <th>Email</th>
                        <th>User</th>
                        <th>Begin Date</th>
                        <th>End Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>name 1</td>
                        <td>email 1</td>
                        <td>user 1</td>
                        <td>begin Date 1</td>
                        <td>end Date 1</td>
                    </tr>
                    <tr>
                        <td>name 2</td>
                        <td>email 2</td>
                        <td>user 2</td>
                        <td>begin Date 2</td>
                        <td>end Date 2</td>
                    </tr>
                    <tr>
                        <td>name 3</td>
                        <td>email 3</td>
                        <td>user 3</td>
                        <td>begin Date 3</td>
                        <td>end Date 3</td>
                    </tr>
                    <tr>
                        <td>name 4</td>
                        <td>email 4</td>
                        <td>user 4</td>
                        <td>begin Date 4</td>
                        <td>end Date 4</td>
                    </tr>
                    <tr>
                        <td>name 5</td>
                        <td>email 5</td>
                        <td>user 5</td>
                        <td>begin Date 5</td>
                        <td>end Date 5</td>
                    </tr>
                    <tr>
                        <td>name 6</td>
                        <td>email 6</td>
                        <td>user 6</td>
                        <td>begin Date 6</td>
                        <td>end Date 6</td>
                    </tr>
                    <tr>
                        <td>name 7</td>
                        <td>email 7</td>
                        <td>user 7</td>
                        <td>begin Date 7</td>
                        <td>end Date 7</td>
                    </tr>
                    <tr>
                        <td>name 8</td>
                        <td>email 8</td>
                        <td>user 8</td>
                        <td>begin Date 8</td>
                        <td>end Date 8</td>
                    </tr>
                    <tr>
                        <td>name 9</td>
                        <td>email 9</td>
                        <td>user 9</td>
                        <td>begin Date 9</td>
                        <td>end Date 9</td>
                    </tr>
                    <tr>
                        <td>name 10</td>
                        <td>email 10</td>
                        <td>user 10</td>
                        <td>begin Date 10</td>
                        <td>end Date 10</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection
