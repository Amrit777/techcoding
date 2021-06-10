 <!-- Our Partners -->
 <section id="our-partners" class="our-partners">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 offset-lg-3">
                 <div class="main-title text-center">
                     <h3 class="mt0">Our Products</h3>
                     <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                 </div>
             </div>
         </div>
         <div class="row">
             @php
                 $brands = App\Models\Brand::all();
             @endphp

             @if (!empty($brands))

                 @foreach ($brands as $brand)
                     @if (!empty($brand->media) && !empty($brand->media->getUrl()))
                         <div class="col-sm-6 col-md-4 col-lg">
                             <div class="our_partner">
                                 <img class="img-fluid" src="{{ asset($brand->media->getUrl()) }}" alt="1.png">
                             </div>
                         </div>
                     @endif
                 @endforeach
             @endif
         </div>
     </div>
 </section>
