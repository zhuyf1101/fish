@extends('admin.parent') {{-- 打开左侧分类列表 --}} @section('goodsOpen') class="open" @endsection {{-- 选中分类列表显示 --}} @section('goodsListActive') class="active" @endsection {{-- 列表显示 --}} @section('goodsShow') style="display:block" @endsection {{-- 显示分类列表页 --}} @section('content')
<div class="main-content">
  <div class="page-content">
    <div class="page-header">
      <h1>
        商品分类管理
        <small>
          <i class="icon-double-angle-right"></i>
          分类列表
        </small>
      </h1>
    </div>
    @if (session('msg'))
    <div class="alert alert-success">
      {{ session('msg') }}
    </div>
    @endif @if (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
    @endif
    <div class="row">
      <form action="/admin/type" method='get'>
        <div class="col-xs-12 col-sm-4">
          <div class="input-group">
            <input type="text" name="tname" class="form-control search-query" placeholder="分类名" /><span class="input-group-btn">
            <button type="submit" class="btn btn-purple btn-sm">
              <i class="icon-search icon-on-right bigger-110"></i>
              搜索
            </button>
          </span>
          </div>
        </div>
      </form>
      <div class="col-xs-12">
        <div class="table-responsive">
          <form name='myform' action="" style='display:none' method='post'>
            {{ csrf_field() }} {{ method_field('DELETE') }}
          </form>
          <table id="sample-table-1" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>类别名</th>
                <th>路径</th>
                <th>父ID</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list as $v)
              <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->tname }}</td>
                <td>{{ $v->path }}</td>
                <td> {{ $v->pid}}</td>
                <td>
                  <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
                    <a href='/admin/type/{{ $v->id }}/edit'>
                      <button class="btn btn-xs btn-info">
                        <i class="icon-edit bigger-120"></i>
                      </button>
                    </a>
                    <a href='javascript:doDel({{ $v->id }})'>
                      <button class="btn btn-xs btn-danger">
                        <i class="icon-trash bigger-120"></i>
                      </button>
                    </a>
                    <a href='{{ url("admin/typeson")."/".$v->id }}'>
                      <button class="btn btn-warning btn-xs">
                        <i class="icon-edit bigger-120"></i>
                      </button>
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {!! $list->appends($where)->render() !!}
      </div>
    </div>
  </div>
</div>
<script>
function doDel(id) {
  var form = document.myform;
  var url = "{{ url('admin/type') }}"
  form.action = url + '/' + id;
  form.submit();
}
</script>
@endsection
