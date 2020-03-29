@extends('standard')

@section('content') 

                     {{-- <span class="text-default"> Bonjour monsieur  {{ auth()->user() }} bienvenu dans e-learning</span> --}}
                     <div class="container col-md-10">
                     <div class="row row-cards">
                     	<div style="text-align: center;" class="card p-6">
                     		<span class="text-default"> Hello Mr.  {{ auth()->user() }} Welcome to  e-learning </span>
		                
                     	</div>
                     	 <div class="alert alert-primary">Some informations ... </div>
                @if($count_cours)     	 
              <div class="col-6 col-sm-4 col-lg-2">

                <div class="card">

                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                    	<span class="stamp stamp-md bg-blue mr-3">
                      <i class="fe fe-dollar-sign"></i>
                    </span>
                      Cours                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">{{$count_cours}}</div>
                    <div class="text-muted mb-4">Cours</div>
                  </div>
                </div>
              </div>
              @endif
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      Prof
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">{{$count_prof}}</div>
                    <div class="text-muted mb-4">Professeurs</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                      Etudients
                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">{{$count_etudients}}</div>
                    <div class="text-muted mb-4">Etudients</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                      Questions
                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">{{$count_questions}}</div>
                    <div class="text-muted mb-4">Questions</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      Modules
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">{{$count_modules}}</div>
                    <div class="text-muted mb-4">Modules</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      Filiers
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">{{$count_filiers}}</div>
                    <div class="text-muted mb-4">Filiers</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                
                	
              </div>
              <div class="col-md-6">
               
                
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card p-3">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-blue mr-3">
                      <i class="fe fe-dollar-sign"></i>
                    </span>
                    <div>
                      <h4 class="m-0"><a href="javascript:void(0)"> <small></small></a></h4>
                      <small class="text-muted">  </small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card p-3">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                      <i class="fe fe-shopping-cart"></i>
                    </span>
                    <div>
                      <h4 class="m-0"><a href="javascript:void(0)"> <small></small></a></h4>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card p-3">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-red mr-3">
                      <i class="fe fe-users"></i>
                    </span>
                    <div>
                      <h4 class="m-0"><a href="javascript:void(0)"> <small></small></a></h4>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card p-3">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-yellow mr-3">
                      <i class="fe fe-message-square"></i>
                    </span>
                    <div>
                      <h4 class="m-0"><a href="javascript:void(0)"> <small></small></a></h4>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
             
@endsection