@extends('admin::layouts.master')
@section('content')


                
                <div class="content">
                    <div class="page-content-wrapper  ">

                        <div class="container-fluid">

                            <div class="row container m-l-2">
                                <div class="col-12 ">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h2 class="mt-2 "> add new department </h2>
                                           
            
                                            <form  class="" action="{{Route('store')}}" method="POST">
                                               @csrf     
                                                <div class="row align-items-start">

                                                <div class="form-group col-4 col">
                                                    <label>name</label>
                                                    <input type="text" class="form-control" required placeholder="Type name" name="name"/>
                                                </div>
            
                                                <div class="form-group col-4 col">
                                                    <label>bio</label>
                                                
                                                        <input type="text" class="form-control" required placeholder="Type bio" name="bio"/>
                                                    </div>

                                                    <div class="form-group col-4 col">
                                                    <label>icon</label>
                                                    <input type="text" class="form-control" required placeholder="Type icon" name="icon"/>
                                                </div>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label>description</label>
                                                    <textarea class="form-control" required placeholder="Type description" name="description" rows="10" cols="10"></textarea>
                                                </div>
                                                    
                                                
                                                    <div>
                                                        <button type="submit" class="btn btn-pink waves-effect waves-light m-4">
                                                            Submit 
                                                        </button>
                        
                                                    </div>
                                                </div>
                                            </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->


                            
            
                               
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div>
            </div> <!-- content -->
            



@endsection