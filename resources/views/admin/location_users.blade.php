@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Location Users</h1>
        <ul>
            
            <li><button class="btn btn-success"  type="button">
              Add New User

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
                                <th>NAME</th>
        <th>EMAIL</th>
        
        <th>LOCATION</th>
        <th>OPTIONS</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        
                            <tr>
                                 <td class="custom-ui-border">TCB user 1</td>
        <td class="custom-ui-border">user1@gmail.com</td>
        <td class="custom-ui-border">Triple crown bingo</td>

    <td><button class="btn btn-primary"  type="button">
        Edit

           </button>
           <button class="btn btn-danger"  type="button">
            Delete

               </button></td>
                            </tr>
                            <tr>
                                 <td class="custom-ui-border">TCB user 2</td>
       <td class="custom-ui-border">user2@gmail.com</td>
       <td class="custom-ui-border">Triple crown bingo</td>

   <td><button class="btn btn-primary"  type="button">
       Edit

          </button>
          <button class="btn btn-danger"  type="button">
           Delete

              </button></td>
                           </tr>
                           <tr>
                          
   <td class="custom-ui-border">TCB user 3</td>
   <td class="custom-ui-border">user3@gmail.com</td>
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
                            <th>NAME</th>
                            <th>EMAIL</th>
                            
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