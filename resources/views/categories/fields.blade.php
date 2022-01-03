<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {{Form::label('status' , trans('Status'), ['class' => 'form-label required'])}}
    {{Form::select('status', ['Inactive','Active'], @$data['edit']? @$data['edit']->status : 1,  ['class' => 'form-control select'])}}
</div>
