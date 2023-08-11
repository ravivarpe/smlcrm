@extends('includes.header')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-truck"></i>
       </div>
       <div class="header-title">
          <h1>Asset</h1>
          <small>All your Asset</small>
       </div>
    </section>
    <div class="btn-group">
    <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Select Company
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         @foreach ($companies as $company)

        <a class="dropdown-item" href="#">{{$company->name}}</a>
         @endforeach
       </div>
     </div>

    </div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
             <div class="col-lg-12 pinpin">
                   <div class="card lobicard"  data-sortable="true">
                       <div class="card-header">
                           <div class="card-title custom_title">
                               <h4>Add Asset</h4>
                           </div>
                       </div>
                       <div class="card-body">
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="float-right">
                               <div class="btn-group" role="group">
                                  <div class="buttonexport" id="buttonlist"> 
                                  </div>
                               </div> 

                               <div class="btn-group" role="group">
                                 <div class="buttonexport" id="buttonlist">
                                    <a class="btn btn-add" href="{{url('create-asset')}}"> <i class="fa fa-plus"></i> Add New Asset
                                    </a>
                                 </div>
                              </div>
                 
                            </div>
                               <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                               <div class="table-responsive">
                                  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                     <thead class="back_table_color">
                                        <tr class="info">
                                          <th>Ref No</th>
                                          <th>Title</th>
                                          <th>Company</th>
                                          <th>Assigned Team</th>
                                          <th>Purchased Date</th>
                                          <th>Set Remainder</th>
                                          <th>Services</th>
                                          <th>Tag</th>
                                          <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>

                                        @foreach ($assets as $asset )
                                        <tr>
                                         
                                          <td>{{$asset->id}}</td>
                                          <td>{{$asset->asset_name}}</td>
                                          <td>@if($asset->company!=null){{$asset->company->name}}@endif</td>
                                          <td>@if($asset->team!=null){{$asset->team->team_name}}@endif</td>
                                          <td>{{$asset->purchase_date}}</td>
                                         
                                          <td>
                                             @if($asset->set_reminder==1)
                                             {{'Yes'}}
                                             @else
                                             {{'No'}}
                                             @endif
                                                 
                                            </td>

                                            <td>
                                             @if($asset->service_required==1)
                                             {{'Yes'}}
                                             @else
                                             {{'No'}}
                                             @endif
                                                 
                                            </td>
                                          <td>
                                             @if($asset->category!=null)<span class="label-custom label label-default">
                                             {{$asset->category->name}}</span>
                                             @endif
                                          </td>
                                            
                                            <td>
                                             <a href="{{route('asset.edit',$asset->id)}}" >
                                                <button type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button></a>
     
                                                <a href="#" >  <button type="button" class="btn btn-danger btn-sm deletebtn" data-toggle="modal"
                                                data-target="#deleteasset" data-id="{{$asset->id}}" ><i class="fa fa-trash-o"></i> </button></a>
                                            </td>
  
                                            
                                        </tr>
                                        @endforeach
                                     </tbody>
                                  </table>
                               </div>
                            </div>
                   </div>
               </div>
       </div>
   <!-- Modal1 -->
  
       <!-- Customer Modal2 -->
       <div class="modal fade" id="deleteasset" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header modal-header-primary">
                   <h3><i class="fa fa-user m-r-5"></i> Delete Asset</h3>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   <div class="row">
                      <div class="col-md-12">
                         <form action="{{route('asset.delete')}}" method="Post">
                           @csrf>
                           <input type="hidden" name="id" id="id"/>
                           <fieldset>
                               <div class="row">
                                     <div class="col-md-12 form-group user-form-group">
                                        <label class="control-label">Delete Asset</label>
                                        <div class="float-right">
                                           <button type="button" class="btn btn-danger btn-sm">NO</button>
                                           <button type="submit" class="btn btn-add btn-sm">YES</button>
                                        </div>
                                     </div>
                               </div>
                         </form>
                      </div>
                   </div>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                </div>
             </div>
             <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
       </div>
       <!-- /.modal -->
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection

@section('footer_scripts')
<script>
    $(function()
{
$('.deletebtn').on('click',function(){

var id=$(this).attr('data-id');
$('#id').attr('value',id);
$('#deleteasset').modal('show');

});

$('#dataTableExample1').dataTable({

lengthMenu: [30,50,100],
ordering:  true,
paging: true,
dom: 'lBfrtip',
buttons: [
     {
       extend: 'csvHtml5',
       title: 'Enquiry List',
       exportOptions: {
            modifier: {
            page: 'all'
            },
                format: {
                    header: function ( data, columnIdx ) {

                      console.log(data);

                      if(columnIdx==0)
                      {
                         return "Ref";
                      }
                      if(columnIdx==1)
                      {
                         return "Title";
                      }
                      if(columnIdx==2)
                      {
                         return "Company";
                      }

                      if(columnIdx==3)
                      {
                         return "Assigned Team";
                      }
                      if(columnIdx==4)
                      {
                         return "Purchase Date";
                      }
                      if(columnIdx==5)
                      {
                         return "Set Reminder";
                      }

                      if(columnIdx==6)
                      {
                         return "Service";
                      }

                      if(columnIdx==7)
                      {
                         return "Tag";
                      }

                      if(columnIdx==8)
                      {
                         return "Action";
                      }


                    }
                }
        }
     },
],
processing: true,
// serverSide: true,
// ajax: "{{route('enquiries.list')}}",
initComplete: function () {
this.api()
    .columns()
    .every(function () {
        let column = this;
        let title = column.header().textContent;

        // Create input element
        let input = document.createElement('input');
        input.placeholder = title;
        column.header().replaceChildren(input);

        // Event listener for user input
        input.addEventListener('keyup', () => {
            if (column.search() !== this.value) {
                column.search(input.value).draw();
            }
        });
    });
}
});

});

</script>
@endsection
