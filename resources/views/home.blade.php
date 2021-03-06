@extends('standard')

@section('content') 

                     {{-- <span class="text-default"> Bonjour monsieur  {{ auth()->user() }} bienvenu dans e-learning</span> --}}
                     <div class="container col-md-10">
                     <div class="row row-cards">
                     	<div style="text-align: center; color: blue;" class="card p-6">
                     		<span class="" style="font-size:  20px; color: blue;"> Hello Mr.  {{ auth()->user() }} Welcome to  e-learning </span>
		                
                     	</div>
                     	 <div class="alert alert-primary"> There is some informations ... </div>
                @if($count_cours)     	 
              <div class="col-6 col-sm-4 col-lg-2">

                <div class="card">

                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                    	<span class="stamp stamp-md bg-blue mr-3">
                      <i class="fe fe-dollar-sign"></i>
                    </span>
                       {{ __('cours.module_name') }}                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">{{$count_cours}}</div>
                    <div class="text-muted mb-4"> {{ __('cours.module_name') }}</div>
                  </div>
                </div>
              </div>
              @endif
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      {{ __('prof.module_name') }}
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">{{$count_prof}}</div>
                    <div class="text-muted mb-4">{{ __('prof.module_name') }}</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                      {{ __('etudient.module_name') }}
                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">{{$count_etudients}}</div>
                    <div class="text-muted mb-4">{{ __('etudient.module_name') }}</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                       {{ __('question.module_name') }}
                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">{{$count_questions}}</div>
                    <div class="text-muted mb-4"> {{ __('question.module_name') }}</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      {{ __('module.module_name') }}
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">{{$count_modules}}</div>
                    <div class="text-muted mb-4"> {{ __('module.module_name') }}</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      {{ __('filier.module_name') }}
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">{{$count_filiers}}</div>
                    <div class="text-muted mb-4">{{ __('filier.module_name') }}</div>
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