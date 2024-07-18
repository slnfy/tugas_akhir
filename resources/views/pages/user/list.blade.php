@extends('layouts.root')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        {{-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li> --}}
        
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Manajemen</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0"><i class="fa-solid fa-user-group"></i> - User </h6> 
</nav>
@endsection

@section('page')
<div class="card">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive py-2">
                
                {!! $dataTable->table(['class' => 'table dt_table table-flush table-vertical-align ']) !!}
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@section('script')
{!! $dataTable->scripts() !!}
<script>
    let _url = {
        create: `{{ route('user.create') }}`,
        edit: `{{ route('user.edit', ':id') }}`,
        destroy: `{{ route('user.destroy', ':id') }}`,
    }
    function create(){
        Global.blockUI()
        $.get(_url.create).done((res) => {
            Global.modal({
                title: res?.title,
                body: res?.body,
                footer: res?.footer
            })
            Global.unblockUI()
        }).fail((xhr) => {
            Global.unblockUI()
            Swal.fire({
                title: 'Whoops!',
                text: xhr?.responseJSON?.message ? xhr.responseJSON.message : 'Internal Server Error',
                type: 'error',
                confirmButtonColor: '#007bff'
            })
        })
        Global.unblockUI()
    }

    function save() {
        $('#response_container').empty();
        Global.blockElement('.modal-content');
        let el_form = $('#myForm')
        let target = el_form.attr('action')
        let formData = new FormData(el_form[0])
    
        $.ajax({
        url: target,
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        }).done((res) => {
        if(res?.status == true){
            let html = '<div class="alert alert-success alert-dismissible fade show">'
            html += `${res?.message}`
            html += '</div>'
            Global.noty('success', '', res?.message)
            $('#response_container').html(html)
            Global.unblockElement('.modal-content')
    
            if($('[name="_method"]').val() == undefined) {
            el_form[0].reset()
            }
            window.LaravelDataTables["user-table"].draw()
        }
        }).fail((xhr) => {
        if(xhr?.status == 422){
            let errors = xhr.responseJSON.errors
            let html = '<div class="alert alert-danger alert-dismissible fade show">'
            html += '<ul>';
            for(let key in errors){
            html += `<li>${errors[key]}</li>`;
            }
            html += '</ul>'
            html += '</div>'
            $('#response_container').html(html)
            Global.unblockElement('.modal-content')
        }else{
            let html = '<div class="alert alert-danger alert-dismissible fade show">'
            html += `${xhr?.responseJSON?.message}`
            html += '</div>'
            Global.noty('error', '', xhr?.responseJSON?.message)
            $('#response_container').html(html)
            Global.unblockElement('.modal-content')
        }
        })
    }

    function edit(id){
        Global.blockUI()
        $.get(_url.edit.replace(':id', id)).done((res) => {
        Global.modal({
            title: res?.title,
            body: res?.body,
            footer: res?.footer
        })
        Global.unblockUI()
        }).fail((xhr) => {
        Global.unblockUI()
        Swal.fire({
            title: 'Whoops!',
            text: xhr?.responseJSON?.message ? xhr.responseJSON.message : 'Internal Server Error',
            type: 'error',
            confirmButtonColor: '#007bff'
        })
        })
    }

    function destroy(id){
        Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda tidak bisa mengembalikan data yang sudah dihapus!",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#007bff',
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
        }).then((result) => {
        console.log(result)
        if (result.value) {
            $.ajax({
            url: _url.destroy.replace(':id', id),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'DELETE',
            }).done((res) => {
            Swal.fire({
                title: res.message,
                text: '',
                type: 'success',
                confirmButtonColor: '#007bff'
            })
            window.LaravelDataTables["user-table"].draw()
            }).fail((xhr) => {
            Swal.fire({
                title: xhr.responseJSON.message,
                text: '',
                type: 'error',
                confirmButtonColor: '#007bff'
            })
            })
        }
        })
    }
</script>
@endsection