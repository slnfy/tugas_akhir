@extends('layouts.root')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        {{-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li> --}}
        
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Manajemen</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0"><i class="fas fa-archive"></i> - Arsip </h6> 
</nav>
@endsection

@section('page')
<div class="card">
    <div class="card-body ">
        <div class="row">
            <div class="col-md-12" id="fm-main-block">
               <div id="fm"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');
    fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
        window.opener.fmSetLink(fileUrl);
        window.close();
    });
    });
    
</script>
@endsection