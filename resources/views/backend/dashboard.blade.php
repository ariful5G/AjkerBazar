<x-backend.layouts.master>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <x-backend.layouts.partials.elements.primary/>                   
                </div>
                <div class="col-xl-3 col-md-6">
                    <x-backend.layouts.partials.elements.success/>  
                </div>
                <div class="col-xl-3 col-md-6">
                    <x-backend.layouts.partials.elements.warning/>
                </div>
                <div class="col-xl-3 col-md-6">
                    <x-backend.layouts.partials.elements.danger/>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <x-backend.layouts.partials.elements.area-chart/>
                </div>
                <div class="col-xl-6">
                    <x-backend.layouts.partials.elements.bar-chart/>
                </div>
            </div>
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('ui/backend/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('ui/backend/assets/demo/chart-bar-demo.js')}}"></script>
@endpush
</x-backend.layouts.master>

 


    
 