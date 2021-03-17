@extends("theme")

@section("content")
<div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
            <table class="table  table-borderless">
                <tr>
                    <td>Employee Name:</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Employee Code</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Designation</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Place/td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Pin Code</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phone No.</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-outline-success">Login</button></td>
                </tr>
            </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection