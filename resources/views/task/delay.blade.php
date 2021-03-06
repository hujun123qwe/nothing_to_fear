@extends('layouts.add')
@section('panel-heading-1')
	推迟编号为<strong id="task-id">{{ $task_id }}</strong>的任务
@endsection
@section('panel-body-1')
<form method="post" action="{{ url('task-delay') }}">
	{{ csrf_field() }}
	<div class="modal-header">
    	<h4 class="modal-title">推迟到哪一天？</h4>
 	</div>
 	<div class="modal-body">
 		<input type="hidden" name="id" value="{{ $task_id }}">
		<input class="datepicker form-control" type="text" value="03/13/2017" name="task_delay_date"/>
 	</div>
 	<br>
 	<br>
 	<div class="text-center" >
    <input type="submit" style="margin-right: 28px;" class="btn btn-primary" value="确定"></input>
    <button type="button" class="btn btn-primary" onclick="history.back();">返 回</button>
    </div>
</form>
@endsection

@section('js')
<script type="text/javascript">
	$(function() {
		$('.datepicker').datepicker({
			weekStart:1
		});
	});
</script>
@endsection

