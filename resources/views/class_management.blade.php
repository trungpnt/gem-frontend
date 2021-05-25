@extends('layouts.app')
@section ('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Class management <small></small>
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">class management</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">List</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                Actions <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">Action</a>
                </li>
                <li>
                    <a href="#">Another action</a>
                </li>
                <li>
                    <a href="#">Something else here</a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#">Separated link</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i>CLASS LIST
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <!-- <a href="#portlet-config" data-toggle="modal" class="config">
                  </a> -->
                    <a href="javascript:;" class="reload">
                    </a>
                    <!-- <a href="javascript:;" class="remove">
                  </a> -->
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#addClassModal" type="button">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
                                    Delete Ticked <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered" id="class-list-table">
                    <thead>
                        <tr>
                            <th data-editable="true">
                                <input type="checkbox" id="check_all_class" onclick="checkAll(this);">
                            </th>
                            <th data-editable="true">
                                Class code
                            </th>
                            <!-- <th data-editable="true">
                        Class name
                     </th> -->
                            <th data-editable="true">
                                Time
                            </th>
                            <th data-editable="true">
                                Slots
                            </th>
                            <th data-editable="true">
                                Level
                            </th>
                            <th data-editable="true">
                                Session
                            </th>
                            <th style="width: 25%;" data-editable="true">
                                Notes
                            </th>
                            <th data-editable="true">
                                Status
                            </th>
                            <th style="text-align: center;">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" id=""></td>
                            <td>
                                2134MARB
                                (TOIEC 500+)
                            </td>
                            <!-- <td>
                                TOIEC 500+
                            </td> -->
                            <td>
                                12/10/2020 - 03/03/2021
                            </td>
                            <td>
                                12/20
                            </td>
                            <td>
                                Immediate
                            </td>
                            <td>
                                <ul>
                                    <li>Wednesday (7AM -9PM) - Nguyễn Thị Lan</li>
                                    <li>Saturday (10AM-11AM20) - Nguyễn Thị Lan</li>
                                </ul>
                            </td>
                            <td>
                                TA: Võ Thị Hoàng Linh
                            </td>
                            <td>
                                Running
                            </td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">
                                        <a href="#" class="btn btn-icon-only green" data-toggle="modal" data-target="#studentListModal" title="Student List">
                                            <i class="icon-user-following"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-warning">
                                        <a href="#" class="btn btn-icon-only yellow" data-toggle="modal" data-target="#addClassModal" title="edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-danger">
                                        <a href="#" class="btn btn-icon-only red" data-toggle="modal" data-target="#deleteConfirmationModal" title="delete">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<div class="row">
</div>
<div class="row">
    <!-- BEGIN LABEL TABLE -->
    <div class="col-md-6">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-coffee"></i>LABEL
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group">
                                <button id="add_new_label" class="btn green" type="button" data-toggle="modal" data-target="#addRangeModal">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
                                    Delete Ticked <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table">
                    <table class="table table-bordered table-hover" id="label_list_table">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox">
                                </th>
                                <th>
                                    Label
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    A
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            Monday - 7:00 to 9:00
                                        </li>
                                        <li>
                                            Wednesday - 7:00 to 9:00
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a href="#" class="edit btn btn-icon-only blue" data-target="#addRangeModal" data-toggle="modal">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete btn btn-icon-only red">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    A
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            Monday - 7:00 to 9:00
                                        </li>
                                        <li>
                                            Wednesday - 7:00 to 9:00
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a href="#" class="edit btn btn-icon-only blue" data-target="#addRangeModal" data-toggle="modal">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete btn btn-icon-only red">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    A
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            Monday - 7:00 to 9:00
                                        </li>
                                        <li>
                                            Wednesday - 7:00 to 9:00
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a href="#" class="edit btn btn-icon-only blue" data-target="#addRangeModal" data-toggle="modal">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete btn btn-icon-only red">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
    <!-- END LABEL TABLE -->
    <!-- BEGIN RANGE TABLE -->
    <div class="col-md-6">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-coffee"></i>LEVEL
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <!-- <a href="#portlet-config" data-toggle="modal" class="config">
                  </a> -->
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group">
                                <button id="range_add_new" class="btn green" type="button">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
                                    Delete Ticked <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table">
                    <table class="table table-bordered table-hover" id="range_list_table">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox">
                                </th>
                                <th>
                                    Level desc
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    4.5-5.5
                                </td>
                                <td>
                                    <!-- <a class="edit" href="javascript:;">
                              Edit </a> -->
                                    <a href="#" class="edit btn btn-icon-only blue">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete btn btn-icon-only red">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    5.5-6.5
                                </td>
                                <td>
                                    <!-- <a class="edit" href="javascript:;">
                              Edit </a> -->
                                    <a href="#" class="edit btn btn-icon-only blue">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete btn btn-icon-only red">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    pre-ielts(3.0-4.0)
                                </td>
                                <td>
                                    <!-- <a class="edit" href="javascript:;">
                              Edit </a> -->
                                    <a href="#" class="edit btn btn-icon-only blue" >
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete btn btn-icon-only red">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
    <!-- END RANGE TABLE -->
</div>
<!-- END PAGE CONTENT -->
</div>
</div>
<!-- END CONTENT -->
@endsection