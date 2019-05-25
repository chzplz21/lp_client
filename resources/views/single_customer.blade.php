
@extends('app')

@section('content')


@include('add_edit_customer')

<div class="row panel_container justify-content-around">

  @include('sidebar_navigation')

  <div class ="col-md-10 panel">


  @include('general/tabs')


  <div class="tab-content">

    <div class="tab-pane active" id="tab-info">
      <div class="row">
      	<div class="col-md-6">
      		<div class="card-box">
      			<div class="row">
      				<div class="col-md-12">
      					<div class="text-center">
      						<h3 class="margin-xs">
      							<i class="fa fa-users"></i> {{$single_customer->name}}
      						</h3>
                  <?php
                  /*
                  if($parent):
                    ?>
                    <div class="small text-muted">
                      <i class="fas fa-asterisk fa-lg"></i> Sub-customer of <a href="/customers/view/<?=$parent['id'];?>/"><?=$parent['name'];?></a>.
                    </div>
                    <?php
                  endif;
                  */
                  ?>
      						<span class="text-muted">{{$single_customer->shipping_address}}</span>
      					</div>
      				</div>
      			</div>
            <?php
            /*
            if($customerinfo->cod_only == "yes"):
              ?>
              <div class="row">
                <div class="col-md-12 padded-sm text-center">
                  <h3 style='color: red'><i class='fas fa-exclamation-triangle'></i> COD Only</h3>
                </div>
              </div>
              <?php
            endif;
            */
            ?>
      			<div class="row">
      				<div class="col-md-4 padded-sm">
      					<h5 class="text-primary">Company:</h5>
      					{{$single_customer->name}}
      				</div>
      				<div class="col-md-4 padded-sm">
      					<h5 class="text-primary">First Name:</h5>
      					{{$single_customer->name}}
      				</div>
      				<div class="col-md-4 padded-sm">
      					<h5 class="text-primary">Last Name:</h5>
      					{{$single_customer->name}}
      				</div>
            </div>
            <div class="row">
      				<div class="col-md-4 padded-sm">
      					<h5 class="text-primary">Telephone:</h5>
      					{{$single_customer->phone}}
      				</div>
      				<div class="col-md-4 padded-sm">
      					<h5 class="text-primary">Alt. Telephone:</h5>
      					{{$single_customer->phone}}
      				</div>
      				<div class="col-md-4 padded-sm">
      					<h5 class="text-primary">Email:</h5>
      					{{$single_customer->phone}}
      				</div>
      			</div>


      		</div>
      	</div>
      </div>
    </div>

    @include('history')


  </div>


  </div>

</div>


    @endsection
