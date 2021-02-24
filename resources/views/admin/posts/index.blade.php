    @extends('admin.layouts.master')
    @section('pageTitle', 'Posts')
    @section('content')



    <div class="row">

          <div class="card">

                <div class="card-header bg-info text-white">

                    <h4>Page Posts</h4>

                </div>

                <div class="card-body">

                    @if(Session::has('success'))

                    <div class="alert alert-success">

                        {{ Session::get('success') }}

                        @php

                        Session::forget('success');

                        @endphp

                    </div>

                    @endif


                    <form method="POST" action="{{ route('admin.posts.store') }}">

                        @csrf

                        <div class="form-group">

                            <label>Title : <span class="text-danger">*</span></label>

                            <input type="text" name="title" class="form-control">

                            @if ($errors->has('title'))

                            <span class="text-danger">{{ $errors->first('title') }}</span>

                            @endif

                        </div>

                        <div class="form-group">

                            <label>Description : <span class="text-danger">*</span></label>

                            <textarea class="form-control" name="description"></textarea>

                            @if ($errors->has('description'))

                            <span class="text-danger">{{ $errors->first('description') }}</span>

                            @endif

                        </div>

                        <div class="form-group">

                            <label>Tags : <span class="text-danger">*</span></label>

                            <br>

                            <input type="text" data-role="tagsinput" name="tags" class="form-control tags">

                            <br>

                            @if ($errors->has('tags'))

                            <span class="text-danger">{{ $errors->first('tags') }}</span>

                            @endif

                        </div>

                        <div class="form-group">

                            <button class="btn btn-success store-data btn-sm">Save</button>

                        </div>


                    </form>

                </div>

                  <div class="table-responsive">
    <table class=" table table-bordered table-striped table-hover datatable datatable-Posts">
                       <thead>
                           <tr>
                     
                            <th>title</th>
                            <th>Description</th>
                               <th>Tags</th>
                        </tr>
                    </thead>
                    <tbody>
                     @if($posts->count())

                     @foreach($posts as $post)

                     <tr  data-entry-id="{{ $post->id }}">
                  
                         
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                                                        <td>

                                        <strong>Tags : </strong>

                                        @foreach($post->tags as $tag)

                                            <span class="badge badge-info">{{$tag->name}}</span>

                                        @endforeach

                                    </td>


                    </tr>   

                    @endforeach

                    @endif
                </tbody>
            </table>
        </div>

</div>

</div>


@endsection

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Posts:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
