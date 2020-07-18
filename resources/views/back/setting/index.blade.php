<x-back-layout title="Setting Pages">
    @section('app')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact Pages</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('admin.setting.contact') }}" class="needs-validation">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Open</label>
                                        <input class="form-control" type="time" name="open">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Close</label>
                                        <input class="form-control" type="time" name="close">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="address">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group">
                                        <button name="contact" class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Setting Pages</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('admin.setting.about') }}" class="needs-validation">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>link</label>
                                        <input class="form-control" type="text" name="link">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
</x-back-layout>