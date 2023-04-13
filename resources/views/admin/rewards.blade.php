@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Rewards</h1>
        <ul>
            
            <li><button class="btn btn-success"  type="button">
              Add New

                   </button></li>
        </ul> 
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>PHOTO</th>
        <th>Name</th>
        <th>POINTS OF Redeem</th>
        <th>LOCATION</th>
        <th>OPTIONS</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        
                            <tr>
                                 <td class="custom-ui-border"><img class="img-mainpro" style="height:50px;width:50px" src="{{url('assets/images/reward.jpg')}}"></td>
        <td class="custom-ui-border">1 computer for 2 cents</td>
        <td class="custom-ui-border">1000</td>
        <td class="custom-ui-border">Triple crown bingo</td>

    <td><button class="btn btn-primary"  type="button">
        Edit

           </button>
           <button class="btn btn-danger"  type="button">
            Delete

               </button></td>
                            </tr>
                            <tr>
                                <td class="custom-ui-border"><img class="img-mainpro" style="height:50px;width:50px" src="{{url('assets/images/reward.jpg')}}"></td>
       <td class="custom-ui-border">2 computer for 3 cents</td>
       <td class="custom-ui-border">1750</td>
       <td class="custom-ui-border">Triple crown bingo</td>

   <td><button class="btn btn-primary"  type="button">
       Edit

          </button>
          <button class="btn btn-danger"  type="button">
           Delete

              </button></td>
                           </tr>
                           <tr>
                            <td class="custom-ui-border"><img class="img-mainpro" style="height:50px;width:50px" src="{{url('assets/images/reward.jpg')}}"></td>
   <td class="custom-ui-border">6 computer for 5 cents</td>
   <td class="custom-ui-border">4000</td>
   <td class="custom-ui-border">Triple crown bingo</td>

<td><button class="btn btn-primary"  type="button">
   Edit

      </button>
      <button class="btn btn-danger"  type="button">
       Delete

          </button></td>
                       </tr>
                        
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                            <th>PHOTO</th>
                            <th>Name</th>
                            <th>POINTS OF Redeem</th>
                            <th>LOCATION</th>
                            <th>OPTIONS</th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div>
      
    </div>
    @endsection