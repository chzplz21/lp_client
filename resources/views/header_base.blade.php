

<div  class="col-md-10 panel">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
				 {{$customers_header['header_title']}}
					<span class="pull-right">
						<a href="#" data-toggle="modal" data-target="{{$customers_header['data_target']}}" class="btn btn-success btn-icon btn-xs"><i class="fa fa-plus"></i></a>
					</span>
				</h4>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-hover" data-paging="true" data-filtering="true" data-sorting="true" id="customertable">

						</table>
					</div>
				</div>
			</div>
		</div>


<table>

    <thead>
      @foreach ($customers_header['column_names'] as $column)

        <th class = "footable-sortable" style = "display: table-cell">
          {{$column}}
        </th>

      @endforeach

    </thead>
