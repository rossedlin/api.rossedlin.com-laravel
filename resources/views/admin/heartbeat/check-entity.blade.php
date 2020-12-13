<?php
/**
 * @author Ross Edlin <contact@rossedlin.com>
 * Date: 2020-09-08
 * Time: 18:28
 *
 * @var \App\Models\HeartbeatEntity[] $heartbeatEntities
 */
?>

@extends('layouts.admin.app')

@section('content')
    <div class="table-responsive g-mb-40">
        <table class="table u-table--v3 g-c1olor-black">
            <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($heartbeatEntities as $heartbeatEntity)
                <tr>
                    <td>{{$heartbeatEntity->id}}</td>
                    <td>{{$heartbeatEntity->code}}</td>
                    <td>{{$heartbeatEntity->created_at}}</td>
                    <td>{{route('admin.heartbeat.check-pulse', [$heartbeatEntity->id])}}</td>
                    <td>
                        <a href="{{route('admin.heartbeat.check-pulse', [$heartbeatEntity->id])}}"
                           class="btn btn-info">{{ __('View') }}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection